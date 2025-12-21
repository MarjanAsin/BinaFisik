<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilPenilaian extends Model
{
    protected $table = 'hasil_penilaian';
    protected $primaryKey = 'id_hasil';

    protected $fillable = [
        'user_id',
        'tanggal_tes',
        'nilai',
        'hasil',
        'keterangan',
    ];
}
