<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIP2D - Admin')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Bootstrap Icons (optional) -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- =============================== -->
    <!-- 🔵 NAVBAR -->
    <!-- =============================== -->
    <nav class="bg-indigo-600 shadow text-white">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo & Judul -->
            <div class="flex items-center space-x-2">
                <div class="bg-white text-indigo-600 px-3 py-1 rounded-md font-bold">
                    <i class="fa-solid fa-book"></i>
                </div>
                <h1 class="text-xl font-semibold">SIP2D</h1>
            </div>

            <!-- Menu Navigasi -->
            <div class="flex items-center space-x-8 text-base">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ route('mahasiswa.dashboard') }}" class="hover:underline">Mahasiswa</a>
                <a href="{{ route('dosen.index') }}" class="hover:underline">Dosen</a>
                <a href="{{ route('admin.dashboard') }}" class="hover:underline">Admin</a>

                <!-- Tombol Logout -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- =============================== -->
    <!-- 📄 KONTEN HALAMAN -->
    <!-- =============================== -->
    <main class="py-10 px-6">
        @yield('content')
    </main>

    <!-- =============================== -->
    <!-- ⚙️ FOOTER -->
    <!-- =============================== -->
    <footer class="bg-white border-t mt-16 py-8 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }}
        <strong>SIP2D</strong> |
        Sistem Informasi Penelitian & Pengabdian kepada Masyarakat
    </footer>

</body>
</html>
