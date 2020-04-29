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

 session_start();

    if (!isset($_SESSION['qrcode']))
    {
    header('Location:index.php');
     }
?>


<html>


<head>

 <meta charset="UTF-8">

  <title> Hackstore </title>
  <link rel="icon" href="images/favicon.png" type="image/png">

  <link rel="SHORTCUT ICON" href="photos/favicon.ico" />


 <link rel="stylesheet" type="text/css" href="css/verify.css">



<style>


div.centre
{
  width: 400px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}


#but
{
height:2.5em;
width:6em;
}


#but:hover
{
height:2.5em;
width:6em;
color:red;
}


#qr
{
border: 0;
outline: 0;
background: #87D05F ;
border-bottom: 1px solid black;
color: black;
font-size: 20px;
height:20px;
width:70px;
text-align:center;
}


::-webkit-input-placeholder {
    color: black;
    font-weight: bold;
}
::-moz-placeholder {
    color: black;
    font-weight: bold;
}
::-ms-input-placeholder {
    color: black;
    font-weight: bold;
} 
:-o-input-placeholder {
    color: black;
    font-weight: bold;
} 
.form-btn {
   
    background: #87D05F  url("images/verify.png") no-repeat scroll 230px 14px;
    border: medium none;
    border-radius: 100px;
    color: black;
    font-weight: 600;
    height: 50px;
    max-width: 350px;
    padding: 20px 0;
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    box-shadow: 0 2px 8px #d2d2d2;
    -moz-box-shadow: 0 2px 8px #d2d2d2;
    -webkit-box-shadow: 0 2px 8px #d2d2d2;
}
.form-btn::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 25px;
    top: 9px;
}
.form-btn:hover
 {
    background: #379182 url("images/verify.png") no-repeat scroll 230px 14px;
    border: medium none;
    border-radius: 100px;
    color: black;
    font-weight: 600;
    height: 50px;
    max-width: 350px;
    padding: 10px 0;
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    box-shadow: 0 2px 8px #d2d2d2;
    -moz-box-shadow: 0 2px 8px #d2d2d2;
    -webkit-box-shadow: 0 2px 8px #d2d2d2;
}
</style>


<script language="JavaScript">
 history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>



<script src="qrcode/easy.qrcode.js" type="text/javascript" charset="utf-8"></script>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <Script>
        $(document).ready(function(){
            $(".inputs").keyup(function () {
                $this=$(this);
                if ($this.val().length >=$this.data("maxlength")) {
                  if($this.val().length>$this.data("maxlength")){
                    $this.val($this.val().substring(0,1));
                  }
                  $this.next(".inputs").focus();
                }
             });
        });
    </Script>

</script>



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


<body style="background-image: url('/img/profile/bg1.jpg');">

    
      <h3 align="center" style="color: black;"> * Hackstore Επαλήθευση Εγγραφής * </font> </h3>
     

<p align="center">

<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('el|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('el|el');return false;" title="Greek" class="gflag nturl" style="background-position:-400px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Greek" /></a>
</p>

 <br>


 <div class="centre">


<div align="center">
<div id="qrcode"></div>
</div>

<script type="text/javascript">
			function showQr() {
				new QRCode(document.getElementById("qrcode"), {
					text: "<?php echo $_SESSION['qrcode']; ?>",
					width: 250, 
					height: 200, 
					colorDark: "#000000", 
					colorLight: "#ffffff", 
					correctLevel: QRCode.CorrectLevel.H 
				});
			}
			
		
			showQr();
		</script>



  <p align="center"> <img src="/img/logo.png"  height="60px" width="80px"> 

<img src="images/code1.png" height="60" width="80"> </p>

      <br><br>



   <form action="" method="post">

  <input type="text" name="qr1" class="inputs" id="qr" pattern="[0-9]{1}" data-maxlength="1" required autofocus >   
  <input type="text" name="qr2" class="inputs" id="qr" pattern="[0-9]{1}" data-maxlength="1" required> 
  <input type="text" name="qr3" class="inputs" id="qr" pattern="[0-9]{1}" data-maxlength="1" required> 
  <input type="text" name="qr4" class="inputs" id="qr" pattern="[0-9]{1}" data-maxlength="1" required> 
  <input type="text" name="qr5" class="inputs" id="qr" pattern="[0-9]{1}" data-maxlength="1" required>

    <br><br>

     <button type="submit" name="submit" class="form-btn"> Επαλήθευση </button>

   </form>



</div>
 </div>


</body>
</html>




<?php
 if (isset($_POST['submit']))
   {

   require('../__ROOT__/class_cn.php');
  
  $obj_con =  new security;

  $host = $obj_con->connect[0];
  $user = $obj_con->connect[1];
  $pass = $obj_con->connect[2];
  $db   = $obj_con->connect[3]; 
    $conn = new mysqli($host,$user,$pass,$db);
      if($conn->connect_error)
         {
          die ("Cannto connect to server " .$conn->connect_error);
           }
 
    else
     { 
     $qrv1 = $_POST['qr1'];
     $qrv2 = $_POST['qr2'];
     $qrv3 = $_POST['qr3'];
     $qrv4 = $_POST['qr4'];
     $qrv5 = $_POST['qr5'];
    
     $qrcode_v = $qrv1.$qrv2.$qrv3.$qrv4.$qrv5;
      
         $sql = "select verification_code from login where verification_code='".$_SESSION['qrcode']."'";
         $result = $conn->query($sql);
 
         while ($row = $result->fetch_assoc())
               {
              
                
            if ($row['verification_code'] == $qrcode_v)
                  {
                 $sql2 = "update login set verified='yes' ,verification_code='ok' 
                          where verification_code='$qrcode_v'";
                 $result2 = $conn->query($sql2);
                   session_destroy();             
 
           echo '<script type="text/javascript">alert("Η εγγραφή σας ολοκληρώθηκε με επιτυχία. Καλώς ήρθατε στο Hackstore.");
           </script>';
           echo ("<script>location.href='/acc_login'</script>");
 
                   } // end for verication code is same
               else if ($row['verification_code'] != $qrcode_v)
                  {
                echo '<script type="text/javascript">alert("Η εγγραφή σας απέτυχε: Πληκτρολογήστε ξανά τον κωδικό επαλήθευσης.");
                 </script>';
                echo ("<script>location.href='/acc_register_26/verify.php'</script>");
                   } 
                 } // end fo while
      } // end of else connect
   } // end of isset
 
?>
