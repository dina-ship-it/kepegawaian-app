@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-6 text-gray-700">📘 Data Dosen</h1>

    <!-- Tombol Tambah -->
    <div class="mb-4">
        <a href="{{ route('dosen.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">
            + Tambah Dosen
        </a>
    </div>

    <!-- Notifikasi -->
    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full border border-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-3 px-4 text-center">No</th>
                    <th class="py-3 px-4 text-left">NIDN</th>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Prodi</th>
                    <th class="py-3 px-4 text-left">Jabatan</th>
                    <th class="py-3 px-4 text-left">Tahun</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700">
                @forelse ($dosen as $index => $item)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 text-center">{{ $index + 1 }}</td>
                        <td class="py-2 px-4">{{ $item->nidn }}</td>
                        <td class="py-2 px-4">{{ $item->nama }}</td>
                        <td class="py-2 px-4">{{ $item->email }}</td>
                        <td class="py-2 px-4">{{ $item->prodi }}</td>
                        <td class="py-2 px-4">{{ $item->jabatan }}</td>
                        <td class="py-2 px-4">{{ $item->tahun }}</td>
                        <td class="py-2 px-4 text-center">
                            <a href="{{ route('dosen.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                            <form action="{{ route('dosen.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Hapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">Belum ada data dosen.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
