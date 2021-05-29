<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'Kartu_pendaftaran';
    protected $primarykey = 'kode_kartu';
    //protected $keytype = 'string';

    protected $fillable = [
        	
    'kode_kartu';
    'kode_petugas';
    'kode_peminjam';
    'tgl_pembuatan';
    'tgl_akhir';
    'status_aktif';
    ];
}
