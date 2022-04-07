<?php 
    include('connection.php');
    
    $id = $_GET['id'];
    $sql = "DELETE FROM data_movie WHERE id=$id";
    $query=mysqli_query($conn,$sql);
    echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อย');";
        echo "window.location = 'admin_page.php';";
    echo "</script>";
?>