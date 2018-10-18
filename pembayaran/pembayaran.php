<?php

$p_spp		= isset($_POST['spp']) ? $_POST['spp'] : "";	
$p_ujian		= isset($_POST['ujian']) ? $_POST['ujian'] : "";	
$p_lks		= isset($_POST['lks']) ? $_POST['lks'] : "";	
$p_pkl		= isset($_POST['pkl']) ? $_POST['pkl'] : "";	
$p_ujiancb		= isset($_POST['ujiancb']) ? $_POST['ujiancb'] : "";	
$p_sppcb		= isset($_POST['sppcb']) ? $_POST['sppcb'] : "";	
$no='';
$na='';
$status = mysqli_query($con, "SELECT detail from ref_status_pembayaran join students where nis=$_GET[nis] and students.id_status_pembayaran=ref_status_pembayaran.id_status_pembayaran");
$sbayar=$status->fetch_array();
?>
<form action="kirim.php" method="post" enctype="multipart/form-data" name="Fbayar">
<article class="module width_full" >
<header><h3>FORM PEMBAYARAN</h3></header>
	<div class="module_content">

	
	
<table>
					<tr><th align="left">Nama</th>
					<td>:<?php echo $dataku->name?></td></tr>
					<tr><th align="left">NIS</th>
					<td>:<?php echo $dataku->nis?></td></tr>
					<tr><th align="left">Kelas</th>
					<td>:<?php echo $dataku->grade?></td></tr>
					<tr><th align="left">Tanggal Bayar</th>
					<td>:<?php echo date('j - ')."$bulan - ".date('Y');?> <input  type='hidden' name='tgl_bayar' id='tgl_bayar' value='<?php echo date('Y-m-d');?>' > </td></tr>
					<tr><th align="left">Status Pembayaran</th>
					<td>:<?php echo $sbayar['detail'];?></td></tr>
					
</table>
</div>
</article>
<br>
<article class="module width_full" >
<header><h3>PEMBAYARAN SPP</h3></header>
	<div class="module_content">
<table class="tbl_form">
					<tr>
					<td> Jenis SPP </td>
					<td><select name='sppcb' style='width:235px'><option value=''>--</option>
					<?php $q = mysqli_query($con, "SELECT spp FROM t_spp ORDER BY id_spp ASC");
	while ($a = $q->fetch_array()) { ?>
	<option value=<?php echo $no=$no+1; ?>><?php echo  $a['spp'];?></option><?php }?></select></td>
					
					</tr>
					<tr>
					<td> Untuk Bulan </td>
					<td><select name='bulanspp' style='width:235px'><option value=''>--</option><option value='Januari'>Januari</option><option value='Februari'>Februari</option>
					<option value='Maret'>Maret</option><option value='April'>April</option><option value='Mei'>Mei</option><option value='Juni'>Juni</option><option value='Juli'>Juli</option>
					<option value='Agustus'>Agustus</option><option value='September'>September</option><option value='Oktober'>Oktober</option><option value='November'>November</option>
					<option value='Desember'>Desember</option></select></td>
					</tr>
					<tr>
					<td width='20%'>jumlah</td>
					<td colspan='3'><input type='text' name='spp' size='28' value='' class='required'></td>
					</tr>
					
				
</table>
</div>
</article>
<br>
<article class="module width_full" >
<header><h3>PEMBAYARAN UJIAN</h3></header>
	<div class="module_content">
<table class="tbl_form">
					
					<tr>
					<td> Jenis Ujian </td>
					
					<td><select name='ujiancb' style='width:235px'><option value=''>--</option>
					<?php $q = mysqli_query($con, "SELECT ujian FROM t_ujian ORDER BY id_ujian ASC");
	while ($a = $q->fetch_array()) { ?>
	<option value=<?php echo $na=$na+1;?>><?php echo  $a['ujian'];?></option><?php }?></select></td>
					</tr>
					<tr>
					 <td width='20%'>jumlah</td>
					<td colspan='3'><input type='text' name='ujian' size='28' value='' class='required'></td>
					</tr>
					
				
</table>
</div>
</article>
<br>
<article class="module width_full" >
<header><h3>PEMBAYARAN LAIN</h3></header>
	<div class="module_content">
<table class="tbl_form">
<tr>
<td><input name="name" type="hidden" id="name" size="10" maxlength="10" value="<?php echo $dataku->name?>" readonly=""></td>
<td><input name="nis" type="hidden" id="nis" size="10" maxlength="10" value="<?php echo $dataku->nis?>" readonly=""></td>
<td><input  type='hidden' name='tgl_bayar' id='tgl_bayar' value='<?php echo date('Y-m-d');?>' > </td>
<td><input type='hidden' name='bulan_bayar' id='bulan_bayar' value='<?php echo $bulan; ?>' ></td></tr>
<td width='20%'>LKS</td>
					<td colspan='3'><input type='text' name='lks' size='28' value='' class='required'></td>
<td><?php
$myquery="select students.nis, sum(bayar)as lks from bayar_lks, students where bayar_lks.nis = students.nis and students.nis = '$_GET[nis]'";
	$daftarstudents=mysqli_query($con, $myquery) or die (mysqli_error($con));
	$data=$daftarstudents->fetch_array();
	$sql="select jumlah from t_lks";
	$hasil=mysqli_query($con, $sql); 
	$row=$hasil->fetch_array();
	$lks=$row['jumlah'];
	$k1 = $lks - $data['lks'];
if($data['lks']<$row['jumlah']){echo "<font size='2' color='red' ><i>LKS belum lunas, Sisa Rp : $k1  </font> | <font size='2'>Rp : $lks</font>";}else{echo "<font color='red' size='2'><i>lunas</font>";}?></td>

</tr>
<tr>
<td width='20%'>PKL</td>
					<td colspan='3'><input type='text' name='pkl' size='28' value='' class='required'></td>
<td><?php
$myquerypkl="select students.nis, sum(bayar)as pkl from bayar_pkl, students where bayar_pkl.nis = students.nis and students.nis = '$_GET[nis]'";
	$daftarstudentspkl=mysqli_query($con, $myquerypkl) or die (mysqli_error($con));
	$datapkl=$daftarstudentspkl->fetch_array();
$pkl="select bayar_pkl from t_pkl";
	$hasilpkl=mysqli_query($con,$pkl); 
	$rows=$hasilpkl->fetch_array();
	$pkl=$rows['bayar_pkl'];
	$k2 = $pkl - $datapkl['pkl'];
if($datapkl['pkl']<$rows['bayar_pkl']){echo "<font size='2' color='red' ><i>PKL belum lunas, Sisa Rp : $k2  </font> | <font size='2'>Rp : $pkl</font>";}else{echo "<font color='red' size='2'><i>lunas</font>";}?></td>
</tr>
 </table>

</div>
</article>
<br>
<article class="module width_full">
	<header><h3>Konfirmasi Data Pembayaran</h3></header>
	<div class="module_content">
	<table class="tbl_form"><tr><td>
	<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Data Sudah Benar ?");
 if (tanya == true) return true;
 else return false;
 }</script>
	Dengan ini saya menyatakan bahwa, Data yang saya isikan di Formulir 
	ini adalah Benar adanya sesuai dengan bukti-bukti yang ada<br><br>
	<center><input id="kursor" name="simpan" onclick="return konfirmasi()" type="submit" value="Simpan"></center>
	</td></tr></table>
	</form>
	</div>
</article>
	</form>
	
