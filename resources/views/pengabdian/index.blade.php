@extends('layouts.app')
@section('title', 'Data Pengabdian')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Data Pengabdian</h1>
        <div class="flex gap-2">
            <!-- Tombol Tambah Data -->
            <a href="{{ route('pengabdian.create') }}" 
               class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg shadow">
               + Tambah Pengabdian
            </a>
            <!-- Tombol Export Excel -->
            <a href="{{ route('pengabdian.export') }}" 
               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow">
               ⬇ Export Excel
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="w-full border-collapse">
            <thead class="bg-orange-100 text-gray-700">
                <tr>
                    <th class="border p-3">No</th>
                    <th class="border p-3">Nama Kegiatan</th>
                    <th class="border p-3">Jenis</th>
                    <th class="border p-3">Tanggal Mulai</th>
                    <th class="border p-3">Lokasi</th>
                    <th class="border p-3">Deskripsi</th>
                    <th class="border p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pengabdian as $index => $p)
                <tr class="hover:bg-gray-50">
                    <td class="border p-3 text-center">{{ $index + 1 }}</td>
                    <td class="border p-3">{{ $p->nama_kegiatan }}</td>
                    <td class="border p-3">{{ $p->jenis_kegiatan }}</td>
                    <td class="border p-3">{{ $p->tanggal_mulai }}</td>
                    <td class="border p-3">{{ $p->lokasi }}</td>
                    <td class="border p-3">{{ Str::limit($p->deskripsi, 50) }}</td>
                    <td class="border p-3 text-center">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('pengabdian.edit', $p->id_pengabdian) }}" 
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('pengabdian.destroy', $p->id_pengabdian) }}" method="POST" onsubmit="return confirm('Yakin ingin dihapus?')">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-gray-500 py-6">
                        Belum ada data pengabdian.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
