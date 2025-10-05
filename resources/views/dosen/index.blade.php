@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-8">

    {{-- 🔹 Judul Halaman --}}
    <h1 class="text-2xl font-bold text-gray-800 mb-6">SIP2D - Kelola Dosen</h1>

    {{-- 🔹 Statistik Dosen per Tahun (Dinamis) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        {{-- Tahun 2023 --}}
        <div class="bg-white shadow rounded-xl p-6 flex flex-col items-center border border-blue-100 hover:shadow-lg transition">
            <div class="bg-blue-100 text-blue-600 p-3 rounded-full mb-3">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
            <p class="text-gray-500">Dosen Tahun 2023</p>
            <h2 class="text-2xl font-bold text-gray-800">{{ $tahun2023 }}</h2>
        </div>

        {{-- Tahun 2024 --}}
        <div class="bg-white shadow rounded-xl p-6 flex flex-col items-center border border-blue-100 hover:shadow-lg transition">
            <div class="bg-blue-100 text-blue-600 p-3 rounded-full mb-3">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
            <p class="text-gray-500">Dosen Tahun 2024</p>
            <h2 class="text-2xl font-bold text-gray-800">{{ $tahun2024 }}</h2>
        </div>

        {{-- Tahun 2025 --}}
        <div class="bg-white shadow rounded-xl p-6 flex flex-col items-center border border-blue-100 hover:shadow-lg transition">
            <div class="bg-blue-100 text-blue-600 p-3 rounded-full mb-3">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
            <p class="text-gray-500">Dosen Tahun 2025</p>
            <h2 class="text-2xl font-bold text-gray-800">{{ $tahun2025 }}</h2>
        </div>
    </div>

    {{-- 🔹 Pencarian & Filter --}}
    <div class="bg-white shadow rounded-xl p-6 mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div class="flex items-center gap-3">
            <input type="text" placeholder="Cari dosen..." 
                   class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 w-64">
            <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
                <option>Semua Tahun</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
            </select>
        </div>
        <a href="{{ route('dosen.create') }}" 
           class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
            + Tambah Dosen
        </a>
    </div>

    {{-- 🔹 Tabel Data Dosen --}}
    <div class="bg-white shadow rounded-xl p-6 overflow-x-auto">
        <h2 class="text-lg font-bold text-gray-800 mb-4">Data Dosen</h2>
        <p class="text-sm text-gray-500 mb-4">Menampilkan {{ $dosen->count() }} data dosen</p>

        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-700 uppercase text-sm">
                    <th class="px-4 py-3 border-b">NIDN</th>
                    <th class="px-4 py-3 border-b">Nama</th>
                    <th class="px-4 py-3 border-b">Email</th>
                    <th class="px-4 py-3 border-b">Fakultas</th>
                    <th class="px-4 py-3 border-b">Prodi</th>
                    <th class="px-4 py-3 border-b">Jabatan</th>
                    <th class="px-4 py-3 border-b">Tahun</th>
                    <th class="px-4 py-3 border-b">Status</th>
                    <th class="px-4 py-3 border-b text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosen as $item)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-4 py-3">{{ $item->nidn }}</td>
                    <td class="px-4 py-3">{{ $item->nama }}</td>
                    <td class="px-4 py-3">{{ $item->email }}</td>
                    <td class="px-4 py-3">{{ $item->fakultas }}</td>
                    <td class="px-4 py-3">{{ $item->prodi }}</td>
                    <td class="px-4 py-3">{{ $item->jabatan }}</td>
                    <td class="px-4 py-3">
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                            {{ $item->tahun }}
                        </span>
                    </td>
                    <td class="px-4 py-3">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                            Aktif
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center flex justify-center space-x-3">
                        <a href="{{ route('dosen.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('dosen.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center text-gray-500 py-6">Belum ada data dosen.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

{{-- Font Awesome Icons --}}
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
