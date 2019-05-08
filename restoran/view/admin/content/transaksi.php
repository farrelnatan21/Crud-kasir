<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Transaksi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Transaksi</li>
                        </ol>
                    </div>
                </div>

        <div class="row">
            <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-actions">
                                    <a href="index.php?p=tambahtransaksi"><button type="submit" class="btn btn-success">Tambah Data</button><a>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode Transaksi</th>
                                                <th>Kode Order</th>
                                                <th>Nama User</th>
                                                <th>Tanggal</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                            include "config/config.php";
                                            $i=0;
                                            if(isset($_POST['button'])){
                                                $sql=mysql_query("SELECT * FROM transaksi");
                                                }else{
                                                    $sql=mysql_query("SELECT * FROM transaksi, user WHERE transaksi.id_user=user.id_user");
                                                }while($data=mysql_fetch_array($sql)){
                                                    $i++;
                                            ?>
                                                <tr>
                                                    <td>TRK00<?php echo $data['id_transaksi']; ?></td>
                                                    <td>ORD00<?php echo $data['id_order']; ?></td>
                                                    <td><?php echo $data['nama_user']; ?></td>
                                                    <td><?php echo $data['tanggal']; ?></td>
                                                    <td><?php echo $data['total_bayar']; ?></td>
                                                    <td><a href="<?php echo"index.php?p=detailorder&id=$data[id_order]"?>""><button type="button" class="btn btn-primary btn-circle"><i     class="fa fa-list"></i> </button></a>
                                                        <a href="<?php echo"index.php?p=editorder&id=$data[id_order]"?>"><button type="button" class="btn btn-warning btn-circle"><i class="mdi mdi-pencil"></i> </button></a>
                                                    <a href="<?php echo"function/admin/hapusorder.php?id=$data[id_order]"?>"><button type="button" class="btn btn-success btn-circle"><i class="mdi mdi-delete"></i> </button></a>
                                                    </td>
                                                </tr>
                                                <?php 
                                            }
                                        ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>