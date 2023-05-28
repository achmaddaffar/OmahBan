@extends('layouts.app')
@section('title', 'Form Input Pembeli')
@section('contents')
    <form action="{{ isset($pembeli) ? route('pembeli.tambah.update', $pembeli->id) : route('pembeli.tambah.simpan') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ isset($pembeli
                    ) ? 'Form Edit Pembeli' : 'Form Tambah Pembeli' }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="id_pembeli">ID Pembeli</label>
                    <input type="text" class="form-control" id="id_pembeli" name="id_pembeli"
                        value="{{ isset($pembeli) ? $pembeli->id_pembeli : '' }}">
                </div>
                <div class="form-group">
                    <label for="nama_Pembeli">Nama Pembeli</label>
                    <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli"
                        value="{{ isset($pembeli) ? $pembeli->nama_pembeli : '' }}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>

@endsection
