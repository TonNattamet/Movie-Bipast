<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>

    <link rel="stylesheet" href="homepage.css">

</head>
<body>
<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MovieBiPast</h2>
            </div>

            <div class="meanu">
                <ul>
                    <li><a href="#">หน้าหลัก</a></li>
                    <li><a href="#">หมวดหมู่</a></li>
                    <li><a href="#">ประเภท</a></li>
                    <li><a href="#">รายการของฉัน</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type to text">
                <a href="#"><button class="btn">ค้นหา</button></a>
            </div>

            
        </div>
        <div class="content">
            <h1>Movies<br><span>Types</span><br>Years</h1>
            <p class="par"></p>
            <h1>You are Member</h1>
            <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </div>
    
</body>
</html>

<?php } ?>