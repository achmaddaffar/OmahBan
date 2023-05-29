@extends('layouts.app')
@section('title', 'Order')
@section('contents')
    <form
        action="{{ isset($transaksi) ? route('transaksi.tambah.update', $transaksi->id) : route('transaksi.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Transaksi</th>
                                <th>ID Struk</th>
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
                                    <input type="text" name="id_transaksi" id="id_transaksi"
                                        class="form-control id_transaksi">
                                </td>
                                <td>
                                    <select name="id_struk" id="id_struk" class="form-control id_struk">
                                        <option value="">Pilih ID Struk</option>
                                        @foreach ($struk as $struk)
                                            <option value="{{ $struk->id }}">{{ $struk->id }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select name="id_pembeli" id="nama_pembeli" class="form-control nama_pembeli">
                                        <option value="">Pilih Pembeli</option>
                                        @foreach ($pembeli as $pembeli)
                                            <option value="{{ $pembeli->id }}">{{ $pembeli->nama_pembeli }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select name="id_mekanik" id="nama_mekanik" class="form-control nama_mekanik">
                                        @foreach ($mekanik as $mekanik)
                                            <option value="{{ $mekanik->id }}">{{ $mekanik->nama_mekanik }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select name="kode_part" id="nama_barang" class="form-control nama_barang">
                                        @foreach ($ban as $ban)
                                            <option data-harga="{{ $ban->harga }}" value="{{ $ban->kode_part }}">
                                                {{ $ban->nama_barang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="jumlah" id="jumlah" class="form-control jumlah">
                                </td>
                                <td>
                                    <input type="number" name="harga" id="harga" class="form-control harga">
                                </td>
                                <td><input type="number" name="total_harga" id="total_harga"
                                        class="form-control total_harga"></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-danger delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $('.add_more').on('click', function(e) {
            e.preventDefault();
            var namaPembeli = $('.nama_pembeli').html();
            var idStruk = $('.id_struk').html();
            var namaMekanik = $('.nama_mekanik').html();
            var namaBarang = $('.nama_barang').html();
            var jumlahbaris = ($('.tambahProduk tr').length) + 1;
            console.log(jumlahbaris)
            var tr = '<tr><td class="no">' + jumlahbaris + '</td>' +
                '<td><input type="text" name="id_transaksi" id="id_transaksi" class="form-control id_transaksi"></td>' +
                '<td><select name="id_struk" id="id_struk" class="form-control id_struk">' +
                idStruk+'</select></td>' +
                '<td><select name="id_pembeli" id="nama_pembeli" class="form-control nama_pembeli">' +
                namaPembeli + '</select></td>' +
                '<td><select name="id_mekanik" id="nama_mekanik" class="form-control nama_mekanik">' +
                namaMekanik + '</select></td>' +
                '<td><select name="kode_part" id="nama_barang" class="form-control nama_barang">' +
                namaBarang + '</select></td>' +
                '<td><input type="number" name="jumlah" id="jumlah" class="form-control jumlah"></td>' +
                '<td><input type="number" name="harga" id="harga" class="form-control harga"></td>' +
                '<td><input type="number" name="total_harga" id="total_harga" class="form-control total_harga"></td>' +
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
            var total_harga = (jumlah * harga);
            tr.find('.total_harga').val(total_harga);
        });
    </script>
@endsection
