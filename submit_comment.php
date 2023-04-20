<?php 
    // database connection
    $server = 'localhost';
    $user = 'root';
    $password = 'admin1234';
    $database = 'aser';

    $conn = mysqli_connect($server, $user, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // get data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // insert data into mysql
    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // close connection
    $conn->close();

    // redirect to index.php
    header("Location: index.php");

?>