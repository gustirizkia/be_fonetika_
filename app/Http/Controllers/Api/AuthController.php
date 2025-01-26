<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Http\Controllers\Controller;
use App\Repositories\ArtikelRepository\ArtikelRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    protected $artikelRepository;

    public function __construct(ArtikelRepositoryInterface $artikelRepository)
    {
        $this->artikelRepository = $artikelRepository;
    }

    public function register(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "phone" => "required|string|unique:users,phone",
            "password" => "required|string|min:8",
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $data = $request->all();
        $data["username"] = Str::slug($request->name) . rand(1000, 9999);
        $data["password"] = Hash::make($request->password);

        $user = User::create($data);

        $token = auth('api')->login($user);

        return response()->json([
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ]);
    }

    public function login(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required|string|min:8",
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $credentials = $request->only("email", "password");

        if ($token = auth("api")->attempt($credentials)) {
            return response()->json([
                "data" => [
                    "user" => auth("api")->user(),
                    "token" => $token
                ]
            ]);
        }

        return response()->json([
            "message" => "Email auth password salah"
        ], 422);
    }

    public function logoutFromAllDevices(Request $request)
    {
        try {
            // Dapatkan token yang sedang aktif
            $token = JWTAuth::getToken();

            // Invalidate semua token milik pengguna
            JWTAuth::invalidate($token, true);

            return response()->json([
                'message' => 'Successfully logged out from all devices'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to logout',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function profile(Request $request, $uuid)
    {

        $user = User::where("username", $uuid)->first();

        if (!$user) {
            return response()->json([
                'message' => "Penulis tidak ditemukan"
            ], 404);
        }

        $this->artikelRepository->user_id = $user->id;

        if ($request->search) {
            $this->artikelRepository->search = $request->search;
        }

        $artikel = $this->artikelRepository->getArtikelTerkait(
            null,
            $request->limit
        );

        $user->my_artikel = $artikel;

        return response()->json([
            "data" => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        $dataValidasi = [];

        $user = User::find(auth("api")->user()->id);

        if ($user->email !== $request->email && $request->email !== null) {
            $dataValidasi["email"] = "required|email|unique:users,email";
        }

        if ($request->phone !== $user->phone && $request->phone !== null) {
            $dataValidasi["phone"] = "required|unique:users,phone";
        }

        if ($request->username !== $user->username && $request->username !== null) {
            $dataValidasi["username"] = "required|unique:users,username";
        }

        $validasi = Validator::make($request->all(), $dataValidasi);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $data = $request->only("name", "email", "phone", "image", "sampul", "bio", "username");

        if ($request->image) {
            $data["image"] = $request->image->store("user", 'public');
        }

        if ($request->sampul) {
            $data["sampul"] = $request->sampul->store("user", 'public');
        }

        $user->update($data);

        return response()->json([
            "data" => $user
        ]);
    }
}
