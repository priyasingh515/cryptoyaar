<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LikeModel extends Model
{
    use HasFactory;

    protected $table = 'video_likes';

    protected $fillable = [
        'user_id',
        'video_id',
    ];

 
    public function user()
    {
        return $this->belongsTo(User::class);
    }


   public function video()
{
    return $this->belongsTo(VideoModel::class, 'video_id');
}
}
