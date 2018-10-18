<?php

include 'lib/fungsi.php';
$nav					= "Tabel Pembayaran";
$ambil				= "tunggakanspp.php";
$p 					= isset($_GET['p']) ? $_GET['p'] : "";



?>


<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="css/test.css" type="text/css"/>

<script>function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
</script>
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
			<li class="icn_new_article"><a href="index.php">Beranda</a></li>
		</ul>
			<h3>Referensi</h3>
		<ul class="toggle">
			<li class="icn_profile"><a href="index.php?p=refujian">Tabel Referensi Ujian</a></li>
			<li class="icn_profile"><a href="index.php?p=refspp">Tabel Referensi SPP</a></li>
			<li class="icn_profile"><a href="index.php?p=reflks">Tabel Referensi LKS</a></li>
			<li class="icn_profile"><a href="index.php?p=refpkl">Tabel Referensi PKL</a></li>
			</ul>
			<h3>Data Pembayaran</h3>
						<ul class="toggle">
<li class="icn_edit_article"><a name="lks" href="detailspp.php?nis=<?php echo $nis;?>" style="text-decoration:none"> Detail SPP</a></li>
<li class="icn_edit_article"><a name="lks"  href="detailujian.php?nis=<?php echo $nis;?>" style="text-decoration:none"> Detail UJIAN</a></li>
<li class="icn_edit_article"><a name="lks" href="detaillks.php?nis=<?php echo $nis;?>" style="text-decoration:none"> Detail LKS</a></li>
<li class="icn_edit_article"><a name="lks" href="detailpkl.php?nis=<?php echo $nis;?>" style="text-decoration:none"> Detail PKL</a></li>
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