<?php 
/*
@package : CRUD with Mysqli Connection
@author  : M. Aqomal Khaq feat Fika Ridaul Maulayya
@since   : 2016 modified in 2018/2019
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/

//include koneksi ke database
include_once('setting/koneksi.php');
 //deklarasi variable
$id = $_POST['id_dosen'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat']; 

$query = "UPDATE tbl_dosen SET nama = '$nama', email = '$email', alamat = '$alamat' WHERE id_dosen = '$id'";
if($connection->query($query)=== TRUE){
	echo "Update Record Succesfully";
	echo "<br>";
	echo "<button><a href='index.php'>Kembali</a></button>";
}else{
	echo "Error: " .$query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen </a></button>";
}

?>