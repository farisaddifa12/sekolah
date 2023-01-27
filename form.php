<!doctype html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Formulir Pendaftaran</title>
</head>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <h1 class="fs-4">Formulir Pendaftaran</h1>
      </a>
    </header>
</div>

<?php

include 'koneksi.php';

$sql = "SELECT * FROM `siswa`"; 
$result = $conn->query($sql);



?>


<?php
echo "<form action=\"update.php\" method=\"POST\">";
$row = $result->fetch_assoc();
?>

<div class="container mt-5">
  <div class="mb-3">
    <label>Masukkan Nama</label><br>
    <input type="text" class="form-control" name="nama" value=""><br> 
  </div>
  <div class="mb-3">
    <label>Masukkan Email</label><br>
    <input type="text" class="form-control" name="email" value=""><br>  
  </div>
  <div class="mb-3">
    <label>Masukkan Alamat</label><br>
    <input type="text" class="form-control" name="alamat" value=""><br>
  </div>
  <div class="mb-3">
    <label>Tanggal Lahir</label><br>
    <input type="date" class="form-control" name="tanggallahir" value=""><br>
  </div>
  <div class="mb-3">
    <p>Jenis Kelamin</p>
  <input class="form-check-input" type="radio" name="gender" id="gender1" value="putra">
    <label class="form-check-label" for="gender">
        Putra
    </label>
    <input class="form-check-input" type="radio" name="gender" id="gender2" value="putri">
    <label class="form-check-label" for="gender">
        Putri
    </label>
  </div> 
  <div class="mb-3">
    <p>Pilih Kursus</p>
  <div class="form-check">
        <input class="form-check-input" type="radio" name="kelas" id="flexRadioDefault1" value="1">
        <label class="form-check-label" for="flexRadioDefault1">
    Kelas Programmer
        </label>
  </div>
  <div class="form-check">
        <input class="form-check-input" type="radio" name="kelas" id="flexRadioDefault2" value="2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
    Kelas Progammer
        </label>
  </div>
  <div class="form-check">
        <input class="form-check-input" type="radio" name="kelas" id="flexRadioDefault2" value="3" checked>
        <label class="form-check-label" for="flexRadioDefault2">
    Kelas Enggres
        </label>
  </div>
</div>
    <input type="submit" class="btn btn-primary mb-3" value="kirim">
</div>
</form>

  