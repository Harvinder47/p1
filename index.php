<?php
session_start();
include_once("config.php");
include_once("constants.php");
include_once("functions.php");

 error_reporting(E_ALL); ini_set('display_errors', 1); 
 
?>
 
<!DOCTYPE html>
<html>
<head>

<title><?php echo $projectTitle;?> </title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> 
<link href="assets/css/style.css" rel="stylesheet"> 	  
        
      <style> 
         @media (min-width:768px){#header .navbar { top:-810px;} #header{position:absolute;}}
		  @media (max-width:767px){#header .navbar{background-color:#000;}#header .navbar-collapse ul li a{color:#fff;}}
         .modal-dialog {  width: 100%;  height: 100%;  padding: 0;  margin:0; }
         .modal-content { height: 100%;  border-radius: 0; border:0px;  }
         .navbar-collapse1 .navbar-nav li a{ font-size:16px;}
         @media (min-width:768px){
         nav.top{ position:absolute; background-color:transparent; margin-top:20px; }
         }
         @media (max-width:767px){
         nav.top{ position:relative; background-color:#07080A; margin-top:0px; }
         }
      </style>
	  
    

 
</head>
<body  >
  
 


 <!----------------------------Below Code Is Used For Slider-------------------------------------->
 
       
      <nav class="navbar top navbar-inverse navbar1 hidden-xs" role="banner"  style="z-index:100; width:100%; box-shadow:none;">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse1" >
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.php"><!-- <img src="assets/images/goteso-logo-white.png" class="img-responsive" alt="goteso-logo" style="width:95%;"> --> <span style="color:#fff;">KBEAUTY WAVES</span> </a>
            </div>
            <div class="collapse  navbar-collapse1  navbar-collapse ">
                
			    <ul class="nav navbar-nav  navbar-right"  >
                  <li><a href="#">COMPANY</a></li>
                  <li><a href="brands.php" >BRANDS</a></li>
                  <li><a href="#">WHOLESALER</a></li>
                  <li><a href="#">PRICE SHEETS</a></li>  				
				  <li><a href="#"><button class="btn btn-account">Account</button></a></li> 
               </ul>
            </div>
         </div>
         <!--/.container-->
      </nav>
      <!--/nav-->
	  
	  
	  
 
 
<?php include('header.php'); ?>
 
	  
	    <!-------- Navbar fixed top code start Here--------->
      <style>
         /* Note: Try to remove the following lines to see the effect of CSS positioning */
         .affix { top: 0 !important;  width: 100%;  z-index:100; oapcity:1 !important; display:block;background-color:#fbfbfb!important;color:#4b4b4b!important; }
         .affix + .container-fluid { padding-top: 70px; z-index:100; opacity:1; }
      </style>
      <!-------Navbar fixed top code ends Here---------->
	  
      <section id="main-slider" class="no-margin " data-ride="carousel" data-interval="3000" >
         <div class="carousel slide">
 
            <div class="carousel-inner">
               <div class="item active" style="background-image: url(assets/images/slider/web-application.jpg)">
                  <div class="container">
                     <div class="row slide-margin">
                        <div class="col-sm-12">
                           <div class="carousel-content text-center">
                              <h3 class="text-center animation animated-item-2 ">Welcometo K Beauty Wave</h3>
                              <br>
                              <h1 class="text-center animation animated-item-1 " >Register to become a Wholesaler today!</h1>
                              <br><br>
                              <a href="wholesaler-register.php" class="animation animated-item-3"><button class="btn btn-lg  ">REGISTER NOW</button></a>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div>
               <!--/.item-->
               <div class="item" style="background-image: url(assets/images/slider/web-application.jpg)">
                  <div class="container">
                     <div class="row slide-margin">
                        <div class="col-sm-12">
                           <div class="carousel-content text-center">
                              <h3 class="text-center animation animated-item-2">Welcome to K Beauty Wave</h3>
                              <br> 
                              <h1 class="text-center animation animated-item-1">Register to become a Wholesaler today!</h1>
                              <br><br>
                              <a href="wholesaler-register.php" class="animation animated-item-3"><button class="btn btn-lg">REGISTER NOW</button></a>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div>
                
               <!--/.item-->
               <div class="item" style="background-image: url(assets/images/slider/startup-solutions.jpg)">
                  <div class="container">
                     <div class="row slide-margin">
                        <div class="col-sm-12">
                           <div class="carousel-content text-center">
                              <h3 class="text-center animation animated-item-2">Welcome to K BEAUTY Wave</h3>
                              <br> 
                              <h1 class="text-center animation animated-item-1">Register to become a Wholesaler today!</h1>
                              <br><br>
                              <a href="wholesaler-register.php" class="animation animated-item-3"><button class="btn btn-lg">REGISTER NOW</button></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/.item-->
            </div>
            <!--/.carousel-inner-->
			
			<!-- Left and right controls -->
    <a class="left carousel-control" href="#main-slider" data-slide="prev">
      <i class="fa fa-chevron-left"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main-slider" data-slide="next">
      <i class="fa fa-chevron-right"></i>
      <span class="sr-only">Next</span>
    </a>
         </div>
         <!--/.carousel--> 
      </section>
      <!--/#main-slider-->
      <!-----------------------------Above Code Is Used For Slider----------------------------------->
	  
	  
    
	  
    
	  
	  
	  
	  
			<!----------------------------Below Code Is Used For Content-------------------------------------->
			<section id="company">
			   <div class="container ">
            <div class="row">
			  <div class="col-sm-12">
				
				<div class="row text-center company-content">
				  <div class="col-sm-6 card">
				     <img src="assets/images/shopping-cart.png" alt="" class="center-block">
					 <h3>Become a <b>wholesaler</b></h3><br>
					 <a href=""><button class="btn btn-register">REGISTER NOW</button></a>
				  </div>
				  <div class="col-sm-6 card">
				     <img src="assets/images/order-process.jpg" alt="" class="center-block">
					 <h3>order <b>process</b></h3> <br>
					 <a href="order-process.php"><button class="btn btn-register">REGISTER NOW</button></a>
				  </div>
				  <div class="col-sm-6 card third">
				     <img src="assets/images/shopping-cart.png" alt="" class="center-block">
					 <h3>submit your <b>brand</b></h3><br>
					 <a href="submit-your-brand.php"><button class="btn btn-register">REGISTER NOW</button></a>
				  </div>
				  <div class="col-sm-6 card">
				     <img src="assets/images/shopping-cart.png" alt="" class="center-block">
					 <h3>about <b>us</b></h3><br>
					 <a href=""><button class="btn btn-register">REGISTER NOW</button></a>
				  </div>
				</div>
			  </div>
			  </div>
			  </div>
			</section>
		    <!----------------------------Above Code Is Used For Content-------------------------------------->
			
			
			
	  
	  <!----------------------------Below Code Is Used For Works Content-------------------------------------->
			<section id="works">
			  <div class="container">
              <div class="row">
				  <div class="col-sm-12">
				    <h2 class="text-center"><b>How</b> It Works</h2>
					<span class="border-center"></span>
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-sm-6 col-md-3">
				     <div class="card">
					   <div class="card-block text-center">
					     <h3>Step 1</h3>
						 <p>Register as a Wholesaler</p>
					   </div>
					 </div>
				  </div>
				  <div class="col-sm-6 col-md-3">
				      <div class="card">
					   <div class="card-block text-center">
					     <h3>Step 2</h3>
						 <p>Access all exclusive Brands pricings</p>
					   </div>
					 </div>
				  </div>
				  <div class="col-sm-6 col-md-3">
				      <div class="card">
					   <div class="card-block text-center">
					      <h3>Step 3</h3>
						 <p>Fill out the form and submit via email</p>
					   </div>
					 </div>
				  </div>
				  <div class="col-sm-6 col-md-3">
				      <div class="card">
					   <div class="card-block text-center">
					      <h3>Step 4</h3>
						 <p>Make payment & the order is processed</p>
					   </div>
					 </div>
				  </div> 
			  </div>
			  </div>
			</section>
		    <!----------------------------Above Code Is Used For Works Content-------------------------------------->
			
			
			<!----------------------------Below Code Is Used For Feature Brands-------------------------------------->
			<section id="feature-brands">
			   <div class="container">
             <div class="row">
				  <div class="col-sm-12">
				    <h2 class="text-center"><b>Featured</b> Brands</h2>
				  </div>
				</div>
				
				<div class="row feature-content">
				  <div class="col-sm-4 col-md-3 col-lg-2 ">
				     <img src="assets/images/featured-brands/1.jpg" alt="" class=" img-responsive center-block"> 
				  </div>
				   <div class="col-sm-4 col-md-3 col-lg-2 ">
				     <img src="assets/images/featured-brands/2.jpg" alt="" class="img-responsive center-block"> 
				  </div>
				   <div class="col-sm-4 col-md-3 col-lg-2 ">
				     <img src="assets/images/featured-brands/3.jpg" alt="" class="img-responsive center-block"> 
				  </div>
				   <div class="col-sm-4 col-md-3 col-lg-2 ">
				     <img src="assets/images/featured-brands/4.jpg" alt="" class="img-responsive center-block"> 
				  </div>
				   <div class="col-sm-4 col-md-3 col-lg-2 ">
				     <img src="assets/images/featured-brands/5.jpg" alt="" class="img-responsive center-block"> 
				  </div>
				   <div class="col-sm-4 col-md-3 col-lg-2 ">
				     <img src="assets/images/featured-brands/6.jpg" alt="" class="img-responsive center-block"> 
				  </div>
				</div>
			   </div>
			</section>
		    <!----------------------------Above Code Is Used For Feature Brands-------------------------------------->
			
			<!----------------------------Below Code Is Used For Feature Brands-------------------------------------->
			<section id="join">
			   <div class="container">
             <div class="row">
				  <div class="col-sm-12 text-center">
				    <h2 class="text-center">Join <b>other Wholesalers</b> who are already with us.<br> Get access to top brand prices.</h2><br><br>
					<a href=""><button class="btn btn-join">JOIN NOW</button></a>
				  </div>
				 </div>
			  </div>
			</section>
		    <!----------------------------Above Code Is Used For Feature Brands-------------------------------------->

 
<?php include('footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
 


</body>
</html>

 
 
 
 
 


