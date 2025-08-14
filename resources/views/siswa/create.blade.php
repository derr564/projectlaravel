@extends('layout.sourcelayout')
@section('title', 'Tambah Siswa')
@section('content')

<h2>Tambah Data Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Kelas:</label>
        <input type="text" name="kelas" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Foto:</label>
        <input type="file" name="foto" class="form-control" accept="image/*">
    </div>

    <div class="mb-3">
        <label>Alamat:</label>
        <textarea name="alamat" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection
