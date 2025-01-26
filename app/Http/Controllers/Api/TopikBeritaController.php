<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TopikBerita;
use Illuminate\Http\Request;

class TopikBeritaController extends Controller
{
    public function index(Request $request)
    {
        $topikBerita = TopikBerita::query()
            ->when($request->search, function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->search}%");
            })
            ->paginate($request->limit ?? 10);

        return response()->json($topikBerita);
    }
}
