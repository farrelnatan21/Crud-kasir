<?php
	include "../config/config.php";
// Fungsi SQL Injection
	function antiinjection($data){
	 $filter_sql =
	mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars
	($data,ENT_QUOTES))));
	 return $filter_sql;
	}
	$username = antiinjection($_POST['username']);
	$password = antiinjection($_POST['password']);
	$sql="SELECT * FROM user WHERE username='$username' AND password='$password' ";
	$tampil=mysql_query($sql);
	$jumlah=mysql_num_rows($tampil);
	$data=mysql_fetch_array($tampil);
	if ($jumlah > 0){
	 session_start();
	// Inisialisasi data pada session
	$_SESSION[username] = $data['username'];
	$_SESSION[nama_user] = $data['nama_user'];
	$_SESSION[password] = $data['password'];
	$_SESSION[id_level] = $data['id_level'];
	header('location:../index.php');
	}
	// Apabila login gagal
	else{
	 echo "<script>alert('Login Gagal, nik atau password tidak cocok'); window.location = '../index.php'</script>";
	}
?>