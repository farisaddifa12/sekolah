<!doctype html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Sukses</title>

</head>
<body>
<main>

    <div class="container">
        <h1 class="display-5 fw-bold" style="color: black">Data Berhasil Diupdate</h1>
    </div>
    <div class="d-grid gap-2 d-sm-flex">
    <a href="index.php" type="button" class="btn btn-primary mb-3">Kembali</a>
<?php

include 'koneksi.php';

$nama= $_POST['nama'];
$email= $_POST['email'];
$alamat= $_POST['alamat'];
$tanggallahir= $_POST['tanggallahir'];
$gender= $_POST['gender'];
$kelas= $_POST['kelas'];

$sql =" INSERT INTO `siswa` (`id`, `nama`, `email`, `alamat`, `tanggallahir`, `gender`, `kelas`) VALUES (NULL, '$nama', '$email', '$alamat', '$tanggallahir', '$gender', '$kelas')";
$result = $conn->query($sql); 

    $conn->close();
?>

</body>
</main>