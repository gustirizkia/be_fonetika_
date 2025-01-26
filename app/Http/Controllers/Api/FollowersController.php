<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FollowerUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;

class FollowersController extends Controller
{
    public function byUser(Request $request)
    {
        $uuid = $request->user_uuid;
        $id = Hashids::decode($uuid)[0] ?? null;
        if (!$id) {
            return response()->json([
                'message' => "Data tidak ditemukan"
            ], 404);
        }

        $data["followers_user"] = FollowerUser::where("user_id", $id)
            ->with("user")
            ->paginate(18);

        $data["is_follow"] = $data["followers_user"]->where("created_by", Auth::guard("api")->user()->id  ?? null)->first() ? true : false;

        return response()->json($data);
    }

    public function totalFollowers(Request $request)
    {
        $uuid = $request->user_uuid;
        $id = Hashids::decode($uuid)[0] ?? null;
        if (!$id) {
            return response()->json([
                'message' => "Data tidak ditemukan"
            ], 404);
        }

        $data["total_followers"] = FollowerUser::where("user_id", $id)->count();

        return response()->json($data);
    }

    public function create(Request $request)
    {

        if (!$request->user_uuid) {
            return response()->json([
                'message' => "Data tidak ditemukan"
            ], 404);
        }

        $uuid = $request->user_uuid;
        $id = Hashids::decode($uuid)[0] ?? null;
        if (!$id) {
            return response()->json([
                'message' => "Data tidak ditemukan"
            ], 404);
        }

        $user = User::where("id", $id)->first();

        $message = "Berhasil mengikut $user->name";

        $follow = FollowerUser::where("user_id", $id)
            ->where("created_by", auth()->user()->id ?? null)->first();

        if ($follow) {
            $message = "Berhasil berhenti mengikuti $user->name";

            $follow->delete();
        } else {
            FollowerUser::create([
                "created_by" => auth()->user()->id,
                "user_id" => $id,
            ]);
        }

        return response()->json([
            "message" => $message
        ]);
    }
}
