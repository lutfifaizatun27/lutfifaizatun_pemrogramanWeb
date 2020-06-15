<html>
<head>
	<title>Halaman Edit Data Mahasiswa</title>
</head>
<body bgcolor="#66CDAA">
	<h2 align="center">Edit Data Mahasiswa</h2>
	<a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none">Data Mahasiswa</a><br><br>
	<form action="proses_update.php" method="POST">
	<?php
		include 'koneksi.php';
		$nim = $_GET['nim'];
		$data_edit = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = '$nim' ");
		while($nim = mysqli_fetch_array($data_edit)) { ?>
	
		<table align="center">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $nim['nim'] ?>" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $nim['nama_lengkap'] ?>" required></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="text" name="telp" value="<?php echo $nim['telepon'] ?>" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" value="<?php echo $nim['email'] ?>" required></td>
			</tr> 
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
				<select name="jurusan">
					<option value="<?php echo $nim['jurusan'] ?>"><?php echo $nim['jurusan'] ?></option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Teknik Informasi">Teknik Informasi</option>
					<option value="Ekonomi">Ekonomi</option>
					<option value="Hukum">Hukum</option>
				</select>
				</td>	
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="edit"></td>
			</tr>
		</table>
		
	</form>	
	<?php }?>
</body>
</html>