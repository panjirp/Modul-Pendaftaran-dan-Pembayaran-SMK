<article class="module width_full" >
<header><h3>DATA PEMBAYARAN SPP</h3></header>
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
        <th><div align="center">Bulan</div></th>
        <th><div align="center">STATUS</div></th>
		<th><div align="center">Detail</div></th>
 </tr>
  
<?php 
				$myquery2="select *, sum(bayar) as b from bayar_spp where nis='$_GET[nis]'";
				$daftarstudents2=mysqli_query($con, $myquery2) or die (mysqli_error($con));
				$row2=$daftarstudents2->fetch_array();
				
				
				
?>    

<tr>
    <td>1</td>
    <td>Januari</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Januari' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
		
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
 <tr>
    <td>2</td>
    <td>Februari</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Februari' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
  <tr>
    <td>3</td>
    <td>Maret</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Maret' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
  <tr>
    <td>4</td>
    <td>April</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='April' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>5</td>
    <td>Mei</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Mei' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	} else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>6</td>
    <td>Juni</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Juni' and bayar_spp.nis=$_GET[nis]";
$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>7</td>
    <td>Juli</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Juli' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>8</td>
    <td>Agustus</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Agustus' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>9</td>
    <td>September</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='September' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>10</td>
    <td>Oktober</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Oktober' and bayar_spp.nis=$_GET[nis]";
$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>11</td>
    <td>November</td> 
	<td><?php 
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='November' and bayar_spp.nis=$_GET[nis]";
$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>
   <tr>
    <td>12</td>
    <td>Desember</td> 
	<td><?php
	$query="select *, sum(bayar) as b from bayar_spp where bulan_bayar='Desember' and bayar_spp.nis=$_GET[nis]";
	$spp=mysqli_query($con, $query) or die (mysqli_error($con));
	$row=$spp->fetch_array();
	$query2="select jumlah as j from t_spp, bayar_spp where bayar_spp.id_spp=t_spp.id_spp and bayar_spp.nis=$_GET[nis]";
	$spp2=mysqli_query($con,$query2) or die (mysqli_error($con));
	$rows=$spp2->fetch_array();
	$jumlah=$rows['j'];
	$test=$jumlah-$row['b'];
	if ($row['b']<$jumlah){
	echo "<font size='2' color='red' >BELUM LUNAS, (kurang $test)"; ?><a href="tabelbayar.php?nis=<?php echo $nis;?>"><input type="button" value="Bayar"><?php
	}else{
		echo"<font size='2' color='blue' >LUNAS";
	}
	?></td>
	<td><a onclick="openInNewTab('detailspp2.php?nis=<?php echo $nis;?>&bulan=<?php echo $row[5];?>', 'myPop1',800,500);" href="javascript:void(0);" style="text-decoration:none">Detail Pembayaran</a></td>
 </tr>

		</table>
				
				  
	
</div>
  </article>