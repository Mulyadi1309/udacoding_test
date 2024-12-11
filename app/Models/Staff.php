<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;

    protected $table = 'staff';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'IDLibrary',
        'email',
        'password',
        'no_hp',
        'level',
        'alamat',
    ];

    // Hidden kolom untuk keamanan
    protected $hidden = [
        'password',
    ];

    // Mutator untuk hashing password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
