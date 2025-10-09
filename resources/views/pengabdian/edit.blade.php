@extends('layouts.app')
@section('title', 'Edit Pengabdian')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 shadow rounded-lg">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Pengabdian</h1>

    <form action="{{ route('pengabdian.update', $pengabdian->id_pengabdian) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold mb-1">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" value="{{ $pengabdian->nama_kegiatan }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Jenis Kegiatan</label>
            <input type="text" name="jenis_kegiatan" value="{{ $pengabdian->jenis_kegiatan }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" value="{{ $pengabdian->tanggal_mulai }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Lokasi</label>
            <input type="text" name="lokasi" value="{{ $pengabdian->lokasi }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border p-2 rounded">{{ $pengabdian->deskripsi }}</textarea>
        </div>

        <div class="flex justify-end gap-3 mt-4">
            <a href="{{ route('pengabdian.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</a>
            <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700">Perbarui</button>
        </div>
    </form>
</div>
@endsection
