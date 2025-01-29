<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopulerByKategori extends Model
{
    use HasFactory;

    protected $hidden = ["kategori_id", "artikel_id", "id", "created_at", "updated_at"];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, "artikel_id", "id");
    }
}
