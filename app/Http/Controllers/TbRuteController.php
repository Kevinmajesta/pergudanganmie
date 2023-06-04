<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_rute;
use PDF;
use App\Models\tb_supir;

class TbRuteController extends Controller
{
    public function index()
    {
        $supir = tb_supir::all();
        $data = tb_rute::with('supir')->get(); // Menambahkan eager loading untuk memuat relasi 'distributor'
        return view('/rute', compact('data'), compact('supir'));
    }

    public function tambah()
    {
        $data = tb_rute::all();
        $supir = tb_supir::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/rute-tambah', compact('data', 'supir'));
    }

    public function insert(Request $request)
    {
        $rute = new tb_rute($request->all());
        $rute->save();
        return redirect()->route('rutee');
    }

    public function edit($id)
    {
        $data = tb_rute::with('supir')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $supir = tb_supir::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/rute-edit', compact('data', 'supir'));
    }

    public function update(Request $request, $id)
    {
        $rute = tb_rute::find($id);
        $rute->fill($request->all());
        $rute->save();
        return redirect()->route('rutee');
    }

    public function delete($id)
    {
        $rute = tb_rute::find($id);
        $rute->delete();
        return redirect()->route('rutee');
    }
    public function export()
    {
        $data = tb_rute::all();
        $pdf = PDF::loadView('rute-export', compact('data'));

        return $pdf->download('data-rute.pdf');
    }
}


