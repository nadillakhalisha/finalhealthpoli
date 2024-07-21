<?php
include "connect.php";

$jumlah_kalori = isset($_POST['jumlah_kalori']) ? htmlentities($_POST['jumlah_kalori']) : "";
$olahraga = isset($_POST['olahraga']) ? htmlentities($_POST['olahraga']) : "";
$jumlah = isset($_POST['jumlah']) ? htmlentities($_POST['jumlah']) : "";


$message = ""; 

if (!empty($_POST['input_fisik_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO fisik (jumlah_kalori, olahraga, jumlah) 
    VALUES ('$jumlah_kalori', '$olahraga', '$jumlah')");
    if (!$query) {
        $message = '<script>alert("Data Gagal Dimasukkan");</script>';
    } else {
        $message = '<script>alert("Data Berhasil Dimasukkan"); 
        window.location = "../fisik";</script>';
    }
}
echo $message;
?>