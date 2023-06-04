<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use App\Models\tb_pembayaran;
use App\Models\tb_complain;
use PDF;

class TbComplainController extends Controller
{
    public function index()
    {
        $user = tb_user::all();
        $pembayaran = tb_pembayaran::all();
        $data = tb_complain::with('user', 'pembayaran')->get();
        return view('/complain', compact('data', 'user', 'pembayaran'));
    }

    public function tambah()
    {
        $data = tb_complain::all();
        $user = tb_user::all();
        $pembayaran = tb_pembayaran::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/complain-tambah', compact('data','user', 'pembayaran'));
    }

    public function insert(Request $request)
    {
        $complain = new tb_complain($request->all());
        $complain->save();
        return redirect()->route('complainn');
    }

    public function edit($id)
    {
        $data = tb_complain::with('user', 'pembayaran')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $user = tb_user::all();
        $pembayaran = tb_pembayaran::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('/complain-edit', compact('data', 'user', 'pembayaran'));
    }

    public function update(Request $request, $id)
    {
        $complain = tb_complain::find($id);
        $complain->fill($request->all());
        $complain->save();
        return redirect()->route('complainn');
    }

    public function delete($id)
    {
        $complain = tb_complain::find($id);
        $complain->delete();
        return redirect()->route('complainn');
    }
    public function export()
    {
        $data = tb_complain::all();
        $pdf = PDF::loadView('complain-export', compact('data'));

        return $pdf->download('data-complain.pdf');
    }
}