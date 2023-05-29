@extends('layouts.app')

@section('title', 'Data Mekanik')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mekanik</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('mekanik.tambah') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Mekanik</th>
                            <th>Nama Mekanik</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($mekanik as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->id_mekanik }}</td>
                                <td>{{ $row->nama_mekanik }}</td>
                                <td>
                                    <a href="{{ route('mekanik.edit', $row->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ route('mekanik.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection