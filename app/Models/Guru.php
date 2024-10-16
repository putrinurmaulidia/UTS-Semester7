<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function classes()
    {
        return $this->belongsToMany(Kelas::class, 'teachers_classes');
    }
}
