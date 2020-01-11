<!DOCTYPE html>
<html>
<head>
<title>Signin Template for Bootstrap</title>
    <link href="formstyle.css" rel="stylesheet">
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="dstyle.css?ver=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
              <a class="nav-link" href="#">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COURSE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PRICE</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link">PAGES</a>
                <div class="dropdown-content">
                  <a href="#">Generic</a>
                  <a href="#">Element</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <br/>
    <br/>
    <br/>
<table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
?>	

   <form method="post" action="sell.php",enctype="multipart/form-data">
   <div class="input-group">
  	  <label for="Name" class="sr-only">Product Name</label>
  	  <input type="text" name="Name" id="Name" placeholder="Product Name" required>
  	</div>
   <div class="input-group">
  	  <label for="category" class="sr-only">Product Category</label>
  	  <input type="text" name="category" id="category" placeholder="Category" required>
  	</div>
  	<div class="input-group">
  	  <label for="details" class="sr-only">Details</label>
  	  <input type="text" name="details" id="details" placeholder="Details" required>
  	</div>
    <div>
    <label for="file" class="sr-only">Image</label>
  	  <input type="file" name="picture">
  	</div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
    </form>
 <?php
 if(isset($_POST['submit']))
 {  
  $prodname= mysqli_real_escape_string($db, $_POST['Name']);
  $pcategory = mysqli_real_escape_string($db, $_POST['category']);
  $pdetails= mysqli_real_escape_string($db, $_POST['details']);
    $picture_name=$_FILES['picture']['name'];
    $picture_type=$_FILES['picture']['type'];
    $picture_tmp_name=$_FILES['picture']['tmp_name'];
    $picture_size=$_FILES['picture']['size'];
    
    if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
    {
      if($picture_size<=50000000)
      
        $pic_name=time()."_".$picture_name;
        move_uploaded_file($picture_tmp_name,"uploaded/".$pic_name);
        
    mysqli_query($con,"INSERT INTO auction(prodname, category, details,image)
    VALUES ('$prodname', '$pcategory', '$pdetails','$image')") or die ("query incorrect");
    
  
    }
  }
	 
?> 
  </body>
</html>