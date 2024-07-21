<?php
    if (isset($_GET['x']) && $_GET['x'] == 'home') {
        $page = "home.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'admin') {
        $page = "admin.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'edukasi') {
        $page = "edukasi.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'fisik') {
        $page = "fisik.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'konseling') {
        $page = "konseling.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'makanan') {
        $page = "makanan.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'mahasiswa') {
        $page = "mahasiswa.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'mental') {
        $page = "mental.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
        include "login.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
        include "proses/proses_logout.php";
    } else {
        $page = "home.php";
        include "main.php";
    }    
?>