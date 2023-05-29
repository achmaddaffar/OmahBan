<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    protected $table = 'mekanik';
    protected $fillable = ['id_mekanik', 'nama_mekanik'];

}