<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_rute;
use App\Models\tb_pembayaran;
use App\Models\tb_ekspedisi;
use PDF;

class TbEkspedisiController extends Controller
{
    public function index()
    {
        $rute = tb_rute::all();
        $pembayaran = tb_pembayaran::all();
        $data = tb_ekspedisi::with('rute', 'pembayaran')->get();
        return view('/ekspedisi', compact('data', 'rute', 'pembayaran'));
    }

    public function tambah()
    {
        $data = tb_ekspedisi::all();
        $rute = tb_rute::all();
        $pembayaran = tb_pembayaran::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/ekspedisi-tambah', compact('data','rute', 'pembayaran'));
    }

    public function insert(Request $request)
    {
        $ekspedisi = new tb_ekspedisi($request->all());
        $ekspedisi->save();
        return redirect()->route('ekspedisii');
    }

    public function edit($id)
    {
        $data = tb_ekspedisi::with('rute', 'pembayaran')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $rute = tb_rute::all();
        $pembayaran = tb_pembayaran::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/ekspedisi-edit', compact('data', 'rute', 'pembayaran'));
    }

    public function update(Request $request, $id)
    {
        $ekspedisi = tb_ekspedisi::find($id);
        $ekspedisi->fill($request->all());
        $ekspedisi->save();
        return redirect()->route('ekspedisii');
    }

    public function delete($id)
    {
        $ekspedisi = tb_ekspedisi::find($id);
        $ekspedisi->delete();
        return redirect()->route('ekspedisii');
    }
    public function export()
    {
        $data = tb_ekspedisi::all();
        $pdf = PDF::loadView('ekspedisi-export', compact('data'));

        return $pdf->download('data-ekspedisi.pdf');
    }
}
