@extends('layouts.form')
@section('title', 'Form Input Pembeli')
@section('form-action')
    {{ isset($pembeli) ? route('pages.pembeli.tambah.update', $pembeli->id) : route('pages.pembeli.tambah.simpan') }}
@endsection
@section('form-method','post')
@section('form-content')
    <div class="form-group">
        <label for="id_pembeli">ID Pembeli</label>
        <input type="text" class="form-control" id="id_pembeli" name="id_pembeli"
            value="{{ isset($pembeli) ? $pembeli->id_pembeli : $id }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama_Pembeli">Nama Pembeli</label>
        <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli"
            value="{{ isset($pembeli) ? $pembeli->nama_pembeli : '' }}">
    </div>
@endsection