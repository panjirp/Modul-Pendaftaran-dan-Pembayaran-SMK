<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/layout.css" type="text/css"/>
</head>
<body id="loginbg">
	<section id="login">
		<?php
		include 'fungsi.php';

			if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
			{
				echo '	<form method="POST" action="">
							<center><table id="tbl_login" border="0">
									<tr>
										<td colspan="2"><center><br><img src="pendaftaran/images/logo/logo-smk.png" width="150px" height="150px"><br><hr></center></td>
									</tr>
							    	<tr>
							            <td colspan="2"><center><h3> Silahkan Pilih Aplikasi</h3></center></td>
							        </tr>
							    	<tr>
							            <td><a href="pendaftaran/" style="text-decoration: none;"><center><input class="btn_login" type="button" value="Pendaftaran"></center></a></td>
							        </tr>
							        <tr>
							            <td><a href="pembayaran/" style="text-decoration: none;"><center><input class="btn_login" type="button" value="Pembayaran"></center></a></td>
							        </tr>
							</table><br></center>
					 	</form>';
			} else {
				echo '<center>
						<table id="tbl_login" border="0">
							<tr>
								<td colspan="2"><center><br><img src="/pendaftaran/images/logo/logo-smk.png" width="150px" height="150px"><br><br><hr></center></td>
							</tr>
						   	<tr>
						        <td colspan="2"><center><h3>Harap Login Terlebih Dahulu</h3></center></td>
						        </tr>
						   	<tr>
						        <td><a href="index.php"><center><input class="btn_login" type="button" value="Login"></center></a></td>
						    </tr>
						</table><br></center>';
			}
		?>
	</section>
</body>
</html>