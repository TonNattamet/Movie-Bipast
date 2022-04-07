<?php 

    $conn = mysqli_connect("localhost", "root", "", "loginadminuser");

    if (!$conn) {
        die("Failed to connect to databse " . mysqli_error($conn));
    }

?>