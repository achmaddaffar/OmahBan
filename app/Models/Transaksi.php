<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_transaksi', 'id_struk', 'kode_part', 'id_pembeli', 'jumlah', 'total_harga'];

}