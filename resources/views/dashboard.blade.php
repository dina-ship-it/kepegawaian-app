@extends('layouts.app')

@section('judul','Dashboard')

@section('konten')
  <!-- Bagian Atas -->
  <section class="bg-gradient-to-r from-blue-600 to-blue-400 py-10 text-center text-white">
    <h1 class="text-3xl md:text-4xl font-bold">
      Sistem Informasi Pengabdian, Penelitian, dan Prestasi Dosen
    </h1>
    <p class="mt-2">Platform terintegrasi untuk mengelola aktivitas akademik</p>
  </section>

  <!-- Ringkasan -->
  <div class="max-w-7xl mx-auto px-4 -mt-8 grid grid-cols-1 md:grid-cols-5 gap-4">
    <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg transition">
      <div class="text-blue-600 text-3xl">👤</div>
      <h3 class="text-gray-500">Total Dosen</h3>
      <p class="text-xl font-bold">4</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg transition">
      <div class="text-green-600 text-3xl">🎓</div>
      <h3 class="text-gray-500">Mahasiswa Terlibat</h3>
      <p class="text-xl font-bold">4</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg transition">
      <div class="text-purple-600 text-3xl">📑</div>
      <h3 class="text-gray-500">Penelitian Aktif</h3>
      <p class="text-xl font-bold">4</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg transition">
      <div class="text-orange-600 text-3xl">📚</div>
      <h3 class="text-gray-500">Program Pengabdian</h3>
      <p class="text-xl font-bold">4</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg transition">
      <div class="text-yellow-500 text-3xl">🏆</div>
      <h3 class="text-gray-500">Prestasi Diraih</h3>
      <p class="text-xl font-bold">5</p>
    </div>
  </div>

  <!-- Konten Utama -->
  <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="md:col-span-2">
      <h2 class="text-xl font-semibold mb-4">Aktivitas Terbaru</h2>
      <div class="bg-white shadow rounded-lg p-4 mb-4 hover:shadow-md transition">
        <h3 class="font-bold text-blue-700">Penelitian Baru: Sistem Informasi Akademik Cloud</h3>
        <p>Dr. Ahmad memulai penelitian pengembangan sistem informasi akademik berbasis cloud</p>
        <span class="text-sm text-gray-500">15/1/2024</span>
      </div>
      <div class="bg-white shadow rounded-lg p-4 mb-4 hover:shadow-md transition">
        <h3 class="font-bold text-blue-700">Workshop Pemrograman untuk Siswa SMA</h3>
        <p>Program pelatihan pemrograman web untuk 45 siswa SMA di Jakarta Selatan telah dimulai</p>
        <span class="text-sm text-gray-500">10/1/2024</span>
      </div>
      <div class="bg-white shadow rounded-lg p-4 hover:shadow-md transition">
        <h3 class="font-bold text-blue-700">Penghargaan Internasional IEEE</h3>
        <p>Dr. Ahmad meraih Best Paper Award di International Conference on Software Engineering</p>
        <span class="text-sm text-gray-500">5/1/2024</span>
      </div>
    </div>

    <div>
      <h2 class="text-xl font-semibold mb-4">Aksi Cepat</h2>
      <div class="bg-white shadow rounded-lg p-4 space-y-3">
        <a href="#" class="block p-3 bg-purple-50 rounded hover:bg-purple-100">Buat Pengajuan</a>
        <a href="#" class="block p-3 bg-green-50 rounded hover:bg-green-100">Lihat Profil Dosen</a>
        <a href="#" class="block p-3 bg-purple-50 rounded hover:bg-purple-100">Penelitian Terbaru</a>
        <a href="#" class="block p-3 bg-yellow-50 rounded hover:bg-yellow-100">Prestasi Terbaru</a>
      </div>
    </div>
  </div>
@endsection
