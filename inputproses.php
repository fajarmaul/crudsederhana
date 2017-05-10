<?php
	include "connect.php";

	$email = $_POST['email']; // dollar underscore post itu ngambil data dari yang sebelumnya
	$pass = $_POST['pass'];
	$name = $_POST['nama_mhs'];
	$nim = $_POST['nim'];
	$jk = $_POST['gender'];

//insert into buat nambahin entitas ke data base
//php gak ada tipe varibel ,, jadi enak aja masuk masukin
	$sql_buat = "INSERT INTO identitas(id_mahasiswa, nama_mhs, nim,pass, email, gender) VALUE('','$name','$nim','$pass','$email','$jk')";
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Input Successful");</script>   //skrip javascript untuk alert sderhana
		<script>document.location.href='input.php';</script> //untuk nge link
<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed");</script>
		<script>document.location.href='input.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
