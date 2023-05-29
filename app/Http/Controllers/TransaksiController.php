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
    public function tambah()
    {
        $ban = Ban::all();
        $pembeli = Pembeli::all();
        $mekanik = Mekanik::all();
        $struk = Struk::all();
        return view('transaksi.form', [
            'ban' => $ban,
            'pembeli' => $pembeli,
            'mekanik' => $mekanik,
            'struk' => $struk,
        ]);
    }

    // public function simpan(Request $request)
    // {
    //     $n = sizeof($request->id_transaksi);
    //     for ($i = 0; $i < $n; $i++) {
    //         $id_transaksi2 = $request->id_transaksi[$i];
    //         $id_struk2 = $request->id_struk[$i];
    //         $kode_part2 = $request->kode_part[$i];
    //         $id_pembeli2 = $request->id_pembeli[$i];
    //         $id_mekanik2 = $request->id_mekanik[$i];
    //         $data = [
    //             'id_transaksi' => $id_transaksi2,
    //             'id_struk' => struk::find($id_struk2)->id_struk,
    //             'kode_part' => Ban::find($kode_part2)->kode_part,
    //             'id_pembeli' => Pembeli::find($id_pembeli2)->id_pembeli,
    //             'id_mekanik' => Mekanik::find($id_mekanik2)->id_mekanik,
    //             'jumlah' => $request->jumlah[$i],
    //             'total_harga' => $request->total_harga[$i],
    //         ];
    //         Transaksi::create($data);
    //     }
    //     return redirect()->route('transaksi');
    // }

    public function simpan(Request $request)
    {
        $n = sizeof($request->id_transaksi);
        for ($i = 0; $i < $n; $i++) {
            $data = [
                'id_transaksi' => $request->id_transaksi[$i],
                'id_struk' => struk::find($request->id_struk[$i])->id_struk,
                'kode_part' => Ban::find($request->kode_part[$i])->kode_part,
                'id_pembeli' => Pembeli::find($request->id_pembeli[$i])->id_pembeli,
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