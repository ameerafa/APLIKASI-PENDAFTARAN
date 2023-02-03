<?php include('koneksi.php');?>
<html>
<head><title>formulir</title></head>
<center><h2>Data Anggota </h2></center>
<link rel ="stylesheet" type = "text/css"href="style.css">
<body>

	<header><h2><Daftar Siswa></h2></header>
		<center><nav><a href="formulir.php"><button>Tambah baru</button>
		</a></nav></center>
		<br>
<table border ="1" callpedding ="8" aligen="center" bgcolor="white">
	<thread>
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Tgl_lahir</th>
			<th>Tindakan</th>
		</tr>
	</thread>
	<body>
		<?php
		$sql = "SELECT * FROM admi";
		$query = mysqli_query($koneksi, $sql);
		while($admi = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$admi['Id']."</td>";
			echo "<td>".$admi['Nama']."</td>";
			echo "<td>".$admi['Email']."</td>";
			echo "<td>".$admi['Alamat']."</td>";
			echo "<td>".$admi['Tgl_lahir']."</td>";
			echo "<td>";
			echo "<a href='formulir.php?Id=".$admi['Id']."'>Edit</a> | ";
			echo "<a href='hapus.php?Id=".$admi['Id']."'>Hapus</a> | ";
		}
	?>
</body>
</table>
<p>Total:
	<?php echo mysqli_num_rows($query) ?>
	<br>
	<center><nav><a href="/prakerin/index.php"><button>Logout</button>
	</a></nav></center>
</p>
</body>
</html>