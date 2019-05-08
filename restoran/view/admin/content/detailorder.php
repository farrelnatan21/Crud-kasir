<?php
include'config/config.php';
$id_order = $_GET['id'];
$result = mysql_query("SELECT * FROM detail_order, tbl_order, masakan, user WHERE detail_order.id_order='$id_order'");
$data = mysql_fetch_array($result);
?>
<div class="page-wrapper">
    <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Detail Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Rincian Order</h4>
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td class="font-medium"><?php echo $data['nama_user']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Order</td>
                                        <td class="font-medium">ORD00<?php echo $data['id_order']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Meja</td>
                                        <td class="font-medium"><?php echo $data['no_meja']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Memesan</td>
                                        <td class="font-medium"><?php echo $data['tanggal']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pesanan</td>
                                        <td class="font-medium"><?php echo $data['nama_masakan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td class="font-medium"><?php echo $data['keterangan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status Order</td>
                                        <td class="font-medium"><?php echo $data['status_order']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>