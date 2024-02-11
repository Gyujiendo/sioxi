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
        Schema::create('live', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->rememberToken();
            $table->string('location');
            $table->datetime('live_date')->default(now());
            $table->text('songs_played');
            $table->text('description');
        });
    }
    
    /* Live Model for reference

        'location' => 'string',
        'live_date' => 'datetime',
        'songs_played' => 'string',
        'last_update' => 'datetime',
        'description' => 'string',
        
        */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live');
    }
};
