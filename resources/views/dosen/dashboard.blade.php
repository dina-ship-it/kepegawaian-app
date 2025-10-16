<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP2D - Dashboard Administrator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fc;
        }
        .card {
            border-radius: 16px;
            transition: all 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }
        h3.fw-bold {
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container py-5">

        <!-- Header -->
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-1">SIP2D - Dashboard Administrator</h3>
            <p class="text-muted">Monitor dan kelola seluruh data dosen, mahasiswa, penelitian, pengabdian, dan prestasi</p>
        </div>

        <!-- Statistik -->
        <div class="row g-4 mb-5 text-center">
            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 p-4">
                    <i class="bi bi-person fs-2 text-primary mb-2"></i>
                    <h4 class="fw-bold mb-0">45</h4>
                    <small class="text-muted">Total Dosen</small>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 p-4">
                    <i class="bi bi-mortarboard fs-2 text-success mb-2"></i>
                    <h4 class="fw-bold mb-0">1250</h4>
                    <small class="text-muted">Total Mahasiswa</small>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 p-4">
                    <i class="bi bi-journal-text fs-2 text-info mb-2"></i>
                    <h4 class="fw-bold mb-0">78</h4>
                    <small class="text-muted">Total Penelitian</small>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 p-4">
                    <i class="bi bi-building fs-2 text-warning mb-2"></i>
                    <h4 class="fw-bold mb-0">32</h4>
                    <small class="text-muted">Total Pengabdian</small>
                </div>
            </div>
        </div>

        <!-- Menu Kelola -->
        <h5 class="fw-bold mb-4">Kelola Data</h5>
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm border-0 p-4 h-100">
                    <i class="bi bi-person text-primary fs-2 mb-2"></i>
                    <h6 class="fw-semibold mb-1">Kelola Dosen</h6>
                    <small class="text-muted d-block mb-3">Tambah, edit, dan hapus data dosen</small>
                    <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm border-0 p-4 h-100">
                    <i class="bi bi-mortarboard text-success fs-2 mb-2"></i>
                    <h6 class="fw-semibold mb-1">Kelola Mahasiswa</h6>
                    <small class="text-muted d-block mb-3">Tambah, edit, dan hapus data mahasiswa</small>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-success btn-sm">Kelola</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm border-0 p-4 h-100">
                    <i class="bi bi-journal-text text-info fs-2 mb-2"></i>
                    <h6 class="fw-semibold mb-1">Kelola Penelitian</h6>
                    <small class="text-muted d-block mb-3">Monitor dan kelola data penelitian</small>
                    <a href="{{ route('penelitian.index') }}" class="btn btn-outline-info btn-sm">Kelola</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm border-0 p-4 h-100">
                    <i class="bi bi-building text-warning fs-2 mb-2"></i>
                    <h6 class="fw-semibold mb-1">Kelola Pengabdian</h6>
                    <small class="text-muted d-block mb-3">Monitor dan kelola data pengabdian</small>
                    <a href="{{ route('pengabdian.index') }}" class="btn btn-outline-warning btn-sm">Kelola</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm border-0 p-4 h-100">
                    <i class="bi bi-trophy text-danger fs-2 mb-2"></i>
                    <h6 class="fw-semibold mb-1">Kelola Prestasi</h6>
                    <small class="text-muted d-block mb-3">Monitor dan kelola data prestasi</small>
                    <a href="{{ route('prestasi.index') }}" class="btn btn-outline-danger btn-sm">Kelola</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
