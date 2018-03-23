  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Detail Mahasiswa
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
        $Status        = $data['Status'];}
      ?>

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal">
            <div class="form-group">
            <div class="form-group">
              <label class="col-sm-2 control-label">NIM</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" value="<?php echo $NIM; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" value="<?php echo $Nama; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kota</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" value="<?php echo $Kota; ?>" readonly>
              </div>
            </div>
            
             <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" value="<?php echo $JK; ?>" readonly>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Warga Negara</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" value="<?php echo $WN; ?>" readonly>
                </div>
            </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">Keterangan</label>
              <div class="col-sm-3">
               <input type="text" class="form-control" value="<?php echo $Keterangan; ?>" readonly>
              </div>
            </div>

            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="Button" class="btn btn-success btn-print" name="cetak" value="Cetak" onclick="window.print()">
                <a href="index.php" class="btn btn-default btn-home">Home</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>