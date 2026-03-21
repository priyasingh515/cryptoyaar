<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    public $timestamps = false; // kyuki manually created_at use kar rahe ho

    protected $fillable = [
        'user_id',
        'amount',
        'type',
        'remark',
        'created_at',
        'is_locked',
        'unlock_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}