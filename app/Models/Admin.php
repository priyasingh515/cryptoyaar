<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

   protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasPermission($slug)
    {
        // Super Admin → full access
        if ($this->role && $this->role->slug === 'super-admin') {
            return true;
        }

        return $this->role
            ->permissions()
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->exists();
    }

}
