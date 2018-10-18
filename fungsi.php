<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "smk";

$con=mysqli_connect("localhost","root","",$dbName) or die (mysqli_error());

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

if($con){
	//pilih database
	mysqli_select_db($con, $dbName);
} else {
	echo "Database tidak terkoneksi";
}


?>
