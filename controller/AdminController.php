<?php
require_once 'models/AdminModel.php';

class AdminController {
    public function login() {
        include 'views/admin/login.php';
    }

    public function do_login() {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $model = new AdminModel();
        $admin = $model->checkLogin($username, $password);

        if ($admin) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: index.php?url=admin/dashboard');
        } else {
            header('Location: index.php?url=admin/login');
        }
    }

    public function dashboard() {
        $model = new PeminjamanModel();
        $peminjaman = $model->getAllPeminjaman();
        include 'views/admin/dashboard.php';
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?url=admin/login');
    }

    public function approve($id) {
        $model = new PeminjamanModel();
        if ($model->updateStatus($id, 'disetujui')) {
            echo "Status peminjaman berhasil diperbarui menjadi disetujui";
        } else {
            echo "Gagal memperbarui status peminjaman";
        }
        header('Location: index.php?url=admin/dashboard');
    }
    
    public function reject($id) {
        $model = new PeminjamanModel();
        if ($model->updateStatus($id, 'ditolak')) {
            echo "Status peminjaman berhasil diperbarui menjadi ditolak";
        } else {
            echo "Gagal memperbarui status peminjaman";
        }
        header('Location: index.php?url=admin/dashboard');
    }
}
?>
