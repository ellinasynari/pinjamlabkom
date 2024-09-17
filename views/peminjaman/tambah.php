
<h1>Form Peminjaman Lab</h1>
<form action="index.php?url=peminjaman/simpan" method="POST">
    <label>Nama Peminjam</label><br>
    <input type="text" name="nama_peminjam" required><br>
    <label>Email</label><br>
    <input type="email" name="email" required><br>
    <label>Ruang Lab</label><br>
    <input type="text" name="ruang_lab" required><br>
    <label>Tanggal Pinjam</label><br>
    <input type="date" name="tanggal_pinjam" required><br>
    <label>Waktu Mulai</label><br>
    <input type="time" name="waktu_mulai" required><br>
    <label>Waktu Selesai</label><br>
    <input type="time" name="waktu_selesai" required><br>
    <label>Jam Pelajaran</label><br>
    <input type="text" name="jam_pelajaran" required><br>
    <button type="submit">Simpan</button>
</form>
