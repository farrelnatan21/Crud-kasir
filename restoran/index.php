<?php
	session_start();
		if (empty($_SESSION['username']) AND
			empty($_SESSION['password'])){
		 	header('location:login.php');
			}
			else{
				if ($_SESSION['id_level']=='1'){
					include 'view/admin/head.php';
					include 'view/admin/container.php';
					include 'view/admin/footer.php';
				}else{
				if ($_SESSION['id_level']=='2'){
					include 'view/waiter/head.php';
				    include 'view/waiter/container.php';
				    include '/view/waiter/footer.php';
				}
				else if ($_SESSION['id_level']=='3'){
					include 'view/kasir/head.php';
				    include 'view/kasir/container.php';
				    include 'view/kasir/footer.php';
				}
				else if ($_SESSION['id_level']=='4'){
					include 'view/owner/head.php';
				    include 'view/owner/container.php';
				    include 'view/owner/footer.php';
				}
				else if ($_SESSION['id_level']=='5'){
					include 'view/pelanggan/head.php';
				    include 'view/pelanggan/container.php';
				    include 'view/pelanggan/footer.php';
				}
				else { echo "Anda bukan Administraor"; }
			}
		}
?>