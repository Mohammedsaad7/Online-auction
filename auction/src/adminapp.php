<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="bidcss.css?ver=5">
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
	   $result="SELECT * from auction";
	   $records=mysqli_query($db,$result);
?>
  			<div class="form">
          <div class="content">
        <div class="card-deck">
  
  	<?php
    $fold='uploads/';
	  	echo"<table>";
	   while($recorddisp=mysqli_fetch_assoc($records))
    {	
      if($recorddisp['approve']==0)
      {
      ?>
    <div class="card">
      <img class="card-img-top img fluid" alt="image" src="uploads/<?php echo $recorddisp['image'];?>" >
        <div class="card-title">
          <?php echo $recorddisp['prodname'];?></div>
            <div class="card-footer">
              <?php	echo $recorddisp['category'];?></div>
            <div class='card-body'>
              <?php echo $recorddisp['details']; 
                $dat=$recorddisp['last_date'];?>
                <?php $pid=$recorddisp['prod_id'];?>
              <form method="post" action="adminapp.php">
                <input type="submit" name="app">
              </form>
            </div>
            <div class='card-header' id="<?php echo $pid;?>"></div> 

      <script>
        function ddd(){
    var dat=<?php echo (json_encode($dat)); ?>;
    var fdat=dat+' 00:00:00';
    console.log(fdat);
    var deadline=new Date(fdat).getTime();
    var now=new Date().getTime();
    var t=deadline-now;
    var days=Math.floor(t/(1000*60*60*24));
    var hours=Math.floor((t/(1000*60*60*24))/(1000*60*60));
    var minutes=Math.floor((t%(1000*60*60))/(1000*60));
    var seconds=Math.floor((t%(1000*60))/1000);
    res=days+':'+hours+':'+minutes+':'+seconds;
    var i="<?php echo $pid?>"
    console.log(res);
    if (t<0)
    {
      clearInterval(x);
      console.log("Expired");
      document.getElementById(i).innerHTML="Expired";
    }
    else
    console.log(days,"d",hours,'h',minutes,"m",seconds,"s");
    document.getElementById(i).innerHTML=res;
    
        }
        setInterval(ddd,1000)
    </script>
    </div>
      <?php
    }
  }
?>
<?php
    if (isset($_POST['app']))
    {
    $db = mysqli_connect('localhost', 'root', '', 'login');
    $query=mysqli_query($db,"update auction set approve=1 where prod_id='$pid'");
    }
    ?>
</header>
</body>

  	</html> 	