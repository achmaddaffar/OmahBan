@extends('layouts.list')

@section('title', 'Data Mekanik')
@section('tambah-route')
    {{ route('mekanik.tambah') }}
@endsection

@section('column-names')
    <th>No</th>
    <th>ID Mekanik</th>
    <th>Nama Mekanik</th>
    <th>Aksi</th>
@endsection

@section('table')
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
@endsection
