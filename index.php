<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Mahasiswa</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/datepicker.min.css" rel="stylesheet">
    <link href="assets/js/dataTables/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <i class="glyphicon glyphicon-check"></i>
            Data Mahasiswa
          </a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <?php
      if (empty($_GET["page"])) {
        include "tampil-data.php";
      } elseif ($_GET['page'] == 'tambah') {
        include "form-tambah.php";
      } elseif ($_GET['page'] == 'ubah') {
        include "form-ubah.php";
      } elseif ($_GET['page'] == 'detail') {
        include "form-detail.php";
      } 
      ?>
    </div> <!-- /.container-fluid -->
    
    <footer class="footer">
      <div class="container-fluid">
        <p class="text-muted pull-left">&copy; 2018 Prima Ammaray Baroo</p>
        <p class="text-muted pull-right ">Theme by <a href="http://www.getbootstrap.com" target="_blank">Bootstrap</a></p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <!-- DataTables -->
    <script src="assets/js/dataTables/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/js/dataTables.bootstrap.js"></script>
  
  </body>
</html>