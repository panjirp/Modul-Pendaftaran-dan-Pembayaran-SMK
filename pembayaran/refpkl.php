<?php


// ================ REFERENSI pkl =====================//
$kd_pkl	= isset($_GET['id']) ? $_GET['id'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_pkl = mysqli_query($con, "DELETE FROM t_pkl WHERE kd_pkl = '$kd_pkl'");
			if ($q_delete_pkl) {
				echo "<h4 class='alert_success'>Data berhasil dihapuskan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		}
		
		// ================ DATA FORM ( POST ) =====================//
		$display 		= "style='display: none'"; 	//default = formnya dihidden
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				//ambil variabel POST value Tombol FOrm
		$p_kd_pkl   	= isset($_POST['kd_pkl']) ? $_POST['kd_pkl'] : NULL;			//ambil variabel POST kd_pkl
		$p_nama_pkl 	= isset($_POST['nama_pkl']) ? $_POST['nama_pkl'] : NULL;		//ambil variabel POST nama_pkl
		$p_bayar_pkl 	= isset($_POST['bayar_pkl']) ? $_POST['bayar_pkl'] : NULL;		//ambil variabel POST bayar_pkl
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_pkl	= mysqli_query($con,"INSERT INTO t_pkl VALUES ('', '$p_bayar_pkl')");
			if ($q_tambah_pkl) {
				echo "<h4 class='alert_success'>Data berhasil ditambahkan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_pkl	= mysqli_query($con,"UPDATE t_pkl SET bayar_pkl = '$p_bayar_pkl' WHERE kd_pkl = '$p_kd_pkl'") or die (mysqli_error($con));
			if ($q_edit_pkl) {
				echo "<h4 class='alert_success'>Data berhasil diupdate<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		} else {	
			$display = "style='display: none'";
		}
		
			// ================ DATA URL "mod" ( GET ) =====================//

		if ($mod == "edit") {
			$display = "";
			$q_edit_agm	= mysqli_query($con,"SELECT * FROM t_pkl WHERE kd_pkl = '$kd_pkl'");
			$a_edit_agm	= $q_edit_agm->fetch_array();
			$bayar_pkl = $a_edit_agm[1];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$kd_pkl = "";
			$bayar_pkl = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

?>

<article class="module width_full">
	<header><h3>Referensi PKL</h3></header>
		<div class="module_content">
		<h5><a href="?p=refpkl&mod=add">Tambah Data pkl</a></h5>
		
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table border='1' class='data'><tr><th>ID</th><th>Jumlah Bayar</th><th>Control</th></tr>";
		$q_pkl 	= mysqli_query($con,"SELECT * FROM t_pkl ORDER BY kd_pkl ASC") or die (mysqli_error($con));
		$j_data 	= mysqli_num_rows($q_pkl);

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_pkl = $q_pkl->fetch_array()) {
				echo "<tr><td id='tengah'>$no</td><td>$a_pkl[1]</td>
				<td id='tengah'><a href='?p=refpkl&mod=edit&id=$a_pkl[0]'>Edit</a> |
					<a href='?p=refpkl&mod=del&id=$a_pkl[0]' onclick=\"return konfirmasi('Menghapus data $a_pkl[1]')\">Delete</a>
				</tr>";
				$no++;
			}
		}
		echo "</table>";
		?>

		</div>
</article>

<article class="module width_full" <?php echo $display;?>>
	<header><h3><?php echo $view;?> Data pkl</h3></header>
		<div class="module_content">
		<form action="?p=refpkl" method="post" id="ft_pkl">
		<table class="tbl_form">
		<tr>
			<td><input type="hidden" size="30" name="kd_pkl" value="<?php echo $kd_pkl; ?>"></td></tr>
			<tr><td>Jumlah Bayar</td>
			<td><input type="text" size="30" name="bayar_pkl" value="<?php echo $bayar_pkl; ?>"></td></tr>
			<tr><td></td><td><input type="submit" name="tb_act" value="<?php echo $view; ?>"></td></tr>
		</table>
		</div>
</article>