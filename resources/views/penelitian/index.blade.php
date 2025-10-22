@extends('layouts.app')

@section('title', 'Data Penelitian')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Data Penelitian</h1>
        <div class="flex space-x-2">
            <!-- Tombol Export Excel -->
            <a href="{{ route('penelitian.export') }}" 
               class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow">
               ⬇️ Export Excel
            </a>

            <!-- Tombol Tambah Penelitian -->
            <a href="{{ route('penelitian.create') }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow">
               + Tambah Penelitian
            </a>
        </div>
    </div>

    {{-- Tabel Data --}}
    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="w-full border-collapse">
            <thead class="bg-indigo-100 text-gray-700">
                <tr>
                    <th class="border p-3 text-left">No</th>
                    <th class="border p-3 text-left">Judul</th>
                    <th class="border p-3 text-left">Bidang</th>
                    <th class="border p-3 text-left">Tanggal Mulai</th>
                    <th class="border p-3 text-left">Tanggal Selesai</th>
                    <th class="border p-3 text-left">Status</th>
                    <th class="border p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($penelitian as $index => $p)
                <tr class="hover:bg-gray-50">
                    <td class="border p-3">{{ $index + 1 }}</td>
                    <td class="border p-3">{{ $p->judul }}</td>
                    <td class="border p-3">{{ $p->bidang }}</td>
                    <td class="border p-3">{{ $p->tanggal_mulai }}</td>
                    <td class="border p-3">{{ $p->tanggal_selesai }}</td>
                    <td class="border p-3">
                        <span class="px-2 py-1 rounded text-sm 
                            {{ $p->status == 'Selesai' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ $p->status }}
                        </span>
                    </td>
                    <td class="border p-3 text-center">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('penelitian.edit', $p->id) }}" 
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                               Edit
                            </a>
                            <form action="{{ route('penelitian.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-gray-500 py-6">Belum ada data penelitian.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
