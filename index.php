<?php 
    include_once("index.html"); 

    // mysql conn 
    $conn = mysqli_connect("localhost", "root", "admin1234", "world");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }

    // mysql close
    mysqli_close($conn);
?>