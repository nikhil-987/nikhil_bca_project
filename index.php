
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />    <!--Bootstrap CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/brands.css">




<!--Custom CSS-->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/gallerystyle.css">
    <title>SPOTLIGHTS</title>
</head>
<body>
    
   <!--Start Navigation-->
   
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
    <a href="index.php" class="navbar-brand ">spotlights</a>
    <span class="navbar-text font-italic">let's celebrate</span>
	
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="mymenu">
    <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#details" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
	<li class="nav-item"><a href="#cater" data-toggle="collapse" class="nav-link">Catering</a></li>
    </ul>
	
    </div>
	
    </nav><!--END Navigation-->
	
    <!--Start Header Jumbotron-->
<div class="jumbotron back-image .bg-img" style="background-image:url(img/banner1.jpg);">
    <marquee  direction="left" scrollamount="12"><p class="text-center text-danger">We are proud and happy to announce that we have managed events and crowd ranging from 50 to 1500</p></marquee>
       <div class="container">
    <div class="row aro">
        <!--start first column-->
        <div class="col-md-5 col-sm-6 adiv">
          <div class="card text-center" style="width: 20rem;">
            <img class="card-img-top" src="img/logo.jpg">
        <div class="card-body">
                <p class="card-text">
				<b><ul>
				<li>BIRTHDAY PARTIES</li>
				<li>WEDDINGS</li>
				
				<li>TRANSPORTATION</li>
				<li>CORPORATE PARTIES & EVENTS</li>
				<li>BUSINESS EXPOS</li>
				<li>TRADE FAIRS</li>
				<li>AUTO MOBILE EXPOS</li>
				</ul></b>
				</p>
        <a class="btn btn-danger" href="#details">Know More</a>
            </div>
    </div>
		  </div><!--end first column--> <br>
        <!--start 2nd column-->
        <div class="col-md-7 col-sm-6 pl-5 ">
        <center><h2><b><i>Sign Up Form</i></b></h2></center><br>
		<form action="target.php" method="POST">
			<table>
				<tr>
				<td><label><b>Name: </b></label></td>
                <td><input type="text" placeholder="Please enter your name" name="name" required="required"></td>
				</tr>
                <tr>
				<td><label><b>Mobile: </b></label></td>
                <td><input type="text" placeholder="Mobile no." name="mobile" required="required"></td>
				</tr>
                <tr>
				<tr>
				<td><label><b>Type of event: </b></label></td>
                <td><select name="event" required="required">
				<option value="None">None</option>
                <option value="BIRTHDAY">BIRTHDAY</option>
                <option value="WEDDINGS">WEDDINGS</option>
                <option value="TRADE FAIRS">TRADE FAIRS</option>
                <option value="AUTO EXPO">AUTO & BUSINESS EXPO</option>
				 <option value="AUTO EXPO">CATERING</option>
				 <option value="AUTO EXPO">TRANSPORTATION</option>
				 <option value="AUTO EXPO">CORPORATE EVENTS</option>
				</select> </td>
				</tr>
				<tr>
                <td><label><b>Address: </b></label></td>
                <td><input type="text" placeholder="Address" name="address" required="required"></td>
				</tr>
				<tr>
                <td><label><b>Email: </b></label></td>
                <td><input type="email" placeholder="Email" name="email" required="required"></td> 
				</tr>
				<tr>
                <td><label><b>Password: </b></label></td>
                <td><input type="password" placeholder="Password" name="password" required="required"></td>
				</tr>
				<tr>
                <td><label><b>Confirm Password: </b></label></td>
                <td><input type="password" placeholder="Confirm Password" name="cpassword" required="required"> </td>
				</tr>
                </table>
                
                <br>
                
				<button name="register" class="btn btn-success mr-4" type="submit">Sign Up</button>
		</form>
	
        </div><!--end 2nd column-->
        
        
    </div>
</div>

