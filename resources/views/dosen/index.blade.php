@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">📋 Data Dosen</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('dosen.create') }}" class="btn btn-success mb-3">+ Tambah Dosen</a>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Jabatan</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dosens as $key => $dosen)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $dosen->nidn }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>{{ $dosen->prodi }}</td>
                    <td>{{ $dosen->jabatan }}</td>
                    <td>{{ $dosen->tahun }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center text-muted">Belum ada data dosen.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
