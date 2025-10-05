<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP2D</title>

    <!-- ✅ Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ Font Awesome (versi lengkap) -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    {{-- 🌐 Navbar --}}
    <nav class="bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md text-white">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <!-- Logo -->
                <div class="bg-white text-purple-600 font-bold px-2 py-1 rounded-md">
                    <i class="fa-solid fa-book"></i>
                </div>
                <h1 class="text-lg font-bold">SIP2D</h1>
            </div>

            <!-- Menu -->
            <div class="space-x-6 text-sm font-medium">
                <a href="/" class="hover:underline">Home</a>
                <a href="/mahasiswa" class="hover:underline">Mahasiswa</a>
                <a href="{{ route('dosen.index') }}" class="hover:underline">Dosen</a>
                <a href="/admin/dashboard" class="hover:underline">Admin</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:underline">Logout</a>
                <form id="logout-form" action="#" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    {{-- 🧩 Konten Halaman --}}
    <main class="max-w-7xl mx-auto px-6 py-8">
        @yield('content')
    </main>

    {{-- ⚙️ Footer --}}
    <footer class="bg-white shadow-inner mt-10 py-6 text-center text-gray-600 text-sm">
        <p>&copy; {{ date('Y') }} SIP2D | Sistem Informasi Penelitian & Pengabdian kepada Masyarakat</p>
        <p class="mt-1"><i class="fa-solid fa-graduation-cap text-indigo-500"></i> Dikembangkan oleh Tim IT</p>
    </footer>

</body>
</html>
