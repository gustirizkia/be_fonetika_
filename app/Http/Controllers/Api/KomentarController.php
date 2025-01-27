<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\KomentarArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KomentarController extends Controller
{
    public function komentarByArtikel($slug)
    {
        $artikel = Artikel::where("slug", $slug)->first();
        if (!$artikel) {
            return response()->json([
                "message" => "artikel tidak ditemukan"
            ], 422);
        }

        $items = KomentarArtikel::where("artikel_id", $artikel->id)
            ->where("parent_id", null)
            ->with("child", "user")
            ->get();

        return response()->json([
            'data' => $items
        ]);
    }

    public function create(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "content" => "required|string",
            "artikel_slug" => "required|exists:artikels,slug"
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $artikel = Artikel::where("slug", $request->artikel_slug)->first();

        $data = $request->only("content", "parent_id");
        $data["user_id"] = auth("api")->user()->id;
        $data["artikel_id"] = $artikel->id;

        $komentar = KomentarArtikel::create($data);

        return response()->json([
            "data" => $komentar
        ], 201);
    }
}
