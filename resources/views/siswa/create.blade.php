@extends('layout.sourcelayout')
@section('title', 'Tambah Siswa')
@section('content')

<h2>Tambah Data Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Kelas:</label>
        <input type="text" name="kelas" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection