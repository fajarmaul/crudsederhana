<?php
	include "connect.php";

  $id_mhs = $_GET['id'];
	$sql_hapus = "DELETE FROM identitas WHERE id_mahasiswa = '$id_mhs'";

  if (mysqli_query($conn, $sql_hapus)){
?>
		<script language="javascript">alert("Delete Successful");</script>   //skrip javascript untuk alert sderhana
		<script>document.location.href='index.php';</script> //untuk nge link
<?php
	}
	else{
?>
		<script language="javascript">alert("Delete Failed");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
