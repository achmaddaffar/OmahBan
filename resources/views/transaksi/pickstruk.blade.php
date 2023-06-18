@extends('layouts.form')

@section('title', 'Order')

@section('form-action')
    {{ route('transaksi.tambah') }}
@endsection

@section('form-method', 'post')

@section('form-content')
    <div class="form-group">
        <label for="kode_part">ID struk</label>
        <select name="id_struk" id="id_struk" class="form-control id_struk">
            <option value="">Pilih ID Struk</option>
            @foreach ($struk as $str)
                <option value="{{ $str->id }}">{{ $str->id }}</option>
            @endforeach
        </select>
    </div>
@endsection