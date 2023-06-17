@extends('layouts.list')

@section('title', 'Data Struk')
@section('tambah-route')
    {{ route('struk.tambah') }}
@endsection

@section('column-names')
    <th>No</th>
    <th>ID Struk</th>
    <th>ID Pembeli</th>
    <th>Tanggal Transaksi</th>
    <th>Aksi</th>
@endsection
@section('table')
    @php($no = 1)
    @foreach ($struk as $row)
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $row->id_struk }}</td>
            <td>{{ $row->id_pembeli }}</td>
            <td>{{ $row->created_at }}</td>
            <td>
                <a href="{{ route('struk.edit', $row->id) }}" class="btn btn-warning">edit</a>
                <a href="{{ route('struk.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
            </td>
        </tr>
    @endforeach
@endsection
