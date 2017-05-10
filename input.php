<?php
  include "connect.php";
 ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Input Data</title>
</head>
  <body>
    <form name="create" action="inputproses.php" method="post">
      Email     : <input type="email" name="email" required><br><br>
      Password  : <input type="password" name="pass" required><br><br>
      Nama      :  <input type="text" name="nama_mhs" required><br><br>
      NIM       :  <input type="text" name="nim" required><br><br>
      Jenis Kelamin : <input type="text" name="gender" required><br><br>


      <button type="submit">Submit</button>
    </form>
  </body>
</html>
