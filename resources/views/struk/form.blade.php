@extends('layouts.form')
@section('title', 'Form Input Struk')
@section('form-action')
    {{ isset($struk) ? route('struk.tambah.update', $struk->id) : route('struk.tambah.simpan') }}
@endsection
@section('form-method', 'post')
@section('form-content')

    <div class="form-group">
        <label for="kode_part">ID Struk</label>
        <input type="text" class="form-control" id="id_struk" name="id_struk"
            value="{{ isset($struk) ? $struk->id_struk : $id }}" readonly>
    </div>
    <div class="form-group">
        <select name="id_pembeli" id="id_pembeli" class="form-control id_pembeli">
            <option value="">Pilih ID Pembeli</option>
            @foreach ($pembeli as $pembeli)
                <option value="{{ $pembeli->id_pembeli }}">{{ $pembeli->id_pembeli }}</option>
            @endforeach
        </select>
    </div>

@endsection
