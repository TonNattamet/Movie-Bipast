<?php 
    session_start();
    if ($_SESSION['userlevel'] != 'a') {
      header("Location: index.php");
    }
    if (!$_SESSION['userid']) {
        header("Location: index.php");
    }

    include('connection.php');
    
    $id = $_GET['id'];
    $query=mysqli_query($conn,"SELECT * FROM data_movie WHERE id =$id");
    $result=mysqli_fetch_array($query);
    $_SESSION['movieid']= $result['id'];


    
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="formedit.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Form Edit</title>
</head>
<body>
  
	<div class="container" id="container">
		<div class="form-edit">
    <div class="content">
      <form action="editdb.php" method="post">
        <h1 style="text-align:center;">Edit Movie data</h1>
        <div class="user-details">
          <!-- <div class="input-box">
            <span class="details">Movie ID</span>
            <input type="text" name="id" placeholder="" value="<?= $result['id']?>"required>
          </div> -->
          <div class="input-box">
            <span class="details">Movie Name</span>
            <input type="text" name="name" placeholder="" value="<?= $result['name']?>"required>
          </div>
            <!-- $idcategory=$result['id_categorym'];
            $query2=mysqli_query($conn,"SELECT * FROM category WHERE id_category = $idcategory");
            $result1=mysqli_fetch_array($query2); -->
          <div class="input-box">
            <span class="details">Movie Category</span>
            <select name="category" required>
              <option>Select Item</option>
              <?php
                $query1=mysqli_query($conn,"SELECT * FROM category");
              while($rows=$query1->fetch_assoc())
              {   
              ?>
                <option value='<?php echo $rows['id_category'] ?>' <?php if($rows['id_category']==$result['id_categorym']){
                  echo'selected';
                }?>> 
                <?php echo $rows['name_category']; ?></option>
              <?php
              }
              ?>
            </select>
            </div>
          <!-- <div class="input-box">
            <span class="details">Short  name</span>
            <input type="text" placeholder="" required>
          </div> -->
          <!-- <div class="input-box">
            <span class="details">Get out data</span>
            <input type="text" placeholder="" required >
          </div> -->
          <!-- <div class="input-box">
            <span class="details">Get in data</span>
            <input type="text" placeholder="" required>
          </div> -->
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" name="year" placeholder="" value="<?= $result['year']?>"required>
        </div>
          <div class="input-box">
            <span class="details">Time (Min)</span>
            <input type="number" name="time" placeholder="" value="<?= $result['minute']?>"required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Genreral</span>
            <br><br>
          </div> -->
          <div class="input-box">
            <span class="details">Image Link</span>
            <input type="text" name="img" placeholder="" value="<?= $result['img']?>"required>
        </div>
        <div class="input-box">
          <span class="details">Trailer Movie Link</span>
          <input type="text" name="trailerlink" placeholder="" value="<?= $result['vdo_ex']?>"required>
        </div>
        <div class="input-box">
          <span class="details">Full Movie Link</span>
          <input type="text" name="fullmovielink" placeholder="" value="<?= $result['vdo_main']?>"required>
        </div>
        </div>
        <div class="button">
          <input type="submit" value="Edit Data">
        </div>
        <div class="button">
          <input type="submit" name="cancel" value="Cancel">
        </div>
      </form>  
    </div>
		</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>