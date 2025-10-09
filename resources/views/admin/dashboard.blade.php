<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP2D - Dashboard Administrator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }

        .dashboard-header {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .card-stat {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .card-stat:hover {
            transform: translateY(-3px);
        }

        .card-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 8px 15px;
        }

        .logout-btn:hover {
            background-color: #bb2d3b;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px 25px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            border-radius: 0 0 12px 12px;
        }

        .main-content {
            padding: 40px;
        }

        .btn-manage {
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="header-top">
        <h4 class="m-0 fw-bold">SIP2D - Dashboard Administrator</h4>
        <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button type="submit" class="logout-btn"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
    </div>

    <div class="main-content">
        <div class="dashboard-header">Administrator Dashboard</div>

        <!-- Statistik -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card card-stat text-center p-3">
                    <i class="bi bi-person card-icon text-primary"></i>
                    <h3>45</h3>
                    <p>Total Dosen</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat text-center p-3">
                    <i class="bi bi-mortarboard card-icon text-success"></i>
                    <h3>1250</h3>
                    <p>Total Mahasiswa</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat text-center p-3">
                    <i class="bi bi-beaker card-icon text-purple"></i>
                    <h3>78</h3>
                    <p>Total Penelitian</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat text-center p-3">
                    <i class="bi bi-building card-icon text-warning"></i>
                    <h3>32</h3>
                    <p>Total Pengabdian</p>
                </div>
            </div>
        </div>

        <!-- Menu Kelola -->
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <i class="bi bi-person fs-1 text-primary"></i>
                    <h5>Kelola Dosen</h5>
                    <p>Tambah, edit, dan hapus data dosen</p>
                    <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary btn-manage">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <i class="bi bi-mortarboard fs-1 text-success"></i>
                    <h5>Kelola Mahasiswa</h5>
                    <p>Tambah, edit, dan hapus data mahasiswa</p>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-success btn-manage">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <i class="bi bi-beaker fs-1 text-purple"></i>
                    <h5>Kelola Penelitian</h5>
                    <p>Monitor dan kelola data penelitian</p>
                    <a href="{{ route('penelitian.index') }}" class="btn btn-outline-dark btn-manage">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <i class="bi bi-building fs-1 text-warning"></i>
                    <h5>Kelola Pengabdian</h5>
                    <p>Monitor dan kelola data pengabdian</p>
                    <a href="{{ route('pengabdian.index') }}" class="btn btn-outline-warning btn-manage">Kelola</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <i class="bi bi-trophy fs-1 text-danger"></i>
                    <h5>Kelola Prestasi</h5>
                    <p>Monitor dan kelola data prestasi</p>
                    <a href="{{ route('prestasi.index') }}" class="btn btn-outline-danger btn-manage">Kelola</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
