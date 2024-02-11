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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('relation_id'); 
            $table->string('file_path');
            // Foreign key (live)
            $table->foreign('relation_id')->references('id')->on('live')->onDelete('cascade');
        });
    }

    /*Model Media for ref.
        
        'relation_id' => 'integer',
        'file_path' => 'string',
        'uploaded_time' => 'datetime',    

    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
