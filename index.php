<html>
<head>
	<title>PSB - Login</title>
	<link rel="stylesheet" href="css/layout.css" type="text/css"/>
</head>
<body id="loginbg">

<?php
include 'fungsi.php';

if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo "<script type='text/javascript'>alert('Anda sudah masuk'); window.location.href = 'welcome.php' ;</script>";
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo '
			
				<section id="login">
					<form method="POST" action="">
						<center><table id="tbl_login" border="0">
								<tr>
									<td colspan="2"><center><br><img src="pendaftaran/images/logo/logo-smk.png" width="150px" height="150px"><br><br></center></td>
								</tr>
						    	<tr>
						            <td colspan="2"><center><h3>Login Aplikasi</h3></center></td>
						        </tr>
						    	<tr>
						            <td><strong>Username:</strong></td>
						            <td><input type="text" placeholder="Masukan Username" name="username"></td>
						        </tr>

						        <tr>
						            <td><strong>Password :</strong></td>
						            <td><input type="password" placeholder="Masukan Password" name="pw"></td>
						        </tr>

						        <tr>
						            <td colspan="2"><br><center><input class="btn_login" type="submit" value="Masuk"></center></td>
						        </tr>
						</table><br></center>
				 	</form>
			 	</section>';
	}
	else
	{
		$sql = "SELECT 
					admin_id,
					admin_nama,
					admin_password
				FROM
					admin
				WHERE
					admin_id = '" . mysqli_real_escape_string($con, $_POST['username']) . "'
				AND
					admin_password = '" . mysqli_real_escape_string($con, $_POST['pw']) . "'";
					
		$result = mysqli_query($con, $sql);
		if(!$result)
		{
			echo "<script type='text/javascript'>alert('Gagal masuk.'); window.location.href = 'login.php' ;</script>";
		}
		else
		{

			if(mysqli_num_rows($result) == 0)
			{
				echo "<script type='text/javascript'>alert('Username tidak cocok dengan password!'); window.location.href = 'login.php' ;</script>";
			}
			else
			{
				$_SESSION['signed_in'] = true;
				
				while($row = mysqli_fetch_assoc($result))
				{
					$_SESSION['username'] 	= $row['admin_id'];
					$_SESSION['nama'] 	= $row['admin_nama'];
					$_SESSION['pw'] 	= $row['admin_password'];
				}
				
				echo "<script type='text/javascript'>alert('Selamat datang ". $_SESSION['nama']."'); window.location.href = 'welcome.php' ;</script>";
			}
		}		
	}
}

?>

</body>
</html>