<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Ban;
use App\Models\Pembeli;
use App\Models\Mekanik;
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
        $ban = Ban::all();
        $pembeli = Pembeli::all();
        $mekanik = Mekanik::all();
        return view('transaksi.form', ['ban' => $ban, 'pembeli' => $pembeli, 'mekanik' => $mekanik]);
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

    public function store(Request $request)
    {
        return $request->all();
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