<?php
include "connect.php";

$Nama = isset($_POST['Nama']) ? htmlentities($_POST['Nama']) : "";
$Pertemuan = isset($_POST['Pertemuan']) ? htmlentities($_POST['Pertemuan']) : "";
$pemantauan = isset($_POST['pemantauan']) ? htmlentities($_POST['pemantauan']) : "";
$hari = isset($_POST['hari']) ? htmlentities($_POST['hari']) : "";
$Tanggal = isset($_POST['Tanggal']) ? htmlentities($_POST['Tanggal']) : "";
$via_konseling = isset($_POST['via_konseling']) ? htmlentities($_POST['via_konseling']) : "";

$message = ""; 

if (!empty($_POST['input_admin_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO profile_mahasiswa (Nama, Pertemuan, pemantauan, hari, Tanggal, via_konseling) 
    VALUES ('$Nama', '$Pertemuan', '$pemantauan', '$hari', '$Tanggal', '$via_konseling')");
    if (!$query) {
        $message = '<script>alert("Data Gagal Dimasukkan");</script>';
    } else {
        $message = '<script>alert("Data Berhasil Dimasukkan"); 
        window.location = "../admin";</script>';
    }
}
echo $message;
?>