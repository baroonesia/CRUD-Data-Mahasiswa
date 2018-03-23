  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data Mahasiswa
        </h4>
      </div>
      <?php
      $NIM = $_GET['id'];

      if (isset($NIM)) {
        require_once 'mahasiswa.php';
        $mahasiswa = new mahasiswa();
        $data = $mahasiswa->get_mahasiswa($NIM);

        $NIM           = $data['NIM'];
        $Nama          = $data['Nama'];
        $Password      = $data['Password'];
        $Kota          = $data['Kota'];
        $JK            = $data['JK'];
        $WN            = $data['WN'];
        $Keterangan    = $data['Keterangan'];
        $Status        = $data['Status'];
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NIM</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="NIM" value="<?php echo $NIM; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="Nama" autocomplete="off" value="<?php echo $Nama; ?>" required>
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
                  <option value="<?php echo $Kota; ?>"><?php echo $Kota; ?></option>
                  <option value="Surakarta"> Surakarta</option>
                  <option value="Karanganyar"> Karanganyar</option>
                  <option value="Boyolali"> Boyolali</option>
                  <option value="Sragen"> Sragen</option>
                  <option value="Klaten"> Klaten</option>
                  <option value="Sukoharjo"> Sukoharjo</option>
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
                <input type="textarea" class="form-control" name="Keterangan" value="<?php echo $Keterangan; ?>">
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
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->