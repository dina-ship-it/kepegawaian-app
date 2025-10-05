<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIP2D')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-indigo-600 shadow text-white">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="bg-white text-indigo-600 px-3 py-1 rounded-md font-bold">
                    <i class="fa-solid fa-book"></i>
                </div>
                <h1 class="text-xl font-semibold">SIP2D</h1>
            </div>
            <div class="flex items-center space-x-8 text-lg">
                <a href="/" class="hover:underline">Home</a>
                <a href="/mahasiswa/dashboard" class="hover:underline">Mahasiswa</a>
                <a href="/dosen" class="hover:underline">Dosen</a>
                <a href="/admin/dashboard" class="hover:underline">Admin</a>
                <button onclick="alert('Logout clicked!')" class="hover:underline">Logout</button>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="py-10 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-16 py-8 text-center text-gray-500 text-base">
        &copy; {{ date('Y') }} SIP2D | Sistem Informasi Penelitian & Pengabdian kepada Masyarakat
    </footer>

</body>
</html>
