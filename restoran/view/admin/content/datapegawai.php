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
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Data Pegawai</li>
                        </ol>
                    </div>
                </div>

        <div class="row">
            <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-actions">
                                    <a href="index.php?p=tambahpegawai"><button type="submit" class="btn btn-success">Tambah Data</button><a>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode User</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama User</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                            include "config/config.php";
                                            $i=0;
                                            if(isset($_POST['button'])){
                                                $sql=mysql_query("SELECT * FROM user");
                                                }else{
                                                    $sql=mysql_query("SELECT * FROM user, level WHERE user.id_level=level.id_level");
                                                }while($data=mysql_fetch_array($sql)){
                                                    if($data['id_level'] != '5'){
                                                    $i++;
                                            ?>
                                                <tr>
                                                    <td>P00<?php echo $data['id_user']; ?></td>
                                                    <td><?php echo $data['username']; ?></td>
                                                    <td><?php echo $data['password']; ?></td>
                                                    <td><?php echo $data['nama_user']; ?></td>
                                                    <td><?php echo $data['nama_level']; ?></td>
                                                    <td><a href="<?php echo"index.php?p=edituser&id=$data[id_masakan]"?>"><button type="button" class="btn btn-warning btn-circle"><i class="mdi mdi-pencil"></i> </button></a>
                                                    <a href="<?php echo"function/admin/hapususer.php?id=$data[id_masakan]"?>"><button type="button" class="btn btn-success btn-circle"><i class="mdi mdi-delete"></i> </button></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                } 
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