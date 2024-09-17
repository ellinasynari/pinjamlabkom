
CREATE DATABASE IF NOT EXISTS db_labkom;

USE db_labkom;

CREATE TABLE `peminjaman` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_peminjam` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `ruang_lab` VARCHAR(255) NOT NULL,
  `tanggal_pinjam` DATE NOT NULL,
  `waktu_mulai` TIME NOT NULL,
  `waktu_selesai` TIME NOT NULL,
  `jam_pelajaran` VARCHAR(50) NOT NULL,
  `status` ENUM('pending', 'disetujui', 'ditolak') DEFAULT 'pending'
);

CREATE TABLE `admin` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL
);

-- Insert default admin
INSERT INTO `admin` (username, password) VALUES ('admin', MD5('password'));
