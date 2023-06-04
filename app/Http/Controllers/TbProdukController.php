<?php

namespace App\Http\Controllers;

use App\Models\tb_produk;
use Illuminate\Http\Request;
use PDF;


class TbProdukController extends Controller
{
    public function index()
    {
        $produk = tb_produk::all();
        return view('/produk', compact('produk'));
    }

    public function tambah()
    {
        return view('/produk-tambah');
    }

    public function insert(Request $request)
    {
        tb_produk::create($request->all());
        return redirect()->route('produkk');
    }

    public function edit($id)
    {
        $produk = tb_produk::find($id);
        return view('/produk-edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = tb_produk::find($id);
        $produk->update($request->all());
        return redirect()->route('produkk');
    }

    public function delete($id)
    {
        $produk = tb_produk::find($id);
        $produk->delete();
        return redirect()->route('produkk');
    }
    public function export()
    {
        $data = tb_produk::all();
        $pdf = PDF::loadView('produk-export', compact('data'));

        return $pdf->download('data-produk.pdf');
    }

    
}