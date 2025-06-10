<?php
session_start();

if(isset($_POST['login'])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password (contoh sederhana, dapat diganti dengan metode autentikasi yang lebih aman)
    if($username === 'jayyidganteng' && $password === 'pakebanget') {
        $_SESSION['user'] = $username;
        header("Location: codegambang.html"); // Redirect ke halaman dashboard jika login berhasil
        exit();
    } else {
        echo "wait a minute who are you";
    }
}
?>