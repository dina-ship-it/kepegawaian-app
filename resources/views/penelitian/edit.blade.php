@extends('layouts.app')
@section('title', 'Edit Penelitian')

@section('content')
<div class="max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Penelitian</h1>

    <form action="{{ route('penelitian.update', $penelitian->id) }}" method="POST" class="space-y-3">
        @csrf @method('PUT')
        <input type="text" name="judul" value="{{ $penelitian->judul }}" class="w-full border p-2 rounded" required>
        <input type="text" name="bidang" value="{{ $penelitian->bidang }}" class="w-full border p-2 rounded" required>
        <input type="date" name="tanggal_mulai" value="{{ $penelitian->tanggal_mulai }}" class="w-full border p-2 rounded" required>
        <input type="date" name="tanggal_selesai" value="{{ $penelitian->tanggal_selesai }}" class="w-full border p-2 rounded">
        <select name="status" class="w-full border p-2 rounded">
            <option {{ $penelitian->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
            <option {{ $penelitian->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            <option {{ $penelitian->status == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
        </select>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
