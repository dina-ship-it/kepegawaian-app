@extends('layouts.app')

@section('title', 'Dashboard Dosen')

@section('content')
<div class="space-y-8">

    <!-- Judul -->
    <div class="text-center">
        <h1 class="text-2xl font-bold text-gray-800">Selamat Datang, Dr. Ahmad Wijaya</h1>
        <p class="text-gray-600 mt-1">Kelola penelitian, pengabdian, dan prestasi Anda dengan mudah</p>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                    <i class="fa-solid fa-flask text-xl"></i>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-800">3</p>
                    <p class="text-gray-500 text-sm">Penelitian Aktif</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-orange-100 text-orange-600 p-3 rounded-full">
                    <i class="fa-solid fa-hand-holding-heart text-xl"></i>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-800">2</p>
                    <p class="text-gray-500 text-sm">Pengabdian Aktif</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                    <i class="fa-solid fa-trophy text-xl"></i>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-800">8</p>
                    <p class="text-gray-500 text-sm">Total Prestasi</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                    <i class="fa-solid fa-book text-xl"></i>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-800">12</p>
                    <p class="text-gray-500 text-sm">Total Publikasi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Utama & Aktivitas -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-6">

        <!-- Menu Utama -->
        <div class="lg:col-span-2 space-y-4">
            <h2 class="text-xl font-semibold text-gray-800">Menu Utama</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                            <i class="fa-solid fa-flask text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Penelitian</h3>
                            <p class="text-gray-500 text-sm">Kelola data penelitian Anda</p>
                            <a href="#" class="mt-2 inline-block text-indigo-600 font-medium hover:underline">Kelola</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-orange-100 text-orange-600 p-3 rounded-full">
                            <i class="fa-solid fa-hand-holding-heart text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Pengabdian</h3>
                            <p class="text-gray-500 text-sm">Kelola data pengabdian masyarakat</p>
                            <a href="#" class="mt-2 inline-block text-indigo-600 font-medium hover:underline">Kelola</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                            <i class="fa-solid fa-trophy text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Prestasi</h3>
                            <p class="text-gray-500 text-sm">Kelola data prestasi Anda</p>
                            <a href="#" class="mt-2 inline-block text-indigo-600 font-medium hover:underline">Kelola</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                            <i class="fa-solid fa-book text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Publikasi</h3>
                            <p class="text-gray-500 text-sm">Kelola data publikasi ilmiah</p>
                            <a href="#" class="mt-2 inline-block text-indigo-600 font-medium hover:underline">Kelola</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Terbaru</h2>
            <div class="bg-white p-6 rounded-xl shadow space-y-4">
                <div>
                    <p class="font-semibold text-gray-800">Penelitian AI dalam Pendidikan</p>
                    <p class="text-sm text-gray-500">Sedang Berjalan • 2024-01-15</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-800">Pelatihan Digital Marketing UMKM</p>
                    <p class="text-sm text-gray-500">Selesai • 2024-01-10</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-800">Publikasi di Jurnal Nasional</p>
                    <p class="text-sm text-gray-500">Selesai • 2023-12-20</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
