
<?php
require_once 'mahasiswa.php';

if (isset($_POST['simpan'])) {
    $mahasiswa = new mahasiswa();

    $NIM           	= $_POST['NIM'];
	$Nama          	= $_POST['Nama'];
	$Password		= $_POST['Password'];
	$hashPass 		= md5($Password);	
	$Kota			=$_POST['Kota'];
	$JK				=$_POST['JK'];
	$WN				=$_POST['WN'];
	$Keterangan		=$_POST['Keterangan'];
	$Status			=$_POST['Status'];

    $mahasiswa->insert($NIM,$Nama,$hashPass,$Kota,$JK,$WN,$Keterangan,$Status);
}			
?>