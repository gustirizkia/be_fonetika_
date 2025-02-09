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
        Schema::create('flags', function (Blueprint $table) {
            $table->id();
            $table->string("message");
            $table->bigInteger("last_id");
            $table->timestamps();
        });

        Schema::table('artikels', function (Blueprint $table) {
            $table->integer("is_sara")->default(0)->after("is_publish");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flags');

        Schema::table('artikels', function (Blueprint $table) {
            $table->dropColumn("is_sara");
        });
    }
};
