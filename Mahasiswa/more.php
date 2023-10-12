
<?php 

require 'functions.php';

$id = $_GET["id"];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id= $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>

<div class="card">

<img src="img/<?= $mahasiswa["gambar"];?>" width="200">

<div class="detail"> <?= $mahasiswa["nama"]; ?></div>
<div class="detail"> <?= $mahasiswa["nrp"]; ?></div>
<div class="detail"> <?= $mahasiswa["email"]; ?></div>
<div class="detail"> <?= $mahasiswa["jurusan"]; ?></div>
</div>

<div class="back"><a href="index.php">Back</a></div>

  
</body>
</html>