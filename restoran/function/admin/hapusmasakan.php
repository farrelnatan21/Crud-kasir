<?php
include "../../config/config.php";
$result= mysql_query("DELETE FROM masakan WHERE id_masakan =
'$_GET[id]'");

 if ($result) {
    	echo "<script>alert('Data Berhasil Dihapus'); window.location ='../../index.php?p=menu'</script>";
    }
    else{
    	echo "<script>alert('Data Gagal Dihapus'); window.location ='../../index.php?p=menu'</script>";
    }
?>