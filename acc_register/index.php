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

//require('../__DEV__/force_https.php');

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title> Hackstore </title>
      	<link rel="icon" href="img/favicon.png" type="image/png">

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


<style>

#a_back
{
border-style:solid;
border-width: 0.3em;
border-radius: 1em;
border-color: grey;
}

#a_back:hover
{
border-style:solid;
border-width: 0.3em;
border-radius: 1em;
border-color: grey;
background-color:grey;
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


</head>


<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post" >
				<span class="contact100-form-title">
                               <a href='/'>
                                 <img id='a_back' align='left' src="images/back.png" height="50px" width="60px">
                               </a>

<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('el|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('el|el');return false;" title="Greek" class="gflag nturl" style="background-position:-400px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Greek" /></a>

                                  <img src="images/logo.png" height="70px" width="60px">
	                		Hackstore
				</span>

	  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@hackstore.com">
            <label class="label-input100" for="email"> <font size="3"> <b> ΔΙΕΥΘΥΝΣΗ ΗΛΕΚΤΡΟΝΙΚΟΥ ΤΑΧΥΔΡΟΜΕΙΟΥ </b> </font> </label>
		<input id="email" class="input100" type="text" name="email" placeholder="Συμπληρώστε το email σας">
					<span class="focus-input100"></span>
				</div>


        <div class="wrap-input100 validate-input" data-validate="Imei 1 is required">
	 <label class="label-input100" for="name"> <font size="3"> <b> ΙΜΕΙ </b> </font> </label>
	    <input id="name" class="input100" type="text" name="imei1" placeholder="Πληκτρολογήστε το ΙΜΕΙ">
			<span class="focus-input100"></span>
          </div>

<div class="container">
  <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#myModal">
      Πως βρίσκω το IMEI μου
    </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" align="center"> Πως να βρείτε το ΙΜΕΙ της συσκευής σας </h4>
          <button type="button" class="close" data-dismiss="modal"> x </button>
        </div>
        <div class="modal-body">
           <font size="4"> Καλούμε τον αριθμό &nbsp; *#06* &nbsp; και μολίς καλέσουμε θα δούμε στην οθόνη μας
               έναν αριθμό. &nbsp; Αυτός ο αριθμός είναι το ΙΜΕΙ μας.
           </font>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 
  <br>




		<div class="wrap-input100 validate-input" data-validate="Device Category required">
		<label class="label-input100" for="name"> <font size="3"> <b> Κατηγρορία Συσκευής </b> </font> </label>
                
                  <select style="width:100%; background-color: transparent; text-align-last:center;" name="device_category" required>
                    <option value="" disabled selected> Διάλεξε Κατηγρία </option>    
                    <option value="Internet Hacking"> Internet Hacking </option>
                    <option value="GSM Hacking"> GSM Hacking </option>
                    <option value="Full Hacking"> Full Hacking </option>
                   </select> 
					<span class="focus-input100"></span>
				</div>


	<div class="wrap-input100 validate-input" data-validate="Password is required">
	 <label class="label-input100" for="name"> <font size="3"> <b> ΚΩΔΙΚΟΣ ΠΡΟΣΒΑΣΗΣ </b> </font> </label>
	 <input id="name" class="input100" type="password" name="password" minlength='8' placeholder="Εισάγετε τον κωδικό σας">
	   <span class="focus-input100"></span>
		</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<font size="3"> <b> Εγγραφη </b> </font> &nbsp; <i class="fa fa-mobile-phone" style="font-size:18px"></i>
					</button>
				</div>
                                 




			</form>	



			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>




<?php


if (isset($_POST['submit']))
 {
 
 require('../__ROOT__/class_cn.php');
 require('../__DEV__/function.php');

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
  if (empty($_POST['email'] || $_POST['imei1'] || $_POST['device_category'] || $_POST['password']))
     {
 echo '<script type="text/javascript">alert("Τα πεδία είναι υποχρεωτικά.");
         </script>';
     echo ("<script>location.href='/acc_register'</script>");
      }


    else
      {

  $email = input($_POST['email']);
  $imei1 = input($_POST['imei1']);
  $device_category = input($_POST['device_category']);
  $password = md5(input($_POST['password']));
 
   

      $rand_qr = 5;
      $qrcode  = substr(str_shuffle("0123456789"),0, $rand_qr);
             

      $_SESSION['qrcode'] = $qrcode;

$sql2 = "INSERT INTO login (device_name, device_category, imei1, imei2, email, password, verification_code, verified) 
         VALUES ('$email', '$device_category', '$imei1','$imei1','$email','$password', '$qrcode', 'no')";
$result2=$conn->query($sql2);

if (($result2) === TRUE) 
      {
          
        $sql3 = "insert into devices (device_name, device_category ,imei1, imei2, email)
                       values  ('$email', '$device_category', '$imei1', '$imei1', '$email') ";  
        $result = $conn->query($sql3);
        
        if (($result2) === TRUE) 
          {
          
        echo '<script type="text/javascript">alert("Επαληθεύστε τον λογαριασμό σας.");
         </script>';
     echo ("<script>location.href='/acc_register/verify.php'</script>");
      
          }
     
      }  // end is seccussfully sign up



   else 
     {
      echo '<script type="text/javascript">alert("Σφάλμα εγγραφής. Αυτή η συσκευή έχει εγγραφεί ξανά.");
         </script>';
     echo ("<script>location.href='/acc_register'</script>");
     }




 } // end else for empty fields





} // end of big else

  $conn->close();
 
}// end of big if


?>
