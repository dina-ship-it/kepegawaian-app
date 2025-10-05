<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP2D</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    {{-- 🌐 Navbar --}}
    <nav class="bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center text-white">
            <div class="flex items-center space-x-2">
                <span class="text-2xl">📘</span>
                <h1 class="text-lg font-bold">SIP2D</h1>
            </div>
            <div class="space-x-6">
                <a href="/" class="hover:underline">Home</a>
                <a href="/mahasiswa" class="hover:underline">Mahasiswa</a>
                <a href="/dosen" class="hover:underline">Dosen</a>
                <a href="/admin/dashboard" class="hover:underline">Admin</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:underline">Logout</a>
                <form id="logout-form" action="#" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    {{-- 🧩 Konten Halaman --}}
    <main class="py-8">
        <div class="max-w-6xl mx-auto px-4">
            @yield('content')
        </div>
    </main>

    {{-- ⚙️ Footer --}}
    <footer class="bg-white shadow-inner mt-10 py-4 text-center text-gray-600">
        <p>&copy; {{ date('Y') }} SIP2D | Sistem Informasi Penelitian & Pengabdian</p>
    </footer>

</body>
</html>
