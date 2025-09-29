@extends('layouts.app')

@section('judul','Form Pengajuan')

@section('konten')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Tambah Pengajuan</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pengajuan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block font-semibold">Judul</label>
            <input type="text" name="judul" class="border rounded w-full p-2" required>
        </div>
        <div class="mb-3">
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="border rounded w-full p-2" rows="4" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
