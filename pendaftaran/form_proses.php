<?php
	include 'fungsi.php';
	$title 	= " - Proses ";

	//ambil data siswa
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$berat = $_POST['berat'];
	$tinggi = $_POST['tinggi'];
	$goldar = $_POST['goldar'];
	$gender = $_POST['gender'];
	$agama1 = $_POST['agama1'];
	$telpsiswa = $_POST['telpsiswa'];
	$emailsiswa = $_POST['emailsiswa'];
	$tempat_lahir = $_POST['tt'];
	$tanggal_lahir = $_POST['tl'];
	$kwnsiswa = $_POST['kwnsiswa'];
	$kebutuhan = $_POST['kebutuhan'];
	$tinggaldengan = $_POST['tinggaldengan'];
	$alamatsiswa = $_POST['alamatsiswa'];
	$sekolah_sebelumnya = $_POST['sekolah_sebelumnya'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$NISN = $_POST['NISN'];
	$NIK = $_POST['NIK'];
	$SKHUN = $_POST['SKHUN'];
	$KPS = $_POST['KPS'];
	$beasiswa1 = $_POST['beasiswa1'];
	$jaraktempuh = $_POST['jaraktempuh'];
	$waktutempuh = $_POST['waktutempuh'];
	$transportasi = $_POST['transportasi'];
	$status_siswa = $_POST['status_siswa'];
	$status_pembayaran = $_POST['status_pembayaran'];

	//Query insert data siswa
    $sqlsiswa = "INSERT INTO students (nis, name, weight, height, blood_type, phone, email, sex, place_birth, date_birth, nationality, id_religion, id_special_needs, stay_with, address, previous_school, id_major, grade, nisn, nik, skhun_smp, no_kps, id_beasiswa, distance_school, id_time_spent, id_transport, id_status_siswa, id_status_pembayaran) VALUES ('$nis', '$nama', '$berat', '$tinggi', '$goldar', '$telpsiswa', '$emailsiswa', '$gender', '$tempat_lahir', '$tanggal_lahir', '$kwnsiswa', '$agama1', '$kebutuhan', '$tinggaldengan', '$alamatsiswa', '$sekolah_sebelumnya', '$jurusan', '$kelas', '$NISN', '$NIK', '$SKHUN', '$KPS', '$jaraktempuh', '$waktutempuh', '$transportasi', '$status_siswa', '$status_pembayaran')";

    //Query insert data parents
    //$sqlparents = "INSERT INTO parents (name, id_relation, place_birth, date_birth, nationality, id_religion, id_education, id_occupation, address, home_status, phone, salary, nis) VALUES ('nama', 'relas', 'place', '2016-11-01', 'Indonesia', 'agama', 'edu', 'occu', 'addr', 'homest', 'phone', '1000', 'nis')"

    //Query insert data sibling
    //$sqlsibling = "INSERT INTO siblings (id_sibling, name, age, school, id_occupation, nis) VALUES (NULL, 'nama', '13', 'school', 'occu', 'nis')"

    if($con->query($sqlsiswa)){
    	$con->query($sqlsiswa);
    }


	/**echo "$nis,<br> 
	$nama, <br> 
	$berat, <br> 
	$tinggi, <br> 
	$goldar, <br> 
	$gender, <br> 
	$agama1, <br> 
	$telpsiswa, <br> 
	$emailsiswa, <br> 
	$tempat_lahir, <br> 
	$tanggal_lahir, <br> 
	$kwnsiswa, <br> 
	$kebutuhan, <br> 
	$tinggaldengan, <br> 
	$alamatsiswa, <br> 
	$sekolah_sebelumnya, <br> 
	$jurusan, <br> 
	$kelas, <br> 
	$NISN, <br> 
	$NIK, <br> 
	$SKHUN, <br> 
	$KPS, <br> 
	$jaraktempuh, <br> 
	$waktutempuh, <br> 
	$transportasi, <br> 
	$status_siswa, <br> 
	$status_pembayaran"
**/


header('Location: detailsiswa.php?siswa='.$nis.'');
	
?>
