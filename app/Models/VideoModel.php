<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoModel extends Model
{
    use SoftDeletes;

    protected $table = 'videos';

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'super_subcategory_id',
        'plan_id',
        'title',
        'description',
        'keywords',
        'video_path',
        'thumbnail',
        'is_free',
        'status',
        'views',
    ];

    protected $casts = [
        'is_free' => 'boolean',
        'status'  => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SupCategory::class, 'subcategory_id');
    }

    public function supercategory()
    {
        return $this->belongsTo(supSubCategory::class, 'sub_category_id');
    }

    public function plan()
    {
        return $this->belongsTo(PlanModel::class, 'plan_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeFree($query)
    {
        return $query->where('is_free', 1);
    }

    public function scopePaid($query)
    {
        return $query->where('is_free', 0);
    }

    public function isPaid()
    {
        return !$this->is_free;
    }

    public function likes()
    {
        return $this->hasMany(LikeModel::class, 'video_id');
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }

    public function isLikedBy($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

    public function comments()
{
    return $this->hasMany(CommentModel::class, 'video_id');
}
}
