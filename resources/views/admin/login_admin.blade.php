<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator - SIP3D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9f0ff;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-card {
            width: 400px;
            border-radius: 20px;
        }
        .login-icon {
            background-color: #e3f0ff;
            color: #0d6efd;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: 0 auto 15px;
        }
        .btn-login {
            background-color: #0d6efd;
            border: none;
            font-weight: 600;
        }
        .btn-login:hover {
            background-color: #0045cc;
        }
        .form-label span {
            color: red;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-lg p-4 login-card">
        <div class="text-center">
            <div class="login-icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <h4 class="fw-bold">Login Administrator</h4>
            <p class="text-muted" style="font-size: 14px;">
                SIP3D - Sistem Informasi Pengabdian, Penelitian, dan Prestasi Dosen
            </p>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger mt-2">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.admin.post') }}" method="POST" class="mt-3">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Username <span>*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="admin" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password <span>*</span></label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
    </div>

    <button type="submit" class="btn btn-login text-white w-100 py-2">
        Masuk sebagai Administrator
    </button>

    <div class="text-center mt-3">
        <a href="#" class="text-decoration-none small">Lupa password? <b>Reset di sini</b></a>
    </div>

    <div class="text-center mt-2">
        <a href="{{ route('login.pilih') }}" class="text-decoration-none small">← Kembali ke Pilihan Login</a>
    </div>
</form>
