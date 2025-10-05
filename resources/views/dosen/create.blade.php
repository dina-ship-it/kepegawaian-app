@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-lg max-w-4xl mx-auto mt-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Data Dosen</h2>
        <a href="{{ route('dosen.index') }}" 
           class="px-4 py-2 bg-white border border-blue-500 text-blue-600 rounded-lg hover:bg-blue-50 transition">
           ← Kembali
        </a>
    </div>

    <form action="{{ route('dosen.store') }}" method="POST" class="space-y-5">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block text-gray-700 font-medium">NIDN <span class="text-red-500">*</span></label>
                <input type="text" name="nidn" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" name="nama" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Fakultas <span class="text-red-500">*</span></label>
                <input type="text" name="fakultas" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Program Studi <span class="text-red-500">*</span></label>
                <input type="text" name="prodi" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Jabatan <span class="text-red-500">*</span></label>
                <input type="text" name="jabatan" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>
        </div>

        <div class="flex justify-end space-x-3 pt-5">
            <a href="{{ route('dosen.index') }}" 
               class="px-5 py-2 border border-gray-400 text-gray-600 rounded-lg hover:bg-gray-100 transition">Batal</a>
            <button type="submit" 
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection
