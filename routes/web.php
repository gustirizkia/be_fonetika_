<?php

use App\Http\Controllers\Frontend\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("token-verify", [DashboardController::class, "tokenVerify"]);

Route::get("login", function () {
    return redirect("https://fonetika-fe.vercel.app/");
})->name("login");

Route::middleware("auth")
    ->group(function () {
        Route::get("/", [DashboardController::class, "index"])->name("home");
    });
