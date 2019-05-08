<?php
// include database connection file
include("../../config/config.php");

// Check if form is submitted for user update, then redirect to homepage after update

    $no_meja=$_POST['no_meja'];
    $tanggal=$_POST['tanggal'];
    $id_user=$_POST['id_user'];
    $keterangan=$_POST['keterangan'];
    $status_order=$_POST['status_order'];

    // update user data
    $result = mysql_query("INSERT INTO masakan VALUES('','$no_meja','$tanggal','$id_user','$keterangan','$status_order')");

    // Redirect to homepage to display updated user in list
    if ($result) {
    	header("Location: ../../index.php?p=menu");
    }
    else{ 
    	echo "<script>alert('Data Gagal Tambahkan'); window.location ='../../index.php?p=tambahmenu'</script>";
    }
?>