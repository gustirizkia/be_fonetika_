<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends Controller
{
    /**
     * Handle the forgot password request.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotPassword(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first(),
            ], 422);
        }


        $verificationCode = rand(100000, 999999); // Generate a random 6-digit number

        $details = [
            'to' => $request->input('email'),
            'subject' => "Kode Verifikasi Reset Password",
            'body' => "Kode Verifikasi: $verificationCode",
        ];


        try {
            Mail::raw($details['body'], function ($message) use ($details) {
                $message->to($details['to'])
                    ->subject($details['subject']);
            });

            $token = base64_encode("email[$verificationCode");

            DB::table('password_reset_tokens')->updateOrInsert(
                ["email" => $request->input("email")],
                [
                    "token" => $token,
                    "created_at" => now(),
                ]
            );

            return response()->json(['message' => 'Email sent successfully.', "token" => $token], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send email.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Handle the reset password request.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email' => 'required|email|exists:password_reset_tokens,email',
            'token' => 'required|exists:password_reset_tokens,token',
            "password" => "required|string",
            "kode" => "required|string",
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first(),
            ], 422);
        }

        $token_decode = base64_decode($request->input("token"));
        $kode = explode("[", $token_decode)[1] ?? null;



        if ($kode !== $request->kode) {
            return response()->json(["message" => "Kode Salah"], 422);
        }

        $user = User::where("email", $request->input("email"))->update([
            "password" => Hash::make($request->input("password")),
        ]);

        $cekToken = DB::table('password_reset_tokens')
            ->where('email', '=', $request->input('email'))
            ->where("token", "=", $request->input("token"))
            ->delete();

        return response()->json([
            'message' => "berhasil reset password"
        ]);
    }
}
