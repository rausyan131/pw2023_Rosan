<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>

  <!-- style css -->
  <link rel="stylesheet" href="style.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,100;1,200;1,400;1,600;1,900&display=swap" rel="stylesheet">

</head>

<body>

  <div class="container">

    <div class="infoMahasiswa">
      <table border="1" cellpadding="30" cellspacing="0">


        <tr>
          <th>No.</th>
          <th>Nama.</th>
          <th>foto.</th>
          <th>Aksi.</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) :  ?>

          <tr>

            <td><?= $i++; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td> <img src="img/<?= $mhs["gambar"]; ?>" width="80px"></td>

            <td><a href="more.php?id=<?= $mhs["id"]; ?>">More</a></td>


          </tr>
        <?php endforeach; ?>


      </table>
    </div>

  </div>

</body>

</html>