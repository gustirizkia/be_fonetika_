<?php

namespace App\Repositories\ArtikelRepository;

interface ArtikelRepositoryInterface
{
    public function getArtikelTerkait($kategoriId, $limit);
}
