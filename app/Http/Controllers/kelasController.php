<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index()
    {
        return view ('siswa.datasiswa');
    }
}
