<?php
	include 'fungsi.php';
	$title 	= " - Ubah Data ";
	$siswa = $_GET['siswa'];
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

    $sql = "SELECT * FROM students where nis=$siswa";
	$result = mysqli_query($con, $sql)or die('Error');
	$data = mysqli_fetch_array($result)
	
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
					<header><h3>DATA SISWA</h3></header>
					<div class="module_content" style="padding-left:15px;">
						<!--<img src="images/foto/reza.jpg" width="150px" style="float:left; padding-right:20px; padding-top:10px;">-->
						<form action="">
							<table class="tbl_data">
								<tr>
									<td width="150"><strong>NIS</strong></td>
									<td>'.$data["nis"].'</td>
								</tr>
								<tr>
									<td><strong>Nama</strong></td>
									<td>'.$data["name"].'</td>
								</tr>
								<tr>
									<td><strong>Jenis Kelamin</strong></td>
									<td>'.$data["sex"].'</td>
								</tr>
								<tr>
									<td><strong>Berat</strong></td>
									<td>'.$data["weight"].'</td>
								</tr>
								<tr>
									<td><strong>Tinggi</strong></td>
									<td>'.$data["height"].'</td>
								</tr>
								<tr>
									<td><strong>Gol. Darah</strong></td>
									<td>'.$data["blood_type"].'</td>
								</tr>
								<tr>
									<td><strong>Telp.</strong></td>
									<td>'.$data["phone"].'</td>
								</tr>
								<tr>
									<td><strong>Email</strong></td>
									<td>'.$data["email"].'</td>
								</tr>
								<tr>
									<td><strong>Tempat, Tanggal Lahir</strong></td>
									<td>'.$data["place_birth"].', '.$data["date_birth"].'</td>
								</tr>
								<tr>
									<td><strong>Kewarganegaraan</strong></td>
									<td>'.$data["nationality"].'</td>
								</tr>
								<tr>
									<td><strong>Agama</strong></td>
									<td>'.$data["id_religion"].'</td>
								</tr>
								<tr>
									<td><strong>Kebutuhan khusus</strong></td>
									<td>'.$data["id_special_needs"].'</td>
								</tr>
								<tr>
									<td><strong>Tinggal Dengan</strong></td>
									<td>'.$data["stay_with"].'</td>
								</tr>
								<tr>
									<td><strong>Alamat</strong></td>
									<td>'.$data["address"].'</td>
								</tr>
								<tr>
									<td><strong>Sekolah Asal</strong></td>
									<td>'.$data["previous_school"].'</td>
								</tr>
								<tr>
									<td><strong>Jurusan</strong></td>
									<td>'.$data["id_major"].'</td>
								</tr>
								<tr>
									<td><strong>Kelas</strong></td>
									<td>'.$data["grade"].'</td>
								</tr>
								<tr>
									<td><strong>NISN</strong></td>
									<td>'.$data["nisn"].'</td>
								</tr>
								<tr>
									<td><strong>NIK</strong></td>
									<td>'.$data["nik"].'</td>
								</tr>
								<tr>
									<td><strong>SKHUN SMP</strong></td>
									<td>'.$data["skhun_smp"].'</td>
								</tr>
								<tr>
									<td><strong>No. KPS</strong></td>
									<td>'.$data["no_kps"].'</td>
								</tr>
								<tr>
									<td><strong>Jarak Tempuh</strong></td>
									<td>'.$data["distance_school"].'</td>
								</tr>
								<tr>
									<td><strong>Waktu Tempuh</strong></td>
									<td>'.$data["id_time_spent"].'</td>
								</tr>
								<tr>
									<td><strong>Transportasi</strong></td>
									<td>'.$data["id_transport"].'</td>
								</tr>
								<tr>
									<td><strong>Status Siswa</strong></td>
									<td>'.$data["id_status_siswa"].'</td>
								</tr>
								<tr>
									<td><strong>Status Pembayaran</strong></td>
									<td>'.$data["id_status_pembayaran"].'</td>
								</tr>
							</table>
							<br><br><a href="prosesubah.php"><input class="btn_daftar" type="submit" value="Simpan"></a><br>
						</form>
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