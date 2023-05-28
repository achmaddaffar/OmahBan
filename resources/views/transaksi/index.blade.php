@extends('layouts.app')

@section('title', 'Data Transaksi')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('transaksi.tambah') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Transaksi</th>
                            <th>ID Struk</th>
                            <th>Kode Part</th>
                            <th>ID Pembeli</th>
                            <th>ID Mekanik</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($transaksi as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->id_transaksi }}</td>
                                <td>{{ $row->nama_transaksi }}</td>
                                <td>
                                    <a href="{{ route('transaksi.edit', $row->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ route('transaksi.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
