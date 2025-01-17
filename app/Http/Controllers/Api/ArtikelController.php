<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\ArtikelKategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function show($slug)
    {
        $item = Artikel::where("slug", $slug)
            ->with("kategori")
            ->first();

        $artikelTerkait = Artikel::where("kategori_id", $item->kategori_id)
            ->where("id", "!=", $item->id)
            ->select("slug", "nama", "image", "created_at")
            ->limit(12)
            ->get();

        return response()->json([
            "data" => [
                "detail_artikel" => $item,
                "artikel_terkait" => $artikelTerkait
            ]
        ]);
    }

    public function detailKategori($slug)
    {
        $kategori = ArtikelKategori::where("slug", $slug)->first();
        if (!$kategori) {
            return response()->json([
                'message' => "data not found"
            ], 404);
        }

        $artikel = Artikel::where("kategori_id", $kategori->id)
            ->select("slug", "nama", "image", "is_publish")
            ->where("is_publish", 1)
            ->orderBy("id", "desc")
            ->paginate(12);

        return response()->json([
            "data" => [
                "artikel" => $artikel,
                "kategori" => $kategori
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

    public function artikelByUser(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email' => "required|email|exists:users,email"
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $user = User::where("email", $request->email)->first();

        $artikel = Artikel::where("user_id", $user->id)
            ->with("kategori", "user")
            ->select(
                "slug",
                "image",
                "nama",
                "created_at",
                "user_id",
                "kategori_id"
            )
            ->paginate(12);

        return response()->json([
            "data" => [
                'user' => $user,
                "artikel" => $artikel
            ]
        ]);
    }

    public function create(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "nama" => "string|required",
            "kategori_slug" => "string|required|exists:artikel_kategoris,slug",
            "keyword" => "string|required",
            "content" => "string|required",
            "image" => "image|required",
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $data = $request->only("nama", "keyword", "content", "image", "kategori_slug");

        $data["image"] = $request->image->store("artikel", "public");

        $kategori = ArtikelKategori::where("slug", $request->kategori_slug)->first();

        $data['kategori_id'] = $kategori->id;
        $data["is_publish"] = 1;

        unset($data["kategori_slug"]);

        $data["user_id"] = auth()->user()->id;

        $artikel = Artikel::create($data);

        return response()->json($artikel);
    }

    public function updateArtikel(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "artikel_slug" => "required|exists:artikels,slug",
            "kategori_slug" => "string|required|exists:artikel_kategoris,slug",
        ]);

        $data = $request->only("nama", "keyword", 'content');

        if ($request->image) {
            $validasi["image"] = "image|required";
            $data["image"] = $request->image->store("artikel", "public");
        }

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $kategori = ArtikelKategori::where("slug", $request->kategori_slug)->first();

        $data['kategori_id'] = $kategori->id;

        $artikel = Artikel::where("slug", $request->artikel_slug)->first();

        $artikel->update($data);

        return response()->json($artikel);
    }

    public function hapus($slug)
    {
        $artikel = Artikel::where("slug", $slug)->first();
        if (!$artikel) {
            return response()->json([
                "message" => "Artikel tidak ditemukan"
            ], 422);
        }

        $artikel->delete();

        return response()->json([
            "message" => "Berhasil hapus artikel"
        ]);
    }
}
