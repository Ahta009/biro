<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    use HasFactory;

    protected $fillable =['rencana_judul', 'rencana_berkas','rencana_status','rencana_keterangan','rencana_jenis'];
}
