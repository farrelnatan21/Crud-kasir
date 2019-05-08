<div class="page-wrapper">
    <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                            <li class="breadcrumb-item active">Tambah Order</li>
                        </ol>
                    </div>
                </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="function/admin/tambahorder.php" method="POST">
                                    <div class="form-body">
                                        <h3 class="card-title">Tambah</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No Meja</label>
                                                    <input type="text" name="no_meja" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Date</label>
		                                            <input class="form-control" type="date" name="tanggal" value="2011-08-19" id="example-date-input">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Pilih Menu</label><br>
		                                            <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
					                                    <optgroup label="Alaskan/Hawaiian Time Zone">
					                                        <option value="AK">Alaska</option>
					                                        <option value="HI">Hawaii</option>
					                                    </optgroup>
					                                    <optgroup label="Pacific Time Zone">
					                                        <option value="CA">California</option>
					                                        <option value="NV">Nevada</option>
					                                        <option value="OR">Oregon</option>
					                                        <option value="WA">Washington</option>
					                                    </optgroup>
					                                    <optgroup label="Mountain Time Zone">
					                                        <option value="AZ">Arizona</option>
					                                        <option value="CO">Colorado</option>
					                                        <option value="ID">Idaho</option>
					                                        <option value="MT">Montana</option>
					                                        <option value="NE">Nebraska</option>
					                                        <option value="NM">New Mexico</option>
					                                        <option value="ND">North Dakota</option>
					                                        <option value="UT">Utah</option>
					                                        <option value="WY">Wyoming</option>
					                                    </optgroup>
					                                    <optgroup label="Central Time Zone">
					                                        <option value="AL">Alabama</option>
					                                        <option value="AR">Arkansas</option>
					                                        <option value="IL">Illinois</option>
					                                        <option value="IA">Iowa</option>
					                                        <option value="KS">Kansas</option>
					                                        <option value="KY">Kentucky</option>
					                                        <option value="LA">Louisiana</option>
					                                        <option value="MN">Minnesota</option>
					                                        <option value="MS">Mississippi</option>
					                                        <option value="MO">Missouri</option>
					                                        <option value="OK">Oklahoma</option>
					                                        <option value="SD">South Dakota</option>
					                                        <option value="TX">Texas</option>
					                                        <option value="TN">Tennessee</option>
					                                        <option value="WI">Wisconsin</option>
					                                    </optgroup>
					                                    <optgroup label="Eastern Time Zone">
					                                        <option value="CT">Connecticut</option>
					                                        <option value="DE">Delaware</option>
					                                        <option value="FL">Florida</option>
					                                        <option value="GA">Georgia</option>
					                                        <option value="IN">Indiana</option>
					                                        <option value="ME">Maine</option>
					                                        <option value="MD">Maryland</option>
					                                        <option value="MA">Massachusetts</option>
					                                        <option value="MI">Michigan</option>
					                                        <option value="NH">New Hampshire</option>
					                                        <option value="NJ">New Jersey</option>
					                                        <option value="NY">New York</option>
					                                        <option value="NC">North Carolina</option>
					                                        <option value="OH">Ohio</option>
					                                        <option value="PA">Pennsylvania</option>
					                                        <option value="RI">Rhode Island</option>
					                                        <option value="SC">South Carolina</option>
					                                        <option value="VT">Vermont</option>
					                                        <option value="VA">Virginia</option>
					                                        <option value="WV">West Virginia</option>
					                                    </optgroup>
					                                </select>
		                                        </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">ID User</label>
                                                    <input type="text" name="id_user" class="form-control" >
                                                </div>                                                    
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control" >
                                                </div>                                                    
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status Order</label>
                                                    <select class="form-control custom-select" name="status_order">
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Tidak Aktif">Tidak Aktif</option>
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
