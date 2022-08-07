<?php
 @$name=$_POST['name'];
 @$mobile=$_POST['mobile'];
 @$event=$_POST['event'];
 @$address=$_POST['address'];
 @$email=$_POST['email'];
 @$password=$_POST['password'];
 @$cpassword=$_POST['cpassword'];
 
 $conn=mysqli_connect('localhost','root','','spotlight');
 $query="INSERT INTO `user`(`name`, `mobile`, `event`, `address`, `email`, `password`, `cpassword`) VALUES ('$name','$mobile','$event','$address','$email','$password','$cpassword')";
 $run=mysqli_query($conn,$query);
 if($run==TRUE)
	 echo "Data insert Successfully"; 
 else
	 echo "Error !";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<head profile="http://www.w3.org/2005/10/profile">
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
    
    </ul>
    </div>
    </nav><!--END Navigation-->
    <!--Start Header Jumbotron-->
<header class="jumbotron back-image .bg-img" style="background-image:url(img/banner1.jpg);">
    
        
     <div class="container">
    <div class="row">
        <!--start first column-->
        <div class="col-md-5 col-sm-6 text-center">
            <h1 align="center">Thank you <?php echo @$name;?> for signing up with up SPOTLIGHTS for <?php echo @$event;?>. Our company person will contact you shortly.</h1>
            <h2> Kindly keep this acknowledgement preserved until we contact you</h2>
		  </div><!--end first column--> 
        
        
        
    </div>
    </div>

</header>
<!--END Header Jumbotron-->
<!--END Introduction Section-->
<!--Start Contact Us-->
<div class="container"> 
    
    <h2 class="text-center mb-4">Contact Us</h2>
<div class="row">
    
    <!--Start 2nd Column-->
    <div class="col text-center">
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
</body>
</html>