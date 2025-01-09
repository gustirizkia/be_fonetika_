<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function show($slug)
    {
        $item = Artikel::where("slug", $slug)
            ->with("kategori")
            ->first();

        $artikelTerkait = Artikel::where("kategori_id", $item->kategori_id)
            ->where("id", "!=", $item->id)
            ->limit(12)
            ->get();

        return response()->json([
            "data" => [
                "detail_artikel" => $item,
                "artikel_terkait" => $artikelTerkait
            ]
        ]);
    }

    public function index(Request $request)
    {
        $data = Artikel::query();

        if ($request->search) {
            $data->where("nama", "LIKE", "%$request->search%");
        }

        if ($request->kategori) {
            $data = $data->filterKategoriSlug($request->kategori);
        }

        if ($request->ascending) {
            $data = $data->orderBy("id", "asc");
        } else {
            $data = $data->orderBy("id", "desc");
        }

        $data = $data->with("kategori", "user")
            ->select(
                "slug",
                "image",
                "nama",
                "created_at",
                "user_id",
                "kategori_id"
            )
            ->paginate(18);

        return response()->json([
            "data" => $data
        ]);
    }
}
