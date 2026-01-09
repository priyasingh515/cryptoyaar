<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supSubCategory extends Model
{
    use HasFactory;
    protected $table = 'super_sub_categories';
    protected $fillable = [
        'sub_category_id',
        'name',
        'slug',
        'status',
        'order'
    ];

    public function subCategory()
    {
        return $this->belongsTo(SupCategory::class);
    }
}
