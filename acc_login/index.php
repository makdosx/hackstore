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

require('../__DEV__/force_https.php');

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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


</head>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="/login.php" method="post">
			  <span class="contact100-form-title">
                              <a href='/'>
                                <img id='a_back' align='left' src="images/back.png" height="40px" width="50px">
                              </a>
                                  <img src="images/logo.png" height="40px" width="50px">
					Hackstore

				</span>



	  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@hackstore.com">
            <label class="label-input100" for="email"> <font size="3"> <b> ΔΙΕΥΘΥΝΣΗ ΗΛΕΚΤΡΟΝΙΚΟΥ ΤΑΧΥΔΡΟΜΕΙΟΥ </b> </font> </M></label>
		<input id="email" class="input100" type="text" name="email" placeholder="Συμπληρώστε το email σας">
					<span class="focus-input100"></span>
				</div>

                              <br>               


	<div class="wrap-input100 validate-input" data-validate="Password is required">
	 <label class="label-input100" for="name"> <font size="3"> <b> ΚΩΔΙΚΟΣ ΠΡΟΣΒΑΣΗΣ </b> </font> </label>
	 <input id="name" class="input100" type="password" name="password" placeholder="Εισάγετε τον κωδικό σας">
	   <span class="focus-input100"></span>
		</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<font size="3"> <b> Σύνδεση </b> </font> &nbsp; <i class="fa fa-sign-in" style="font-size:18px"></i>
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
