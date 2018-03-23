  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data Mahasiswa
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NIM</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="NIM" maxlength="8" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="Nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" name="Password" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kota</label>
              <div class="col-sm-3">
                <select class="form-control" name="Kota" placeholder="Pilih Kota" required>
					<option value="Surakarta"> Surakarta</option>
					<option value="Karanganyar"> Karanganyar</option>
					<option value="Boyolali"> Boyolali</option>
					<option value="Sragen"> Sragen</option>
					<option value="Klaten"> Klaten</option>
					<option value="Sukoharjo" selected> Sukoharjo</option>
                </select>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="JK" value="Laki-laki"> Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="JK" value="Perempuan" checked> Perempuan
                </label>
              </div>
            </div>
			
			 <div class="form-group">
              <label class="col-sm-2 control-label">Warga Negara</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="WN" value="WNI" checked> WNI
                </label>
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Keterangan</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="Keterangan" rows="3"></textarea>
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <div class="col-sm-4">
                <label class="">
                  <input type="hidden" name="Status" value="Aktif" checked>Aktif
                </label>
              </div>
            </div>
                
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> 