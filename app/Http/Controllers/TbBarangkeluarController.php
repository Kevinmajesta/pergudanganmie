<?php

namespace App\Http\Controllers;

use App\Models\tb_produk;
use App\Models\tb_barangkeluar;
use App\Models\tb_gudang;
use Illuminate\Http\Request;
use PDF;

class TbBarangkeluarController extends Controller
{
    public function index()
    {
        $produk = tb_produk::all();
        $gudang = tb_gudang::all();
        $data = tb_barangkeluar::with('produk', 'gudang')->get();
        return view('/barangkeluar', compact('data', 'produk', 'gudang'));
    }

    public function tambah()
    {
        $data = tb_barangkeluar::all();
        $gudang = tb_gudang::all();
        $produk = tb_produk::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/barangkeluar-tambah', compact('data', 'produk', 'gudang'));
    }


    public function insert(Request $request)
    {
        $keluar = new tb_barangkeluar($request->all());
        $keluar->save();
        return redirect()->route('keluarr');
    }

    public function edit($id)
    {
        $data = tb_barangkeluar::with('produk', 'gudang')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $gudang = tb_gudang::all();
        $produk = tb_produk::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/barangkeluar-edit', compact('data', 'produk', 'gudang'));
    }

    public function update(Request $request, $id)
    {
        $keluar = tb_barangkeluar::find($id);
        $keluar->fill($request->all());
        $keluar->save();
        return redirect()->route('keluarr');
    }

    public function delete($id)
    {
        $keluar = tb_barangkeluar::find($id);
        $keluar->delete();
        return redirect()->route('keluarr');
    }
    public function export()
    {
        $data = tb_barangkeluar::all();
        $pdf = PDF::loadView('barangkeluar-export', compact('data'));

        return $pdf->download('data-barangkeluar.pdf');
    }
}
