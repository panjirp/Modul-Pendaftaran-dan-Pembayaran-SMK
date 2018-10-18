<?php
	include 'fungsi.php';

	$title = " - Data Siswa";
	$siswa = "";
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
					<header><h3>DATA PENDAFTAR</h3></header>
					<div class="module_content">
						<form name="formcari" method="post" action="cari.php">
							<center>
								Cari : 
								<select name="filter">
									<option value="nis">NIS</option>
									<option value="nama">Nama</option>
								</select> <input type="text" name="cari" size="10"> <input type="submit" class="btn" value="&#8981;">
								</center><br>
						</form>
						<table class="tbl_data" border="0" align="center">
							<tr>
								<th>NIS</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Sekolah Asal</th>
								<th>Tools</th>
							</tr>';
								$batas = 3;
								$pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";

								if ( empty( $pg ) ) {
									$posisi = 0;
									$pg = 1;
								} else {
									$posisi = ( $pg - 1 ) * $batas;
								}

								$sql = "SELECT * FROM students ORDER BY nis LIMIT $posisi, $batas";
								$no = 1+$posisi;
								$result = mysqli_query($con, $sql)or die('Error');

								while ($data = mysqli_fetch_array($result)) {
									echo '
										<tr>
											<td>'.$data["nis"].'</td>
											<td>'.$data["name"].'</td>
											<td>'.$data["sex"].'</td>
											<td>'.$data["previous_school"].'</td>
											<td><center>
												<a href="detailsiswa.php?siswa='.$data["nis"].'"><button style="cursor:pointer;">Detail</button></a> 
												<a href="ubahdata.php?siswa='.$data["nis"].'"><button style="cursor:pointer;">Ubah</button></a> 
												<a href="hapus.php?siswa='.$data["nis"].'">';?><button style="cursor:pointer;" onclick="return confirm('Apakah anda yakin ingin menghapus data ?');">Hapus</button></a><center>
											</td>
										</tr><?php

									$no++;
								}
								echo '<tr><td colspan="5"><center><br>';
								//hitung jumlah data
								$jml_data = mysqli_num_rows(mysqli_query($con,"SELECT * FROM students"));
								//Jumlah halaman
								$JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas

								//Navigasi ke sebelumnya
								if ( $pg > 1 ) {
									$link = $pg-1;
									$prev = "<a href='?pg=$link'>Sebelumnya </a>";
								} else {
									$prev = "Sebelumnya ";
								}

								//Navigasi nomor
								$nmr = '';
								for ( $i = 1; $i<= $JmlHalaman; $i++ ){
									if ( $i == $pg ) {
										$nmr .= $i . " ";
									} else {
										$nmr .= "<a href='?pg=$i'>$i</a> ";
									}
								}

								//Navigasi ke selanjutnya
								if ( $pg < $JmlHalaman ) {
								$link = $pg + 1;
								$next = " <a href='?pg=$link'>Selanjutnya</a>";
								} else {
								$next = " Selanjutnya";
								}

								//Tampilkan navigasi
								echo $prev . $nmr . $next;

		echo '				</center></td></tr>
						</table>
					</div>
				</article>
			</section>
		';
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