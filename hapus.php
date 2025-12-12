<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM barang WHERE id=$id");

echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
?>