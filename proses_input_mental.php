<?php
include "connect.php";

$ciri_ciri = isset($_POST['ciri_ciri']) ? htmlentities($_POST['ciri_ciri']) : "";
$efek = isset($_POST['efek']) ? htmlentities($_POST['efek']) : "";
$lama = isset($_POST['lama']) ? htmlentities($_POST['lama']) : "";


$message = ""; 

if (!empty($_POST['input_fisik_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO mental (ciri_ciri, efek, lama) 
    VALUES ('$ciri_ciri', '$efek', '$lama')");
    if (!$query) {
        $message = '<script>alert("Data Gagal Dimasukkan");</script>';
    } else {
        $message = '<script>alert("Data Berhasil Dimasukkan"); 
        window.location = "../mental";</script>';
    }
}
echo $message;
?>