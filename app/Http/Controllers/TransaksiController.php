<?php

namespace App\Http\Controllers;

use App\Models\struk;
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
    public function tambah(Request $request)
    {
        $ban = Ban::all();
        $mekanik = Mekanik::all();
        $struk = Struk::find($request->id_struk);
        $id_transaksi = (Transaksi::max('id') + 1);

        return view('transaksi.form', [
            'ban' => $ban,
            'mekanik' => $mekanik,
            'struk' => $struk,
            'id_transaksi' => $id_transaksi
        ]);
    }

    public function pickstruk()
    {
        $struk = Struk::all();
        $pembeli = Pembeli::all();
        return view('transaksi.pickstruk', [
            'struk' => $struk,
            'pembeli' => $pembeli,
        ]);
    }

    public function simpan(Request $request)
    {
        $n = sizeof($request->id_transaksi);
        $id_struk = struk::find($request->id_struk)->id_struk;
        $id_pembeli = Pembeli::where('id_pembeli', $request->id_pembeli)->first()->id_pembeli;
        for ($i = 0; $i < $n; $i++) {
            $data = [
                'id_transaksi' => $request->id_transaksi[$i],
                'id_struk' => $id_struk,
                'kode_part' => Ban::where('kode_part', $request->kode_part[$i])->first()->kode_part,
                'id_pembeli' => $id_pembeli,
                'id_mekanik' => Mekanik::find($request->id_mekanik[$i])->id_mekanik,
                'jumlah' => $request->jumlah[$i],
                'total_harga' => $request->total_harga[$i],
            ];
            Transaksi::create($data);
        }
        return redirect()->route('transaksi');
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $id_transaksi = $transaksi->id_transaksi;
        $id_struk = Transaksi::where('id_transaksi', $id_transaksi)->first()->id_struk;
        $struk = Struk::where('id_struk', $id_struk)->first();
        $ban = Ban::all();
        $pembeli = Pembeli::all();
        $mekanik = Mekanik::all();
        // dd($ban);
        return view('transaksi.form', [
            'transaksi' => $transaksi,
            'struk' => $struk,
            'ban' => $ban,
            'pembeli' => $pembeli,
            'mekanik' => $mekanik,
            'id_transaksi' => $id_transaksi
        ]);
    }
    public function update($id, Request $request)
    {
        $data = [
            // 'id_transaksi' => $request->id_transaksi[0],
            'id_struk' => $request->id_struk,
            'kode_part' => $request->kode_part[0],
            'id_pembeli' => $request->id_pembeli,
            'id_mekanik' => $request->id_mekanik[0],
            'jumlah' => $request->jumlah[0],
            'total_harga' => $request->total_harga[0],
        ];
        Transaksi::where('id', $id)->update($data);
        return redirect()->route('transaksi');
    }
    public function hapus($id)
    {
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi');
    }
}