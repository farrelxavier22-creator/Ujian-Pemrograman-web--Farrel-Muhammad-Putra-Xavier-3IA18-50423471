<?php include 'config.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
$row = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="p-6">

<div class="max-w-xl mx-auto card">

    <h2 class="text-2xl font-bold mb-4">Edit Barang</h2>

    <form method="POST" class="space-y-3">

        <input value="<?= $row['nama_barang'] ?>" type="text" name="nama_barang" class="input-box" required>

        <input value="<?= $row['kategori'] ?>" type="text" name="kategori" class="input-box" required>

        <input value="<?= $row['jumlah'] ?>" type="number" name="jumlah" class="input-box" required>

        <input value="<?= $row['harga'] ?>" type="number" name="harga" class="input-box" required>

        <input value="<?= $row['tanggal_masuk'] ?>" type="date" name="tanggal_masuk" class="input-box" required>

        <button type="submit" class="btn btn-yellow w-full">Update</button>
    </form>

</div>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    mysqli_query($conn, "UPDATE barang SET
        nama_barang='$_POST[nama_barang]',
        kategori='$_POST[kategori]',
        jumlah='$_POST[jumlah]',
        harga='$_POST[harga]',
        tanggal_masuk='$_POST[tanggal_masuk]'
        WHERE id=$id
    ");

    echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
}
?>