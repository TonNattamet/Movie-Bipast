<?php 
    include('connection.php');

    $moviename=$_POST['name'];
    $category=$_POST['category'];
    $year=$_POST['year'];
    $time=$_POST['time'];
    $img=$_POST['img'];
    $trailerlink=$_POST['trailerlink'];
    $fullmovielink=$_POST['fullmovielink'];

    $sql = "INSERT INTO data_movie
    (name,id_categorym,year,minute,img,vdo_ex,vdo_main)
    VALUES
    ('$moviename','$category','$year','$time','$img','$trailerlink','$fullmovielink')
    ";

    $result=mysqli_query($conn,$sql) or die("Error in sql : $sql".mysqli_error($sql));

    echo "<script>";
        echo "alert('เพิ่มข้อมูลเรียบร้อย');";
        echo "window.location = 'admin_page.php';";
    echo "</script>";
?>