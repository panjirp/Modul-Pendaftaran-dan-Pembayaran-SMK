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

function pilihanfilter($val, $label, $sel) {
	$pc_val = explode("|", $val);
	$pc_lab = explode("|", $label);
	$j_opt  = count($pc_val);
	for ($i = 1; $i <= $j_opt; $i++) {
		$idx = $i-1;
		if ($pc_val[$idx] == $sel) {
			echo $sel;
			echo "<option value='?p=data_statistik&by=$pc_val[$idx]' selected>$pc_lab[$idx]</option>";	
		} else  {
			echo "<option value='?p=data_statistik&by=$pc_val[$idx]'>$pc_lab[$idx]</option>";
		}
	}
}

?>