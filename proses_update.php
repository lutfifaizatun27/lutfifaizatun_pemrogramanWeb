<?php
include 'koneksi.php';

	$nim = $_POST['nim'];
	$nama_lengkap = $_POST['nama'];
	$telepon = $_POST['telp'];
	$email = $_POST['email'];
	$jurusan = $_POST['jurusan'];

	mysqli_query($conn, "UPDATE mahasiswa SET nama_lengkap = '$nama_lengkap',
			telepon = '$telepon',email = '$email',jurusan = '$jurusan'WHERE nim = '$nim' ");

		header("location:index.php");
		
	?>