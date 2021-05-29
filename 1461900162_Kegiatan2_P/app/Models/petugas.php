<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $primarykey = 'kode_petugas';
    //protected $keytype = 'string';

    protected $fillable = [
	
    'kode_petugas';
    'nama_petugas';
    ];
