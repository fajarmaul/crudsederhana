<!DOCTYPE html>
<?php
    include "connect.php"; //agar slalu konek ke data base
    $id_mhs = $_GET['id'];  //mengambil data dengan id yang sudah dipilih
    $query = mysqli_query($conn, "SELECT * FROM identitas WHERE id_mahasiswa = '$id_mhs'");
    $result = mysqli_fetch_array($query);
 ?>

 <html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input</title>
</head>
<body>
  <form name="create" action="editproses.php" method="POST"> <!-- editproses untuk edit -->
    <input type="hidden" name="id_mahasiswa" value="<?php echo $result['id_mahasiswa'];?>">
    Email : <input type="email" name="email" value="<?php echo $result['email'];?>" required><br><br> <!--value untuk edit di form langsung-->
    <!--Pass : <input type="password" name="passmhs" value="<?php echo $result ['pass'];?>" required><br><br>-->
    Nama : <input type="text" name="nama_mhs" value="<?php echo $result ['nama_mhs'];?>" required><br><br>
    NIM : <input type="text" name="nim" value="<?php echo $result ['nim'];?>" required><br><br>
    Jenis Kelamin : <input type="text" name="gender" value="<?php echo $result ['gender'];?>" required><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
