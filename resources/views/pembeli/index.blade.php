@extends('layouts.list')

@section('title', 'Data Pembeli')
@section('tambah-route')
    {{ route('pembeli.tambah') }}
@endsection

@section('column-names')
    <th>No</th>
    <th>ID Pembeli</th>
    <th>Nama Pembeli</th>
    <th>Aksi</th>
@endsection
@section('table')
    @php($no = 0)
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
@endsection
