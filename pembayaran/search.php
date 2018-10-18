<?php
 $txtcari=$_GET['txtcari'];
$no='';
	
		$myquerycari="select nis,name,grade, students.id_status_pembayaran as status, detail from students, ref_status_pembayaran where nis LIKE '%$txtcari%'and students.id_status_pembayaran=ref_status_pembayaran.id_status_pembayaran or grade LIKE '%$txtcari%' and students.id_status_pembayaran=ref_status_pembayaran.id_status_pembayaran or name LIKE '%$txtcari%' and students.id_status_pembayaran=ref_status_pembayaran.id_status_pembayaran ORDER by nis asc";
		$query=mysqli_query($con,$myquerycari)or die (mysqli_error($con));

	
		if($query){?>

		<article class="module width_full" >
	<header><h3>Hasil Pencarian</h3></header>
	<div class="module_content">
		<table border='1' class='data'>
<tr><th width="20%">NO</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
	<th>Status</th>
    <th>Pembayaran </th>
 </tr>	
 <?php
	
				
	while($dataku = $query->fetch_array())
	{
?>

 <tr>
    <td id='tengah'><?php echo $no=$no+1; ?></td>
    <td id='tengah'><?php echo  $dataku['nis'];?></td>
    <td id='tengah'><?php echo  $dataku['name']?></td>
    <td id='tengah'><?php echo  $dataku['grade'];?></td>
	<td id='tengah'><?php echo $dataku['detail'];?></td>
	<td id='tengah'><?php if ($dataku['status']==1) {?><a href="tabelbayar.php?nis=<?php echo $dataku['nis'];?>"><input id="kursor" type="button" value="Lihat Detail"></a><?php ;} else { ?><a href="tabelbayar.php?nis=<?php echo $dataku['nis'];?>"><input id="kursor" type="button" value="Bayar"></a><?php } ?></td>
</tr>
	  
				<?php }  ?>
				</table>
					<?php 
		} 
				?>