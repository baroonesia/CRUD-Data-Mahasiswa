<?php
        
class mahasiswa {

    //method view
    function view() {
        require_once "config/database.php";
        $db = new database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM data_mahasiswa ORDER BY NIM DESC";
        $result = $mysqli->query($sql);
           while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;}
        $mysqli->close();
        return $hasil;}

    //method insert
    function insert($NIM, $Nama, $hashPass, $Kota, $JK, $WN, $Keterangan, $GAMBAR, $Status) {
       require_once "config/database.php";
        $db = new database();
        $mysqli = $db->connect();
            $NIM          	= $mysqli->real_escape_string($NIM);
            $Nama         	= $mysqli->real_escape_string($Nama);
            $hashPass		= $mysqli->real_escape_string($hashPass);
    		$Kota         	= $mysqli->real_escape_string($Kota);
    		$JK         	= $mysqli->real_escape_string($JK);
    		$WN         	= $mysqli->real_escape_string($WN);
            $Keterangan     = $mysqli->real_escape_string($Keterangan);
    		$Status        	= $mysqli->real_escape_string($Status);
        $sql = "INSERT INTO data_mahasiswa (NIM,Nama,Password,Kota,JK,WN,Keterangan,Status) VALUES
			('$NIM','$Nama','$hashPass','$Kota','$JK','$WN','$Keterangan','$Status')";
        $result = $mysqli->query($sql);

        if($result){
            header("Location: index.php?alert=2");}
        else{
            header("Location: index.php?alert=1");}
        $mysqli->close();}

    //method untuk tampil data mahasiswa
    function get_mahasiswa($NIM) {
        require_once "config/database.php";
        $db     = new database();
        $mysqli = $db->connect();
        $sql    = "SELECT * FROM data_mahasiswa WHERE NIM='$NIM'";
        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();
        $mysqli ->close();
        return $data;}
    
    //method untuk update data
    function update($NIM,$Nama,$Password,$Kota,$JK,$WN,$Keterangan,$Status) {
        require_once "config/database.php";
        $db         = new database();
        $mysqli     = $db->connect();
        $NIM        = $mysqli->real_escape_string($NIM);
        $Nama       = $mysqli->real_escape_string($Nama);
        $Password   = $mysqli->real_escape_string($Password);
        $Keterangan = $mysqli->real_escape_string($Keterangan);
        $sql        = "UPDATE data_mahasiswa SET NIM='$NIM',Nama='$Nama',Password='$Password',Kota='$Kota',JK='$JK',WN='$WN',Keterangan='$Keterangan' WHERE NIM='$NIM'";
        $result = $mysqli->query($sql);
        
        if($result){
            header("Location: index.php?alert=3");}
        else{
            header("Location: index.php?alert=1");}
        $mysqli->close();}

    //method untuk menampilkan detail
    function detail ($NIM,$Nama,$Password,$Kota,$JK,$WN,$Keterangan,$Status) {
        require_once "config/database.php";
        $db = new database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM data_mahasiswa WHERE NIM='$_GET[NIM]'";
        $result = $mysqli->query($sql);
        $mysqli->close();}
    
    // Method untuk menghapus 
    function delete($NIM) {
        require_once "config/database.php";
        $db = new database();
        $mysqli = $db->connect();
        $sql = "DELETE FROM data_mahasiswa WHERE NIM = '$NIM'";
        $result = $mysqli->query($sql);
        if($result){
            header("Location: index.php?alert=4");}
        else{
            header("Location: index.php?alert=1");}
        $mysqli->close();}
    }
?>