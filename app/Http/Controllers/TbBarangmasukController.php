<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_produk;
use App\Models\tb_barangmasuk;
use App\Models\tb_gudang;
use PDF;

class TbBarangmasukController extends Controller
{
    public function index()
    {
        $produk = tb_produk::all();
        $gudang = tb_gudang::all();
        $data = tb_barangmasuk::with('produk', 'gudang')->get();
        return view('/barangmasuk', compact('data', 'produk', 'gudang'));
    }

    public function tambah()
    {
        $data = tb_barangmasuk::all();
        $gudang = tb_gudang::all();
        $produk = tb_produk::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/barangmasuk-tambah', compact('data', 'produk', 'gudang'));
    }

    public function insert(Request $request)
    {
        $masuk = new tb_barangmasuk($request->all());
        $masuk->save();
        return redirect()->route('masukk');
    }

    public function edit($id)
    {
        $data = tb_barangmasuk::with('produk', 'gudang')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $gudang = tb_gudang::all();
        $produk = tb_produk::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/barangmasuk-edit', compact('data', 'produk', 'gudang'));
    }

    public function update(Request $request, $id)
    {
        $masuk = tb_barangmasuk::find($id);
        $masuk->fill($request->all());
        $masuk->save();
        return redirect()->route('masukk');
    }

    public function delete($id)
    {
        $masuk = tb_barangmasuk::find($id);
        $masuk->delete();
        return redirect()->route('masukk');
    }
    public function export()
    {
        $data = tb_barangmasuk::all();
        $pdf = PDF::loadView('barangmasuk-export', compact('data'));

        return $pdf->download('data-barangmasuk.pdf');
    }
    
}
