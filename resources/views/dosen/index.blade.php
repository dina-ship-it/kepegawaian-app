@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 px-4">
    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-2xl p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Daftar Dosen</h2>
            <a href="{{ route('dosen.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
                + Tambah Dosen
            </a>
        </div>

        <!-- Filter & Pencarian -->
        <form action="{{ route('dosen.index') }}" method="GET" class="flex flex-col md:flex-row gap-4 mb-6">
            <div class="flex items-center gap-2">
                <label class="text-sm text-gray-600">Filter Tahun:</label>
                <select name="tahun"
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua</option>
                    @for ($i = date('Y'); $i >= 2020; $i--)
                        <option value="{{ $i }}" {{ request('tahun') == $i ? 'selected' : '' }}>
                            {{ $i }}
                        </option>
                    @endfor
                </select>
            </div>

            <div class="flex items-center gap-2 flex-1">
                <input type="text" name="search" value="{{ request('search') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500"
                       placeholder="Cari nama, NIDN, atau email...">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                    Cari
                </button>
                @if(request('search') || request('tahun'))
                    <a href="{{ route('dosen.index') }}"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg transition">
                        Reset
                    </a>
                @endif
            </div>
        </form>

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Data -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left">NIDN</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Prodi</th>
                        <th class="px-4 py-2 text-left">Jabatan</th>
                        <th class="px-4 py-2 text-left">Tahun</th>
                        <th class="px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dosens as $dosen)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $dosen->nidn }}</td>
                            <td class="px-4 py-2">{{ $dosen->nama }}</td>
                            <td class="px-4 py-2">{{ $dosen->email }}</td>
                            <td class="px-4 py-2">{{ $dosen->prodi }}</td>
                            <td class="px-4 py-2">{{ $dosen->jabatan }}</td>
                            <td class="px-4 py-2">{{ $dosen->tahun }}</td>
                            <td class="px-4 py-2 flex justify-center gap-2">
                                <a href="{{ route('dosen.edit', $dosen->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md transition">
                                    Edit
                                </a>
                                <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-gray-500 py-4">Belum ada data dosen</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
