<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Administrator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="d-flex vh-100 justify-content-center align-items-center bg-light">

  <div class="card p-4 shadow" style="width:400px; border-radius:15px;">
    <div class="text-center mb-3">
      <i class="bi bi-person-circle text-danger fs-1"></i>
      <h4 class="mt-2">Login Administrator</h4>
      <p class="text-muted">Masukkan akun untuk mengelola sistem</p>
    </div>

    <form method="POST" action="#">
      @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Nama Pengguna / Email *</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi *</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
      </div>
      <button type="submit" class="btn btn-danger w-100">Masuk sebagai Administrator</button>
      <div class="text-center mt-2">
        <a href="#">Lupa kata sandi? Reset di sini</a>
      </div>
    </form>
  </div>

</body>
</html>
