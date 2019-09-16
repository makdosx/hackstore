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
	<title> Hackstore </title>
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
	
	

<style>
.img {
    position: relative;
    float: left;
    width:  100px;
    height: 100px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
}    
</style>	
	
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

	<!--================ Start Portfolio Area =================-->
	
	
	
	<div align="center">
	<section class="section_gap portfolio_area" id="work">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="main-title">
						<h1> Hackstore Applications </h1>
						<p>
                          The hackstore is a store full of hacker applications for all tastes.
                          All applications are compatible with neo-sm 26 devices
					   </p>
					</div>
				</div>
			</div>
			
			
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="projects_fillter">
						<ul class="filter list">
						 <li class="active" data-filter="*"> Hackstore &nbsp; Applications &nbsp; for &nbsp; <font color="black"> neo-sm 26 </font> &nbsp; Devices </li>
					</div>
				</div>
			</div>
	

	
<?php



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

   
$sql1="SELECT id, logo, title, category1, category2, category3  FROM applications LIMIT 3";

$result1=$conn->query($sql1);


echo' <table align="center">
      <tr>';



    while ($row1 = $result1->fetch_assoc())
      {

      $logo1 =  '<img src="data:image/jpeg;base64,'. base64_encode($row1['logo']) .'" height=90 width=100% />';

      $title1 = $row1['title'];
      
      $category1_1 = $row1['category1'];
      $category2_1 = $row1['category2'];
      $category3_1 = $row1['category3'];


	
	echo '<td align="center"> '.$category1_1.'  '.$category2_1.'  '.$category3_1.' 
           <div class="col-lg-6 col-sm-6  grid-item">
					<div class="projects_item">
						'.$logo1.'
						<div class="projects_text">
							<a href="applications-details.php?id='.$row1['id'].'">
								<h6> <font color="white"> '.$title1.' </font> </h6>
							</a>
						</div>
					</div>
				</div> 
			 </td>';
	

	
     } // end of while
     
     echo '</tr> </table>';
     
     
     
     
     
     
     
     

$sql2="SELECT id, logo, title, category1, category2, category3  FROM applications LIMIT 3 OFFSET 3";

$result2=$conn->query($sql2);


echo'<table align="center">
   <tr>';



    while ($row2 = $result2->fetch_assoc())
      {

      $logo2 =  '<img src="data:image/jpeg;base64,'. base64_encode($row2['logo']) .'" height=90 width=100% />';

      $title2 = $row2['title'];
      
      $category1_2 = $row2['category1'];
      $category2_2 = $row2['category2'];
      $category3_2 = $row2['category3'];


	
	echo '<td align="center"> '.$category1_2.'  '.$category2_2.'  '.$category3_2.' 
           <div class="col-lg-6 col-sm-6  grid-item">
					<div class="projects_item">
						'.$logo2.'
						<div class="projects_text">
							<a href="applications-details.php?id='.$row2['id'].'">
							  <h6> <font color="white"> '.$title2.' </font> </h6>
							</a>
						</div>
					</div>
				</div> 
			 </td>';
	

	
     } // end of while
     
     echo '</tr> </table>';     
 
     
     
     
     
     
     
$sql3="SELECT id, logo, title, category1, category2, category3  FROM applications LIMIT 3 OFFSET 6";

$result3=$conn->query($sql3);


echo'<table align="center">
   <tr>';



    while ($row3 = $result3->fetch_assoc())
      {

      $logo3 =  '<img src="data:image/jpeg;base64,'. base64_encode($row3['logo']) .'" height=90 width=100% />';

      $title3 = $row3['title'];
      
      $category1_3 = $row3['category1'];
      $category2_3 = $row3['category2'];
      $category3_3 = $row3['category3'];


	
	echo '<td align="center"> '.$category1_3.'  '.$category2_3.'  '.$category3_3.' 
           <div class="col-lg-6 col-sm-6  grid-item">
					<div class="projects_item">
						'.$logo3.'
						<div class="projects_text">
							<a href="applications-details.php?id='.$row3['id'].'">
								<h6> <font color="white"> '.$title3.' </font> </h6>
							</a>
						</div>
					</div>
				</div> 
			 </td>';
	

	
     } // end of while
     
     echo '</tr> </table>';     
     
     
     
   
   
   
   
   
$sql4="SELECT id, logo, title, category1, category2, category3  FROM applications LIMIT 3 OFFSET 9";

$result4=$conn->query($sql4);


echo'<table align="center">
   <tr>';



    while ($row4 = $result4->fetch_assoc())
      {

      $logo4 =  '<img src="data:image/jpeg;base64,'. base64_encode($row4['logo']) .'" height=90 width=100% />';

      $title4 = $row4['title'];
      
      $category1_4 = $row4['category1'];
      $category2_4 = $row4['category2'];
      $category3_4 = $row4['category3'];


	
	echo '<td align="center"> '.$category1_4.'  '.$category2_4.'  '.$category3_4.' 
           <div class="col-lg-6 col-sm-6  grid-item">
					<div class="projects_item">
						'.$logo4.'
						<div class="projects_text">
							<a href="applications-details.php?id='.$row4['id'].'">
								<h6> <font color="white"> '.$title4.' </font> </h6>
							</a>
						</div>
					</div>
				</div> 
			 </td>';
	

	
     } // end of while
     
     echo '</tr> </table>';     
     
     
     
     
     
    
  } // end else of connect 

?>



	</div> </div> </section> </div>


	<!--================ End Portfolio Area =================-->

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
