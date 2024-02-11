<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'debut_date',
        'lyrics',
        'yt_link',
        'img_path'
    ];

    protected $casts = [
        'title' => 'string',
        'debut_date' => 'datetime',
        'lyrics' => 'string',
        'yt_link' => 'string',
        'img_path' => 'string'
    ];

    // Define the relationship with the Media model
    public function media()
    {
        return $this->morphMany(Media::class, 'related');
    }
}
