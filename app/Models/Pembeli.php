<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{

    protected $table = 'ban';
    protected $fillable = ['id_pembeli', 'nama_pembeli'];

}