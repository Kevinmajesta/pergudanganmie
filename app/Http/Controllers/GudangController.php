<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(Request $request){
        //mengambil data dari table produk
        $produk =DB::table('tb_produk')->get();
        //mengirim datra pegawai ke view index
        return view('produk',['tb_produk' => $produk]);
    }

}
