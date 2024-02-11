<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    use HasFactory;

    protected $table = 'live';

    protected $fillable = [
        'location',
        'live_date',
        'songs_played',
        'description',
    ];

    protected $casts = [

        'location' => 'string',
        'live_date' => 'datetime',
        'songs_played' => 'string',
        'description' => 'string',
    ];

    // Define the relationship with the Media model
    public function media()
    {
        return $this->hasMany(Media::class, 'relation_id');
    }
}
