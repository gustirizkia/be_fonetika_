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
            "nama" => "required|string",
            "email" => "required|email|unique:users,email",
            "phone" => "required|string|unique:users,phone",
            "image" => "required|image",
            "password" => "required|string|min:8",
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $data = $request->all();
        $data["password"] = Hash::make($request->password);
        $data["image"] = url("storage/" . $request->image->store("user", 'public'));

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
        // $artikel = $artikel->map(function ($row) {

        //     return [
        //         "nama" => $row->nama,
        //         "slug" => $row->slug,
        //         "is_publish" => $row->is_publish,
        //         "image" => $row->image,
        //         "created_at" => $row->created_at,
        //     ];
        // });

        $user->my_artikel = $artikel;

        return response()->json([
            "data" => $user
        ]);
    }
}
