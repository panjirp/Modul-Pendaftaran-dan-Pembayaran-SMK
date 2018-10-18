<?php
$id_pkl	= isset($_GET['id']) ? $_GET['id'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_spp = mysqli_query($con, "DELETE FROM bayar_pkl WHERE kd_bayar = '$id_pkl'");
			if ($q_delete_spp) {
				echo "<h4 class='alert_success'>Data berhasil dihapuskan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		}

		?>

<article class="module width_full" >
<header><h3>DATA PEMBAYARAN PKL</h3></header>
	<div class="module_content">
				

  <table border='1' class='data'>
<tr id='tengah'>
	<th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
				  <?php 
				  $no="";
				  		$myquerya="select * from students where nis='$_GET[nis]'";
				  $daftarstudentsa=mysqli_query($con,$myquerya) or die (mysqli_error($con));
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
		  <th><div align="center">PKL</div></th>
        <th><div align="center">Tanggal Bayar</div></th>
		<th><div align="center">Control</div></th>
</tr>
<?php 
$NO="";		
				  $myquery2="select * from bayar_pkl where nis='$_GET[nis]'";
				  $daftarstudents2=mysqli_query($con, $myquery2) or die (mysqli_error($con));
				 while( $rows=$daftarstudents2->fetch_array() ) {
?>    
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>
<tr>
    <td><div align="center"><div align="center"><?php echo $NO=$NO+1; ?></td>
	<td><?php echo  $rows[4]?></td> 
	<td><?php echo  $rows[5]?></td>
	<td align="center"><a href="?nis=<?php echo $nis;?>&mod=del&id=<?php echo $rows[0] ?>" onclick="return konfirmasi()">Delete</a> |<a onclick="openInNewTab('cetakpkl.php?id=<?php echo $rows[0];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Cetak Kwintasi</a></td>
  </tr>
				 <?php }
?>
     <tr id='tengah'>
	<td></td>
	<td><b>
	<?php
$myquerypkl="select students.nis, count(tgl_bayar) as tgl, sum(bayar)as pkl from bayar_pkl, students where bayar_pkl.nis = students.nis and students.nis = '$_GET[nis]'";
	$daftarstudentspkl=mysqli_query($con, $myquerypkl) or die (mysqli_error($con));
	$datapkl=$daftarstudentspkl->fetch_array();
$pkl="select bayar_pkl from t_pkl";
	$hasilpkl=mysqli_query($con, $pkl); 
	$rows=$hasilpkl->fetch_array();
	$pkl=$rows['bayar_pkl'];
	$k2 = $pkl - $datapkl['pkl'];
if($datapkl['pkl']<$pkl)
{echo "<font size='2' color='red' ><i> Sisa : $k2  </font> <br> <font color='blue' size='2'> Total <font size='2'>$pkl</font>"; ?> <br><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"> <?php
}else{echo "<font color='red' size='2'><i>lunas</font>";}?>
	</td>
       <td><?php echo $datapkl['tgl']?> Kali Bayar</td>
	    <td></td>
  </tr>
  </tr>
		</table>
				
				  
	
</div>
  </article>







