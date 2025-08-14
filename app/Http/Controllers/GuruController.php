<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view ('guru.dataguru');
    }
}
