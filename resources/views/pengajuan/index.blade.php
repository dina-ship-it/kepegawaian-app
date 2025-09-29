@extends('layouts.app')

@section('judul','Daftar Pengajuan')

@section('konten')
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan</h1>

    <a href="{{ route('pengajuan.create') }}" class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700">+ Tambah Pengajuan</a>

    <table class="mt-4 w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-3 py-2">Judul</th>
                <th class="border px-3 py-2">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pengajuan as $item)
            <tr>
                <td class="border px-3 py-2">{{ $item->judul }}</td>
                <td class="border px-3 py-2">{{ $item->deskripsi }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center p-3">Belum ada pengajuan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
