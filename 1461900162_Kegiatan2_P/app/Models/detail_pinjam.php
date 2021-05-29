<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pinjam extends Model
{
    use HasFactory;
    protected $table = 'detail_pinjam';
    protected $primarykey = 'kode_pinjam';
    //protected $keytype = 'string';

    protected $fillable = [
        
    'kode_peminjaman';
    'kode_buku';
    'tgl_kembali';
    'denda';
    'status_kembali';
    ];
}