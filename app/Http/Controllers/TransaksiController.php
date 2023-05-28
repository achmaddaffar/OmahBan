<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', ['transaksi' => $transaksi]);
    }
    public function tambah()
    {
        return view('transaksi.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'id_transaksi' => $request->id_transaksi,
            'id_struk' => $request->id_struk,
            'kode_part' => $request->kode_part,
            'id_pembeli' => $request->id_pembeli,
            'id_mekanik' => $request->id_mekanik,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
        ];
        Transaksi::create($data);
        return redirect()->route('transaksi');
    }
    public function edit($id)
    {
        $transaksi = Transaksi::find($id)->first();
        return view('transaksi.form', ['transaksi' => $transaksi]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'id_transaksi' => $request->id_transaksi,
            'id_struk' => $request->id_struk,
            'kode_part' => $request->kode_part,
            'id_pembeli' => $request->id_pembeli,
            'id_mekanik' => $request->id_mekanik,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
        ];
        Transaksi::find($id)->update($data);
        return redirect()->route('transaksi');
    }
    public function hapus($id)
    {
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi');
    }
}