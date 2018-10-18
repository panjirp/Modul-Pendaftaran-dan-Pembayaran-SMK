<?php

	include 'lib/fungsi.php';
$nav					= "Beranda";
$ambil				= "beranda.php";
$p 					= isset($_GET['p']) ? $_GET['p'] : "";



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
	} 
	
	if(isset($_GET['txtcari'])){
		$nav="Tabel pencarian";
		$ambil="search.php";
	}
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="css/test.css" type="text/css"/>

</head>

<body>

<aside id="sidebar">
		<div id="header">
			<center>
				<img class="logosmk" src="images/logo/logo-smk.png">
			</center>	
		</div>
		<br/>
		
		<h3>Pembayaran</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="?p=beranda">Beranda</a></li>
		</ul>
			<h3>Referensi</h3>
		<ul class="toggle">
			<li class="icn_profile"><a href="?p=refujian">Tabel Referensi Ujian</a></li>
			<li class="icn_profile"><a href="?p=refspp">Tabel Referensi SPP</a></li>
			<li class="icn_profile"><a href="?p=reflks">Tabel Referensi LKS</a></li>
			<li class="icn_profile"><a href="?p=refpkl">Tabel Referensi PKL</a></li>
			</ul>
			<h3>Tools</h3>
		<ul>
			<li class="icn_jump_back"><a href="../welcome.php"">Menu</a></li>
			<li class="icn_jump_back"><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');">Logout</a></li>
		</ul>
			<footer>
			<hr />
			<p><strong>Aplikasi Pembayaran SMK Pariwisata Citayam</a></strong></p>
 </footer>
</aside>
			
			
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
