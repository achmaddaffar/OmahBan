<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struk extends Model
{
    protected $table = 'struk';
    protected $fillable = ['id_struk', 'id_pembeli', 'tanggal_transaksi'];
}