<?php
include "header.php";
include "lib/fungsi.php";
?>
<link href="css/pariwisata.css" media="screen" rel="stylesheet" type="text/css" />
                  <DIV ALIGN=CENTER><h2>Data Tunggakan<br><br>
				  <table width="900" border="1" align="center" cellpadding="3" cellspacing="0" rules="all">
<tr bgcolor="cyan">
	<th><div align="center">No</div></th>
        <th><div align="center">nis</div></th>
        <th><div align="center">name<div></th>
        <th><div align="center">grade</div></th>
    </tr>
				  <?php 
				  		$myquerya="select * from students where nis='$_GET[nis]'";
				  $daftarstudentsa=mysqli_query($con, $myquerya) or die (mysqli_error($con));
	while($dataku=$daftarstudentsa->fetch_object())
	{
?>
    <tr bgcolor="#DFFDD5">
    <td><div align="center"><?php echo $no=$no+1; ?></td>
    <td><?php echo  $dataku->nis?></td>
    <td><?php echo  $dataku->name?></td>
    <td align="center"><?php echo  $dataku->grade?></td>
	</tr>
				<?php } ?>
				  </table>
				  </h2>
					<?php include "tunggakanspp.php";?>
					<?php include "tunggakanujian.php";?>
					<?php include "tunggakanlks.php";?>
					<?php include "tunggakanpkl.php";?>
				
				
				  
				
  </body>
</html>






