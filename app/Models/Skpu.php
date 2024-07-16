<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Skpu extends Authenticatable
{
    protected $fillable = [
        'skpu_nama', 'skpu_username', 'skpu_password', 'skpu_rekening'
    ];

    protected $hidden = [
        'skpu_password',
    ];

    public function getAuthIdentifierName()
    {
        return 'skpu_username';
    }

    public function getAuthPassword()
    {
        return $this->skpu_password;
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'skpu_programs')
                    ->withPivot('harga_satuan', 'volume', 'jumlah')
                    ->withTimestamps();
    }
}
