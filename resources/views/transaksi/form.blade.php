@extends('layouts.app')

@section('title', 'Order')
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
                            <th>Nama Pembeli</th>
                            <th>Nama Mekanik</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th><a href="" class="btn btn-sm btn-success add_more"><i class="fa fa-plus"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="tambahProduk">
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <select name="nama_pembeli" id="nama_pembeli" class="form-control nama_pembeli">
                                    @foreach ($pembeli as $pembeli)
                                        <option value="{{ $pembeli->id }}">{{ $pembeli->nama_pembeli }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="nama_mekanik" id="nama_mekanik" class="form-control nama_mekanik">
                                    @foreach ($mekanik as $mekanik)
                                        <option value="{{ $mekanik->id }}">{{ $mekanik->nama_mekanik }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="nama_barang" id="nama_barang" class="form-control nama_barang">
                                    @foreach ($ban as $ban)
                                        <option data-harga="{{ $ban->harga }}" value="{{ $ban->id }}">
                                            {{ $ban->nama_barang }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="jumlah[]" id="jumlah" class="form-control jumlah">
                            </td>
                            <td>
                                <input type="number" name="harga[]" id="harga" class="form-control harga">
                            </td>
                            <td>
                                <input type="number" name="total_harga[]" id="total_harga" class="form-control totalHarga">
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.add_more').on('click', function(e) {
            e.preventDefault();
            var namaPembeli = $('.nama_pembeli').html();
            var namaMekanik = $('.nama_mekanik').html();
            var namaBarang = $('.nama_barang').html();
            var jumlahbaris = ($('.tambahProduk tr').length) + 1;
            console.log(jumlahbaris)
            var tr = '<tr><td class="no">' + jumlahbaris + '</td>' +
                '<td><select name="nama_pembeli" id="nama_pembeli" class="form-control nama_pembeli">' +
                namaPembeli + '</select></td>' +
                '<td><select name="nama_mekanik" id="nama_mekanik" class="form-control nama_mekanik">' +
                namaMekanik + '</select></td>' +
                '<td><select name="nama_barang" id="nama_barang" class="form-control nama_barang">' +
                namaBarang + '</select></td>' +
                '<td><input type="number" name="jumlah[]" id="jumlah" class="form-control jumlah"></td>' +
                '<td><input type="number" name="harga[]" id="harga" class="form-control harga"></td>' +
                '<td><input type="number" name="total_harga[]" id="total_harga" class="form-control totalHarga"></td>' +
                '<td><a href="" class="btn btn-sm btn-danger delete"><i class="fa fa-times"></i></a></td>'; +
            $('.tambahProduk').append(tr);
        });
        $('.tambahProduk').delegate('.delete', 'click', function(e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });

        function totalHarga(e) {
            e.preventDefault();
            var total = 0;
            $('.total_harga').each(function(i, e) {
                var jumlahHarga = $(this).val() - 0;
                total += jumlahHarga;
            });
            $('.total').html(total);
        }

        $('.tambahProduk').delegate('.nama_barang', 'change', function(e) {
            e.preventDefault();
            var tr = $(this).parent().parent();
            var harga = tr.find('.nama_barang option:selected').attr('data-harga');
            tr.find('.harga').val(harga);
            var jumlah = tr.find('.jumlah').val() - 0;
            var harga = tr.find('.harga').val() - 0;
            var total_harga = (jumlah * harga) - ((jumlah * harga) / 100);
            tr.find('.total_harga').val(total_harga);
        });
    </script>
@endsection