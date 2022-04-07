<?php 

    $conn = mysqli_connect("localhost", "root", "", "testabc");

    if (!$conn) {
        die("Failed to connect to databse " . mysqli_error($conn));
    }

?>