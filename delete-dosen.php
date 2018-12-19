<?php 
/*
@package : CRUD with Mysqli Connection
@author  : M. Aqomal Khaq feat Fika Ridaul Maulayya
@since   : 2016 modified in 2018/2019
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/

//include koneksi ke database
include_once('setting/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_dosen WHERE id_dosen = '$id'";

$result = mysqli_query($connection, $query);

if ($connection->query($query) === TRUE){
	echo "Delete record succesfully";
	echo "<br>";
	echo "<button><a href='index.php'>Kembali</a></button>";
}else{
	echo "Error: ". $query. "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</button>";
}

?>