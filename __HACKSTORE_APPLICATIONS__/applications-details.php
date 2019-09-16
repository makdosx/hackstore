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

require('__DEV__/force_https.php');

session_start();

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Steve Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
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
                                           <font face = "Comic sans MS" size =" 5"> Hackstore </font>
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
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>


<?php if (!isset($_SESSION['login']))
      {
      echo"<li class='nav-item submenu dropdown active'>
           <a href='#'' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' 
            aria-haspopup='true' aria-expanded='false'> Hackstore </a>
          <ul class='dropdown-menu'>
           <li class='nav-item'><a class='nav-link' href='applications.php'> Applications </a></li>
           <li class='nav-item'><a class='nav-link' href='/acc_register'> Register </a></li>
           <li class='nav-item'><a class='nav-link' href='/acc_login'> Login </a></li>
         </ul>
        </li>";
     }
     
     if (isset($_SESSION['login']))
      {
      echo"<li class='nav-item submenu dropdown active'>
            <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' 
            aria-haspopup='true' aria-expanded='false'> Hackstore </a>
           <ul class='dropdown-menu'>      
            <li class='nav-item'><a class='nav-link' href='applications.php'> Applications </a></li>
            <li class='nav-item'><a class='nav-link' href='profile.php'> Profile </a></li> 
            <li class='nav-item'><a class='nav-link' href='settings.php'> Settings </a></li>
            <li class='nav-item'><a class='nav-link' href='logout.php'> Logout </a></li> 
          </ul>
         </li>"; 
      }
?>


							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Start portfolio Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-right">
				</div>
			</div>
		</div>
	</section>
	<!--================ End Portfolio Banner Area =================-->




	<!--================ Start Portfolio Details Area =================-->
	<section class="portfolio_details_area section_gap">
		<div class="container">
			<div class="portfolio_details_inner">
			
					
					
					

<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if(isset($_GET['id']))
   {
    $id = intval($_GET['id']);
 
   
    if($id <= 0) 
     {
        die('The ID is invalid!');
      }
      
      
    else 
      {

require('__ROOT__/class_cn.php');
require('__DEV__/function.php');

 $obj = new security;
 
  $host=$obj->connect[0];
 $user=$obj->connect[1];
 $pass=$obj->connect[2];
 $db=$obj->connect[3];
  
 $conn = new mysqli($host,$user,$pass,$db);
if (!$conn) 
    {
    die("Connect error " .$conn->connect_error);
   } 


else
  {

   
$sql="SELECT  logo, title, mini_description, full_description, compatibility, category1, category2, category3, paypal_id  FROM applications where id = '$id' ";

$result=$conn->query($sql);



    while ($row = $result->fetch_assoc())
      {

      $logo =  '<img src="data:image/jpeg;base64,'. base64_encode($row['logo']) .'" height=350 width=80% />';

      $title = $row['title'];
      
      $mini_description = $row['mini_description'];
      
      $full_description = $row['full_description'];
      
      
      $compatibility = $row['compatibility'];
      
      $category1 = $row['category1'];
      $category2 = $row['category2'];
      $category3 = $row['category3'];


	 $paypal_id = $row['paypal_id'];
	
		echo	'<div class="row">
					<div class="col-md-6">
						<div class="left_img">
							'.$logo.'
						</div>
					</div>
					
					
					<div class="offset-md-1 col-md-5">
						<div class="portfolio_right_text mt-30">
							<h4> '.$title.' </h4>
							<p> '.$mini_description.' </p>
							<ul class="list">
								<li> 
								<li><span> Compatibility </span>: '.$compatibility.' </li>
								<li><span> Category </span>:  '.$category1.' '.$category2.' '.$category3.' </li>
								<li><span>Completed</span>: 17 Aug 2018</li>
								
								 <br><br>
								
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                   <input type="hidden" name="cmd" value="_s-xclick">
                                   <input type="hidden" name="hosted_button_id" value="'.$paypal_id.'">
                                   <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                   <img alt="" border="0" src="https://www.paypalobjects.com/el_GR/i/scr/pixel.gif" width="1" height="1">
                               </form>
                               
 
							</ul>
						</div>
					</div>
					
				</div> <!-- end div row -->
				
				<p> '.$full_description.' </p>';
	

	
        } // end of while
     
  
      } // end of else connect
  
  
    } // end else id ivalid
 
 
  } // end if isset id
     
?>     
					
					
					
			</div>
		</div>
	</section>
	<!--================ Start Portfolio Details Area =================-->
	
	
	
	
	

	<!--================Footer Area =================-->
	<footer class="footer_area section_gap">
		<div class="container">
			<div class="row footer_inner justify-content-center">
				<div class="col-lg-6 text-center">
					<aside class="f_widget social_widget">
						<div class="f_logo">
							<img src="img/logo.png" alt="">
						</div>
						<div class="f_title">
							<h4>Follow Me</h4>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This service is made with by <a href="https://hackstore.openloadlinks.com"> Hackstore </a>
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
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
