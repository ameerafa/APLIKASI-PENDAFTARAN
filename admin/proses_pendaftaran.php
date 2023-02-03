<?php
include ("koneksi.php");
//cek apakah tombol simpan sudah diklk atau belum
if($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form 
	$Id = $_GET['Id'];
	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$Email = $_POST['Email'];
	$Tgl_lahir = date("Y-m-d");
	//buat query
	$sql = "INSERT INTO admi (Id ,Nama ,Alamat ,Email,Tgl_lahir)
	value('$Id','$Nama','$Alamat','$Email','$Tgl_lahir')";
	$query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah query update berhasil
	if ($query) {
		//kalau berhasil,alihkan ke halaman index.php dengan status = sukses
		header('location: index.php?status=sukses'); 
	} else{
		//kalau gagal,alihkan ke halam index.php dengan status = gagal
		header('location: index.php?status=gagal');
	}
}else{
	die("Akses dilarang...");
}
?>