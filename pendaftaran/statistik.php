<?php
	include 'fungsi.php';

	$title = " - Statistik";

	$p = isset($_GET['p']) ? $_GET['p'] : "";

	if ($p == "beranda") {
		$title 	= " - Beranda";
		$content = "beranda.php";
	
	/*tabel ref*/
	} elseif ($p == "t_beasiswa") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_beasiswa.php";
	} elseif ($p == "t_pendidikan") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_pendidikan.php";
	} elseif ($p == "t_jurusan") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_jurusan.php";
	} elseif ($p == "t_pekerjaan") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_pekerjaan.php";
	} elseif ($p == "t_prestasi") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_prestasi.php";
	} elseif ($p == "t_hubungan") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_hubungan.php";
	} elseif ($p == "t_agama") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_agama.php";
	} elseif ($p == "t_kebutuhankhusus") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_kebutuhankhusus.php";
	} elseif ($p == "t_statuspmb") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_statuspmb.php";
	} elseif ($p == "t_statussiswa") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_statussiswa.php";
	} elseif ($p == "t_waktutempuh") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_waktutempuh.php";
	} elseif ($p == "t_tingkat") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_tingkat.php";
	} elseif ($p == "t_transport") {
		$title 	= " - Tabel Referensi ";
		$content	= "t_transport.php";
	
	} elseif ($p == "ekspor") {
		$title 	= " - Export Data";
		$content	= "export.php";
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSB<?php echo $title; ?></title>
	<link rel="stylesheet" href="css/layout.css" type="text/css"/>
	
</head>
<body>

	<aside id="sidebar">
		<div id="header">
			<center>
				<img class="logosmk" src="images/logo/logo-smk.png">
			</center>	
		</div>
		
		<hr/>

		<h3>Pendaftaran</h3>
		<ul>
			<li class="icn_new_article"><a href="index.php?p=beranda">Beranda</a></li>
			<li class="icn_add_user"><a href="form_daftar.php">Daftar Baru</a></li>
		</ul>
		<h3>Data</h3>
		<ul>
			<li class="icn_edit_article"><a href="data_daftar.php">Lihat Data Siswa</a></li>
			<li class="icn_edit_article"><a href="statistik.php">Statistik Siswa</a></li>
		</ul>
		
		<h3>Referensi</h3>
		<ul>
			<li class="icn_profile"><a href="index.php?p=t_beasiswa">Ref Beasiswa</a></li>
			<li class="icn_profile"><a href="index.php?p=t_pendidikan">Ref Pendidikan</a></li>
			<li class="icn_profile"><a href="index.php?p=t_jurusan">Ref Jurusan</a></li>
			<li class="icn_profile"><a href="index.php?p=t_pekerjaan">Ref Pekerjaan</a></li>
			<li class="icn_profile"><a href="index.php?p=t_prestasi">Ref Prestasi</a></li>
			<li class="icn_profile"><a href="index.php?p=t_hubungan">Ref Hubungan</a></li>
			<li class="icn_profile"><a href="index.php?p=t_agama">Ref Agama</a></li>
			<li class="icn_profile"><a href="index.php?p=t_kebutuhankhusus">Ref Kebutuhan Khusus</a></li>
			<li class="icn_profile"><a href="index.php?p=t_statuspmb">Ref Status Pembayaran</a></li>
			<li class="icn_profile"><a href="index.php?p=t_statussiswa">Ref Status Siswa</a></li>
			<li class="icn_profile"><a href="index.php?p=t_waktutempuh">Ref Waktu Tempuh</a></li>
			<li class="icn_profile"><a href="index.php?p=t_tingkat">Ref Tingkat Prestasi</a></li>
			<li class="icn_profile"><a href="index.php?p=t_transport">Ref Transportasi</a></li>
		</ul>
		<h3>Tools</h3>
		<ul>
			<li class="icn_folder"><a href="index.php?p=ekspor" onclick="return buka('ke_excel.php');">Export ke Excel</a></li>
			<li class="icn_jump_back"><a href="../welcome.php"">Menu</a></li>
			<li class="icn_jump_back"><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');">Logout</a></li>
		</ul>
			
		<footer>
			<hr>
			<p><strong>Aplikasi PSB &copy; <a href="">ICTMP DEV</a></strong></p>
 		</footer>
	</aside><!-- end of sidebar -->

<?php
	if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
	{
		echo '<section id="main" class="column">
			<article class="module">
				<header><h3>STATISTIK PENDAFTAR</h3></header>
				<center>
				<div class="module_content">
					Urut Berdasarkan 
					<select onchange="document.location.href=this.options[this.selectedIndex].value;">
						';
							$_by = $_GET['by'];
							if ($_by == "") { $_by = "previous_school"; }
							
							pilihanfilter("id_religion|sex|previous_school|id_major", 
							"Agama|Jenis Kelamin|Sekolah Asal|Jurusan", $_by);
						
				echo "</select><br><br>";
						
						// ================ TAMPILKAN DATANYA =====================//
						echo "<table class='tbl_data'><tr><th width='10%'>No</th><th width='60%'>Items</th><th width='30%'>Jumlah</th></tr>";
						if ($_by == "id_religion") {
							$sql_stat = "SELECT a.detail, COUNT(b.$_by) AS 'jumlah' FROM students b join ref_religions a on a.$_by = b.$_by GROUP BY b.$_by";
						} elseif ($_by == "id_major"){
							$sql_stat = "SELECT a.detail, COUNT(b.$_by) AS 'jumlah' FROM students b join ref_majors a on a.$_by = b.$_by GROUP BY b.$_by";
						} else {
							$sql_stat = "SELECT $_by, COUNT($_by) AS 'jumlah' FROM students GROUP BY $_by";
						}
						$q_stat 	= mysqli_query($con, $sql_stat);
						$j_data 	= mysqli_num_rows($q_stat);

						if ($j_data == 0) {
							echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
						} else {
							$no = 1;
							while ($a_stat = mysqli_fetch_array($q_stat)) {
								echo "<tr>
									  	<td id='tengah'>$no</td>
									  <td>";
						
								echo $a_stat[0];
							
								echo "</td>
										<td id='tengah'>$a_stat[1]</td>
									  </tr>";
								$no++;
							}
						}
						echo "</table>
					</center>
				</article>
				</section>
		";
	} else {
		echo '<section id="main" class="column">
				<article class="module">
					<header><h3>HARAP LOGIN</h3></header>
					<div class="module_content">
						Anda belum login, silahkan <a href="../">login</a>.
					</div>
				</article>
			  </section>';
	}
?>

</body>
</html>