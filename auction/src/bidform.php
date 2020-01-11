<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="formstyle.css?ver=3">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="dstyle.css?ver=1" />
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
// connect to the database
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');
session_start();
#echo "at least this";
if (isset($_POST['bid']))
{
$pid= $_POST['p_id'];
#echo $pid,'aa';
}
  if(isset($_POST['bidd']))
  { echo "reahcing";
    $pdid= $_POST['pdid'];
    #echo $pdid,'bb';
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $bamt = mysqli_real_escape_string($db, $_POST['bamt']);
    $req = mysqli_real_escape_string($db, $_POST['req']);
    $useid=mysqli_query($db,"Select useid from users where username='$username'");
    $row=mysqli_fetch_row($useid);
    #echo $row[0],'cc';
    $abss=$row[0];
    #echo $pdid,'dd';
    #echo $bamt,'ee';
    #echo $req,'ff';
    $query = "INSERT INTO bidd(userid,prodid, bidamt, request) VALUES('$abss','$pdid', '$bamt', '$req')";
    mysqli_query($db, $query);

  }
  #else
  #echo "not reaching";
?>  
<form method="post" action="bidform.php">
<div class="input-group">
  <label>User Name</label>
  <input type="text" name="username">
</div>
<div class="input-group">
  <label>Bid amount</label>
  <input type="number" name="bamt">
</div>
<div class="input-group">
  <label>Request</label>
  <input type="text" name="req">
</div>
<input type="hidden" name='pdid' value='<?php echo $pid?>'>
<div class="input-group">
  <button type="submit" class="but" name="bidd">Bid</button>
</div>
</form>