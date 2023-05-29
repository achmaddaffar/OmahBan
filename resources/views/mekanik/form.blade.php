@extends('layouts.app')
@section('title', 'Form Input Mekanik')
@section('contents')
    <form action="{{ isset($mekanik) ? route('mekanik.tambah.update', $mekanik->id) : route('mekanik.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ isset($mekanik) ? 'Form Edit Mekanik' : 'Form Tambah Mekanik' }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="id_mekanik">ID Mekanik</label>
                    <input type="text" class="form-control" id="id_mekanik" name="id_mekanik"
                        value="{{ isset($mekanik) ? $mekanik->id_mekanik : '' }}">
                </div>
                <div class="form-group">
                    <label for="nama_mekanik">Nama Mekanik</label>
                    <input type="text" class="form-control" id="nama_mekanik" name="nama_mekanik"
                        value="{{ isset($mekanik) ? $mekanik->nama_mekanik : '' }}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>

@endsection
