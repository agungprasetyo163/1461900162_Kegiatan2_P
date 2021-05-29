<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'Kategori';
    protected $primarykey = 'kode_kategori';
    //protected $keytype = 'string';

    protected $fillable = [
        	
    'kode_kategori';
    'nama_kategori';
    ];
}
