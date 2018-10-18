<?php

include "lib/fungsi.php";

if(isset($_POST['simpan'])or die (mysqli_error($con)));
$nis=$_POST['nis'];
$name=$_POST['name'];
$tgl_bayar=$_POST['tgl_bayar'];
$ujian=$_POST['ujian'];
$ujiancb=$_POST['ujiancb'];
$spp=$_POST['spp'];
$sppcb=$_POST['sppcb'];
$lks=$_POST['lks'];
$pkl=$_POST['pkl'];
$bulanspp=$_POST['bulanspp'];


$statuslks = mysqli_query($con, "SELECT nis, name, sum(bayar) as bayar, jumlah FROM bayar_lks join t_lks where nis = $nis");
$sbayar=$statuslks->fetch_array();
$statuspkl = mysqli_query($con, "SELECT nis, name, sum(bayar) as bayar, bayar_pkl FROM bayar_pkl join t_pkl where nis = $nis");
$sbayarpkl=$statuspkl->fetch_array();
$statusujian = mysqli_query($con, "SELECT nis, name, sum(bayar) as bayar FROM bayar_ujian where nis = $nis");
$sbayarujian=$statusujian->fetch_array();
$statusujian2 = mysqli_query($con, "SELECT sum(jumlah) as jumlah FROM t_ujian");
$sbayarujian2=$statusujian2->fetch_array();
$statusspp = mysqli_query($con, "SELECT nis, name, sum(bayar) as bayar, jumlah FROM bayar_spp join t_spp where nis = $nis and bayar_spp.id_spp=t_spp.id_spp"); 
$sbayarspp=$statusspp->fetch_array();
$sbayarspp2=$sbayarspp['jumlah'] * 12;

if ($sbayar['bayar'] == $sbayar['jumlah'] && $sbayarpkl['bayar'] == $sbayarpkl['bayar_pkl'] && $sbayarujian['bayar'] == $sbayarujian2['jumlah'] && $sbayarspp['bayar'] == $sbayarspp2) {
	$statuspembayaran = mysqli_query($con, "UPDATE students SET id_status_pembayaran='1' where nis='$nis'");
}else{
	$statuspembayaran = mysqli_query($con, "UPDATE students SET id_status_pembayaran='2' where nis='$nis'");
}


$query1 = "INSERT INTO bayar_spp(nis,name,id_spp,bayar,bulan_bayar,tgl_bayar) VALUES ('$nis', '$name', '$sppcb','$spp','$bulanspp', '$tgl_bayar')";
$query2 = "INSERT INTO bayar_ujian(nis,name,id_ujian,bayar,tgl_bayar) VALUES ('$nis', '$name', '$ujiancb','$ujian', '$tgl_bayar')";
$query3 = "INSERT INTO bayar_lks(nis,name,kd_lks,bayar,tgl_bayar) VALUES ('$nis', '$name', '1', '$lks', '$tgl_bayar')";
$query4 = "INSERT INTO bayar_pkl(nis,name,kd_pkl,bayar,tgl_bayar) VALUES ('$nis', '$name','1','$pkl', '$tgl_bayar')";

if($spp<>NULL){mysqli_query($con, $query1) or die (mysqli_error($con));}
if($ujian<>NULL){mysqli_query($con, $query2) or die (mysqli_error($con));}
if($lks<>NULL){mysqli_query($con, $query3) or die (mysqli_error($con));}
if($pkl<>NULL){mysqli_query($con, $query4) or die (mysqli_error($con));}

?>

<script>
document.location="tabelbayar.php?nis=<?php echo $nis;?>"</script>
