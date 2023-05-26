@extends('layouts.app')

@section('title', 'Data Ban')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Ban</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('ban.tambah') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Part</th>
                            <th>Nama Barang</th>
                            <th>Nama Merk</th>
                            <th>Tipe Ban</th>
                            <th>Ukuran Ban</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($ban as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->kode_part }}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->nama_merk }}</td>
                                <td>{{ $row->tipe_ban }}</td>
                                <td>{{ $row->ukuran_ban }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>
                                    <a href="{{ route('ban.edit', $row->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ route('ban.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
