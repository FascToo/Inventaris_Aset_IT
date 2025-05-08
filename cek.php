<?php
// cek.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['log'])) {
    header('Location:../index.php');
    exit;
}

function cekLogin($roleYangDiizinkan = []) {
    if (!isset($_SESSION['log']) || !in_array($_SESSION['role'], $roleYangDiizinkan)) {
        header('location:../index.php');
        exit;
    }
}



?>