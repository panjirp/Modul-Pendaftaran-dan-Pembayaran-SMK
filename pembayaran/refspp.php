<?php




// ================ REFERENSI spp =====================//
$id_spp	= isset($_GET['id']) ? $_GET['id'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_spp = mysqli_query($con, "DELETE FROM t_spp WHERE id_spp = '$id_spp'");
			if ($q_delete_spp) {
				echo "<h4 class='alert_success'>Data berhasil dihapuskan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		}
		
		// ================ DATA FORM ( POST ) =====================//
		$display 		= "style='display: none'"; 	//default = formnya dihidden
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				//ambil variabel POST value Tombol FOrm
		$p_id_spp   	= isset($_POST['id_spp']) ? $_POST['id_spp'] : NULL;			//ambil variabel POST id_spp
		$p_nama_spp 	= isset($_POST['nama_spp']) ? $_POST['nama_spp'] : NULL;		//ambil variabel POST nama_spp
		$p_jumlah_spp 	= isset($_POST['jumlah_spp']) ? $_POST['jumlah_spp'] : NULL;		//ambil variabel POST jumlah_spp
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_spp	= mysqli_query($con,"INSERT INTO t_spp VALUES ('', '$p_nama_spp','$p_jumlah_spp')");
			if ($q_tambah_spp) {
				echo "<h4 class='alert_success'>Data berhasil ditambahkan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_spp	= mysqli_query($con,"UPDATE t_spp SET spp= '$p_nama_spp', jumlah = '$p_jumlah_spp' WHERE id_spp = '$p_id_spp'") or die (mysqli_error($con));
			if ($q_edit_spp) {
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
			$q_edit_agm	= mysqli_query($con, "SELECT * FROM t_spp WHERE id_spp = '$id_spp'");
			$a_edit_agm	= $q_edit_agm->fetch_array();
			$nama_spp = $a_edit_agm[1];
			$jumlah_spp = $a_edit_agm[2];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$id_spp = "";
			$nama_spp = "";
			$jumlah_spp = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

?>

<article class="module width_full">
	<header><h3>Referensi SPP</h3></header>
		<div class="module_content">
		<h5><a href="?p=refspp&mod=add">Tambah Data spp</a></h5>
		
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table border='1' class='data'><tr><th>ID</th><th>spp</th><th>Jumlah Bayar</th><th>Control</th></tr>";
		$q_spp 	= mysqli_query($con, "SELECT * FROM t_spp ORDER BY id_spp ASC") or die (mysqli_error($con));
		$j_data 	= mysqli_num_rows($q_spp);

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_spp = $q_spp->fetch_array()) {
				echo "<tr><td id='tengah'>$no</td><td>$a_spp[1]</td><td>$a_spp[2]</td>
				<td id='tengah'><a href='?p=refspp&mod=edit&id=$a_spp[0]'>Edit</a> |
					<a href='?p=refspp&mod=del&id=$a_spp[0]' onclick=\"return konfirmasi('Menghapus data $a_spp[1]')\">Delete</a>
				</tr>";
				$no++;
			}
		}
		echo "</table>";
		?>

		</div>
</article>

<article class="module width_full" <?php echo $display;?>>
	<header><h3><?php echo $view;?> Data spp</h3></header>
		<div class="module_content">
		<form action="?p=refspp" method="post" id="ft_spp">
		<table class="tbl_form">
		<tr>
			<td><input type="hidden" size="30" name="id_spp" value="<?php echo $id_spp; ?>"></td>
			<tr><td>Nama</td>
			<td><input type="text" size="30" name="nama_spp" value="<?php echo $nama_spp; ?>"></td>
			<tr><td>Jumlah</td>
			<td><input type="text" size="30" name="jumlah_spp" value="<?php echo $jumlah_spp; ?>"></td></tr>
			<tr><td></td><td><input type="submit" name="tb_act" value="<?php echo $view; ?>"></td></tr>
		</table>
		</div>
</article>
