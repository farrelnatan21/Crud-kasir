<?php
// include database connection file
include("../../config/config.php");

// Check if form is submitted for user update, then redirect to homepage after update
    $id_masakan = $_POST['id_masakan'];

    $nama_masakan=$_POST['nama_masakan'];
    $harga=$_POST['harga'];
    $status_masakan=$_POST['status_masakan'];

    // update user data
    $result = mysql_query("UPDATE masakan SET id_masakan='$id_masakan',nama_masakan='$nama_masakan',status_masakan='$status_masakan',harga='$harga' WHERE id_masakan=$id_masakan");

    // Redirect to homepage to display updated user in list
    if ($result) {
    	header("Location: ../../index.php?p=menu");
    }
    else{
    	echo "<script>alert('Data Gagal diedit'); window.location ='../../index.php?p=menu'</script>";
    }
?>