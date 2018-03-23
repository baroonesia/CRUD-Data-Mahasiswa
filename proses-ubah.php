<?php
require_once 'mahasiswa.php';
    
if (isset($_POST['simpan'])) {
	if (isset($_POST['NIM'])) {

    	$mahasiswa = new mahasiswa();
    	
    $NIM           	= $_POST['NIM'];
	$Nama          	= $_POST['Nama'];
	$Password		= $_POST['Password'];
	$Kota			= $_POST['Kota'];
	$JK				= $_POST['JK'];
	$WN				= $_POST['WN'];
	$Keterangan		= $_POST['Keterangan'];
	$Status			= $_POST['Status'];
		
		$mahasiswa->update($NIM,$Nama,$Password,$Kota,$JK,$WN,$Keterangan,$Status);		
	}
}					
?>