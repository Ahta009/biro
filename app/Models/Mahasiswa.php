<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    
    protected $table = 'mahasiswas';

    protected $fillable = [
        'nim', 
        'nama', 
        'alamat', 
        'no_hp', 
        'email', 
        'foto', 
        'tahun_masuk', 
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(MahasiswaUser::class, 'user_id');
    }
}