</div>
<!-- ****** Gallery Area Start ****** -->
    
        <div class="container-fluid collapse" id="cater" >
		<h1 class="text-center">Catering</h1>
            <div class="row sonar-portfolio">
                  
                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img" href="img/portfolio-img/continental.jpg"><img src="img/portfolio-img/continental.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>Continental</h4>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="500ms">
                    <a class="gallery-img" href="img/portfolio-img/chinese.jpg"><img src="img/portfolio-img/chinese.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>Chinese</h4>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="700ms">
                    <a class="gallery-img" href="img/portfolio-img/south.jpg"><img src="img/portfolio-img/south.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>South Indian</h4>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="900ms">
                    <a class="gallery-img" href="img/portfolio-img/italiancuisine.jpg"><img src="img/portfolio-img/italiancuisine.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>Italian</h4>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img" href="img/portfolio-img/downloadmughalai.jpg"><img src="img/portfolio-img/downloadmughalai.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>Mughlai</h4>
                                            </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="500ms">
                    <a class="gallery-img" href="img/portfolio-img/kathiyawadi.jpg"><img src="img/portfolio-img/kathiyawadi.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>Kathiyawadi</h4>
                        
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  wow fadeInUpBig" data-wow-delay="700ms">
                    <a class="gallery-img" href="img/portfolio-img/punjabi.jpg"><img src="img/portfolio-img/punjabi.jpg" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4>Punjabi</h4>
                        
                    </div>
                </div>

                
            </div>

            
    
    <!-- ****** Gallery Area End ****** -->
</div>
    
    
<!--END Header Jumbotron-->
<!--Start Introduction Section-->


<!-- ***** Services Area Start ***** -->
<div class="container text-center" id="details">
    <div class="sonar-services-area  section-padding-100-50" >
        
		<div class="container">
		<h1 class="text-center">Services</h1>
            <div class="row">
                <!-- Single Services Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/core-img/Round-Stage-Decoration-min-2-scaled.jpg" alt="">
                        <h4>Decorations</h4>
                        <p>Luxury Tents & Fancy Decorations including flowers, baloons and lighting.</p>
                    </div>
                </div>
                <!-- Single Services Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/core-img/5 SeriesModelImage.jpg" alt="">
                        <h4>Transport</h4>
                        <p>Transportation via luxury buses ranging from Volvo, Mercedes, Scania.</p>
                    </div>
                </div>
                <!-- Single Services Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="900ms">
                        <img src="img/core-img/DJ-FI.jpg" alt="">
                        <h4>Music&Lights </h4>
                        <p>Full DJ with stage lightings,Smoke Machine, Smoke Guns, Confetti blast, Collar Mics etc.</p>
                    </div>
                </div>
                <!-- Single Services Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/core-img/chinese.jpg" alt="">
                        <h4>Delicious Cuisines</h4>
                        <p>Exclusive food and Catering including Punjabi, Kathiyawadi, South Indian, Chinese, Italian, Continental, Mughlai etc.</p>
                    </div>
                </div>
                <!-- Single Services Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/core-img/resorts.jpg" alt="">
                        <h4>Luxurious Locations</h4>
                        <p>Hotels, Resorts, Villas, Banquet Halls booking.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	</div>
    <!-- ***** Services Area End ***** -->

<!--END Introduction Section-->
<!--Start Contact Us-->
<div class="container"> 
    
    <h2 class="text-center mb-4" >Contact Us</h2>
<div class="row">
    
    <!--Start 2nd Column-->
    <div class="col text-center" id="contact">
    <strong>HEADQUARTERS</strong><br>
    Padmavati Vihar, Sunderban Road<br>
    TokarKhada, Silvassa-396230<br>
    Ph:-7600992906
     </div><!--END 2nd Column-->
    </div>
</div>
<!--END Contact Us-->
<!--Start Footer-->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
    <div class="row py-3">
    <div class="col-mod-6"><!--Start 1st Column-->
    <span class="pr-2">Follow Us:</span>
	</div><!--END 1st Column-->
	<div class="col-md-4">
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
	
	</div>
    </div>
    </div>
    
    </footer>
	<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
	<script src="js/brands.js"></script>

    <script src="js/fontawesome.min.js"></script>
</body>
</html>
