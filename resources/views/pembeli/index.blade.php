@extends('layouts.app')

@section('title', 'Data Pembeli')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembeli</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('pembeli.tambah') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pembeli</th>
                            <th>Nama Pembeli</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($pembeli as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->id_pembeli }}</td>
                                <td>{{ $row->nama_pembeli }}</td>
                                <td>
                                    <a href="{{ route('pembeli.edit', $row->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ route('pembeli.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
