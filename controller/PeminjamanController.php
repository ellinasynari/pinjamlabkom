<?php
require_once 'models/PeminjamanModel.php';

class PeminjamanController {
    public function index() {
        $model = new PeminjamanModel();
        $peminjaman = $model->getAllPeminjaman();
        include 'views/peminjaman/index.php';
    }

    public function tambah() {
        include 'views/peminjaman/tambah.php';
    }

    public function cek_ketersediaan() {
        include 'views/peminjaman/cek_ketersediaan.php';
    }

    public function simpan() {
        $data = [
            'nama_peminjam' => $_POST['nama_peminjam'],
            'email' => $_POST['email'],
            'ruang_lab' => $_POST['ruang_lab'],
            'tanggal_pinjam' => $_POST['tanggal_pinjam'],
            'waktu_mulai' => $_POST['waktu_mulai'],
            'waktu_selesai' => $_POST['waktu_selesai'],
            'jam_pelajaran' => $_POST['jam_pelajaran'],
            'status' => 'pending',
        ];
        $model = new PeminjamanModel();
        $model->insertPeminjaman($data);
        header('Location: index.php?url=peminjaman/index');
    }
}
?>
