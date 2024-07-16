<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';

    protected $fillable = [
        'program_nama',
        'parent_id',
        'balance'
    ];

    public function parent()
    {
        return $this->belongsTo(Program::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Program::class, 'parent_id');
    }

    public function skpus()
    {
        return $this->belongsToMany(Skpu::class, 'skpu_programs')
                    ->withPivot('harga_satuan', 'volume', 'jumlah')
                    ->withTimestamps();
    }
}
