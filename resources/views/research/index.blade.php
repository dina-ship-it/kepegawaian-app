@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Penelitian</h2>

    <a href="{{ route('research.create') }}" class="btn btn-primary mb-3">Tambah Penelitian</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Bidang</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($research as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->bidang }}</td>
                    <td>{{ $item->tanggal_mulai }}</td>
                    <td>{{ $item->tanggal_selesai }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('research.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('research.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
