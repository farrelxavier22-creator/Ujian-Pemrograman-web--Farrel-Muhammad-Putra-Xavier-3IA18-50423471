<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="p-6">

<div class="max-w-xl mx-auto card">

    <h2 class="text-2xl font-bold mb-4">Tambah Barang</h2>

    <form method="POST" class="space-y-3">

        <input type="text" name="nama_barang" class="input-box" placeholder="Nama Barang" required>

        <input type="text" name="kategori" class="input-box" placeholder="Kategori" required>

        <input type="number" name="jumlah" class="input-box" placeholder="Jumlah" required>

        <input type="number" name="harga" class="input-box" placeholder="Harga" required>

        <input type="date" name="tanggal_masuk" class="input-box" required>

        <button type="submit" class="btn btn-green w-full">Simpan</button>
    </form>

</div>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    mysqli_query($conn, "INSERT INTO barang (nama_barang, kategori, jumlah, harga, tanggal_masuk) 
    VALUES (
        '$_POST[nama_barang]',
        '$_POST[kategori]',
        '$_POST[jumlah]',
        '$_POST[harga]',
        '$_POST[tanggal_masuk]'
    )");

    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
}
?>