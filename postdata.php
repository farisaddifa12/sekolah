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

$nama= $_POST['id'];
$nama= $_POST['nama'];
$email= $_POST['email'];
$alamat= $_POST['alamat'];
$tanggallahir= $_POST['tanggallahir'];
$gender= $_POST['gender'];
$kelas= $_POST['kursus'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($tmp,"image/". $foto);

$sql =" INSERT INTO `siswa` (`id`, `nama`, `email`, `alamat`, `tanggallahir`, `gender`,`foto`) VALUES (NULL, '$nama', '$email', '$alamat', '$tanggallahir', '$gender', '$foto')";
$result = $conn->query($sql);

$id = $conn->insert_id;
$sql2 = "INSERT INTO `kursus_siswa` (`id`, `id_siswa`, `id_kursus`) VALUES (NULL, '$id', '$kelas');";
$conn->query($sql2);

    $conn->close();
    header('location:index.php');
?>

</body>
</main>