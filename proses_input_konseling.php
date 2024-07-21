<?php
include "connect.php";

$permasalahan = isset($_POST['permasalahan']) ? htmlentities($_POST['permasalahan']) : "";
$solusi = isset($_POST['solusi']) ? htmlentities($_POST['solusi']) : "";



$message = ""; 

if (!empty($_POST['input_fisik_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO konseling (permasalahan, solusi) 
    VALUES ('$permasalahan', '$solusi')");
    if (!$query) {
        $message = '<script>alert("Data Gagal Dimasukkan");</script>';
    } else {
        $message = '<script>alert("Data Berhasil Dimasukkan"); 
        window.location = "../konseling";</script>';
    }
}
echo $message;
?>