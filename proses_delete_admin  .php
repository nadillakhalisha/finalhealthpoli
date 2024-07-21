<?php
include "connect.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $query = mysqli_query($conn, "DELETE FROM profile_mahasiswa WHERE id = $id");
    if ($query) {
        echo '<script>alert("Data Berhasil Dihapus"); window.location = "../admin";</script>';
    } else {
        echo '<script>alert("Data Gagal Dihapus"); window.location = "../admin";</script>';
    }
}
?>