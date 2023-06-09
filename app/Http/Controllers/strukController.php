<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembeli;
use App\Models\struk;
use Illuminate\Http\Request;

class strukController extends Controller
{
    public function index()
    {
        $struk = struk::all();
        return view('pages.struk.index', [
            'struk' => $struk
        ]);
    }
    public function tambah()
    {
        $pembeli = Pembeli::all();
        $id = "STRUK" . (Struk::max('id') + 1);
        return view('pages.struk.form', [
            'pembeli' => $pembeli,
            'id' => $id
        ]);
    }
    public function simpan(Request $request)
    {
        $data = [
            'id_struk' => $request->id_struk,
            'id_pembeli' => $request->id_pembeli,
        ];
        Struk::create($data);
        return redirect()->route('struk');
    }
    public function edit($id)
    {
        $struk = Struk::find($id);
        $pembeli = Pembeli::all();
        return view('pages.struk.form', [
            'struk' => $struk,
            'pembeli' => $pembeli
        ]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'id_struk' => $request->id_struk,
            'id_pembeli' => $request->id_pembeli,
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