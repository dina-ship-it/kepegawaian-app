<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP2D - Dashboard Administrator</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" 
        rel="stylesheet">

    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 700;
        }

        .dashboard-header {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .card-stat {
            border: none;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 3px 8px rgba(0,0,0,0.05);
            padding: 25px;
            text-align: center;
            transition: 0.3s ease;
        }

        .card-stat:hover {
            transform: translateY(-5px);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            margin: 0 auto 10px auto;
        }

        .icon-blue { background-color: #0d6efd; }
        .icon-green { background-color: #198754; }
        .icon-purple { background-color: #6f42c1; }
        .icon-orange { background-color: #fd7e14; }
        .icon-yellow { background-color: #ffc107; color: #000; }
        .icon-cyan { background-color: #0dcaf0; color: #000; }

        .card-manage {
            border: none;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 3px 8px rgba(0,0,0,0.05);
            padding: 25px;
            transition: 0.3s ease;
        }

        .card-manage:hover {
            transform: translateY(-5px);
        }

        .btn-outline-primary {
            border-radius: 10px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIP2D - Dashboard Administrator</a>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-circle fs-5 me-2"></i>
                <span>Administrator</span>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <div class="dashboard-header">Dashboard Administrator</div>

        <!-- Statistik -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card-stat">
                    <div class="icon-box icon-blue"><i class="bi bi-person"></i></div>
                    <h4>45</h4>
                    <p>Total Dosen</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-stat">
                    <div class="icon-box icon-green"><i class="bi bi-mortarboard"></i></div>
                    <h4>1250</h4>
                    <p>Total Mahasiswa</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-stat">
                    <div class="icon-box icon-purple"><i class="bi bi-beaker"></i></div>
                    <h4>78</h4>
                    <p>Total Penelitian</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-stat">
                    <div class="icon-box icon-orange"><i class="bi bi-building"></i></div>
                    <h4>32</h4>
                    <p>Total Pengabdian</p>
                </div>
            </div>
        </div>

        <!-- Kelola -->
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card-manage">
                    <div class="icon-box icon-blue"><i class="bi bi-person"></i></div>
                    <h5>Kelola Dosen</h5>
                    <p>Tambah, edit, dan hapus data dosen</p>
                    <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-manage">
                    <div class="icon-box icon-green"><i class="bi bi-mortarboard"></i></div>
                    <h5>Kelola Mahasiswa</h5>
                    <p>Tambah, edit, dan hapus data mahasiswa</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-manage">
                    <div class="icon-box icon-purple"><i class="bi bi-beaker"></i></div>
                    <h5>Kelola Penelitian</h5>
                    <p>Monitor dan kelola data penelitian</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-manage">
                    <div class="icon-box icon-orange"><i class="bi bi-building"></i></div>
                    <h5>Kelola Pengabdian</h5>
                    <p>Monitor dan kelola data pengabdian</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-manage">
                    <div class="icon-box icon-yellow"><i class="bi bi-trophy"></i></div>
                    <h5>Kelola Prestasi</h5>
                    <p>Monitor dan kelola data prestasi</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-manage">
                    <div class="icon-box icon-cyan"><i class="bi bi-bar-chart"></i></div>
                    <h5>Laporan</h5>
                    <p>Generate laporan sistem</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Kelola</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>
