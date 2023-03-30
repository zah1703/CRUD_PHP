<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NRP = $_POST['NRP'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Jurusan = $_POST['Jurusan'];
$Email = $_POST['Email_Student'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$Asal_SMA = $_POST['Asal_SMA'];
$Matkul_Favorit = $_POST['Matkul_Favorit'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values(NULL,'$NRP','$Nama','$Jenis_Kelamin','$Jurusan','$Email_Student','$Alamat','$No_Hp','$Asal_SMA','$Matkul_Favorit')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>