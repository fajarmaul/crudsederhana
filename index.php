<!DOCTYPE html>
<?php
	include "connect.php";
	$query = mysqli_query($conn, "SELECT * FROM identitas");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Data</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<h1>Daftar Mahasiswa</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>NIM</th>
		<th>Email</th>
		<th>Jenis Kelamin</th>
		<th colspan="2">Menu</th>
	</tr>
<?php
	$count = 1;
	while($result = mysqli_fetch_array($query)){ //selama masih bisa fetch data
		echo
		'<tr>
			<td>'.$count++.'</td>
			<td>'.$result['nama_mhs'].'</td>
			<td>'.$result['nim'].'</td>
			<td>'.$result['email'].'</td>
			<td>'.$result['gender'].'</td>
			<td><a href="input.php?id='.$result['id_mahasiswa'].'" type="button" class="btn btn-default">Create</a></td>
			<td><a href="edit.php?id='.$result['id_mahasiswa'].'"><button type="button" class="btn btn-primary">Edit</button></a></td>
			<td><a href="delete.php?id='.$result['id_mahasiswa'].'"><button type="button" class="btn btn-danger">Delete</button></a></td>
		</tr>';
	}
?>
	</table>
	</div>
</body>
</html>
