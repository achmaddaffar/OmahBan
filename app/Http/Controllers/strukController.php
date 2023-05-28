<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\struk;
use Illuminate\Http\Request;

class strukController extends Controller
{
    public function index()
    {
        $struk = struk::all();
        return view('struk.index', ['struk' => $struk]);
    }
    public function tambah()
    {
        return view('struk.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'id_struk' => $request->id_struk,
            'nama_struk' => $request->nama_struk,

        ];
        Struk::create($data);
        return redirect()->route('struk');
    }
    public function edit($id)
    {
        $struk = Struk::find($id)->first();
        return view('struk.form', ['struk' => $struk]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'id_struk' => $request->id_struk,
            'nama_struk' => $request->nama_struk,

        ];
        Struk::find($id)->update($data);
        return redirect()->route('struk');
    }
    public function hapus($id)
    {
        Struk::find($id)->delete();
        return redirect()->route('struk');
    }
}