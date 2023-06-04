<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use App\Models\tb_pegawai;
use App\Models\tb_produk;
use App\Models\tb_gudang;
use App\Models\tb_outlet;



class HomeController extends Controller
{
    public function home(){
        $dataProduk = tb_produk::all();
        $totalUser = tb_user::count();
        $totalPegawai = tb_pegawai::count();
        $totalProduk = tb_produk::count();
        $totalGudang = tb_gudang::count();
        return view('home', compact('dataProduk','totalUser','totalPegawai','totalProduk','totalGudang'));
    }
}

