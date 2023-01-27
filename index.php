<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
  <main> 
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <h1 class="fs-4">Tabel Data Siswa</h1>
      </a>
    </header>
</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir </th> 
      <th scope="col">Jenis Kelamin </th> 
      <th scope="col">Kelas</th>  
      <th scope="col"><a href="form.php" type="button" class="btn btn-success">Tambah Data</button></th>           
    </tr>
  </thead>
  </div>

<?php


include 'koneksi.php';


$sql = "SELECT * FROM `siswa`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $id = 1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      echo "
  
      
      <tr>
        <td>" . $id++. "</td>
        <td>" . $row["nama"]. "</td>
        <td>" . $row["email"]. "</td>
        <td>" . $row["alamat"]. "</td>
        <td>" . $row["tanggallahir"]. "</td>
        <td>" . $row["gender"]. "</td>
        <td>" . $row["kelas"]. "</td>
        <td><a href=\"edit.php\">edit</a><br><a href='delete.php?id=" .$row["id"]. "'>Hapus</a>
        </td>
      </tr>";
  
  
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  


