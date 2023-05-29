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
        return view('struk.index', [
            'struk' => $struk
        ]);
    }
    public function tambah()
    {
        $pembeli = Pembeli::all();
        return view('struk.form', ['pembeli' => $pembeli]);
    }
    public function simpan(Request $request)
    {
        $data = [
            'id_struk' => $request->id_struk,
            'id_pembeli' => $request->id_pembeli,
        ];
        struk::create($data);
        return redirect()->route('struk');
    }
    public function edit($id)
    {
        $struk = struk::find($id);
        return view('struk.form', ['struk' => $struk]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'id_struk' => $request->id_struk,
            'id_pembeli' => $request->id_pembeli,
        ];
        struk::find($id)->update($data);
        return redirect()->route('struk');
    }
    public function hapus($id)
    {
        struk::find($id)->delete();
        return redirect()->route('struk');
    }
}