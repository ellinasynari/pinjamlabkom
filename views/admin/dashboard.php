<h1>Dashboard Admin</h1>
<a href="index.php?url=admin/logout">Logout</a>
<table border="1">
    <tr>
        <th>Nama Peminjam</th>
        <th>Email</th>
        <th>Ruang Lab</th>
        <th>Tanggal Pinjam</th>
        <th>Jam Pelajaran</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($peminjaman as $pinjam): ?>
        <tr>
            <td><?php echo $pinjam['nama_peminjam']; ?></td>
            <td><?php echo $pinjam['email']; ?></td>
            <td><?php echo $pinjam['ruang_lab']; ?></td>
            <td><?php echo $pinjam['tanggal_pinjam']; ?></td>
            <td><?php echo $pinjam['jam_pelajaran']; ?></td>
            <td><?php echo $pinjam['status']; ?></td>
            <td>
                <?php if ($pinjam['status'] == 'pending'): ?>
                    <a href="index.php?url=admin/approve/<?php echo $pinjam['id']; ?>">Setujui</a> |
                    <a href="index.php?url=admin/reject/<?php echo $pinjam['id']; ?>">Tolak</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
