<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-sm">
        <div class="text-center mb-6">
            <i class="fa-solid fa-user-graduate text-green-600 text-5xl mb-4"></i>
            <h1 class="text-2xl font-bold text-gray-800">Student Login</h1>
        </div>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.mahasiswa.post') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-1">E-mail</label>
                <input type="email" name="email" required
                       class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                       placeholder="Masukkan email">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm mb-1">Password</label>
                <input type="password" name="password" required
                       class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                       placeholder="Masukkan password">
            </div>

            <button type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                Login
            </button>
        </form>
    </div>

</body>
</html>
