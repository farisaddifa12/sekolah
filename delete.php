<?php

include 'koneksi.php';

$id = $_GET['id'];

$sql ="DELETE FROM siswa WHERE `siswa`.`id` = $id";
$result = $conn->query($sql); 

    $conn->close();
    header('location:index.php');
?>