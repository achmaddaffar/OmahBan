@extends('layouts.form')
@section('title', 'Order')
@section('form-action')
    {{ isset($transaksi) ? route('transaksi.tambah.update', $transaksi->id) : route('transaksi.tambah.simpan') }}
@endsection
@section('form-method', 'post')
@section('form-content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
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
                        <input type="text" name="id_transaksi[0]" id="id_transaksi" class="form-control id_transaksi">
                    </td>
                    <input type="text" name="id_pembeli" id="nama_pembeli" class="form-control nama_pembeli"
                        value="{{ $struk->id_pembeli }}">
                    </input>
                    <input type="text" name="id_struk" id="id_struk" class="form-control id_struk"
                        value="{{ $struk->id }}">
                    </input>
                    <td>
                        <select name="id_mekanik[0]" id="nama_mekanik" class="form-control nama_mekanik">
                            @foreach ($mekanik as $mekanik)
                                <option value="{{ $mekanik->id }}">{{ $mekanik->nama_mekanik }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="kode_part[0]" id="nama_barang" class="form-control nama_barang">
                            @foreach ($ban as $ban)
                                <option data-harga="{{ $ban->harga }}" value="{{ $ban->kode_part }}">
                                    {{ $ban->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="jumlah[0]" id="jumlah" class="form-control jumlah">
                    </td>
                    <td>
                        <input type="number" name="harga[0]" id="harga" class="form-control harga" readonly>
                    </td>
                    <td><input type="number" name="total_harga[0]" id="total_harga" class="form-control total_harga" readonly></td>
                    <td>
                        <a href="" class="btn btn-sm btn-danger delete"><i class="fa fa-times"></i></a>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        $('.add_more').on('click', function(e) {
            e.preventDefault();
            // var idPembeli = $('.id_pembeli').html();
            // var idStruk = $('.id_struk').html();
            var namaMekanik = $('.nama_mekanik').html();
            var namaBarang = $('.nama_barang').html();
            var jumlahbaris = ($('.tambahProduk tr').length) + 1;
            console.log(jumlahbaris)
            var tr =
                '<tr><td class="no">' + jumlahbaris + '</td>' +
                '<td><input type="text" name="id_transaksi[' + (jumlahbaris - 1) +
                ']" id="id_transaksi" class="form-control id_transaksi"></td>' +
                // '<input type="text" name="id_struk" class="form-control id_struk" value="' + {{$struk->id}} + '">' +
                // '<input type="text" name="id_pembeli" id="nama_pembeli" class="form-control nama_pembeli" value="' + {{$struk->id_pembeli}} + '"> </input>' +
                '<td><select name="id_mekanik[' + (jumlahbaris - 1) +
                ']" id="nama_mekanik" class="form-control nama_mekanik">' +
                namaMekanik + '</select></td>' +
                '<td><select name="kode_part[' + (jumlahbaris - 1) +
                ']" id="nama_barang" class="form-control nama_barang">' +
                namaBarang + '</select></td>' +
                '<td><input type="number" name="jumlah[' + (jumlahbaris - 1) +
                ']" id="jumlah" class="form-control jumlah"></td>' +
                '<td><input type="number" name="harga[' + (jumlahbaris - 1) +
                ']" id="harga" class="form-control harga"></td>' +
                '<td><input type="number" name="total_harga[' + (jumlahbaris - 1) +
                ']" id="total_harga" class="form-control total_harga"></td>' +
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
