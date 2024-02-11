<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'relation_id',
        'related_type',
        'file_path',
    ];

    protected $casts = [
        'relation_id' => 'integer',
        'file_path' => 'string',
    ];

    public function live()
    {
        return $this->belongsTo(Live::class, 'relation_id');
    }

    // Define the relationship with other models
    public function related()
    {
        return $this->morphTo();
    }
}
