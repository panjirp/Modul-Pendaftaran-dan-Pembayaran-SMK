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
	$nis=isset($_GET['nis']) ? $_GET['nis'] : "";	
	$qrykoreksi=mysqli_query($con, "select * from students where nis='$nis' LIMIT 1");
	$dataku=mysqli_fetch_object($qrykoreksi);	







$bulan_aktif = date('m');
					
if ($bulan_aktif=='01'){
$bulan ="Januari";
}else if($bulan_aktif=='02'){
$bulan = "Februari";
}else if($bulan_aktif=='03'){
$bulan = "Maret";
}else if($bulan_aktif=='04'){
$bulan = "April";
}else if($bulan_aktif=='05'){
$bulan = "Mei";
}else if($bulan_aktif=='06'){
$bulan = "Juni";
}else if($bulan_aktif=='07'){
$bulan = "Juli";
}else if($bulan_aktif=='08'){
$bulan = "Agustus";
}else if($bulan_aktif=='09'){
$bulan = "September";
}else if($bulan_aktif=='10'){
$bulan = "Oktober";
}else if($bulan_aktif=='11'){
$bulan = "November";
}else if($bulan_aktif=='12'){
$bulan = "Desember";
}

?>
