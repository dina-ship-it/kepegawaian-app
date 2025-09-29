<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/">SIP2D</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="/dosen">Dosen</a></li>
        <li class="nav-item"><a class="nav-link" href="/mahasiswa">Mahasiswa</a></li>
        <li class="nav-item"><a class="nav-link" href="/penelitian">Penelitian</a></li>
        <li class="nav-item"><a class="nav-link" href="/pengabdian">Pengabdian</a></li>
        <li class="nav-item"><a class="nav-link" href="/pengajuan">Pengajuan</a></li>
        <li class="nav-item"><a class="nav-link" href="/prestasi">Prestasi</a></li>
        <li class="nav-item"><a class="nav-link" href="/admin">Admin</a></li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-light btn-sm">Administrator ▼</button>
      </div>
    </div>
  </div>
</nav>
