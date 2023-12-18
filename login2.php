<?php
mysql_connect('localhost','root','');
mysql_select_db('bdfsm');
   
   

    
   

   
    $req =("SELECT* from users");
    $sql=mysql_query($req);
    
    $t=mysql_fetch_array($sql);
    if(mysql_num_rows($sql)==1){
        ?>
        <!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <link   rel="shortcut icon" type="x-ion" href="assets/images/logo mersh3.2.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>FSM MERCH 2023 HTML#</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 FSM MERCH

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="barr" style="background-color:#535353">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          
          <a class="navbar-brand" href="index.html">
            
            <h2 style="margin: 10px;">FSM <em>MERCH</em></h2>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="login1.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="login2.php"> Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login3.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login4.php">Contact Us</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="karoosa.html">
                    <img src="assets/images/shop_logo.png" alt="Your Logo" class="logo-image"style="max-width: 23px; height: auto;">
                </a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
              <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border: 1px solid #000000;">
              
            </form>
            <a id="profile-btn" href="#"  >
                <img id="profile-img" src="assets/images/profile3.png" alt="Profile"class="logo-image"style="max-width: 50px; height: auto;">
            </a>
            
            
             
          </div>
        </div>
      </nav>
       <!-- Profile box -->
       
       <div id="profile-box" style="background-image: url(assets/images/bg2.jpg);border-radius:0px 0px 15px 15px; width: 300px;height:350px; float:right; margin-right:10%;text-align:center;border-radius:15px;background-color:#ffffff;" >
        <div class="imag" style="background-image: url(assets/images/bg.jpg);border-radius:15px 15px 0px 0px;">
        <img id="profile-img" src="assets/images/profile3.png" alt="Profile"class="logo-image"style="max-width: 70px; height: auto;">
        <p style="color:rgb(217, 221, 225); font-size:30px;"><?php echo $t['name']; ?></p>
    </div>
    <div style="background-image: url(assets/images/bg2.jpg);border-radius:0px 0px 15px 15px;">
    <p style="color: #00000000;">d</p>
        <p style="color:rgb(0, 0, 0);font-size: 16px;
        color: #333333;
        margin-bottom: 8px;
        
        text-decoration: underline;"><?php echo $t['email']; ?></p>
        <p style="color: #00000000;">d</p>
        <p style="color: #00000000;">d</p>
    
        <p><a href="index.html">Switch account</a></p>
        <p style="color: #00000000;">d</p>
        <a href="index.html" class="sout" style="padding: 10px 40px;
        
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #b6f017;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s ease;">Sign Out</a>
        </div>
      </div>
      <div></div>
    </header>
    
            
    
     
    

   <!-- Page Content -->
   <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>FSM MERCH products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/logo mersh3.2.png" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.25</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (22)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/logo mersh3.2.png" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$16.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (34)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/logo mersh3.2.png" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$32.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (46)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/logo mersh3.2.png" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$24.60</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (58)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/logo mersh3.2.png" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (60)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/logo mersh3.0.png" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$12.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (72)</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li class="active"><a href="products.html">1</a></li>
              <li><a href="products2.html">2</a></li>
              <li><a href="products3.html">3</a></li>
              <li><a href="products4.html">4</a></li>
              <li><a href="products2.html"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2023 FSM MERCH Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://" target="_blank">FSM MERCH</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#0a4c82';
          }
      }
    </script>


  </body>

</html>


<script>
        // Function to show/hide profile box
        
        var profileBox = document.getElementById('profile-box');
        profileBox.style.display = 'none';
        document.getElementById('profile-btn').onclick = function() {
            
          if (profileBox.style.display === 'none') {
            profileBox.style.display = 'block';
          } else {
            profileBox.style.display = 'none';
          }
        };
    
        
      </script>




    <?php    
    }
    else {
        header("Location: login2.html");
        exit();
    }
 

?>
