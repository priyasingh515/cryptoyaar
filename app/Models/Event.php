<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'image',
        'event_date'
    ];

    public function interests()
    {
        return $this->hasMany(EventInterest::class);
    }
}
