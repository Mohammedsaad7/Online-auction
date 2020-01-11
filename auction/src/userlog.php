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
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>The perfect site for Bidding</h6>
          <h1>Bid on Anything</h1>
          <p>
            We are a site that lets you hold items on auction and bid on them.
          </p>
          <a href="bid.php">
          <button class="btn btn-light px-5 py-2 primary-btn">
            Bid now
          </button>
        </a>
        <a href="actualsell.php">
          <button class="btn btn-light px-5 py-2 primary-btn">
            Sell now
          </button>
        </a>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="../assets/order.jpg" alt="Book" />
        </div>
      </div>
    </div>
  </header>
  <?php
  $db = mysqli_connect('localhost', 'root', '', 'login');
  $nouse=mysqli_query($db,"Select count(1) FROM users");
  $nouser=mysqli_fetch_row($nouse);
  $noadmin=mysqli_query($db,"Select count(1) from adminlog");
  $noadminr=mysqli_fetch_row($noadmin);
  $noprod=mysqli_query($db,"Select count(1) from auction");
  $noprodr=mysqli_fetch_row($noprod);
  $nobid=mysqli_query($db,"Select count(1) from bidd");
  $nobidr=mysqli_fetch_row($nobid);?>
  <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="../assets/pexels-photo-1904769.jpeg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>Idea behind this</h1>
              <p class="pt-4">
              There are massive amounts of preparation that goes into a finding and researching a property for conducting auctions. Buyers are forced to go the auctioning sites. But now, you only need to turn on your computer and enter the web-site at any time. Online auction had an initial reach that far outgrew the expectations of anyone. This is mainly because online auctions break down and remove the physical limitations of traditional auctions such as geography, presence, time, space, and a small target audience.It is an implementation of web auctions, like eBay, Sotheby’s, and others with it’s own design and bid politics.
              </p>
              <p>
              This web site has an intuitive interface and unique visual objects that make it friendly for use. We used an authentication to system to reduce spam. There are two models when it comes to online bidding common-value model and private-value model. However, we will not be using either of these two models. This is because we aim to maximize the profit earned by each seller. This even gives the familiarity of a real life auction
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Some Features That Made Us Unique</h1>
      
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1><?php echo $nouser[0]?></h1>
            <p>No. of users</p>
          </div>
          <div class="rect">
            <h1><?php echo $noadminr[0]?></h1>
            <p>No of admins</p>
          </div>
          <div class="rect">
            <h1><?php echo $noprodr[0]?></h1>
            <p>No of products</p>
          </div>
          <div class="rect">
            <h1><?php echo $nobidr[0]?></h1>
            <p>Bids made</p>
          </div>
        </div>
      </div>


      <div class="purchase text-center">
        <h1>Bid on anything You Want</h1>
        <p>
          We provide you with a secure portal to auction.
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Laptops</h5>
                </div>
                <p class="card-text">
                  We sell laptops
                <div class="pricing">
                  <h1>$77.99</h1>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5">Bid</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Mobile</h5>
                </div>
                <p class="card-text">
                  You can auction mobiles.
                </p>
                <div class="pricing">
                  <h1>$99.99</h1>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5">Purchase Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Furniture</h5>
                </div>
                <p class="card-text">
                  Bid on furniture
                </p>
                <div class="pricing">
                  <h1>$58.99</h1>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-3 container-fluid p-0 text-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>Download Our App for all Platform</h1>
          <p>
            We are under the process of developing an app for our webiste. This app will be built for both ios and android systems.
          </p>
        </div>
      </div>
      <div class="platform row">
        <div class="col-md-6 col-sm-12 text-right">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">Desktop</h3>
                <p class="p-0 m-0">On website</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">On Mobile</h3>
                <p class="p-0 m-0">On Play Store</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
  <!--  <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">What our Reader's Say about us</h1>
        <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="../assets/UI-face-3.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Blalock Jolene</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                  <p class="text-black-50">CEO at Google</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="../assets/UI-face-1.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Allen Agnes</h3>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                          minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                        </p>
                        <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                        <p class="text-black-50">CEO at Google</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="../assets/UI-face-2.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Amiel Barbara</h3>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                          minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                        </p>
                        <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                        <p class="text-black-50">CEO at Google</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="../assets/UI-face-4.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Olivia Louis</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                  <p class="text-black-50">CEO at Google</p>
                </div>
              </div>
        </div>
      </div>
    </section>
  -->
  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">We provide auction service.We provide bidding service.</p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>