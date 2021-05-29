<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'Peminjaman';
    protected $primarykey = 'kode_peminjaman';
    //protected $keytype = 'string';

    protected $fillable = [
	
        'kode_peminjaman';
        'kode_petugas';
        'kode_peminjam';
        'tgl_peminjaman';
        'tgl_kembali';
    ];
}
