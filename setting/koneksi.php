<?php 
/*
@package : CRUD with Mysqli Connection
@author  : M. Aqomal Khaq feat Fika Ridaul Maulayya
@since   : 2016 modified in 2018/2019
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/
// membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_dosen2";
//create variable connection
$connection = mysqli_connect($hostname, $username, $password, $database);
 //chekcking connection
if(!$connection)
{
	echo "Failed to Connect MySQLi".
	mysqli_connect_error();
} 

?>
