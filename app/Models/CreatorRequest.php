<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'youtube_link',
        'instagram_link',
        'top_video_link',
        'status'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    
}
