<?php

use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\ArtikelUtamaController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FollowersController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\KomentarController;
use App\Http\Controllers\Api\PasswordResetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);

Route::get("home", [HomeController::class, "index"]);
Route::get("kategori", [HomeController::class, "listKategori"]);
Route::get("kategori/{slug}", [ArtikelController::class, "detailKategori"]);

Route::get("artikel", [ArtikelController::class, "index"]);
Route::get("artikel-utama", [ArtikelUtamaController::class, "index"]);
Route::get("artikel-rekomendasi", [ArtikelUtamaController::class, "rekomendasi"]);
Route::get("artikelByUser", [ArtikelController::class, "artikelByUser"]);
Route::get("artikel/{slug}", [ArtikelController::class, "show"]);

Route::get("profile/{uuid}", [AuthController::class, "profile"]);

Route::get("komentar-by-artikel/{slug}", [KomentarController::class, "komentarByArtikel"]);

Route::get("followers-by-user", [FollowersController::class, "byUser"]);

Route::post('/request-code', [PasswordResetController::class, 'forgotPassword']);
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword']);

Route::middleware("auth:api")
    ->group(function () {
        Route::post("komentar-create", [KomentarController::class, "create"]);

        Route::post("followers-create", [FollowersController::class, "create"]);

        Route::post("profile-update", [AuthController::class, "updateProfile"]);
        Route::post("artikel-create", [ArtikelController::class, "create"]);
        Route::post("artikel-update", [ArtikelController::class, "updateArtikel"]);
        Route::delete("artikel-delete/{slug}", [ArtikelController::class, "hapus"]);
    });
