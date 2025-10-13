@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col items-center py-10">

    {{-- Judul --}}
    <div class="text-center mt-10 mb-6">
        <h2 class="text-xl font-semibold text-gray-800">SIP2D - Dashboard Mahasiswa</h2>
        <p class="text-gray-500 mt-1">
            Upload dokumentasi foto dan video kegiatan penelitian serta pengabdian masyarakat
        </p>
    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl mb-10">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col items-center">
            <div class="bg-green-100 text-green-600 p-4 rounded-full mb-3">
                <i class="fas fa-image text-2xl"></i>
            </div>
            <h3 class="text-3xl font-bold">0</h3>
            <p class="text-gray-500">Foto Dokumentasi</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col items-center">
            <div class="bg-purple-100 text-purple-600 p-4 rounded-full mb-3">
                <i class="fas fa-video text-2xl"></i>
            </div>
            <h3 class="text-3xl font-bold">0</h3>
            <p class="text-gray-500">Video Dokumentasi</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col items-center">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-3">
                <i class="fas fa-file-alt text-2xl"></i>
            </div>
            <h3 class="text-3xl font-bold">0</h3>
            <p class="text-gray-500">Total Dokumentasi</p>
        </div>
    </div>

    {{-- Upload Form --}}
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 w-full max-w-md text-center">
        <div class="text-blue-600 mb-4">
            <i class="fas fa-cloud-upload-alt text-4xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Upload Dokumentasi</h3>
        <p class="text-gray-500 text-sm mb-6">
            Upload foto dan video dokumentasi kegiatan penelitian dan pengabdian masyarakat
        </p>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="judul" placeholder="Masukkan judul dokumentasi"
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="file" name="file"
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                Upload Sekarang
            </button>
        </form>

        {{-- Tombol Google Drive --}}
        <div class="mt-6">
            <a href="https://drive.google.com" target="_blank"
                class="flex justify-center items-center space-x-3 border border-gray-300 py-2 rounded-lg hover:bg-gray-100 transition">
                {{-- Logo "G" berwarna Google --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-6 h-6">
                    <path fill="#EA4335"
                        d="M24 9.5c3.9 0 7 1.6 9.2 3.8l6.8-6.8C35.5 2.6 30.2 0 24 0 14.6 0 6.7 5.4 2.6 13.2l7.9 6.1C12.2 13.1 17.5 9.5 24 9.5z" />
                    <path fill="#34A853"
                        d="M46.1 24.5c0-1.6-.1-3.2-.4-4.7H24v9h12.5c-.6 3.1-2.4 5.7-5 7.5l7.7 6c4.5-4.2 7.1-10.4 7.1-17.8z" />
                    <path fill="#FBBC05"
                        d="M10.5 28.7c-.5-1.4-.8-2.9-.8-4.5s.3-3.1.8-4.5l-7.9-6.1C1 17.2 0 20.5 0 24s1 6.8 2.6 10.4l7.9-5.7z" />
                    <path fill="#4285F4"
                        d="M24 48c6.2 0 11.5-2 15.3-5.5l-7.7-6c-2.1 1.4-4.8 2.2-7.6 2.2-6.5 0-11.8-4.4-13.8-10.4l-7.9 6.1C6.7 42.6 14.6 48 24 48z" />
                </svg>
                <span class="font-semibold text-gray-700">Buka Google Drive</span>
            </a>
        </div>
    </div>
</div>
@endsection
