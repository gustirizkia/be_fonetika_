<?php

namespace App\Console\Commands\DeepSeek;

use App\Http\Controllers\DeepSeek\DetectContentSaraController;
use App\Models\Artikel;
use App\Models\Flag;
use Illuminate\Console\Command;

class ArtikelSaraCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:artikel-sara-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $flag = Flag::where("message", "artikel sara cek")->orderBy("id", "desc")->first()->last_id ?? 0;

        $artikel = Artikel::where("id", ">", $flag)
            ->limit(100)
            ->get();

        $handleClass = new DetectContentSaraController();

        foreach ($artikel as $key => $value) {

            $cekKontent = $handleClass->index($value->id);

            if (!$cekKontent["success"]) {
                $this->error("Error");
                return 0;
            }

            $value->is_sara = $cekKontent['is_sara'] === "YA" ? 1 : 0;
            $value->save();

            $this->info("Berhasil cek sara $key");

            Flag::updateOrCreate(
                [
                    "message" => "artikel sara cek"
                ],
                [
                    "last_id" => $value->id
                ]
            );
        }
    }
}
