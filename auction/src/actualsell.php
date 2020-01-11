<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Auction</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="actualsell.css?ver=5" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>

<body>
  <header>
  <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-book-reader fa-2x mx-3"></i>Auction</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="userlog.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="alogin.php">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link">SEARCH</a>
                <div class="dropdown-content">
                  <a href="search.php">Category</a>
                  <a href="searchname.php">Name</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
session_start();


if(isset($_POST['submit']))
{
$prodname= mysqli_real_escape_string($db, $_POST['Name']);
$pcategory = mysqli_real_escape_string($db, $_POST['category']);
$pdetails= mysqli_real_escape_string($db, $_POST['details']);
$pdate= mysqli_real_escape_string($db, $_POST['date']);

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"uploads/".$pic_name);
		
mysqli_query($db,"INSERT INTO auction(prodname, category, details,image,last_date)
VALUES ('$prodname', '$pcategory', '$pdetails','$pic_name','$pdate')") or die ("query incorrect");

 //header("location: sumit_form.php?success=1");
}

mysqli_close($db);
}
?>


</head>
<body>
<div>
  	<h2 class=he>Add for sale</h2>
  </div>

        <div class="well">
        <form action="actualsell.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input class="input-lg thumbnail form-control" type="text" name="Name" id="product_name" autofocus style="width:100%" placeholder="Product Name" required>
<p>Category</p>
<input class="input-lg thumbnail form-control" type="text" name="category" id="prodcat" autofocus style="width:100%" placeholder="Product Category" required>
<p>Details</p>
<input class="input-lg thumbnail form-control" type="text" name="details" id="proddet" autofocus style="width:100%" placeholder="Product Details" required>
<p>Enter date</p>
<input class="input-lg thumbnail form-control" type="date" name="date" id="proddate" autofocus style="width:100%" placeholder="Last bidding date" required>
<p>Add Image</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
</div>

<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add Product</button>
	</div>
</div>
</form>
</header>
</body>
</html>
