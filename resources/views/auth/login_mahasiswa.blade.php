<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            padding: 40px 50px;
            width: 400px;
            text-align: center;
        }

        .login-card h2 {
            color: #1e40af;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .login-card p {
            font-size: 13px;
            color: #555;
            margin-bottom: 25px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            background-color: #2563eb;
            color: white;
            font-weight: 600;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #1d4ed8;
        }

        .footer-link {
            display: block;
            margin-top: 15px;
            font-size: 13px;
            color: #2563eb;
            text-decoration: none;
        }

        .footer-link:hover {
            text-decoration: underline;
        }

        .icon {
            font-size: 40px;
            color: #2563eb;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="icon">🎓</div>
        <h2>Login Mahasiswa</h2>
        <p>SIP2D - Sistem Informasi Pengabdian, Penelitian, dan Prestasi Dosen</p>

        <form method="POST" action="{{ route('login.mahasiswa.submit') }}">
            @csrf

            <div class="form-group">
                <label for="nim">Username / NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan username atau NIM" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn">Masuk sebagai Mahasiswa</button>
        </form>

        <a href="#" class="footer-link">Lupa password? Reset di sini</a>
    </div>

</body>
</html>
