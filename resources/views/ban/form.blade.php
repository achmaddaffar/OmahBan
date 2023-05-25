@extends('layouts.app')
@section('title', 'Form Input Ban')
@section('contents')
    <form action="{{ isset($ban) ? route('ban.tambah.update', $ban->id) : route('ban.tambah.simpan') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ isset($ban
                    ) ? 'Form Edit Barang' : 'Form Tambah Barang' }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_part">Kode Part</label>
                    <input type="text" class="form-control" id="kode_part" name="kode_part"
                        value="{{ isset($ban) ? $ban->kode_part : '' }}">
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>

@endsection
