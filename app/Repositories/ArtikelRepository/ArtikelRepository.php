<?php

namespace App\Repositories\ArtikelRepository;

use App\Models\Artikel;

class ArtikelRepository implements ArtikelRepositoryInterface
{
    public $urutan = "desc";
    public $search = null, $except_id = null, $user_id = null, $topik = null;

    public function getArtikelTerkait($kategoriId, $limit)
    {
        return Artikel::with("kategori", "user")
            ->select(
                "slug",
                "nama",
                "image",
                "created_at",
                "user_id",
                "kategori_id",
                "is_sara"
            )
            ->orderBy("id", $this->urutan)
            ->when($this->search, function ($query) {
                return $query->where("nama", "LIKE", "%$this->search%");
            })
            ->when($this->except_id, function ($query) {
                return $query->where("id", "!=", $this->except_id);
            })
            ->when($kategoriId, function ($query) use ($kategoriId) {
                return $query->filterKategoriSlug($kategoriId);
            })
            ->when($this->user_id, function ($query) {
                return $query->where("user_id", $this->user_id);
            })
            ->when($this->topik, function ($query) {
                return $query->filterTopik($this->topik);
            })
            ->paginate($limit ?? 18);
    }

    public function setTopik(array $param)
    {
        $this->topik = $param;
    }
}
