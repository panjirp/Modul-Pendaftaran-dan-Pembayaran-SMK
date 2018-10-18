
<header><a href="home.php"><img src="gambar/header.png" width="100%" height="108%"></a></header>

<div style='position:relative;top:4%;display:block;'>
<form action="home.php" method="get" name="FCari" id="FCari" class="tbl_form"> 
<input  id="txtcari" name="txtcari" required size="30" placeholder="search" type="text" value="<?php echo $txtcari;?>">
<input class="" size="30" type="submit" value="Search">
</div>
<section id="secondary_bar">
		<div class="user">
		
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="home.php">Aplikasi PSB</a> <div class="breadcrumb_divider"></div> <a class="current"><?php echo $nav; ?></a></article>		
</form>
</div>
</section>
