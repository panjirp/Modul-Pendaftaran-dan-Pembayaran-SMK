<?php
	include 'fungsi.php';

	//Menampilkan data dari tabel referensi 
	$sql_beasiswa = "SELECT * FROM ref_beasiswa";
	$result_beasiswa = mysqli_query($con, $sql_beasiswa)or die('Error');

	$sql_education = "SELECT * FROM ref_education";
	$result_education = mysqli_query($con, $sql_education)or die('Error');

	$sql_majors = "SELECT * FROM ref_majors";
	$result_majors = mysqli_query($con, $sql_majors)or die('Error');

	$sql_occupation = "SELECT * FROM ref_occupation";
	$result_occupation = mysqli_query($con, $sql_occupation)or die('Error');	

	$sql_prestasi = "SELECT * FROM ref_prestasi";
	$result_prestasi = mysqli_query($con, $sql_prestasi)or die('Error');

	$sql_relation = "SELECT * FROM ref_relation";
	$result_relation = mysqli_query($con, $sql_relation)or die('Error');	

	$sql_religions1 = "SELECT * FROM ref_religions";
	$result_religions1 = mysqli_query($con, $sql_religions1)or die('Error');

	$sql_religions2 = "SELECT * FROM ref_religions";
	$result_religions2 = mysqli_query($con, $sql_religions2)or die('Error');

	$sql_religions3 = "SELECT * FROM ref_religions";
	$result_religions3 = mysqli_query($con, $sql_religions3)or die('Error');

	$sql_special_needs = "SELECT * FROM ref_special_needs";
	$result_special_needs = mysqli_query($con, $sql_special_needs)or die('Error');	

	$sql_status_pembayaran = "SELECT * FROM ref_status_pembayaran";
	$result_status_pembayaran = mysqli_query($con, $sql_status_pembayaran)or die('Error');

	$sql_status_siswa = "SELECT * FROM ref_status_siswa";
	$result_status_siswa = mysqli_query($con, $sql_status_siswa)or die('Error');	

	$sql_time_spent = "SELECT * FROM ref_time_spent";
	$result_time_spent = mysqli_query($con, $sql_time_spent)or die('Error');	

	$sql_tingkat = "SELECT * FROM ref_tingkat";
	$result_tingkat = mysqli_query($con, $sql_tingkat)or die('Error');

	$sql_transports = "SELECT * FROM ref_transports";
	$result_transports = mysqli_query($con, $sql_transports)or die('Error');		

	$title = " - Daftar Baru";
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
				<form method="POST" action="form_proses.php">
					<article class="module">
						<header><h3>DATA SISWA</h3></header>
						<div class="module_content">
							<table class="tbl_form">
								<tr>
									<td width="150px">NIS</td>
									<td colspan="3"><input type="text" size="45" name="nis"></td>
								</tr>
								<tr>
									<td width="150px">Nama Lengkap</td>
									<td colspan="3"><input type="text" size="45" name="nama"></td>
								</tr>
								<tr>
									<td>Berat/Tinggi/Gol.Darah</td>
									<td>
										<input type="text" size="2" name="berat"> kg &nbsp;
										<input type="text" size="2" name="tinggi"> cm &nbsp;
										<input type="text" size="2" name="goldar">
									</td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>
										<select name="agama1">
										  <option value="">-</option>
										  ';
										  	while ($religions1 = mysqli_fetch_array($result_religions1)) {
												echo "<option value='$religions1[id_religion]'>$religions1[detail]</option>";
										   }
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td> 
										<input type="radio" name="gender" value="L"> Laki-Laki <input type="radio" name="gender" value="P"> Perempuan
									</td>
								</tr>
								<tr>
									<td>No. Telp</td>
									<td colspan="3"><input type="text" name="telpsiswa"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name="emailsiswa" size="25"></td>
								</tr>
								<tr>
									<td>Tempat, Tanggal Lahir</td>
									<td><input type="text" size="5" name="tt"> , <input type="date" name="tl"></td>
								</tr>
								<tr>
									<td>Kewarganegaraan</td>
									<td><input type="text" name="kwnsiswa" value="Indonesia"></td>
								</tr>
								<tr>
									<td>Kebutuhan Khusus</td>
									<td>
										<select name="kebutuhan">
										  <option value="">-</option>
										  ';
										  	while ($special_needs = mysqli_fetch_array($result_special_needs)) {
												echo "<option value='$special_needs[id_special_needs]'>$special_needs[detail]</option>";
											}
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Tinggal Dengan</td>
									<td>
										<input type="text" name="tinggaldengan"></td>
									</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td colspan="10"><textarea name="alamatsiswa" rows="4" cols="50"></textarea></td>
								</tr>
								<tr>
									<td>Sekolah Sebelumnya</td>
									<td><input type="text" name="sekolah_sebelumnya"></td>
								</tr>
								<tr>
									<td>Jurusan</td>
									<td>
										<select name="jurusan">
										  <option value="">-</option>
										  ';
										  	while ($majors = mysqli_fetch_array($result_majors)) {
												echo "<option value='$majors[id_major]'>$majors[detail]</option>";
										  }
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td><input type="text" name="kelas"></td>
								</tr>
								<tr>
									<td>NISN</td>
									<td><input type="text" name="NISN"></td>
								</tr>
								<tr>
									<td>NIK</td>
									<td><input type="text" name="NIK"></td>
								</tr>
								<tr>
									<td>SKHUN</td>
									<td><input type="text" name="SKHUN"></td>
								</tr>
								<tr>
									<td>KPS</td>
									<td><input type="text" name="KPS"></td>
								</tr>
								<tr>
									<td>Jarak Tempuh</td>
									<td><input type="text" size="3" name="jaraktempuh"> Km</td>
								</tr>
								<tr>
									<td>Waktu Tempuh</td>
									<td>
										<select name="waktutempuh">
										  <option value="">-</option>
										  ';
										  	while ($time_spent = mysqli_fetch_array($result_time_spent)) {
												echo "<option value='$time_spent[id_time_spent]'>$time_spent[detail]</option>";
										  }
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Transportasi</td>
									<td>
										<select name="transportasi">
										  <option value="">-</option>
										  ';
										  	while ($transports = mysqli_fetch_array($result_transports)) {
												echo "<option value='$transports[id_transport]'>$transports[detail]</option>";
										  }
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Status Siswa</td>
									<td>
										<select name="status_siswa">
										  <option value="">-</option>
										  ';
										  	while ($status_siswa = mysqli_fetch_array($result_status_siswa)) {
												echo "<option value='$status_siswa[id_status_siswa]'>$status_siswa[detail]</option>";
										  }
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Status Pembayaran</td>
									<td>
										<select name="status_pembayaran">
										  <option value="">-</option>
										  ';
										  	while ($status_pembayaran = mysqli_fetch_array($result_status_pembayaran)) {
												echo "<option value='$status_pembayaran[id_status_pembayaran]'>$status_pembayaran[detail]</option>";
										  }
										  echo '
										</select>
									</td>
								</tr>
							</table>
						</div>
					</article>

					<article class="module">
						<header><h3>DATA ORANG TUA SISWA</h3></header>
						<div class="module_content">
							<table class="">
								<tr>
									<td width="150px">Nama Ayah</td>
									<td><input type="text" name="namaayah"></td>
								</tr>
								<tr>
									<td>Tempat, Tanggal Lahir</td>
									<td><input type="text" size="5" name="ttayah"> , <input type="date" name="tlayah"></td>
								</tr>
								<tr>
									<td>Kewarganegaraan</td>
									<td><input type="text" name="kwnayah"></td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>
										<select name="agama2">
										  <option value="">-</option>
										  ';
										  	while ($religions2 = mysqli_fetch_array($result_religions2)) {
												echo "<option value='$religions2[id_religion]'>$religions2[detail]</option>";
											}
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Pedidikan Terakhir</td>
									<td><input type="text" name="pnddknayah"></td>
								</tr>
								<tr>
									<td>Pekerjaan</td>
									<td><input type="text" name="pekerjaanayah"></td>
								</tr>
								<tr>
									<td>Alamat Rumah</td>
									<td colspan="10"><textarea name="alamatayah" rows="4" cols="50"></textarea>
								</tr>
								<tr>
									<td>Status Rumah</td>
									<td><input type="text" name="statusrumahayah"></td>
								</tr>
								<tr>
									<td>No. Telp</td>
									<td><input type="text" name="telpayah"></td>
								</tr>
								<tr>
									<td>Penghasilan</td>
									<td><input type="text" name="penghasilanayah"> /Bulan</td>
								</tr>
							</table>
							<br><hr><br>
							<table class="">
								<tr>
									<td width="150px">Nama Ibu</td>
									<td><input type="text" name="namaibu"></td>
								</tr>
								<tr>
									<td>Tempat, Tanggal Lahir</td>
									<td><input type="text" size="5" name="ttibu"> , <input type="date" name="tlibu"></td>
								</tr>
								<tr>
									<td>Kewarganegaraan</td>
									<td><input type="text" name="kwnibu"></td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>
										<select name="agama3">
										  <option value="">-</option>
										  ';
										  	while ($religions3 = mysqli_fetch_array($result_religions3)) {
												echo "<option value='$religions3[id_religion]'>$religions3[detail]</option>";
											}
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Pedidikan Terakhir</td>
									<td><input type="text" name="pnddknibu"></td>
								</tr>
								<tr>
									<td>Pekerjaan</td>
									<td><input type="text" name="pekerjaanibu"></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td colspan="10"><textarea name="alamatibu" rows="4" cols="50"></textarea>
								</tr>
								<tr>
									<td>Status Rumah</td>
									<td><input type="text" name="statusrumahibu"></td>
								</tr>
								<tr>
									<td>No. Telp</td>
									<td><input type="text" name="telpibu"></td>
								</tr>
								<tr>
									<td>Penghasilan</td>
									<td><input type="text" name="penghasilanibu"> /Bulan</td>
								</tr>
							</table>
						</div>
					</article>

					<article class="module">
						<header><h3>DATA SAUDARA KANDUNG SISWA</h3></header>
						<div class="module_content">
							<table class="">
								<tr>
									<td width="150px">Nama</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Usia</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Sekolah</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Pekerjaan</td>
									<td><input type="text" name=""></td>
								</tr>
							</table>
						</div>
					</article>

					<article class="module">
						<header><h3>DATA PRESTASI SISWA</h3></header>
						<div class="module_content">
							<table class="">
								<tr>
									<td width="150px">Jenis Prestasi</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Tingkat</td>
									<td>
										<select name="">
										  <option value="">-</option>
										  ';
										  	while ($tingkat = mysqli_fetch_array($result_tingkat)) {
												echo "<option value='$tingkat[id_tingkat]'>$tingkat[detail]</option>";
											}
										  echo '
										</select>
									</td>
								</tr>
								<tr>
									<td>Nama Prestasi</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Tahun</td>
									<td><input type="text" name="" size="3"></td>
								</tr>
								<tr>
									<td>Penyelenggara</td>
									<td><input type="text" name=""></td>
								</tr>
							</table>
						</div>
					</article>

					<article class="module">
						<header><h3>DATA BEASISWA SISWA</h3></header>
						<div class="module_content">
							<table class="">
								<tr>
									<td width="150px">Jenis</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Penyelenggara</td>
									<td><input type="text" name=""></td>
								</tr>
								<tr>
									<td>Tahun Mulai</td>
									<td><input type="text" name="" size="3"></td>
								</tr>
								<tr>
									<td>Tahun Selesai</td>
									<td><input type="text" name="" size="3"></td>
								</tr>
							</table>
						</div>
					</article>

					<article class="module">
						<header><h3>KONFIRMASI DATA PENDAFTAR</h3></header>
						<div class="module_content">
							<br><input type="checkbox" name="konfirmasi" value="" required=""> Dengan ini saya menyatakan bahwa data yang saya isikan di Formulir ini adalah benar adanya sesuai dengan bukti-bukti yang ada.<br><br>
							<center><input class="btn_daftar" type="submit" value="Daftar"></center>
						</div>
					</article><br><br>
				</form>
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