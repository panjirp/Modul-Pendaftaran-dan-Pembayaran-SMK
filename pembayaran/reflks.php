<?php


// ================ REFERENSI lks =====================//
$kd_lks	= isset($_GET['id']) ? $_GET['id'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_lks = mysqli_query($con, "DELETE FROM t_lks WHERE kd_lks = '$kd_lks'");
			if ($q_delete_lks) {
				echo "<h4 class='alert_success'>Data berhasil dihapuskan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		}
		
		// ================ DATA FORM ( POST ) =====================//
		$display 		= "style='display: none'"; 	//default = formnya dihidden
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				//ambil variabel POST value Tombol FOrm
		$p_kd_lks   	= isset($_POST['kd_lks']) ? $_POST['kd_lks'] : NULL;			//ambil variabel POST kd_lks
		$p_nama_lks 	= isset($_POST['nama_lks']) ? $_POST['nama_lks'] : NULL;		//ambil variabel POST nama_lks
		$p_jumlah_lks 	= isset($_POST['jumlah_lks']) ? $_POST['jumlah_lks'] : NULL;		//ambil variabel POST jumlah_lks
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_lks	= mysqli_query($con,"INSERT INTO t_lks VALUES ('', '$p_jumlah_lks')");
			if ($q_tambah_lks) {
				echo "<h4 class='alert_success'>Data berhasil ditambahkan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_lks	= mysqli_query($con, "UPDATE t_lks SET jumlah = '$p_jumlah_lks' WHERE kd_lks = '$p_kd_lks'") or die (mysqli_error($con));
			if ($q_edit_lks) {
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
			$q_edit_agm	= mysqli_query($con, "SELECT * FROM t_lks WHERE kd_lks = '$kd_lks'");
			$a_edit_agm	= $q_edit_agm->fetch_array();
			$jumlah_lks = $a_edit_agm[1];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$kd_lks = "";
			$jumlah_lks = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

?>

<article class="module width_full">
	<header><h3>Referensi LKS</h3></header>
		<div class="module_content">
		<h5><a href="?p=reflks&mod=add">Tambah Data lks</a></h5>
		
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table border='1' class='data'><tr><th>ID</th><th>Jumlah Bayar</th><th>Control</th></tr>";
		$q_lks 	= mysqli_query($con, "SELECT * FROM t_lks ORDER BY kd_lks ASC") or die (mysqli_error($con));
		$j_data 	= mysqli_num_rows($q_lks);

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_lks = $q_lks->fetch_array()) {
				echo "<tr><td id='tengah'>$no</td><td>$a_lks[1]</td>
				<td id='tengah'><a href='?p=reflks&mod=edit&id=$a_lks[0]'>Edit</a> |
					<a href='?p=reflks&mod=del&id=$a_lks[0]' onclick=\"return konfirmasi('Menghapus data $a_lks[1]')\">Delete</a>
				</tr>";
				$no++;
			}
		}
		echo "</table>";
		?>

		</div>
</article>

<article class="module width_full" <?php echo $display;?>>
	<header><h3><?php echo $view;?> Data lks</h3></header>
		<div class="module_content">
		<form action="?p=reflks" method="post" id="ft_lks">
		<table class="tbl_form">
		<tr>
			<td><input type="hidden" size="30" name="kd_lks" value="<?php echo $kd_lks; ?>"></td></tr>
			<tr><td>Jumlah</td>
			<td><input type="text" size="30" name="jumlah_lks" value="<?php echo $jumlah_lks; ?>"></td></tr>
			<tr><td></td><td><input type="submit" name="tb_act" value="<?php echo $view; ?>"></td></tr>
		</table>
		</div>
</article>
