@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Daftar Dosen</h2>
    <a href="{{ route('lecturers.create') }}" class="btn btn-primary mb-3">+ Tambah Dosen</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($lecturers->isEmpty())
        <div class="alert alert-warning">Belum ada data dosen.</div>
    @else
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lecturers as $i => $lecturer)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->phone }}</td>
                    <td>
                        <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
