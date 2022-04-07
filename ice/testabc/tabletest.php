<?php 
    session_start();
    if ($_SESSION['userlevel'] != 'a') {
      header("Location: index.php");
    }
    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

    include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="styletable.css">
</head>

<body>

    <h1>Table</h1>
    <hr>

    <table>
        <tr id="header">
            <?php
                $result = mysqli_query($conn,"SELECT name_category from category");
                if($result -> num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>". $row["name_category"] ."</td><tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 Result";
                }
            ?>
</body>
</html>
<?php } ?>