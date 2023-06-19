@extends('layouts.form')
@section('title', 'Form Input Ban')
@section('form-action')
    {{ isset($ban) ? route('pages.ban.tambah.update', $ban->id) : route('pages.ban.tambah.simpan') }}
@endsection
@section('form-method', 'post')
@section('form-content')

    <div class="form-group">
        <label for="kode_part">Kode Part</label>
        <input type="text" class="form-control" id="kode_part" name="kode_part"
            value="{{ isset($ban) ? $ban->kode_part : '' }}" {{ isset($ban) ? 'readonly' : '' }}>
    </div>
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
            value="{{ isset($ban) ? $ban->nama_barang : '' }}">
    </div>
    <div class="form-group">
        <label for="nama_merk">Nama Merk</label>
        <input type="text" class="form-control" id="nama_merk" name="nama_merk"
            value="{{ isset($ban) ? $ban->nama_merk : '' }}">
    </div>
    <div class="form-group">
        <label for="tipe_ban">Tipe Ban</label>
        <input type="text" class="form-control" id="tipe_ban" name="tipe_ban"
            value="{{ isset($ban) ? $ban->tipe_ban : '' }}">
    </div>
    <div class="form-group">
        <label for="ukuran_ban">Ukuran Ban</label>
        <input type="text" class="form-control" id="ukuran_ban" name="ukuran_ban"
            value="{{ isset($ban) ? $ban->ukuran_ban : '' }}">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga"
            value="{{ isset($ban) ? $ban->harga : '' }}">
    </div>

@endsection
