<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use Illuminate\Http\Request;

class BanController extends Controller
{
    public function index()
    {
        $ban = Ban::all();
        return view('pages.ban.index', ['ban' => $ban]);
    }
    public function tambah()
    {
        return view('pages.ban.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'kode_part' => $request->kode_part,
            'nama_barang' => $request->nama_barang,
            'nama_merk' => $request->nama_merk,
            'tipe_ban' => $request->tipe_ban,
            'ukuran_ban' => $request->ukuran_ban,
            'harga' => $request->harga,
        ];
        Ban::create($data);
        return redirect()->route('ban');
    }
    public function edit($id)
    {
        $ban = Ban::find($id);
        return view('pages.ban.form', ['ban' => $ban]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'kode_part' => $request->kode_part,
            'nama_barang' => $request->nama_barang,
            'nama_merk' => $request->nama_merk,
            'tipe_ban' => $request->tipe_ban,
            'ukuran_ban' => $request->ukuran_ban,
            'harga' => $request->harga,
        ];
        Ban::find($id)->update($data);
        return redirect()->route('ban');
    }
    public function hapus($id)
    {
        Ban::find($id)->delete();
        return redirect()->route('ban');
    }
}