<?php

class prak2 extends Controller
{
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerdimas extends Controller
{
    public function ms_buku()
    {
        $ms_buku = DB::table('ms_buku')->get();
        return view('buku0174',['ms_buku' => $ms_buku]);
    }
}
