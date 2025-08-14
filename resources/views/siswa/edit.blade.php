@extends('layout.sourcelayout')
@section('title','Edit Siswa')

@section('content')
<div class="container">
    <h2>Edit Data Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" value="{{ old('nama', $siswa->nama) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas:</label>
            <input type="text" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection