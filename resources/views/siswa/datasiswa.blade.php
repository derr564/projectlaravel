

@extends('layout.sourcelayout')
@section('title','data siswa')
@section('content')
<div>
    <h1>DATA SISWA</h1>
</div>
<div class="card">
    <div class="card-body">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>

        <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>
    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>

    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin ingin menghapus siswa ini?')">Hapus</button>
    </form>
</td>
            
  
        </tr>
        @endforeach
    </table>
    </div>
</div>


@endsection()