<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    public function index()
    {
        $mekanik = Mekanik::all();
        return view('pages.mekanik.index', ['mekanik' => $mekanik]);
    }
    public function tambah()
    {
        $id = "MKN" . Mekanik::max('id') + 1;
        return view('pages.mekanik.form', ['id' => $id]);
    }
    public function simpan(Request $request)
    {
        $data = [
            'id_mekanik' => $request->id_mekanik,
            'nama_mekanik' => $request->nama_mekanik,
        ];
        Mekanik::create($data);
        return redirect()->route('mekanik');
    }
    public function edit($id)
    {
        $mekanik = Mekanik::find($id);
        return view('pages.mekanik.form', ['mekanik' => $mekanik]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'id_mekanik' => $request->id_mekanik,
            'nama_mekanik' => $request->nama_mekanik,
        ];
        Mekanik::find($id)->update($data);
        return redirect()->route('mekanik');
    }
    public function hapus($id)
    {
        Mekanik::find($id)->delete();
        return redirect()->route('mekanik');
    }
}