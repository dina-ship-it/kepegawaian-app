@extends('layouts.app')

@section('title', 'Tambah Prestasi')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow rounded-2xl p-8">
    <h2 class="text-2xl font-bold mb-6">Tambah Prestasi</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('prestasi.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block font-semibold mb-1">Nama Prestasi</label>
            <input type="text" name="nama_prestasi" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Tingkat</label>
            <select name="tingkat" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400" required>
                <option value="">-- Pilih Tingkat --</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Regional">Regional</option>
            </select>
        </div>

        <div>
            <label class="block font-semibold mb-1">Penyelenggara</label>
            <input type="text" name="penyelenggara" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Tanggal</label>
            <input type="date" name="tanggal" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Keterangan</label>
            <textarea name="keterangan" rows="3" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400"></textarea>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('prestasi.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-5 py-2 rounded-lg">Batal</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">Simpan</button>
        </div>
    </form>
</div>
@endsection
