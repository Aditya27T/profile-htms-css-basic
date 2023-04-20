<?php
// Cek apakah user sudah login atau belum
session_start();
if (!isset($_SESSION['username'])) {
  // Jika belum login, redirect ke halaman login
  header('Location: login.php');
  exit();
}

// Jika sudah login, tampilkan pesan selamat datang
echo "Selamat datang, " . $_SESSION['username'] . "!";
?>
