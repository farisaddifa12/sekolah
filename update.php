
<?php

include 'koneksi.php';

$id = $_POST['id'];

$nama= $_POST['nama'];
// var_dump($_POST);
// die;
$email= $_POST['email'];
$alamat= $_POST['alamat'];
$tanggallahir= $_POST['tanggallahir'];
$gender= $_POST['gender'];
$kelas= $_POST['kelas'];

$sql = "UPDATE `siswa` SET `nama` = '$nama', `email` = '$email', `alamat` = '$alamat', `tanggallahir` = '$tanggallahir', `gender` = '$gender', `kelas` = '$kelas' WHERE `siswa`.`id` = $id;";
$result = $conn->query($sql); 

    $conn->close();
header('location:index.php');
?>



