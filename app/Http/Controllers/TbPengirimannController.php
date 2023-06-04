<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_ekspedisi;
use App\Models\tb_supir;
use App\Models\tb_pengirimann;
use App\Models\tb_pembayaran;
use PDF;

class TbPengirimannController extends Controller
{
    public function index()
    {
        $ekspedisi = tb_ekspedisi::all();
        $supir = tb_supir::all();
        $pembayaran = tb_pembayaran::all();
        $data = tb_pengirimann::with('ekspedisi', 'pembayaran','supir')->get();
        return view('/pengiriman', compact('data','ekspedisi', 'pembayaran','supir'));
    }

    public function tambah()
    {
        $data = tb_pengirimann::all();
        $ekspedisi = tb_ekspedisi::all();
        $supir = tb_supir::all();
        $pembayaran = tb_pembayaran::all();
         // Menampilkan semua distributor untuk pilihan dropdown
        return view('/pengiriman-tambah', compact('data','ekspedisi', 'pembayaran','supir'));
    }

    public function insert(Request $request)
    {
        $pengiriman = new tb_pengirimann($request->all());
        $pengiriman->save();
        return redirect()->route('pengirimann');
    }

    public function edit($id)
    {
        $data = tb_pengirimann::with( 'ekspedisi', 'pembayaran','supir')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $ekspedisi = tb_ekspedisi::all();
        $supir = tb_supir::all();
        $pembayaran = tb_pembayaran::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/pengiriman-edit', compact('data', 'ekspedisi', 'pembayaran','supir'));
    }

    public function update(Request $request, $id)
    {
        $pengiriman = tb_pengirimann::find($id);
        $pengiriman->fill($request->all());
        $pengiriman->save();
        return redirect()->route('pengirimann');
    }

    public function delete($id)
    {
        $pengiriman = tb_pengirimann::find($id);
        $pengiriman->delete();
        return redirect()->route('pengirimann');
    }
    public function export()
    {
        $data = tb_pengirimann::all();
        $pdf = PDF::loadView('pengiriman-export', compact('data'));

        return $pdf->download('data-pengiriman.pdf');
    }
}
