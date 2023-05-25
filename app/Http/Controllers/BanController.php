<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use Illuminate\Http\Request;

class BanController extends Controller
{
    public function index()
    {
        $ban = Ban::all();
        return view('ban.index', ['ban' => $ban]);
    }
}