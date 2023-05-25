<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    // use HasFactory;
    protected $table = 'ban';
    protected $fillable = ['kode_part', 'nama_barang', 'nama_merk', 'tipe_ban', 'ukuran_ban', 'harga'];
}