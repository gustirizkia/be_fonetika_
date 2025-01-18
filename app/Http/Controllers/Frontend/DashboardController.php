<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class DashboardController extends Controller
{
    public function index()
    {

        return view("welcome");
    }
    public function tokenVerify(Request $request)
    {
        try {
            //code...
            $token = $request->get("token");

            $user = JWTAuth::parseToken($token)->authenticate();

            Auth::guard("web")->login($user, true);

            return redirect()->route("home");
        } catch (Exception $th) {
            return redirect("https://fonetika-fe.vercel.app");
        }
    }
}
