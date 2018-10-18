<?php

include "lib/fungsi.php";


$myquery="select * from students,bayar_lks where bayar_lks.nis=students.nis and kd_bayar='$_GET[id]'";	
$tampil = mysqli_query($con, $myquery);
$t=$tampil->fetch_array();

?>
<header><a href="home.php"><img src="images/header.png" width ="100%" height ="25%" ></a></header>
<hr>
	<body onload="print();">
<table border='0' width='100%' >
	
	<tr>
		<td>No Kwitansi</td>
		<td>: <?php $kw = $t['nis']."/LKS/".$t['kd_bayar']."/".date('m')."/".date('Y');
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
		<td>: Uang LKS</td>
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