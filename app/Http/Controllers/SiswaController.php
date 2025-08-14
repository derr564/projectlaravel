<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
       $siswas = Siswa::all(); // ambil semua data dari tabel siswas
        return view('siswa.datasiswa', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }


    public function edit($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('siswa.edit', compact('siswa'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string',
        'kelas' => 'required|string',
    ]);

    $siswa = Siswa::findOrFail($id);
    $siswa->update($request->all());

    return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate');
}

public function destroy($id)
{
    $siswa = Siswa::findOrFail($id);
    $siswa->delete();

    return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
}
}