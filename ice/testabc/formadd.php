<?php 
    session_start();
    if ($_SESSION['userlevel'] != 'a') {
      header("Location: index.php");
    }
    if (!$_SESSION['userid']) {
        header("Location: index.php");
    }

    include('connection.php');
    $query=mysqli_query($conn,"SELECT * FROM category");


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="formaddpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Form Add</title>
</head>
<body>
  
	<div class="container" id="container">
		<div class="form-add">
    <div class="content">
      <form action="adddb.php" method="post">
        <h1 style="text-align:center;">Add Movie data</h1>
        <div class="user-details">
          <!-- <div class="input-box">
            <span class="details">Movie ID</span>
            <input type="text" name="id" placeholder="" value="<?= $result['id']?>"required>
          </div> -->
          <div class="input-box">
            <span class="details">Movie Name</span>
            <input type="text" name="name" placeholder="" value=""required>
          </div>
          <div class="input-box">
            <span class="details">Movie Category</span>
            <select name="category" required>
              <?php
              while($rows=$query->fetch_assoc())
              {   
                  $name_category=$rows['name_category'];
                  $id_category=$rows['id_category'];
                  echo "<option value='$id_category'>$name_category</option>";
              }
              ?>
            </select>
            </div>
            <!-- <input type="text" name="name" placeholder="" value=""required> -->
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
            <input type="text" name="year" placeholder="" value=""required>
        </div>
          <div class="input-box">
            <span class="details">Time (Min)</span>
            <input type="number" name="time" placeholder="" value=""required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Genreral</span>
            <br><br>
          </div> -->
          <div class="input-box">
            <span class="details">Image Link</span>
            <input type="text" name="img" placeholder="" value=""required>
        </div>
        <div class="input-box">
          <span class="details">Trailer Movie Link</span>
          <input type="text" name="trailerlink" placeholder="" value=""required>
        </div>
        <div class="input-box">
          <span class="details">Full Movie Link</span>
          <input type="text" name="fullmovielink" placeholder="" value=""required>
        </div>
        </div>
        <div class="button">
          <input type="submit" value="Add">
        </div>
      </form>
      <div class="button1">
        <a href="admin_page.php"><input type="submit" name="cancel" value="Cancel"></a>
        </div>
    </div>
		</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>