<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
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

    public function profile()
    {
        $user = User::find(auth("api")->user()->id);
        $artikel = Artikel::where("user_id", $user->id)
            ->select("slug", "nama", "is_publish", "image", "created_at")
            ->paginate(18);

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
            $dataValidasi["email"] = "required|unique:users,phone";
        }

        $validasi = Validator::make($request->all(), $dataValidasi);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $data = $request->only("name", "email", "phone", "image", "sampul", "bio");

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
