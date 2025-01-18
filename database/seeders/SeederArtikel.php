<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\ArtikelKategori;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class SeederArtikel extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        ArtikelKategori::where("id", ">", 0)->delete();
        Artikel::where("id", ">", 0)->delete();

        $kategori = ArtikelKategori::create([
            'nama' => "Tangerang Raya"
        ]);
        $kategori = ArtikelKategori::create([
            'nama' => "Nasional"
        ]);
        $kategori = ArtikelKategori::create([
            'nama' => "Metropolitan"
        ]);
        $kategori = ArtikelKategori::create([
            'nama' => "Olahraga"
        ]);
        $kategori = ArtikelKategori::create([
            'nama' => "Sejarah"
        ]);
        $kategori1 = ArtikelKategori::create([
            'nama' => "Banten",
            "parent_id" => $kategori->id
        ]);
        $kategori = ArtikelKategori::create([
            'nama' => "Tangerang",
            "parent_id" => $kategori->id
        ]);

        $user = User::create([
            "name" => "user NCT",
            "email" => "user@nct.com",
            "password" => Hash::make("TeknikHijau1"),
            "phone" => 01,
            "roles" => "admin"
        ]);
        for ($i = 0; $i < 115; $i++) {
            $faker = Faker::create('id_ID');

            $kategori_random = ArtikelKategori::inRandomOrder()->first();

            $insert = Artikel::create([
                "nama" => $faker->sentence($nbWords = 8, $variableNbWords = true),
                "kategori_id" => $kategori_random->id,
                "keyword" => $faker->sentence($nbWords = 16, $variableNbWords = true),
                "content" => $faker->sentence($nbWords = 500, $variableNbWords = true),
                "image" => "images/dummy-artikel.png",
                "user_id" => $user->id,
                "is_publish" => 1
            ]);
        }
    }
}
