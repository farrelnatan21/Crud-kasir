<div class="page-wrapper">
    <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Transaksi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah</a></li>
                            <li class="breadcrumb-item active">Tambah Trasaksi</li>
                        </ol>
                    </div>
                </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="function/admin/tambahtraksaksi.php" method="POST">
                                    <div class="form-body">
                                        <h3 class="card-title">Tambah</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Kode Transaksi</label>
                                                    <input type="text" name="id_transaksi" class="form-control">
                                                </div>                                                    
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">kode order</label>
                                                    <input type="text" name="id_traksaksi" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">nama user</label>
                                                    <input type="text" name="nama_user" class="form-control">
                                                </div>                                                    
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama User</label>
                                                    <input type="text" name="nama_user" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                        <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Tanggal</label>
		                                            <input class="form-control" type="date" name="tanggal" value="2011-08-19" id="example-date-input">
		                                        </div>
		                                    </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total Bayar</label>
                                                    <input type="text" name="total_bayar" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>