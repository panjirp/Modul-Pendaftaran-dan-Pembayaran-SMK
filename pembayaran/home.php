<?php
include "lib/fungsi.php";
$nav					= "Beranda";
$ambil				= "beranda.php";
$p 					= isset($_GET['p']) ? $_GET['p'] : "";

 $txtcari=$_GET['txtcari'];

	if ($p == "beranda"){
		$nav = "Beranda";
		$ambil 	= "$p.php";
	} elseif ($p == "refspp"){
		$nav 	= "Tabel SPP";
		$ambil 	= "$p.php";
	} elseif ($p == "reflks") {
		$nav 	= "Tabel LKS";
		$ambil 	= "$p.php";
	} elseif ($p == "refpkl") {
		$nav 	= "Tabel PKL";
		$ambil 	= "$p.php";
	} elseif ($p == "refujian") {
		$nav 	= "Tabel UJIAN";
		$ambil 	= "$p.php";
	} elseif(isset($_GET['txtcari'])){
		$nav="Tabel pencarian";
		$ambil="search.php";
	}

?>

<html>
<head>
<link rel="stylesheet" href="css/layout.css" type="text/css"/>
<form action="home.php" method="get" name="FCari" id="FCari" class="tbl_form"> 
<input  id="txtcari" name="txtcari" required size="30" placeholder="search" type="text" value="<?php echo $txtcari;?>">
<input class="" size="30" type="submit" value="Search">
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
			<li class="icn_new_article"><a href="?p=beranda">Beranda</a></li>
			<li class="icn_add_user"><a href="form_daftar.php">Daftar Baru</a></li>
		</ul>
		<h3>Data</h3>
		<ul>
			<li class="icn_edit_article"><a href="data_daftar.php">Lihat Data Siswa</a></li>
			<li class="icn_edit_article"><a href="statistik.php">Statistik Siswa</a></li>
		</ul>
		
		<h3>Referensi</h3>
		<ul>
			<li class="icn_profile"><a href="?p=t_beasiswa">Ref Beasiswa</a></li>
			<li class="icn_profile"><a href="?p=t_pendidikan">Ref Pendidikan</a></li>
			<li class="icn_profile"><a href="?p=t_jurusan">Ref Jurusan</a></li>
			<li class="icn_profile"><a href="?p=t_pekerjaan">Ref Pekerjaan</a></li>
			<li class="icn_profile"><a href="?p=t_prestasi">Ref Prestasi</a></li>
			<li class="icn_profile"><a href="?p=t_hubungan">Ref Hubungan</a></li>
			<li class="icn_profile"><a href="?p=t_agama">Ref Agama</a></li>
			<li class="icn_profile"><a href="?p=t_kebutuhankhusus">Ref Kebutuhan Khusus</a></li>
			<li class="icn_profile"><a href="?p=t_statuspmb">Ref Status Pembayaran</a></li>
			<li class="icn_profile"><a href="?p=t_statussiswa">Ref Status Siswa</a></li>
			<li class="icn_profile"><a href="?p=t_waktutempuh">Ref Waktu Tempuh</a></li>
			<li class="icn_profile"><a href="?p=t_tingkat">Ref Tingkat Prestasi</a></li>
			<li class="icn_profile"><a href="?p=t_transport">Ref Transportasi</a></li>
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
			
			
				<section id="main" class="column">
		<?php include $ambil; ?>
		<div class="spacer"></div>
	</section>
	<script type="text/javascript">
	$('#close').click(function() {
		$('.alert_success').slideUp("fast");
		$('.alert_error').slideUp("fast");
	});

	</script>



</body>

</html>
