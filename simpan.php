<?php 
include 'koneksi.php';
// Menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query SQL untuk INSERT DATA
$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat' ";
mysqli_query($koneksi, $query);
// Mengalihkan ke halaman index.php
header("location:index1.php")
?>