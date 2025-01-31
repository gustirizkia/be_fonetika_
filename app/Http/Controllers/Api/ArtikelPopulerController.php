<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PopulerByKategori;
use Illuminate\Http\Request;

class ArtikelPopulerController extends Controller
{
    public function index(Request $request)
    {
        $slug_kategori = $request->slug_kategori;

        if ($slug_kategori) {
            $items = PopulerByKategori::with(["artikel" => function ($query) {
                return $query->select('id', 'slug', 'nama', 'keyword', 'kategori_id', 'user_id', "image")
                    ->with("kategori", "user");
            }])
                ->whereHas("artikel", function ($query) use ($slug_kategori) {
                    $query->whereHas("kategori", function ($q) use ($slug_kategori) {
                        $q->where("slug", $slug_kategori);
                    });
                })
                ->orderBy("count", "desc")
                ->paginate($request->limit ?? 10);
        } else {
            $items = PopulerByKategori::with(["artikel" => function ($query) {
                return $query->select('id', 'slug', 'nama', 'keyword', 'kategori_id', 'user_id', "image")
                    ->with("kategori", "user");
            }])
                ->orderBy("count", "desc")
                ->paginate($request->limit ?? 10);
        }

        return response()->json($items);
    }
}
