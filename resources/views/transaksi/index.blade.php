@extends('layouts.list')

@section('title', 'Data Transaksi')
@section('tambah-route')
    {{ route('transaksi.tambah') }}
@endsection

@section('column-names')
    <th>No</th>
    <th>ID Transaksi</th>
    <th>ID Struk</th>
    <th>Kode Part</th>
    <th>ID Pembeli</th>
    <th>ID Mekanik</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Aksi</th>
@endsection
@section('table')
    @php($no = 1)
    @foreach ($transaksi as $row)
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $row->id_transaksi }}</td>
            <td>{{ $row->id_struk }}</td>
            <td>{{ $row->kode_part }}</td>
            <td>{{ $row->id_pembeli }}</td>
            <td>{{ $row->id_mekanik }}</td>
            <td>{{ $row->jumlah }}</td>
            <td>{{ $row->total_harga }}</td>
            <td>
                <a href="{{ route('transaksi.edit', $row->id) }}" class="btn btn-warning">edit</a>
                <a href="{{ route('transaksi.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
            </td>
        </tr>
    @endforeach
@endsection
