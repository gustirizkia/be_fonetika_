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

        $data["followers_user"] = FollowerUser::with("user")
            ->filterByUserName($uuid)
            ->paginate(18);

        $data["is_follow"] = $data["followers_user"]->where("created_by", Auth::guard("api")->user()->id  ?? null)->first() ? true : false;

        return response()->json($data);
    }

    public function totalFollowers(Request $request)
    {
        $user_name = $request->user_uuid;

        $data["total_followers"] = FollowerUser::where("user_id", $user_name)->count();

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

        $user = User::where("username", $uuid)->first();

        $message = "Berhasil mengikut $user->name";

        $follow = FollowerUser::where("created_by", auth()->user()->id ?? null)
            ->filterByUserName($uuid)
            ->first();

        if ($follow) {
            $message = "Berhasil berhenti mengikuti $user->name";

            $follow->delete();
        } else {
            FollowerUser::create([
                "created_by" => auth()->user()->id,
                "user_id" => $user->id,
            ]);
        }

        return response()->json([
            "message" => $message
        ]);
    }
}
