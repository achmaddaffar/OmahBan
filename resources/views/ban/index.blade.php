@extends('layouts.list')
@section('title', 'Data Ban')
@section('tambah-route')
    {{ route('ban.tambah') }}
@endsection

@section('column-names')
    <th>No</th>
    <th>Kode Part</th>
    <th>Nama Barang</th>
    <th>Nama Merk</th>
    <th>Tipe Ban</th>
    <th>Ukuran Ban</th>
    <th>Harga</th>
@endsection

@section('table')
    @php($no = 1)
    @foreach ($ban as $row)
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $row['kode_part'] }}</td>
            <td>{{ $row['nama_barang'] }}</td>
            <td>{{ $row['nama_merk'] }}</td>
            <td>{{ $row['tipe_ban'] }}</td>
            <td>{{ $row['ukuran_ban'] }}</td>
            <td>{{ $row['harga'] }}</td>
            <th>Aksi</th>
            <td>
                <a href="{{ route('ban.edit', $row->id) }}" class="btn btn-warning">edit</a>
                <a href="{{ route('ban.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
            </td>
        </tr>
    @endforeach
@endsection
