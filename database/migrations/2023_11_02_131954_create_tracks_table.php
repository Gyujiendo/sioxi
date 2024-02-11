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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->datetime('debut_date')->default(now());
            $table->text('lyrics');
            $table->string('yt_link');
            $table->string('img_path');
        });
    }

    /* Model for ref (tracks)

        'title' => 'string',
        'debut_date' => 'datetime',
        'lyrics' => 'string',
        'yt_link' => 'string',
     
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
