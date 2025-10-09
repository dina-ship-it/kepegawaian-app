@extends('layouts.app')

@section('title', 'Kelola Prestasi')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Judul -->
    <h2 class="text-2xl font-bold mb-6">SIP2D - Kelola Prestasi</h2>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white shadow rounded-2xl p-6 text-center border-t-4 border-purple-500">
            <div class="text-purple-600 text-4xl mb-2"><i class="fa-solid fa-trophy"></i></div>
            <p class="text-3xl font-bold text-gray-800">{{ $tahun2023 ?? 0 }}</p>
            <p class="text-gray-500">Tahun 2023</p>
        </div>
        <div class="bg-white shadow rounded-2xl p-6 text-center border-t-4 border-blue-500">
            <div class="text-blue-600 text-4xl mb-2"><i class="fa-solid fa-medal"></i></div>
            <p class="text-3xl font-bold text-gray-800">{{ $tahun2024 ?? 0 }}</p>
            <p class="text-gray-500">Tahun 2024</p>
        </div>
        <div class="bg-white shadow rounded-2xl p-6 text-center border-t-4 border-green-500">
            <div class="text-green-600 text-4xl mb-2"><i class="fa-solid fa-award"></i></div>
            <p class="text-3xl font-bold text-gray-800">{{ $tahun2025 ?? 0 }}</p>
            <p class="text-gray-500">Tahun 2025</p>
        </div>
    </div>

    <!-- Tombol & Filter -->
    <div class="bg-white shadow rounded-2xl p-6 mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
        <input type="text" placeholder="Cari prestasi..." class="border rounded-lg px-4 py-2 w-full md:w-1/3 focus:ring-2 focus:ring-indigo-400 focus:outline-none">

        <a href="{{ route('prestasi.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2 rounded-lg shadow">
            <i class="fa-solid fa-plus"></i> Tambah Prestasi
        </a>
    </div>

    <!-- Tabel Data -->
    <div class="bg-white shadow rounded-2xl p-6 overflow-x-auto">
        <h3 class="text-xl font-bold mb-4">Data Prestasi</h3>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-600 text-sm uppercase">
                    <th class="p-3 border-b">Nama Prestasi</th>
                    <th class="p-3 border-b">Tingkat</th>
                    <th class="p-3 border-b">Penyelenggara</th>
                    <th class="p-3 border-b">Tanggal</th>
                    <th class="p-3 border-b">Keterangan</th>
                    <th class="p-3 border-b text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prestasis as $prestasi)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border-b">{{ $prestasi->nama_prestasi }}</td>
                    <td class="p-3 border-b">
                        @if($prestasi->tingkat == 'Internasional')
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">{{ $prestasi->tingkat }}</span>
                        @elseif($prestasi->tingkat == 'Nasional')
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">{{ $prestasi->tingkat }}</span>
                        @else
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">{{ $prestasi->tingkat }}</span>
                        @endif
                    </td>
                    <td class="p-3 border-b">{{ $prestasi->penyelenggara }}</td>
                    <td class="p-3 border-b">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</td>
                    <td class="p-3 border-b">{{ $prestasi->keterangan ?? '-' }}</td>
                    <td class="p-3 border-b text-center space-x-3">
                        <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin hapus data ini?')" class="text-red-600 hover:text-red-800">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-gray-500 p-4">Belum ada data prestasi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
