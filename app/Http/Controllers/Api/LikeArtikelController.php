<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\LikeArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeArtikelController extends Controller
{
    public function create($slug)
    {
        $artikel = Artikel::where("slug", $slug)->first();
        if (!$artikel) {
            return response()->json([
                'message' => "Data tidak ditemukan"
            ], 404);
        }

        $data = [
            "artikel_id" => $artikel->id,
            "user_id" => Auth::guard("api")->user()->id
        ];

        $like = LikeArtikel::where("artikel_id", $artikel->id)
            ->where("user_id", Auth::guard("api")->user()->id)
            ->first();

        if ($like) {
            $like->delete();
            return response()->json([
                'message' => "Unlike artikel berhasil"
            ]);
        }

        LikeArtikel::create($data);

        return response()->json([
            'message' => "Like artikel berhasil"
        ]);
    }
}
