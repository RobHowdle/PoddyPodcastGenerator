<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    protected $fillable = [
        'chapter_id',
        'episode_title',
        'episode_short_description',
        'episode_long-_description',
        'explicit',
        'user_id',
        'user_email',
        'url',
        'created_at',
        'updated_at'
    ];
    
    use HasFactory;

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}