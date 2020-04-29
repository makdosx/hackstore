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

                            <li class="nav-item active"><a class="nav-link" href="contact.php"> Επικοινωνία </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Start Contact Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                </div>
            </div>
        </div>
    </section>
    <!--================ End Contact Banner Area =================-->
    
      <br><br>
    
     <div align="center">
     <h2> Επικοινωνήστε Μαζί Μας </h2>
     </div>

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6> Αθήνα Ελλάδα  </h6>
                            <p> Στό Κεντρο της Αθήνας </p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#"> +30 6981234567 </a></h6>
                            <p> Δευτέρα- Κυριακή 24/7 </p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#"> contact@hackstore</a></h6>
                            <p> Στείλτε μας το ερώτημά σας ανά πάσα στιγμή! </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="" method="post" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Εισάγετε το όνομά σας" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Εισάγετε ηλεκτρονική διεύθυνση" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" id="subject"  placeholder="Εισάγετε θέμα" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="message" class="form-control"  id="message" rows="1" placeholder="Εισαγάγετε μήνυμα" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" name="submit" value="submit" class="primary-btn"><span> Αποστολή Μηνύματος </span></button>
                        </div>
                    </form>
                </div>
            </div>
            
             <br><br>
            
            <div align="center">
                <img src="img/hackstore.jpg" height="400" width="80%"> 
            </div>
            
            
        </div>
    </section>
    <!--================Contact Area =================-->

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
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>









<?php


if (isset($_POST['submit']))
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

   // check for empty fields
  if (empty($_POST['name'] || $_POST['email'] || $_POST['subject'] || $_POST['message']))
     {
 echo '<script type="text/javascript">alert("Τα πεδία είναι υποχρεωτικά.");
         </script>';
     echo ("<script>location.href='/contact.php'</script>");
      }


    else
      {

  $name = input($_POST['name']);
  $email = input($_POST['email']);
  $subject = input($_POST['subject']);
  $message = input($_POST['message']);
 

$sql = "INSERT INTO contact (name, email, subject, message) 
               VALUES ('$name', '$email', '$subject', '$message')";
$result=$conn->query($sql);


if (($result) === TRUE) 
      {
          
        echo '<script type="text/javascript">alert("Το μήνυμα σας στάλθηκε επιτυχώς. Θα επικοινωνήσουμε μαζί σας σύντομα.");
         </script>';
     echo ("<script>location.href='/contact.php'</script>");

     
      }  // end is seccussfully sign up



    else 
     {
      echo '<script type="text/javascript">alert("Σφάλμα αποστολής μηνύματος. Παρακαλούμε προσπαθήστε ξανά.");
         </script>';
     echo ("<script>location.href='/contact.php'</script>");
     }


      } // end of else data
   

  } // end of else connect

  $conn->close();
 
}// end of if isset


?>
