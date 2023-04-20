<?php 
    // get data from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password sudah diisi
    if (empty($username) || empty($password)) {
        echo "Username dan password harus diisi.";
        exit();
    }

    // check username and password
    if ($username == 'admin' && $password == 'admin1234') {
        // jika benar, set session
        echo "<script>Swal.fire({
            title: 'Login Berhasil',
            text: 'Selamat Datang Admin',
            icon: 'success',
            confirmButtonText: 'OK'
        })</script>";
        header("Location: welcome.php");
        exit();
    } else {
        // jika salah, redirect ke halaman login
        echo "<script>Swal.fire({
            title: 'Login Gagal',
            text: 'Username atau Password Salah',
            icon: 'error',
            confirmButtonText: 'OK'
        })</script>";
        header("Location: login.php");
        exit();
    } 

?>