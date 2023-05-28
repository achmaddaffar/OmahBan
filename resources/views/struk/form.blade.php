@extends('layouts.app')
@section('title', 'Form Input Struk')
@section('contents')
    <form action="{{ isset($struk) ? route('struk.tambah.update', $struk->id) : route('struk.tambah.simpan') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ isset($struk
                    ) ? 'Form Edit Struk' : 'Form Tambah Struk' }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_part">ID Struk</label>
                    <input type="text" class="form-control" id="id_struk" name="id_struk"
                        value="{{ isset($struk) ? $struk->id_struk : '' }}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>

@endsection
