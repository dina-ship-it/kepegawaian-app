@extends('layouts.app')

@section('title', 'Dashboard Dosen')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-md">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">Selamat Datang, {{ $data['nama'] }}</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-indigo-100 p-4 rounded-lg text-center">
            <h3 class="font-semibold text-indigo-800">Penelitian</h3>
            <p class="text-2xl font-bold text-indigo-700">{{ $data['penelitian'] }}</p>
        </div>

        <div class="bg-indigo-100 p-4 rounded-lg text-center">
            <h3 class="font-semibold text-indigo-800">Pengabdian</h3>
            <p class="text-2xl font-bold text-indigo-700">{{ $data['pengabdian'] }}</p>
        </div>

        <div class="bg-indigo-100 p-4 rounded-lg text-center">
            <h3 class="font-semibold text-indigo-800">Prestasi</h3>
            <p class="text-2xl font-bold text-indigo-700">{{ $data['prestasi'] }}</p>
        </div>

        <div class="bg-indigo-100 p-4 rounded-lg text-center">
            <h3 class="font-semibold text-indigo-800">Publikasi</h3>
            <p class="text-2xl font-bold text-indigo-700">{{ $data['publikasi'] }}</p>
        </div>
    </div>
</div>
@endsection
