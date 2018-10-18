<?php
$id_ujian	= isset($_GET['id']) ? $_GET['id'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_spp = mysqli_query($con, "DELETE FROM bayar_ujian WHERE kd_bayar = '$id_ujian'");
			if ($q_delete_spp) {
				echo "<h4 class='alert_success'>Data berhasil dihapuskan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		}

		
?>  
  <article class="module width_full" >
<header><h3>DATA PEMBAYARAN UJIAN</h3></header>
	<div class="module_content">
				
  
  
  <table border='1' class='data'>
<tr id='tengah'>
	<th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
				  <?php 
				  $no='';
				  		$myquerya="select * from students where nis='$_GET[nis]'";
				  $daftarstudentsa=mysqli_query($con, $myquerya) or die (mysqli_error($con));
	while($dataku=$daftarstudentsa->fetch_array())
	{
?>
    <tr id='tengah'>
    <td><div align="center"><?php echo $no=$no+1; ?></td>
    <td><?php echo  $dataku['nis']?></td>
    <td><?php echo  $dataku['name']?></td>
    <td align="center"><?php echo  $dataku['grade']?></td>
	</tr>
				<?php } ?>
				  </table>
  <br><br>				  
				 
<table border='1' class='data'>
<tr>
	<th><div align="center">No</div></th>
		  <th><div align="center">UAS</div></th>
        <th><div align="center">Tanggal Bayar</div></th>
		<th><div align="center">Control</div></th>
</tr>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>
<?php 
$N='';
				  $myquery2="select * from bayar_ujian where id_ujian='2' and nis='$_GET[nis]'";
				  $daftarstudents2=mysqli_query($con, $myquery2) or die (mysqli_error($con));
				 while( $rows=$daftarstudents2->fetch_array() ) {
?>    

<tr>
    <td><div align="center"><div align="center"><?php echo $N=$N+1; ?></td>
	<td><?php echo  $rows[4]?></td> 
	<td><?php echo  $rows[5]?></td>
	<td align="center"><a href="?nis=<?php echo $nis;?>&mod=del&id=<?php echo $rows[0] ?>" onclick="return konfirmasi()">Delete</a> |<a onclick="openInNewTab('cetakujian.php?id=<?php echo $rows[0];?>')" href="javascript:void(0);" style="text-decoration:none">Cetak Kwintasi</a></td>
</tr>
				 <?php }

				
?>
    <tr id='tengah'>
	<td></td>
	<td><b>
	<?php
$myqueryujian="select students.nis, count(tgl_bayar) as tgl, sum(bayar)as b from bayar_ujian, students where bayar_ujian.id_ujian='2' and bayar_ujian.nis = students.nis and students.nis = '$_GET[nis]'";
	$daftarstudentsujian=mysqli_query($con, $myqueryujian) or die (mysqli_error($con));
	$dataujian=$daftarstudentsujian->fetch_array();
$ujian="select jumlah from t_ujian where ujian='UAS'";
	$hasilujian=mysqli_query($con, $ujian); 
	$rows=$hasilujian->fetch_array();
	$ujian=$rows['jumlah'];
	$k2 = $ujian - $dataujian['b'];
if($dataujian['b']<$rows['jumlah'])
{echo "<font size='2' color='red' ><i> Sisa : $k2  </font> <br> <font color='blue' size='2'> Total <font size='2'>$ujian</font>"; ?> <br><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"> <?php 
}
else{echo "<font color='red' size='2'><i>lunas</font>";}?>
	</td>

       <td><?php echo$dataujian['tgl']?> Kali Bayar</td>
	   <td></td>
  </tr>
  </tr>
		</table>
	
		

<br><br>


				  <table border='1' class='data'>
<tr id='tengah'>
	<th>No</th>
		  <th>UTS</th>
        <th>Tanggal Bayar</th>
		<th>Control</th>
</tr>

<?php 
$M='';	
				  $myquery2="select * from bayar_ujian where id_ujian='1' and nis='$_GET[nis]'";
				  $daftarstudents2=mysqli_query($con, $myquery2) or die (mysqli_error($con));
				 while( $rows=$daftarstudents2->fetch_array() ) {
?>    

<tr>
    <td><div align="center"><div align="center"><?php echo $M=$M+1; ?></td>
	<td><?php echo  $rows[4]?></td> 
	<td><?php echo  $rows[5]?></td>
	<td align="center"><a href="?nis=<?php echo $nis;?>&mod=del&id=<?php echo $rows[0] ?>" onclick="return konfirmasi()">Delete</a> | <a onclick="openInNewTab('cetakujian.php?id=<?php echo $rows[0];?>')" href="javascript:void(0);" style="text-decoration:none">Cetak Kwintasi</a></td>
</tr>
				 <?php }

			
?>
    <tr id='tengah'>
	<td></td>
	<td><b>
	<?php
$myqueryujian="select students.nis, count(tgl_bayar) as tgl, sum(bayar)as b from bayar_ujian, students where bayar_ujian.id_ujian='1' and bayar_ujian.nis = students.nis and students.nis = '$_GET[nis]'";
	$daftarstudentsujian=mysqli_query($con, $myqueryujian) or die (mysqli_error($con));
	$dataujian=$daftarstudentsujian->fetch_array();
$ujian="select jumlah from t_ujian where ujian='UTS'";
	$hasilujian=mysqli_query($con, $ujian); 
	$rows=$hasilujian->fetch_array();
	$ujian=$rows['jumlah'];
	$k2 = $ujian - $dataujian['b'];
if($dataujian['b']<$rows['jumlah'])
{echo "<font size='2' color='red' ><i> Sisa : $k2  </font> <br> <font color='blue' size='2'> Total <font size='2'>$ujian</font>"; ?> <br><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"> <?php
}
else{echo "<font color='red' size='2'><i>lunas</font>";}?>
	</td>
    </td>
       <td><?php echo$dataujian['tgl']?> Kali Bayar</td>
	   <td></td>
  </tr>
  </tr>
</table>
				
				
				
				<br><br>
				
				
	  <table border='1' class='data'>
<tr id='tengah'>
	<th>No</th>
		  <th>UN</th>
        <th>Tanggal Bayar</th>
		<th>Control</th>
</tr>

<?php 
$K='';
				  $myquery2="select * from bayar_ujian where id_ujian='3' and nis='$_GET[nis]'";
				  $daftarstudents2=mysqli_query($con, $myquery2) or die (mysqli_error($con));
				 while( $rows=$daftarstudents2->fetch_array() ) {
?>    

<tr>
    <td><div align="center"><div align="center"><?php echo $K=$K+1; ?></td>
	<td><?php echo  $rows[4]?></td> 
	<td><?php echo  $rows[5]?></td>
	<td align="center"><a href="?nis=<?php echo $nis;?>&mod=del&id=<?php echo $rows[0] ?>" onclick="return konfirmasi()">Delete</a> |<a onclick="openInNewTab('cetakujian.php?id=<?php echo $rows[0];?>')" href="javascript:void(0);" style="text-decoration:none">Cetak Kwintasi</a></td>
</tr>
				 <?php }

				
?>
    <tr id='tengah'>
	<td></td>
	<td><b>
	<?php
$myqueryujian="select students.nis, count(tgl_bayar) as tgl, sum(bayar)as b from bayar_ujian, students where bayar_ujian.id_ujian='3' and bayar_ujian.nis = students.nis and students.nis = '$_GET[nis]'";
	$daftarstudentsujian=mysqli_query($con, $myqueryujian) or die (mysqli_error($con));
	$dataujian=$daftarstudentsujian->fetch_array();
$ujian="select jumlah from t_ujian where ujian='UN'";
	$hasilujian=mysqli_query($con, $ujian); 
	$rows=$hasilujian->fetch_array();
	$ujian=$rows['jumlah'];
	$k2 = $ujian - $dataujian['b'];
if($dataujian['b']<$rows['jumlah'])
{echo "<font size='2' color='red' ><i> Sisa : $k2  </font> <br> <font color='blue' size='2'> Total <font size='2'>$ujian</font>"; ?> <br><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"> <?php
}
else{echo "<font color='red' size='2'><i>lunas</font>";}?>
	</td>
    </td>
       <td><?php echo$dataujian['tgl']?> Kali Bayar</td>
	   <td></td>
  </tr>
  </tr>
</table>



</div>
  </article>




