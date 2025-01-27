<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $hidden = ["id", "kategori_id", "user_id"];

    protected $appends = ["url_image"];

    public function getUrlImageAttribute()
    {
        return url("storage/$this->image");
    }

    public function kategori()
    {
        return $this->belongsTo(ArtikelKategori::class, "kategori_id", "id");
    }

    public function topik()
    {
        return $this->hasMany(ArtikelHasTopik::class, "artikel_id", "id");
    }

    public function scopeFilterTopik($query, array $id)
    {
        return $query->whereHas("topik", function ($q) use ($id) {

            return $q->whereIn("topik_id", $id);
        });
    }

    public function scopeFilterKategoriSlug($query, $slug)
    {
        return $query->whereHas("kategori", function ($q) use ($slug) {
            return $q->where("slug", $slug);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public static function boot()
    {
        parent::boot();

        //while creating/inserting item into db
        static::creating(function ($model) {

            $model->slug = Str::slug($model->nama);
        });

        //while updating item in db
        static::updating(function ($model) {
            $model->slug = Str::slug($model->nama);
        });
    }
}
