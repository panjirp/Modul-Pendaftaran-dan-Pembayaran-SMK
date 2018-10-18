<?php

include "lib/fungsi.php";

$tampil = mysqli_query($con, 'select * from students,bayar_spp where bayar_spp.nis=students.nis and kd_bayar='.$_GET['id'].'');
$t = $tampil->fetch_array();
$tampil2 = mysqli_query($con, "select *, jumlah from t_spp, bayar_spp where t_spp.id_spp=bayar_spp.id_spp and kd_bayar='$_GET[id]'");
$t2 = $tampil2->fetch_array();
?>
<header><a href="home.php"><img src="images/header.png" width ="100%" height ="25%" ></a></header>
<hr>
	<body onload="print();">
<table border='0' width='100%' >
	
	<tr>
		<td>No Kwitansi</td>
		<td>: <?php $kw = $t['nis']."/".$t2['spp']."/".$t['kd_bayar']."/".date('m')."/".date('Y');
		echo $kw;
		?></td>
		<td></td>
	</tr>
	<tr>
		<td>Sudah Terima Dari</td>
		<td>: <?php echo $t['name']." / ".$t['nis'].' / '.$t['grade'];?></td>
		<td></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>: <?php echo date('d/m/Y',strtotime($t['tgl_bayar'])); ?></td>
		<td></td>
	</tr>
	<tr>
		<td>Untuk Pembayaran </td>
		<td>: Uang <?php echo $t2['spp'] ?></td>
		<td></td>
	</tr>
	
		<td><b>Sebesar</b></td>
		<td>: Rp.<?php echo $t['bayar'];?>,-</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><pre>
		Petugas Administrasi
		
		
		
		
		
		
		
		(	           )</pre>
		</td>
	</tr>
</table>