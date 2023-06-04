<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pegawai;
use App\Models\tb_gudang;
use PDF;

class TbPegawaiController extends Controller
{
    public function index()
    {
        $gudang = tb_gudang::all();
        $data = tb_pegawai::with('gudang')->get(); // Menambahkan eager loading untuk memuat relasi 'pegawai'
        return view('/pegawai', compact('data'), compact('gudang'));
    }

    public function tambah()
    {
        $data = tb_pegawai::all();
        $gudang = tb_gudang::all();
        return view('/pegawai-tambah', compact('data', 'gudang'));
    }

    public function insert(Request $request)
    {
        $pegawai = new tb_pegawai($request->all());
        $pegawai->save();
        return redirect()->route('pegawaii');
    }

    public function edit($id)
    {
        $data = tb_pegawai::with('gudang')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $gudang = tb_gudang::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/pegawai-edit', compact('data', 'gudang'));
    }

    public function update(Request $request, $id)
    {
        $pegawai = tb_pegawai::find($id);
        $pegawai->fill($request->all());
        $pegawai->save();
        return redirect()->route('pegawaii');
    }

    public function delete($id)
    {
        $pegawai = tb_pegawai::find($id);
        $pegawai->delete();
        return redirect()->route('pegawaii');
    }
    public function export()
    {
        $data = tb_pegawai::all();
        $pdf = PDF::loadView('pegawai-export', compact('data'));

        return $pdf->download('data-pegawai.pdf');
    }
}
