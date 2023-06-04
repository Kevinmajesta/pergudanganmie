<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_produk;
use App\Models\tb_pembayaran;
use App\Models\tb_user;
use PDF;

class TbPembayaranController extends Controller
{
    public function index()
    {
        $user = tb_user::all();
        $produk = tb_produk::all();
        $data = tb_pembayaran::with('user', 'produk')->get();
        return view('/pembayaran', compact('data', 'user', 'produk'));
    }

    public function tambah()
    {
        $data = tb_pembayaran::all();
        $user = tb_user::all();
        $produk = tb_produk::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/pembayaran-tambah', compact('data','user', 'produk'));
    }

    public function insert(Request $request)
    {
        $pembayaran = new tb_pembayaran($request->all());
        $pembayaran->save();
        return redirect()->route('pembayarann');
    }

    public function edit($id)
    {
        $data = tb_pembayaran::with('user', 'produk')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $user = tb_user::all();
        $produk = tb_produk::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/pembayaran-edit', compact('data', 'user', 'produk'));
    }

    public function update(Request $request, $id)
    {
        $pembayaran = tb_pembayaran::find($id);
        $pembayaran->fill($request->all());
        $pembayaran->save();
        return redirect()->route('pembayarann');
    }

    public function delete($id)                                                                                                                                                                                                                                                                                             
    {
        $pembayaran = tb_pembayaran::find($id);
        $pembayaran->delete();
        return redirect()->route('pembayarann');
    }
    public function export()
    {
        $data = tb_pembayaran::all();
        $pdf = PDF::loadView('pembayaran-export', compact('data'));

        return $pdf->download('data-pembayaran.pdf');
    }
}
