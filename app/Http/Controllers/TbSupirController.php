<?php

namespace App\Http\Controllers;

use App\Models\tb_supir;
use Illuminate\Http\Request;
use PDF;

class TbSupirController extends Controller
{
    public function index()
    {
        $supir = tb_supir::all();
        return view('/supir', compact('supir'));
    }

    public function tambah()
    {
        return view('/supir-tambah');
    }

    public function insert(Request $request)
    {
        tb_supir::create($request->all());
        return redirect()->route('supirr');
    }

    public function edit($id)
    {
        $supir = tb_supir::find($id);
        return view('/supir-edit', compact('supir'));
    }

    public function update(Request $request, $id)
    {
        $supir = tb_supir::find($id);
        $supir->update($request->all());
        return redirect()->route('supirr');
    }

    public function delete($id)
    {
        $supir = tb_supir::find($id);
        $supir->delete();
        return redirect()->route('supirr');
    }
    public function export()
    {
        $data = tb_supir::all();
        $pdf = PDF::loadView('supir-export', compact('data'));

        return $pdf->download('data-supir.pdf');
    }

    
}
