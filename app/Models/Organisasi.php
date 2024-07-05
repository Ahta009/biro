<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $fillable =['judul_kegiatan', 'proposal_kegiatan','keterangan_kegiatan','status_kegiatan'];
}
