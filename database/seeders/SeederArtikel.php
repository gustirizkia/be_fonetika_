<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\ArtikelKategori;
use App\Models\ArtikelUtama;
use App\Models\KomentarArtikel;
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

        $userNct = User::create([
            "name" => "user NCT",
            "email" => "user@nct.com",
            "password" => Hash::make("TeknikHijau1"),
            "phone" => 01,
            "roles" => "admin"
        ]);

        for ($j = 0; $j < 14; $j++) {
            $faker = Faker::create('id_ID');

            $user = User::create([
                "name" => $faker->name(),
                "email" => $faker->email(),
                "password" => Hash::make("password"),
                "phone" => mt_rand(100000000000, 999999999999),
                "roles" => "user"
            ]);

            for ($i = 0; $i < 20; $i++) {
                $faker = Faker::create('id_ID');

                $kategori_random = ArtikelKategori::inRandomOrder()->first();

                $insert = Artikel::create([
                    "nama" => $faker->sentence($nbWords = 8, $variableNbWords = true),
                    "kategori_id" => $kategori_random->id,
                    "keyword" => $faker->sentence($nbWords = 16, $variableNbWords = true),
                    "content" => $faker->sentence($nbWords = 600, $variableNbWords = true),
                    "image" => "images/dummy-artikel.png",
                    "user_id" => $user->id,
                    "is_publish" => 1
                ]);

                for ($x = 0; $x < 20; $x++) {
                    $komentar = KomentarArtikel::create([
                        "artikel_id" => $insert->id,
                        "user_id" => $user->id,
                        "jumlah_like" => $j + 1,
                        "content" => $faker->sentence($nbWords = 16, $variableNbWords = true)
                    ]);
                    $komentarChild = KomentarArtikel::create([
                        "artikel_id" => $insert->id,
                        "user_id" => $user->id,
                        "jumlah_like" => $j + 1,
                        "content" => $faker->sentence($nbWords = 16, $variableNbWords = true),
                        "parent_id" => $komentar->id
                    ]);
                }
            }
        }

        /* Artikel Utama */
        for ($w = 0; $w < 7; $w++) {
            $artikel = Artikel::inRandomOrder()->first()->id;

            $utama = ArtikelUtama::create([
                'artikel_id' => $artikel,
                "tipe" => "artikel utama"
            ]);

            $artikel = Artikel::inRandomOrder()->first()->id;

            $utama = ArtikelUtama::create([
                'artikel_id' => $artikel,
                "tipe" => "artikel rekomendasi"
            ]);
        }
    }
}
