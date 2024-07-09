<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaUser extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_users';
    
    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'user_id');
    }
}
