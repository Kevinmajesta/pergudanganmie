<?php

namespace App\Http\Controllers;
use App\Models\tb_user;
use PDF;
use Illuminate\Http\Request;

class TbUserController extends Controller
{
    public function index()
    {
        $user = tb_user::all();
        return view('/user', compact('user'));
    }

    public function tambah()
    {
        return view('/user-tambah');
    }

    public function insert(Request $request)
    {
        tb_user::create($request->all());
        return redirect()->route('userr');
    }

    public function edit($id)
    {
        $user = tb_user::find($id);
        return view('/user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = tb_user::find($id);
        $user->update($request->all());
        return redirect()->route('userr');
    }

    public function delete($id)
    {
        $user = tb_user::find($id);
        $user->delete();
        return redirect()->route('userr');
    }
    public function export()
    {
        $data = tb_user::all();
        $pdf = PDF::loadView('user-export', compact('data'));

        return $pdf->download('data-user.pdf');
    }
    
}