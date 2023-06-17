@extends('layouts.form')
@section('title', 'Form Input Mekanik')
@section('form-action')
{{ isset($mekanik) ? route('mekanik.tambah.update', $mekanik->id) : route('mekanik.tambah.simpan') }}
@endsection
@section('form-method','post')
@section('form-content')
                <div class="form-group">
                    <label for="id_mekanik">ID Mekanik</label>
                    <input type="text" class="form-control" id="id_mekanik" name="id_mekanik"
                        value="{{ isset($mekanik) ? $mekanik->id_mekanik : $id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_mekanik">Nama Mekanik</label>
                    <input type="text" class="form-control" id="nama_mekanik" name="nama_mekanik"
                        value="{{ isset($mekanik) ? $mekanik->nama_mekanik : '' }}">
                </div>
@endsection
