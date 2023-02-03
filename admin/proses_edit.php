<?php
include("koneksi.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$Id= $_POST['Id'];
	$Nama = $_POST['Nama'];
	$Email = $_POST['Email'];
	$Alamat = $_POST['Alamat'];
	$Tgl_lahir = $_POST['Tgl_lahir'];
	//buat query update
	$sql = "UPDATE admi SET Nama='$Nama',Email='$Email' , Alamat='$Alamat', Tanggal_lahir='$Tgl_lahir' WHERE Id='$Id'";
	$query = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	 //apakah query update berhasil
	 if ($query) { 
	 //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
	 header ('location:index.php?status=sukses');
	 }else{ header ('location:index.php?status=gagal'); 
	 //kalau gagal, alihkan  ke halaman index.php dengan status=gagal
	 
	 }
	 }
	?>