<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pegawai;
use App\Models\tb_outlet;
use PDF;

class TbOutletController extends Controller
{
    public function index()
    {
        $pegawai = tb_pegawai::all();
        $data = tb_outlet::with('pegawai')->get(); // Menambahkan eager loading untuk memuat relasi 'distributor'
        return view('/outlet', compact('data'), compact('pegawai'));
    }

    public function tambah()
    {
        $data = tb_outlet::all();
        $pegawai = tb_pegawai::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/outlet-tambah', compact('data', 'pegawai'));
    }

    public function insert(Request $request)
    {
        $outlet = new tb_outlet($request->all());
        $outlet->save();
        return redirect()->route('outlett');
    }

    public function edit($id)
    {
        $data = tb_outlet::with('pegawai')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $pegawai = tb_pegawai::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/outlet-edit', compact('data', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        $outlet = tb_outlet::find($id);
        $outlet->fill($request->all());
        $outlet->save();
        return redirect()->route('outlett');
    }

    public function delete($id)
    {
        $outlet = tb_outlet::find($id);
        $outlet->delete();
        return redirect()->route('outlett');
    }
    public function export()
    {
        $data = tb_outlet::all();
        $pdf = PDF::loadView('outlet-export', compact('data'));

        return $pdf->download('data-outlet.pdf');
    }
}


