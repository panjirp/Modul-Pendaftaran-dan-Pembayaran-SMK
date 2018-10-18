<?php
	$sql = "SELECT * FROM ref_tingkat";
	$result = mysqli_query($con, $sql)or die('Error');

	if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
	{
		echo '	<article class="module">
					<header><h3>TABEL REFERENSI TINGKAT PRESTASI</h3></header>
					<div class="module_content">
						<table class="tbl_data" border="0" align="center">
							<tr>
								<th>ID</th>
								<th>Deskripsi</th>
							</tr>';
								while ($data = mysqli_fetch_array($result)) {
									echo '
										<tr>
											<td>'.$data["id_tingkat"].'</td>
											<td>'.$data["detail"].'</td>
										</tr>
									';
								}
		echo '
						</table>
					</div>
				</article>
			</section>
		';
	} else {
		echo '<section id="main" class="column">
				<article class="module">
					<header><h3>HARAP login</h3></header>
					<div class="module_content">
						Anda belum login, silahkan <a href="login.php">login</a>.
					</div>
				</article>
			  ';
	}
?>