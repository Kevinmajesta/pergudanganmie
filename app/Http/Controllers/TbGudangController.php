<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_gudang;
use PDF;

class TbGudangController extends Controller
{
    public function index()
    {
        $gudang = tb_gudang::all();
        return view('/gudang', compact('gudang'));
    }

    public function tambah()
    {
        return view('/gudang-tambah');
    }

    public function insert(Request $request)
    {
        tb_gudang::create($request->all());
        return redirect()->route('gudangg');
    }

    public function edit($id)
    {
        $gudang = tb_gudang::find($id);
        return view('/gudang-edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        $gudang = tb_gudang::find($id);
        $gudang->update($request->all());
        return redirect()->route('gudangg');
    }

    public function delete($id)
    {
        $gudang = tb_gudang::find($id);
        $gudang->delete();
        return redirect()->route('gudangg');
    }
    public function export()
    {
        $data = tb_gudang::all();
        $pdf = PDF::loadView('gudang-export', compact('data'));

        return $pdf->download('data-gudang.pdf');
    }
    
}