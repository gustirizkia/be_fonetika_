<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\ArtikelKategori;
use App\Models\LikeArtikel;
use App\Models\User;
use App\Repositories\ArtikelRepository\ArtikelRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    protected $artikelRepository;

    public function __construct(ArtikelRepositoryInterface $artikelRepository)
    {
        $this->artikelRepository = $artikelRepository;
    }

    public function show(Request $request, string $slug)
    {
        $item = Artikel::where("slug", $slug)
            ->with("kategori", "user")
            ->first();

        $sudah_like = false;

        if (Auth::guard('api')->check()) {
            $sudah_like = LikeArtikel::where("user_id", Auth::guard('api')->user()->id)
                ->where("artikel_id", $item->id)
                ->exists() ? true : false;
        }

        $this->artikelRepository->except_id = $item->id;

        $artikelTerkait = $this->artikelRepository->getArtikelTerkait(
            $item->kategori->slug,
            $request->limit
        );

        return response()->json([
            "data" => [
                "sudah_like" => $sudah_like,
                "detail_artikel" => $item,
                "artikel_terkait" => $artikelTerkait
            ]
        ]);
    }

    public function detailKategori(Request $request, $slug)
    {
        $kategori = ArtikelKategori::where("slug", $slug)->first();
        if (!$kategori) {
            return response()->json([
                'message' => "data not found"
            ], 404);
        }

        $artikel = $this->artikelRepository->getArtikelTerkait(
            $kategori->slug,
            $request->limit
        );

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
            $this->artikelRepository->search = $request->search;
        }

        $this->artikelRepository->urutan = $request->ascending ? "asc" : "desc";

        $data = $this->artikelRepository->getArtikelTerkait($request->kategori, $request->limit);

        return response()->json([
            "data" => $data
        ]);
    }

    public function artikelByUser(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'username' => "required|string|exists:users,username"
        ]);

        if ($validasi->fails()) {
            return response()->json([
                "message" => $validasi->errors()->first()
            ], 422);
        }

        $user = User::where("username", $request->username)->first();

        $this->artikelRepository->user_id = $user->id;

        $artikel = $this->artikelRepository->getArtikelTerkait(null, $request->limit);

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
        $dataValidasi = [
            "artikel_slug" => "required|exists:artikels,slug",
            "kategori_slug" => "string|required|exists:artikel_kategoris,slug",
        ];

        $data = $request->only("nama", "keyword", 'content');

        if ($request->image) {
            $dataValidasi["image"] = "image|required";
            $data["image"] = $request->image->store("artikel", "public");
        }

        $validasi = Validator::make($request->all(), $dataValidasi);

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
