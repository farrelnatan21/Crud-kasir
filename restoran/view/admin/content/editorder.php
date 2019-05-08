<?php
include'config/config.php';
$id_order = $_GET['id'];
$result = mysql_query("SELECT * FROM detail_order, tbl_order, masakan, user WHERE detail_order.id_order='$id_order'");
$data = mysql_fetch_array($result);

while($data = mysql_fetch_array($result))
{
    $nama_pemesan = $data['nama_user'];
    $id_masakan = $data['id_order'];
    $no_meja = $data['no_meja'];
    $tanggal = $data['tanggal'];
    $nama_masakan = $data['nama_masakan'];
    $keterangan = $data['keterangan'];
    $status_order = $data['status_order'];
}
?>
<div class="page-wrapper">
    <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                            <li class="breadcrumb-item active">Edit Order</li>
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
                                                    <label class="control-label">Kode Order</label>
                                                    <input type="text" name="id_order" class="form-control" value="<?php echo $id_order;?>">
                                                </div>                                                    
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nomor Meja</label>
                                                    <input type="text" name="no_meja" class="form-control" value="<?php echo $no_meja;?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Masakan</label>
                                                    <input type="text" name="nama_masakan" class="form-control" value="<?php echo $nama_masakan;?>">
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Keterangan</label>
                                                    <input type="text" name="Keterangan" class="form-control" value="<?php echo $keterangan;?>">
                                                </div>                                                    
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