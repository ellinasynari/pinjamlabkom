<?php
require_once 'config/database.php';

class PeminjamanModel {
    public function getAllPeminjaman() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM peminjaman');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertPeminjaman($data) {
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO peminjaman (nama_peminjam, email, ruang_lab, tanggal_pinjam, waktu_mulai, waktu_selesai, jam_pelajaran, status) 
                               VALUES (:nama_peminjam, :email, :ruang_lab, :tanggal_pinjam, :waktu_mulai, :waktu_selesai, :jam_pelajaran, :status)');
        return $stmt->execute($data);
    }
}
?>
