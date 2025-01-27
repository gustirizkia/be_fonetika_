<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TopikBerita;
use App\Repositories\ArtikelRepository\ArtikelRepositoryInterface;
use Illuminate\Http\Request;

class TopikBeritaController extends Controller
{
    public $artikelRepository;

    public function __construct(ArtikelRepositoryInterface $artikelRepository)
    {
        $this->artikelRepository = $artikelRepository;
    }

    public function index(Request $request)
    {
        $topikBerita = TopikBerita::query()
            ->when($request->search, function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->search}%");
            })
            ->paginate($request->limit ?? 10);

        return response()->json($topikBerita);
    }

    public function show(Request $request, $id)
    {
        $topikBerita = TopikBerita::where("slug", $id)->first();

        if (!$topikBerita) {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }

        $this->artikelRepository->setTopik([$topikBerita->id]);

        if ($request->search) {
            $this->artikelRepository->search = $request->search;
        }

        $artikel = $this->artikelRepository->getArtikelTerkait(null, $request->limit);

        return response()->json([
            "topik" => $topikBerita,
            "artikel_by_topik" => $artikel
        ]);
    }
}
