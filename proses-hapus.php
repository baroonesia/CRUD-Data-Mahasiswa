<?php
require_once 'mahasiswa.php';

if (isset($_GET['id'])) {
    $mahasiswa = new mahasiswa();

	$NIM = $_GET['id'];
    $mahasiswa->delete($NIM);
}					
?>
