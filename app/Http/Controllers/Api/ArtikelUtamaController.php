<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ArtikelUtama;
use Illuminate\Http\Request;

class ArtikelUtamaController extends Controller
{
    public function index()
    {
        $items = ArtikelUtama::with("artikel.kategori")
            ->where("tipe", "artikel utama")
            ->get();

        return response()->json([
            "data" => $items->map(function ($row) {
                return [
                    "slug" => $row->artikel->slug,
                    "url_image" => $row->artikel->url_image,
                    "nama" => $row->artikel->nama,
                    "created_at" => $row->artikel->created_at,
                    "kategori" => [
                        "slug" => $row->artikel->kategori->slug,
                        "nama" => $row->artikel->kategori->nama,
                        "created_at" => $row->artikel->kategori->created_at,
                        "updated_at" => $row->artikel->kategori->updated_at,
                    ]
                ];
            })
        ]);
    }

    public function rekomendasi()
    {
        $items = ArtikelUtama::with("artikel.kategori")
            ->where("tipe", "artikel utama")
            ->get();

        return response()->json([
            "data" => $items->map(function ($row) {
                return [
                    "slug" => $row->artikel->slug,
                    "url_image" => $row->artikel->url_image,
                    "nama" => $row->artikel->nama,
                    "created_at" => $row->artikel->created_at,
                    "kategori" => [
                        "slug" => $row->artikel->kategori->slug,
                        "nama" => $row->artikel->kategori->nama,
                        "created_at" => $row->artikel->kategori->created_at,
                        "updated_at" => $row->artikel->kategori->updated_at,
                    ]
                ];
            })
        ]);
    }
}
