<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.index', ['pembeli' => $pembeli]);
    }
    public function tambah()
    {
        return view('pembeli.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'id_pembeli' => $request->id_pembeli,
            'nama_pembeli' => $request->nama_pembeli,

        ];
        Pembeli::create($data);
        return redirect()->route('pembeli');
    }
    public function edit($id)
    {
        $pembeli = Pembeli::find($id);
        return view('pembeli.form', ['pembeli' => $pembeli]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'id_pembeli' => $request->id_pembeli,
            'nama_pembeli' => $request->nama_pembeli,

        ];
        Pembeli::find($id)->update($data);
        return redirect()->route('pembeli');
    }
    public function hapus($id)
    {
        Pembeli::find($id)->delete();
        return redirect()->route('pembeli');
    }
}