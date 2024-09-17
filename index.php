<?php
// Include necessary files and route to the correct controller based on URL
require_once 'controllers/PeminjamanController.php';
require_once 'controllers/AdminController.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'peminjaman/index';
$url = rtrim($url, '/');
$url = explode('/', $url);

// Routing logic
if ($url[0] == 'admin') {
    $controller = new AdminController();
    if (isset($url[1])) {
        $method = $url[1];
        if (isset($url[2])) {
            $controller->$method($url[2]); // Pass the ID to the method
        } else {
            $controller->$method();
        }
    } else {
        $controller->login();
    }
} else {
    $controller = new PeminjamanController();
    if (isset($url[1])) {
        $method = $url[1];
        $controller->$method();
    } else {
        $controller->index();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labkom Peminjaman</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn-block {
            margin-bottom: 10px;
        }
        table {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Sistem Peminjaman Labkom</h1>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4 mb-3">
                <a href="index.php?url=peminjaman/cek_ketersediaan" class="btn btn-primary btn-lg w-100">Cek Ketersediaan Labkom</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="index.php?url=peminjaman/tambah" class="btn btn-success btn-lg w-100">Tambah Peminjaman Lab</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="index.php?url=admin/login" class="btn btn-warning btn-lg w-100">Login Admin</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>Daftar Peminjaman Lab</h2>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Peminjam</th>
                            <th>Email</th>
                            <th>Ruang Lab</th>
                            <th>Tanggal Pinjam</th>
                            <th>Jam Pelajaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test</td>
                            <td>ellinasynari@gmail.com</td>
                            <td>LAB A</td>
                            <td>2024-09-18</td>
                            <td>1 dan 2</td>
                            <td>ditolak</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
