<?php


// ================ REFERENSI UJIAN =====================//
$id_ujian	= isset($_GET['id']) ? $_GET['id'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_ujian = mysqli_query($con,"DELETE FROM t_ujian WHERE id_ujian = '$id_ujian'");
			if ($q_delete_ujian) {
				echo "<h4 class='alert_success'>Data berhasil dihapuskan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		}
		
		// ================ DATA FORM ( POST ) =====================//
		$display 		= "style='display: none'"; 	//default = formnya dihidden
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				//ambil variabel POST value Tombol FOrm
		$p_id_ujian   	= isset($_POST['id_ujian']) ? $_POST['id_ujian'] : NULL;			//ambil variabel POST id_ujian
		$p_nama_ujian 	= isset($_POST['nama_ujian']) ? $_POST['nama_ujian'] : NULL;		//ambil variabel POST nama_ujian
		$p_jumlah_ujian 	= isset($_POST['jumlah_ujian']) ? $_POST['jumlah_ujian'] : NULL;		//ambil variabel POST jumlah_ujian
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_ujian	= mysqli_query($con, "INSERT INTO t_ujian VALUES ('', '$p_nama_ujian','$p_jumlah_ujian')");
			if ($q_tambah_ujian) {
				echo "<h4 class='alert_success'>Data berhasil ditambahkan<span id='close'>[<a href='#'>X</a>]</span></h4>";
			} else {
				echo "<h4 class='alert_error'>".mysqli_error($con)."<span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_ujian	= mysqli_query($con,"UPDATE t_ujian SET ujian= '$p_nama_ujian', jumlah = '$p_jumlah_ujian' WHERE id_ujian = '$p_id_ujian'") or die (mysqli_error($con));
			if ($q_edit_ujian) {
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
			$q_edit_agm	= mysqli_query($con,"SELECT * FROM t_ujian WHERE id_ujian = '$id_ujian'");
			$a_edit_agm	= $q_edit_agm->fetch_array();
			$nama_ujian = $a_edit_agm[1];
			$jumlah_ujian = $a_edit_agm[2];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$id_ujian = "";
			$nama_ujian = "";
			$jumlah_ujian = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

?>

<article class="module width_full">
	<header><h3>Referensi ujian</h3></header>
		<div class="module_content">
		<h5><a href="?p=refujian&mod=add">Tambah Data ujian</a></h5>
		
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table border='1' class='data'><tr><th>ID</th><th>ujian</th><th>Jumlah Bayar</th><th>Control</th></tr>";
		$q_ujian 	= mysqli_query($con, "SELECT * FROM t_ujian ORDER BY id_ujian ASC") or die (mysqli_error($con));
		$j_data 	= mysqli_num_rows($q_ujian);

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_ujian = $q_ujian->fetch_array()) {
				echo "<tr><td id='tengah'>$no</td><td>$a_ujian[1]</td><td>$a_ujian[2]</td>
				<td id='tengah'><a href='?p=refujian&mod=edit&id=$a_ujian[0]'>Edit</a> |
					<a href='?p=refujian&mod=del&id=$a_ujian[0]' onclick=\"return konfirmasi('Menghapus data $a_ujian[1]')\">Delete</a>
				</tr>";
				$no++;
			}
		}
		echo "</table>";
		?>

		</div>
</article>

<article class="module width_full" <?php echo $display;?>>
	<header><h3><?php echo $view;?> Data ujian</h3></header>
		<div class="module_content">
		<form action="?p=refujian" method="post" id="ft_ujian">
		<table class="tbl_form">
		<tr><td><input type="hidden" size="30" name="id_ujian" value="<?php echo $id_ujian; ?>"></td>
			<tr><td>Nama</td>
			<td><input type="text" size="30" name="nama_ujian" value="<?php echo $nama_ujian; ?>"></td>
			<tr><td>Jumlah</td>
			<td><input type="text" size="30" name="jumlah_ujian" value="<?php echo $jumlah_ujian; ?>"></td></tr>
			<tr><td></td><td><input type="submit" name="tb_act" value="<?php echo $view; ?>"></td></tr>
		</table>
		</div>
</article>
