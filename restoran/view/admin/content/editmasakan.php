<?php
include'config/config.php';
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM masakan WHERE id_masakan=$id");

while($data = mysql_fetch_array($result))
{
    $id_masakan = $data['id_masakan'];
    $nama_masakan = $data['nama_masakan'];
    $harga = $data['harga'];
    $status_masakan = $data['status_masakan'];
}
?>
<div class="page-wrapper">
    <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Masakan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                            <li class="breadcrumb-item active">Edit Masakan</li>
                        </ol>
                    </div>
                </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="function/admin/editmasakan.php" method="POST">
                                    <div class="form-body">
                                        <h3 class="card-title">Edit</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Kode Masakan</label>
                                                    <input type="text" name="id_masakan" class="form-control" value="<?php echo $id_masakan;?>">
                                                </div>                                                    
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Masakan</label>
                                                    <input type="text" name="nama_masakan" class="form-control" value="<?php echo $nama_masakan;?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Harga</label>
                                                    <input type="text" name="harga" class="form-control" value="<?php echo $harga;?>">
                                                </div>                                                    
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status Masakan</label>
                                                    <select class="form-control custom-select" name="status_masakan" value="<?php echo $status_masakan;?>">
                                                        <option value="Tersedia">Tersedia</option>
                                                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>