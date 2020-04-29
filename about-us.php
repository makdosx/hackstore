<?php

/*
 * Copyright (c) 2019 Barchampas Gerasimos <https://hackstore.openloadlinks.com/>
 * Hackstore is a networks vulnerability testing service.
 *
 * Hackstore is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * Hackstore is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

//require('__DEV__/force_https.php');

session_start();

?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> Hackstore </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand" href="index.php">
                                           <img src="img/logo.png" alt="">
                                           
                                              <?php 
                                               if (isset($_SESSION['login']))
                                                   {
                                                    $ses = $_SESSION['login']; 
                                                    $ID = substr($ses, 0, strpos($ses, "@"));
                                                    echo"<font face = 'Comic sans MS' size ='2'> Hackstore ID: $ID </font>"; 
                                                   }
                                                   
                                                   else
                                                    {
                                                     echo"<font face = 'Comic sans MS' size ='5'> Hackstore </font>";    
                                                    }
                                                   
                                                ?> 
                                           
                                          </a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link" href="index.php"> Αρχική </a></li>
							<li class="nav-item active"><a class="nav-link" href="about-us.php"> Για Εμάς </a></li>
	


<?php if (!isset($_SESSION['login']))
      {
      echo"<li class='nav-item submenu dropdown'>
           <a href='#'' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' 
            aria-haspopup='true' aria-expanded='false'> Hackstore </a>
          <ul class='dropdown-menu'>
           <li class='nav-item'><a class='nav-link' href='devices.php'> Συσκευές </a></li>
           <li class='nav-item'><a class='nav-link' href='applications.php'> Εφαρμογές </a></li>
           <li class='nav-item'><a class='nav-link' href='/acc_register_26'> Neo-sm 26 </a></li>  
           <li class='nav-item'><a class='nav-link' href='/acc_register'> Εγγραφή </a></li>
           <li class='nav-item'><a class='nav-link' href='/acc_login'> Είσοδος </a></li>
         </ul>
        </li>";
     }
     
     if (isset($_SESSION['login']))
      {
      echo"<li class='nav-item submenu dropdown'>
            <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' 
            aria-haspopup='true' aria-expanded='false'> Hackstore </a>
           <ul class='dropdown-menu'>      
            <li class='nav-item'><a class='nav-link' href='devices.php'> Συσκευές </a></li>
            <li class='nav-item'><a class='nav-link' href='applications.php'> Εφαρμογές </a></li>
            <li class='nav-item'><a class='nav-link' href='upload_apk.php'> Διαμοιρασμός </a></li> 
            <li class='nav-item'><a class='nav-link' href='profile.php'> Προφίλ </a></li> 
            <li class='nav-item'><a class='nav-link' href='settings.php'> Ρυθμίσεις </a></li>
            <li class='nav-item'><a class='nav-link' href='logout.php'> Αποσύνδεση </a></li> 
          </ul>
         </li>"; 
      }
?>
					
							<li class="nav-item"><a class="nav-link" href="contact.php"> Επικοινωνία </a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ About Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-right">
				</div>
			</div>
		</div>
	</section>
	<!--================End About Banner Area =================-->

	<!--================ Start About Area =================-->
	<section class="about-area section_gap gray-bg">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-5 about-left">
					<img class="img-fluid" src="img/profile/hackstore.jpg" alt="">
				</div>
				<div class="col-lg-6 col-md-12 about-right">
					<div class="main-title text-left">
						<h1> Σχετικά με το Hackstore </h1>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p>
						  Το hackstore είναι μια υπηρεσία που παρέχει διάφορες εφαρμογές που σχετίζονται με δοκιμές ασφαλείας και εισβολές σε διάφορα δίκτυα.
                          Οι εφαρμογές που παρέχονται από την υπηρεσία είναι συμβατές μόνο με συσκευές νεο-sm 26.
                          Το γραφικό περιβάλλον βρίσκεται σε ένα λειτουργικό σύστημα Android και οι εφαρμογές είναι εύχρηστες.
						</p>
						<p> Τώρα με την υπηρεσία Hackstore μπορείτε εύκολα και γρήγορα να κάνετε πράγματα που ποτέ δεν φανταστήκατε.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Area =================-->


	<!--================ Start Testimonial Area =================-->
	<div class="section_gap testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-left">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote1.png" height="488" width="607">
								<h4> Hackstore </h4>
							</div>
						</div>


						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote4.gif" height="488" width="607">
								<h4> Hackstore </h4>
							</div>
						</div>


						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote2.png" height="488" width="507"
								<h4> Hackstore </h4>
							</div>
						</div>


						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote3.png" height="488" width="607">
								<h4> Hackstore </h4>
							</div>
						</div>
						
						
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
				
					<img src="img/quote3.png" height="150" width="80%">
					<img src="img/quote5.png" height="150" width="80%">
					<img src="img/quote6.png" height="150" width="80%">
					
				</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->
	
	

	<!--================ Start Footer Area =================-->
	<footer class="footer_area section_gap">
		<div class="container">
			<div class="row footer_inner justify-content-center">
				<div class="col-lg-6 text-center">
					<aside class="f_widget social_widget">
						<div class="f_logo">
							<img src="img/logo.png" alt="">
						</div>
						<div class="f_title">
							<h4> Ακολουθήστε μας </h4>
						</div>
						<ul class="list">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</aside>
					<div class="copyright">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Πνευματική ιδιοκτησία &copy;<script>document.write(new Date().getFullYear());</script> Όλα τα δικαιώματα διατηρούνται | Αυτή η υπηρεσία γίνεται με <a href="https://hackstore.openloadlinks.com"> Hackstore </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
