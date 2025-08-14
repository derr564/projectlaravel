<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        return view ('mapel.datamapel');
    }
}
