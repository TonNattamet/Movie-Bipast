<?php

include('connection.php');
echo $_POST["keyword"];
$name = $_POST["keyword"];

$sql = "SELECT * FROM data_movie WHERE name LIKE '%$name%' ORDER BY name ASC";;
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
$order=1; 
?>

<<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <title>MovieBipast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="page1.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MovieBipast</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">หมวดหมู่</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          ประเภท
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Adventure</a></li>
            <li><a class="dropdown-item" href="#">War</a></li>
            <li><a class="dropdown-item" href="#">Drama</a></li>
            <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
            <li><a class="dropdown-item" href="#">Family</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">อื่นๆ</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['user']?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<font color="white">
<body>IF YOU ARE LOOKING FOR .. <?PHP  echo $_POST["keyword"]; ?></body>
</font>
<hr>
<div class="album py-5 bg-dark">
    <div class="container">
      <div class="row"> 
      <?php 
        while($row = mysqli_fetch_array($result)){
        ?>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <a href="./play.php?id=<?=$row['id']?>">
            <img src="<?=$row['img']?>" width="100%" height="380" class="card-img-top"/>
            <!-- <div class="card-body">
              <p class="card-text text-center"><?=$row['name']?></p>
              <div class="d-flex justify-content-center align-items-center">
              </div>
              </div> -->
            </a>
          </div>
        </div>
      <?php } ?>
      <a href="user_page.php?"><button type="back" class="btn btn-sm btn-outline-secondary" name="back">BACK</button></a>
      </div>
    </div>
</div>
</body>
</html>
