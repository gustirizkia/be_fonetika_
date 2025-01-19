<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komentar_artikels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("parent_id")->nullable();
            $table->bigInteger("artikel_id");
            $table->bigInteger("user_id");
            $table->bigInteger("jumlah_like")->default(0);
            $table->longText("content");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_artikels');
    }
};
