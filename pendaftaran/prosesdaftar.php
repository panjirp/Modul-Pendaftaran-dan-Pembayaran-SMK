<?php
	include 'fungsi.php';

	//ambil data siswa
	$nama = $_POST['nama'];
	$berat = $_POST['berat'];
	$tinggi = $_POST['tinggi'];
	$goldar = $_POST['goldar'];
	$gender = $_POST['gender'];
	$agama1 = $_POST['agama1'];
	$telpsiswa = $_POST['telpsiswa'];
	$emailsiswa = $_POST['emailsiswa'];
	$tt = $_POST['tt'];
	$tl = $_POST['tl'];
	$kwnsiswa = $_POST['kwnsiswa'];
	$kebutuhan = $_POST['kebutuhan'];
	$tinggaldengan = $_POST['tinggaldengan'];
	$alamatsiswa = $_POST['alamatsiswa'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$NISN = $_POST['NISN'];
	$NIK = $_POST['NIK'];
	$SKHUN = $_POST['SKHUN'];
	$KPS = $_POST['KPS'];
	$jaraktempuh = $_POST['jaraktempuh'];
	$waktutempuh = $_POST['waktutempuh'];
	$transportasi = $_POST['transportasi'];

	//ambil data ayah siswa
	$namaayah = $_POST['namaayah'];
	$ttayah = $_POST['ttayah'];
	$tlayah = $_POST['tlayah'];
	$kwnayah = $_POST['kwnayah'];
	$agama2 = $_POST['agama2'];
	$pnddknayah = $_POST['pnddknayah'];
	$pekerjaanayah = $_POST['pekerjaanayah'];
	$alamatayah = $_POST['alamatayah'];
	$statusrumahayah = $_POST['statusrumahayah'];
	$telpayah = $_POST['telpayah'];
	$penghasilanayah = $_POST['penghasilanayah'];

	//ambil data ibu siswa
	$namaibu = $_POST['namaibu'];
	$ttibu = $_POST['ttibu'];
	$tlibu = $_POST['tlibu'];
	$kwnibu = $_POST['kwnibu'];
	$agama3 = $_POST['agama3'];
	$pnddknibu = $_POST['pnddknibu'];
	$pekerjaanibu = $_POST['pekerjaanibu'];
	$alamatibu = $_POST['alamatibu'];
	$statusrumahibu = $_POST['statusrumahibu'];
	$telpibu = $_POST['telpibu'];
	$penghasilanibu = $_POST['penghasilanibu'];

	//ambil data saudara siswa
	
	//Insert ke students
	//$ins_student mysql_query("INSERT INTO students (name order_address, book_id, order_amount) VALUES ('$nama','$alamat','$buku','$jumlah')");

	$title = " - Beranda";
	$content	= "beranda.php";
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
				<img class="logosmk" src="/images/logo/logo-smk.png">
			</center>	
		</div>
		
		<hr/>

		<h3>Pendaftaran</h3>
		<ul>
			<li class="icn_new_article"><a href="index.php?p=beranda">Beranda</a></li>
			<li class="icn_new_article"><a href="form_daftar.php">Daftar Baru</a></li>
		</ul>
		<h3>Data</h3>
		<ul>
			<li class="icn_edit_article"><a href="data_daftar.php">Lihat Data Siswa</a></li>
			<li class="icn_edit_article"><a href="statistik.php">Statistik Pendaftar</a></li>
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
					<div class="module_content">
						'.$agama1.'
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