@extends('layouts.app')

@section('title', 'Dashboard Administrator')

@section('content')
<div class="space-y-8">

    <!-- Judul -->
    <div>
        <h1 class="text-2xl font-semibold text-gray-800 mb-2">SIP3D - Dashboard Administrator</h1>
        <p class="text-gray-500 text-sm">Selamat datang di panel kontrol sistem penelitian dan pengabdian</p>
    </div>

    <!-- Statistik Utama -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
            <i class="bi bi-person text-4xl text-blue-600 mb-3"></i>
            <h2 class="text-3xl font-bold text-gray-800">45</h2>
            <p class="text-gray-500 text-sm">Total Dosen</p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
            <i class="bi bi-mortarboard text-4xl text-green-600 mb-3"></i>
            <h2 class="text-3xl font-bold text-gray-800">1250</h2>
            <p class="text-gray-500 text-sm">Total Mahasiswa</p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
            <i class="bi bi-journal-text text-4xl text-purple-600 mb-3"></i>
            <h2 class="text-3xl font-bold text-gray-800">78</h2>
            <p class="text-gray-500 text-sm">Total Penelitian</p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
            <i class="bi bi-building text-4xl text-yellow-600 mb-3"></i>
            <h2 class="text-3xl font-bold text-gray-800">32</h2>
            <p class="text-gray-500 text-sm">Total Pengabdian</p>
        </div>
    </div>

    <!-- Menu Kelola -->
    <div>
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Kelola Data</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
                <i class="bi bi-person-lines-fill text-4xl text-blue-600 mb-3"></i>
                <h3 class="font-semibold text-gray-800 text-lg mb-1">Kelola Dosen</h3>
                <p class="text-gray-500 text-sm mb-4">Tambah, edit, dan hapus data dosen</p>
                <a href="{{ route('dosen.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Kelola</a>
            </div>

            <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
                <i class="bi bi-mortarboard text-4xl text-green-600 mb-3"></i>
                <h3 class="font-semibold text-gray-800 text-lg mb-1">Kelola Mahasiswa</h3>
                <p class="text-gray-500 text-sm mb-4">Tambah, edit, dan hapus data mahasiswa</p>
                <a href="{{ route('mahasiswa.index') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Kelola</a>
            </div>

            <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
                <i class="bi bi-journal-text text-4xl text-purple-600 mb-3"></i>
                <h3 class="font-semibold text-gray-800 text-lg mb-1">Kelola Penelitian</h3>
                <p class="text-gray-500 text-sm mb-4">Monitor dan kelola data penelitian</p>
                <a href="{{ route('penelitian.index') }}" class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700">Kelola</a>
            </div>

            <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
                <i class="bi bi-building text-4xl text-yellow-600 mb-3"></i>
                <h3 class="font-semibold text-gray-800 text-lg mb-1">Kelola Pengabdian</h3>
                <p class="text-gray-500 text-sm mb-4">Monitor dan kelola data pengabdian</p>
                <a href="{{ route('pengabdian.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Kelola</a>
            </div>

            <div class="bg-white shadow rounded-xl p-6 text-center border border-gray-100">
                <i class="bi bi-trophy text-4xl text-red-600 mb-3"></i>
                <h3 class="font-semibold text-gray-800 text-lg mb-1">Kelola Prestasi</h3>
                <p class="text-gray-500 text-sm mb-4">Monitor dan kelola data prestasi</p>
                <a href="{{ route('prestasi.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Kelola</a>
            </div>
        </div>
    </div>

</div>
@endsection
