<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'video_id',
        'user_id',
        'comment',
        'parent_id',
    ];

    public function video()
    {
        return $this->belongsTo(VideoModel::class, 'video_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent()
    {
        return $this->belongsTo(CommentModel::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(CommentModel::class, 'parent_id');
    }
}
