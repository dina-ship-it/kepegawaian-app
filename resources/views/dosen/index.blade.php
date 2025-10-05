@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-md">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-gray-800">Data Dosen</h2>
        <div class="flex space-x-2">
            <input type="text" placeholder="Cari dosen..." class="border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
            <a href="{{ route('dosen.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                + Tambah Dosen
            </a>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-sm uppercase">
                    <th class="py-3 px-4 text-left border">NIDN</th>
                    <th class="py-3 px-4 text-left border">Nama</th>
                    <th class="py-3 px-4 text-left border">Email</th>
                    <th class="py-3 px-4 text-left border">Fakultas</th>
                    <th class="py-3 px-4 text-left border">Prodi</th>
                    <th class="py-3 px-4 text-left border">Jabatan</th>
                    <th class="py-3 px-4 text-left border">Status</th>
                    <th class="py-3 px-4 text-center border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dosen as $d)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border">{{ $d->nip }}</td>
                        <td class="py-2 px-4 border">{{ $d->nama }}</td>
                        <td class="py-2 px-4 border">{{ $d->email }}</td>
                        <td class="py-2 px-4 border">{{ $d->fakultas }}</td>
                        <td class="py-2 px-4 border">{{ $d->prodi }}</td>
                        <td class="py-2 px-4 border">{{ $d->jabatan }}</td>
                        <td class="py-2 px-4 border">
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700 font-medium">Aktif</span>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <a href="{{ route('dosen.edit', $d->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">
                                ✏️
                            </a>
                            <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">🗑️</button>
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
