<?php 
include 'koneksi.php';
// Menyimpan data kedalam variabel
$id_mhs = $_GET['id_mhs'];

// Query SQL untuk DELETE DATA
$query = "DELETE FROM mahasiswa WHERE id_mhs='$id_mhs' ";
mysqli_query($koneksi, $query);
// Mengalihkan ke halaman index.php
header("location:index1.php")
?>