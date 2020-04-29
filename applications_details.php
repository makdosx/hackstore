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
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">

	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  
<script>
$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});





  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
    
</script>  
  
  
  
  
<style>


@media (min-width: 768px) {

    /* show 3 items */
    .carouselPrograms .carousel-inner .active,
    .carouselPrograms .carousel-inner .active + .carousel-item,
    .carouselPrograms .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }

    .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }

    .carouselPrograms .carousel-inner .carousel-item-next,
    .carouselPrograms .carousel-inner .carousel-item-prev {
        position: relative;
        transform: translate3d(0, 0, 0);
    }

    .carouselPrograms .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.333%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* left or forward direction */
    .carouselPrograms .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item,
    .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }

    /* farthest right hidden item must be abso position for animations */
    .carouselPrograms .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* right or prev direction */
    .carouselPrograms .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item,
    .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}


.button {
    display: block;
    width: 115px;
    height: 40px;
    background: #FFD200;
    padding: 10px;
    text-align: center;
    text-decoration:none;
    border-radius: 5px;
    color: black;
    font-weight: bold;
}


.button:hover {
    display: block;
    width: 115px;
    height: 40px;
    background: #FFD200;
    padding: 10px;
    text-align: center;
    text-decoration:none;
    border-radius: 5px;
    color: red;
    font-weight: bold;
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
							<li class="nav-item"><a class="nav-link" href="about-us.php"> Για Εμάς </a></li>


<?php if (!isset($_SESSION['login']))
      {
      echo"<li class='nav-item submenu dropdown active'>
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
      echo"<li class='nav-item submenu dropdown active'>
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
 
 $conn->set_charset('utf8');

 
if (!$conn) 
    {
    die("Connect error " .$conn->connect_error);
   } 


else
  {

   
$sql="SELECT * FROM applications where id = '$id' ";
$result=$conn->query($sql);



    while ($row = $result->fetch_assoc())
      {

         $_from = $row['_from'];
 
         $category = $row['category'];
 
         $app_title = $row['title']; 
  
         //$app_logo =  "<img src='__APPS__/pics/".$app_title.".png' height='300' width=100%'>"; 

         $app_logo = '<img src="data:image/jpeg;base64,'. base64_encode($row['app_img_data']) .'"  title="'.$row['app_img_name'].'" height=300 width=100% />';

      
      
         $app_mini_description = $row['mini_description'];
      
         $app_full_description = $row['full_description'];
      
	
		echo	'<div class="row">
					<div class="col-md-6">
						<div class="left_img">
							'.$app_logo.'
						</div>
					</div>
					
					
					<div class="offset-md-1 col-md-5">
						<div class="portfolio_right_text mt-30">
					          <h4>
                                                    <img src="img/profile/android.png" height="30px" width="30px"> 
                                                    '.$app_title.' 
                                                  </h4>
                                                  <h5> From: '.$_from.' </h5>  
			                 	  <p> '.$app_mini_description.' </p>
					    	    <ul class="list">
						     <li> 
					     	      <li><span> Όν. Εφαρμογής </span>: '.$app_title.' </li>
						      <li><span> Κατηγορία </span>:  '.$category.'  </li>
					   	      <li><span> Λείτ. Σύστημα </span>:  Android </li>
								
						 <br><br>';
								
                                                 if (!isset($_SESSION['login']))
                                                     {
                                                      echo '<font style="background-color:#FFD200;"> 
                                                              &nbsp; Για να κατεβέσεις την εφαρμογή πρέπει να συνδεθέις &nbsp;
                                                            </font>';
                                                       }
                                                            
                                                            
                                                  else
                                                    {
                                                echo' <a class="button" href="download_apk.php?id='.$id.'" style=""> 
                                                   Download 
                                                 </a>';
                                                     }
                                                     
                                                 
				  echo' </div>
					</div>
					
				</div> <!-- end div row -->
			
				
				<p> '.$app_full_description.' </p>';

	
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
