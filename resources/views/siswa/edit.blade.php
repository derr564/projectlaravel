@extends('layout.sourcelayout')
@section('title','Edit Siswa')

@section('content')
<div class="container">
    <h2>Edit Data Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
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

        <div class="mb-3">
            <label for="foto" class="form-label">Foto:</label>
            @if($siswa->foto)
                <div class="mb-2">
                    <img src="{{ asset($siswa->foto) }}" alt="Foto {{ $siswa->nama }}" width="80" height="80" style="object-fit:cover;">
                </div>
            @endif
            <input type="file" name="foto" class="form-control" accept="image/*">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti foto</small>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $siswa->alamat) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
