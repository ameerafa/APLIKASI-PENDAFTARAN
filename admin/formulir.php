<?php
include("koneksi.php");
if (isset($_GET['Id'])){
	$title = "Edit";
	$url ='proses_edit.php';
	$Id = $_GET['Id'];
	//buat query untuk ambil data dari database
	$sql = "SELECT * FROM admi WHERE  Id= $Id";
	$query = mysqli_query ($koneksi,$sql);
	$admi = mysqli_fetch_assoc($query);
	//jika data yang diedit tidak ditemukan 
	if (mysqli_num_rows($query) < 1){
		die("data tidak ditemukan ...");
	}
	//url jika edit data
	}else {
		$title ="Add";
		//url jika tambah data
		$url ='proses_pendaftaran.php';
}
?>
<html>
<head><title></title></head>
<body>
	<header><h3></h3></header>
	<form action="proses_pendaftaran.php" method="POST">
		<fieldset>
			<legend><h2>From Pendaftaran</h2></legend>
			<div>
				<label for="Id">Id: </label><br>
				<input type="text" name="Id" value="<?php if(isset ($_GET['Id']))
				{echo $admi ['Id'];}?>"/>
				</div>
			<div>
			<label for='Nama'>Nama:</label><br>
			<input type="text" name="Nama" value=" <?php if (isset ($_GET['Id']))
				{echo $admi ['Nama'];} ?> "/>
			</div>
			<div>
				<label for = 'Alamat'> Alamat :</label><br>
				<textarea name = "Alamat" row = "5"> <?php if (isset ($_GET['Id']))
				{echo $admi ['Alamat'];} ?> </textarea>
			</div>
			<div>
				<label for ='Email'>Email :</label><br>
				<input type="text" name="Email" value=" <?php if (isset ($_GET['Id']))
				{ echo  $admi ['Email'];} ?> "/>
			</div>
			<div>
				<label for='Tgl_lahir'>Tanggal lahir:</label><br>
				<input type="date" name="Tgl_lahir" value=" <?php if (isset ($_GET['Id'])){
					echo  $admi ['Tgl_lahir'];} ?> "/>
			</div>
			<hr>
			<div>
				<input type="submit" value="Simpan" name="simpan"/>
			</div>
		</fieldset>
</form>
</body>
</html>