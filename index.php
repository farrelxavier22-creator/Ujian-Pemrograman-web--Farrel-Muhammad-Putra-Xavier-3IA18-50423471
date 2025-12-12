<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="p-6">

<div class="max-w-4xl mx-auto card">

    <h1 class="text-3xl font-bold mb-4">Daftar Inventory Barang</h1>

    <a href="tambah.php" class="btn btn-blue">Tambah Barang</a>

    <table class="table-default mt-4">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM barang ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td>Rp <?= number_format($row['harga']) ?></td>
            <td><?= $row['tanggal_masuk'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-yellow">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>