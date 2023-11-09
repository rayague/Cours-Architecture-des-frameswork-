<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
