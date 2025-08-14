<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        return view ('jurusan.datajurusan');
    }
}
