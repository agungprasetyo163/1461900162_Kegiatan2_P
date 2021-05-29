<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    use HasFactory;
    protected $table = 'penerbit';
    protected $primarykey = 'kode_penerbit';
    //protected $keytype = 'string';

    protected $fillable = [
        	
    'kode_penerbit';
    'nama_penerbit';
    'alamat_penerbit';  
    'telp_penerbit';
    ];
}
