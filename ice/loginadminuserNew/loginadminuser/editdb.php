<?php 
    include('connection.php');

    if (isset($_POST['cancel'])) {
    echo "<script>";
        echo "window.location = 'admin_page.php';";
    echo "</script>";
    }else{
    
    session_start();
    $id = $_SESSION['movieid'];
    $moviename=$_POST['name'];
    $year=$_POST['year'];
    $time=$_POST['time'];
    $img=$_POST['img'];
    $trailerlink=$_POST['trailerlink'];
    $fullmovielink=$_POST['fullmovielink'];

    $sql="UPDATE data_movie SET


    name='$moviename',
    year='$year',
    minute='$time',
    img='$img',
    vdo_ex='$trailerlink',
    vdo_main='$fullmovielink'

    WHERE id=$id
    ";

    $query=mysqli_query($conn,$sql);
    echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อย');";
        echo "window.location = 'admin_page.php';";
    echo "</script>";

    }
?>