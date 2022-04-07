<?php 
    header('Cache-Control: no cache'); //no cache
    session_cache_limiter('private_no_expire'); // works
    session_start();
    if ($_SESSION['userlevel'] != 'a') {
      header("Location: index.php");
    }
    include('connection.php');
    $keyword=$_POST['searchmovie'];
    $sql = "SELECT * FROM data_movie WHERE name like '%$keyword%' ORDER BY name ASC";
    $query=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <title>MovieBipast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="memberpage.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_page.php">MovieBipast</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_page.php">หน้าหลัก</a>
        </li>
        <?php
        $queryctg = mysqli_query($conn,"SELECT * FROM category ORDER BY id_category ASC");

        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          หมวดหมู่
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php while($rowctg=mysqli_fetch_array($queryctg)){?>
            <li><a class="dropdown-item" href="./showcategoryadmin.php?id=<?=$rowctg['id_category']?>"><?php echo $rowctg['name_category']; ?></a></li>
            <?php } ?>
          </ul>
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
      <form action="searchmovieadmin.php" method="POST" class="d-flex" >
      <input class="srch" type="search" placeholder="Search" aria-label="Search" name="searchmovie" value="">
      <button class="btn" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>


<div class="album py-5 bg-dark">
    <div class="container">
      <div class="row"> 
      <?php 
        while($result = mysqli_fetch_array($query)){
        ?>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <a href="./play.php?id=<?=$result['id']?>">
            <img src="<?=$result['img']?>" width="100%" height="380" class="card-img-top"/>
            <div class="card-body">
              <p class="card-text text-center"><?=$result['name']?></p>
              <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                  <!-- <a href="formedit.php?id=<?=$result['id']?>&cate=<?=$result['id_categorym']?>"><button type="edit" class="btn btn-sm btn-outline-secondary" name="Edit">Edit</button></a> -->
                  <a href="formedit.php?id=<?=$result['id']?>"><button type="edit" class="btn btn-sm btn-outline-secondary" name="Edit">Edit</button></a>
                  <a href="deletemovie.php?id=<?=$result['id']?>"><button type="submit" class="btn btn-sm btn-outline-secondary" name="Delete" value="Delete">Delete</button></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <a href="admin_page.php"><button type="back" class="btn btn-sm btn-outline-secondary" name="back">Back</button></a>
      </div>
</div>
</body>
</html>