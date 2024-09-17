
<h1 class="text-center">Cek Ketersediaan Labkom</h1>
<form action="index.php?url=peminjaman/cek_ketersediaan" method="POST" class="form-group">
    <label for="tanggal">Tanggal Pinjam</label>
    <input type="date" name="tanggal" class="form-control mb-3" required>

    <label for="jam_pelajaran">Jam Pelajaran</label>
    <select name="jam_pelajaran" class="form-control mb-3" required>
        <option value="">Pilih Jam Pelajaran</option>
        <option value="Jam Pelajaran 1">Jam Pelajaran 1 (07:00 - 07:45)</option>
        <option value="Jam Pelajaran 2">Jam Pelajaran 2 (07:45 - 08:30)</option>
        <option value="Jam Pelajaran 3">Jam Pelajaran 3 (08:30 - 09:15)</option>
        <!-- Add more options as needed -->
    </select>

    <button type="submit" class="btn btn-primary">Cek Ketersediaan</button>
</form>

<?php if (isset($message)): ?>
    <div class="alert alert-info mt-3">
        <?php echo $message; ?>
    </div>
<?php endif; ?>
