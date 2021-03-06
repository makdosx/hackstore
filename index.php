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

<html>


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
</head>


<style>

#responsive_text
{
background-color:#fe7e8b;    
font-size: 20px;    
text-align:center;
color:white;
}    



</style>




<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/32.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'el',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>


<body>
    
 
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->

<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('el|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('el|el');return false;" title="Greek" class="gflag nturl" style="background-position:-400px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Greek" /></a>


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
				<li class="nav-item active"><a class="nav-link" href="index.php"> Αρχική </a></li>
				<li class="nav-item"><a class="nav-link" href="about-us.php"> Για εμάς </a></li>


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

	<!--================Home Banner Area =================-->
	<section class="banner-area owl-carousel" id="home">
		<div class="single_slide_banner slide_bg1">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center">
					<div class="banner-content col-lg-12 justify-content-center">
				<a href="applications.php" class="primary-btn"> Αναζήτηση Εφαρμογών </a>
					</div>
				</div>
			</div>
		</div>

		<div class="single_slide_banner slide_bg2">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center">
					<div class="banner-content col-lg-12 justify-content-center">
                 <a href="applications.php" class="primary-btn"> Αναζήτηση Εφαρμογών </a>
					</div>
				</div>
			</div>
		</div>

		<div class="single_slide_banner slide_bg3">
			<div class="container">
				<div class="row fullscreen justify-content-endd-flex align-items-center">
					<div class="banner-content col-lg-12 justify-content-center">
                     <a href="applications.php" class="primary-btn"> Αναζήτηση Εφαρμογών </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->




	
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
