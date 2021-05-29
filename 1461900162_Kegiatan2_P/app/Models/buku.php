<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'Buku';
    protected $primarykey = 'kode_buku'
    //protected $keytype = 'string';

    protected $fillable = [
        'Kode_buku';	
        'kode_buku';
        'kode_kategori';
        'kode_penerbit';
        'judul_buku';
        'jumlah_buku';
        'pengarang_buku';
        'tahun_terbit_buku';
    ];
}
