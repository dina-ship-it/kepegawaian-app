<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pilih Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light d-flex vh-100 justify-content-center align-items-center">

  <div class="container text-center">
    <h2 class="mb-3 fw-bold">SIP3D</h2>
    <p class="mb-4">Pilih jenis akun untuk masuk ke sistem</p>
    <div class="row justify-content-center">
      
      <!-- Administrator -->
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <i class="bi bi-person-circle text-danger fs-1"></i>
          <h5 class="mt-2">Administrator</h5>
          <p class="text-muted">Kelola seluruh data sistem dan pengguna</p>
          <a href="{{ route('login.admin') }}" class="btn btn-outline-danger">Pilih Administrator</a>
        </div>
      </div>

      <!-- Dosen -->
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <i class="bi bi-mortarboard text-primary fs-1"></i>
          <h5 class="mt-2">Dosen</h5>
          <p class="text-muted">Kelola penelitian, pengabdian, dan prestasi</p>
          <a href="{{ route('login.dosen') }}" class="btn btn-outline-primary">Pilih Dosen</a>
        </div>
      </div>

      <!-- Mahasiswa -->
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <i class="bi bi-book text-success fs-1"></i>
          <h5 class="mt-2">Mahasiswa</h5>
          <p class="text-muted">Lihat informasi penelitian dan pengabdian</p>
          <a href="{{ route('login.mahasiswa') }}" class="btn btn-outline-success">Pilih Mahasiswa</a>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
