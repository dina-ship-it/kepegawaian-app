<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIP2D</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  {{-- Navbar global --}}
  @include('layouts.navbar')

  <div class="container mt-4">
    {{-- Konten halaman masing-masing --}}
    @yield('content')
  </div>

  {{-- Script Bootstrap agar komponen JS bisa jalan --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
