<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIP3D - Admin')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>
        body { font-family: 'Inter', sans-serif; }
        .nav-link { @apply hover:text-gray-200 transition-colors duration-200; }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- =============================== -->
    <!-- 🔵 NAVBAR -->
    <!-- =============================== -->
    <nav class="bg-indigo-600 text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-3 flex flex-wrap justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="bg-white text-indigo-600 px-3 py-1 rounded-md font-bold shadow-sm">
                    <i class="fa-solid fa-book"></i>
                </div>
                <h1 class="text-xl font-semibold tracking-wide">SIP3D</h1>
            </div>

            <!-- Menu -->
            <div class="flex flex-wrap items-center space-x-6 mt-3 md:mt-0 text-sm md:text-base">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
                <a href="{{ route('mahasiswa.dashboard') }}" class="nav-link">Mahasiswa</a>
                <a href="{{ route('dosen.dashboard') }}" class="nav-link">Dosen</a>
                <a href="{{ route('admin.dashboard') }}" class="nav-link">Admin</a>

                <!-- Logout -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="nav-link flex items-center space-x-1">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- =============================== -->
    <!-- 📄 KONTEN HALAMAN -->
    <!-- =============================== -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-6 py-10">
        <div class="bg-white shadow-md rounded-xl p-8">
            @yield('content')
        </div>
    </main>

    <!-- =============================== -->
    <!-- ⚙️ FOOTER -->
    <!-- =============================== -->
    <footer class="bg-white border-t mt-10 py-6 text-center text-gray-500 text-sm shadow-inner">
        &copy; {{ date('Y') }}
        <strong>SIP3D</strong> |
        Sistem Informasi Penelitian & Pengabdian kepada Masyarakat
    </footer>

</body>
</html>
