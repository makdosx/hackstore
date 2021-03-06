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

if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }

?>

<html>
<head>

   <meta charset="utf-8">

  <link rel="icon" href="img/favicon.png" type="image/png">
  <title> Hackstore </title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body{
    margin-top: auto;
    background-color: #f1f1f1;
  }
  .border{
    border-bottom:1px solid #F1F1F1;
    margin-bottom:10px;
  }
  .main-secction{
    box-shadow: 10px 10px 10px;
  }
  .image-section{
    padding: 0px;
  }
  .image-section img{
    width: 100%;
    height:250px;
    position: relative;
  }
  .user-image{
    position: absolute;
    margin-top:-50px;
  }
  .user-left-part{
    margin: 0px;
  }
  .user-image img{
    width:100px;
    height:100px;
  }
  .user-profil-part{
    padding-bottom:30px;
    background-color:#FAFAFA;
  }
  .follow{    
    margin-top:70px;   
  }
  .user-detail-row{
    margin:0px; 
  }
  .user-detail-section2 p{
    font-size:12px;
    padding: 0px;
    margin: 0px;
  }
  .user-detail-section2{
    margin-top:10px;
  }
  .user-detail-section2 span{
    color:#7CBBC3;
    font-size: 20px;
  }
  .user-detail-section2 small{
    font-size:12px;
    color:#D3A86A;
  }
  .profile-right-section{
    padding: 20px 0px 10px 15px;
    background-color: #FFFFFF;  
  }
  .profile-right-section-row{
    margin: 0px;
  }
  .profile-header-section1 h1{
    font-size: 25px;
    margin: 0px;
  }
  .profile-header-section1 h5{
    color: #0062cc;
  }
  .req-btn{
    height:30px;
    font-size:12px;
  }
  .profile-tag{
    padding: 10px;
    border:1px solid #F6F6F6;
  }
  .profile-tag p{
    font-size: 12px;
    color:black;
  }
  .profile-tag i{
    color:#ADADAD;
    font-size: 20px;
  }
  .image-right-part{
    background-color: #FCFCFC;
    margin: 0px;
    padding: 5px;
  }
  .img-main-rightPart{
    background-color: #FCFCFC;
    margin-top: auto;
  }
  .image-right-detail{
    padding: 0px;
  }
  .image-right-detail p{
    font-size: 12px;
  }
  .image-right-detail a:hover{
    text-decoration: none;
  }
  .image-right img{
    width: 100%;
  }
  .image-right-detail-section2{
    margin: 0px;
  }
  .image-right-detail-section2 p{
    color:#38ACDF;
    margin:0px;
  }
  .image-right-detail-section2 span{
    color:#7F7F7F;
  }

  .nav-link{
    font-size: 1.2em;    
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


<script>
function submit_delete() {
  return confirm('ΠΡΟΣΟΧΗ ΜΗ ΑΝΑΣΤΡΕΨΙΜΗ ΕΝΕΡΓΕΙΑ \n\nΕίστε σίγουροι οτι θέλετε να διαγράψετε τον Λογαριασμό σας? \nΣτην περίπτωση αυτή όλη η δραστηριότητα σας όπως για παράδειγμα (εφαρμογές, συμβουλές, σχόλια, κλπ)\nκαθώς και η προσωπική σας ταυτότητα θα χαθούν οριστικά απο το Hackstore.');
}
</script>

</head>


<body>


<p align="center">
<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('el|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('el|el');return false;" title="Greek" class="gflag nturl" style="background-position:-400px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Greek" /></a>
</p>


</body>

</html>


<?php


require('__ROOT__/class_cn.php');
require('__DEV__/function.php');


 $obj = new security;
 
  $host=$obj->connect[0];
  $user=$obj->connect[1];
  $pass=$obj->connect[2];
  $db=$obj->connect[3];
  
  $conn = new mysqli($host,$user,$pass,$db);
  
  if($conn->connect_error)
     {
     die ("Cannot connect to server " .$conn->connect_error);
       }
 else
   {

   $ses_login = $_SESSION['login'];

  $sql ="select email, imei1, imei2, verified from login 
         where binary email='$ses_login' and verified='yes'";

  $result=$conn->query($sql);
  $rows = $result->num_rows;

   if ($rows == 1) 
    {  

while ($row=$result->fetch_assoc())
       {
        $email = $row['email'];
        $user = substr($email, 0, strpos($email, "@")); 
        $imei1 = $row['imei1'];
        $imei2 = $row['imei2'];
        $verified = $row['verified'];
         }   
 

    } // end if


    $_from = $user;

} // end of else


    echo'<div class="container main-secction">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                <img src="img/profile/bg1.jpg">
            </div>
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            <img src="img/profile/hackstore.jpg" class="rounded-circle">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">

       <a href="index.php" id="btn-contact" class="btn btn-success btn-block follow" role="button"> 
          <i class="fa fa-home" style="font-size:16px"></i> Αρχική
       </a>
       
       <a href="devices.php" id="btn-contact" class="btn btn-success btn-block follow" role="button"> 
          <i class="fa fa-mobile" style="font-size:16px"></i> Συσκευές
       </a>
       
       <a href="applications.php" id="btn-contact" class="btn btn-success btn-block follow" role="button"> 
          <i class="fa fa-android" style="font-size:16px"></i> Εφαρμογές
       </a>

   
       <a href="upload_apk.php" id="btn-contact" class="btn btn-info btn-block" role="button"> 
          <i class="fa fa-share" style="font-size:16px"></i> Διαμοιρασμός
       </a>
       

       <a href="profile.php" id="btn-contact" class="btn btn-warning btn-block" role="button"> 
          <i class="fa fa-user" style="font-size:16px"></i> Προφίλ
       </a>

          

                        </div>
                        <div class="row user-detail-row">
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                
                                   <div class="container well">
                                       <form action="" method="post" onsubmit="return submit_delete(this);"
                                             style="width:100%;">


                                        <div class="form-group">
                                         <i class="fa fa-key" style="font-size:16px"></i>
                                         <label for="usr"> Κωδικός Πρόσβασης </label>
                                         <input type="password" name="account_pass" class="form-control"       
                                                id="usr" required>
                                        </div>

                                 <div class="form-group"> 
                                   <i class="fa fa-certificate" style="font-size:16px"></i>
                                    <input type="checkbox"  name="account_agree" value="yes" required>
                                     Αποδέχομαι τους όρους και τις προυποθέσεις    
                                  </div>


	                           <div>
		             <button type="submit" name="submit_account_delete" class="btn btn-danger btn-block"> 
                                  Διαγραφή Λογαριασμού <i class="fa fa-trash" style="font-size:16px"></i>
                                    </button>
	                          </div>
	
                                 </form>
                                </div>

                                  <br>

                            </div>                           
                        </div>

                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                   
                                </div>

                <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                    <a href="logout.php" class="btn btn-primary btn-block"> 
                    Αποσύνδεση <i class="fa fa-sign-out" style="font-size:16px"></i> </a>
                </div>


                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                        <ul
                                 
                    <a class="nav-link active" role="tab" data-toggle="tab">
                    <i class="fa fa-user-circle"></i> Τα στοιχεία του λογαριασμού σας </a>
                                               
                                                                  
                                         </ul>
                                              
                                              <!-- Tab panes -->
                                              <div class="tab-content">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                        <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Συσκευή </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> neo-sm 26 </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> ID </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> '.$user.' </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> '.$email.' </p>
                                                                </div>
                                                            </div>
                                                            
                                                         <form action="" method="post">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Κωδικός </label>
                                                                </div>
                                                             <div class="col-md-6">
                                                                    <p> 
                                                                     <input type="password" class="form-control" name="password" 
                                                                      required title="This field can not be empty"> </p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Κωδικός Ξανά </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> <input type="password" class="form-control" name="retype_password" required> </p>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Αλλαγή </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> 
                                                          <button type="submit" class="btn btn-primary btn-md btn-block" 
                                                                  name="submit_password">  
                                                                        &nbsp; Αλλαγή Κωδικού Πρόσβασης &nbsp; </button> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                        
                                                </div>
                                                
                                              </div>
                          
                                </div>
                                <div class="col-md-4 img-main-rightPart">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row image-right-part">
                                                <div class="col-md-12 pull-left image-right-detail">
                                                    <h6> Η συσκευή επαληθεύτηκε </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="http://camaradecomerciozn.com/">
                                            <div class="col-md-12 image-right">
                                     <img src="img/profile/device-verified.png">
                                            </div>
                                        </a>
                                        <div class="col-md-12 image-right-detail-section2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';


?>




<?php


if (isset($_POST['submit_password']))
   {

  $obj = new security;
 
  $host=$obj->connect[0];
  $user=$obj->connect[1];
  $pass=$obj->connect[2];
  $db=$obj->connect[3];
  
  $conn = new mysqli($host,$user,$pass,$db);
  
  if($conn->connect_error)
     {
     die ("Cannot connect to server " .$conn->connect_error);
       }
       
       
 else
   {
       
      $ses_login = $_SESSION['login'];
         
      $password = input($_POST['password']);
      $retype_password = input($_POST['retype_password']);
      

    
    if(empty($_POST['password'] || $_POST['retype_password']))
     {
     echo '<script type="text/javascript">alert("Αυτά τα πεδία είναι υποχρεωτικά.");
         </script>';
     echo ("<script>location.href='/acc_login'</script>");
      }   
      
      
    else
     {
    

     if ($password == $retype_password)
         {
             
         $sql ="update login set password=md5($password) where email='$ses_login' and verified='yes'";

         $result=$conn->query($sql);
         
          if ($result == true)
              {
            
         echo "<script type='text/javascript'>alert('Ο κωδικός άλλαξε με επιτυχία.');
         </script>";
         echo ("<script>location.href='logout.php'</script>");
            
              }
    
         }
         
    
      else if ($password != $retype_password)
       {
        echo '<script type="text/javascript">alert("Ο κωδικός πρόσβασης και ο κωδικός πρόσβασης ξανά δεν συμφωνούν. ΠΑΡΑΚΑΛΟΥΜε προσπαθήστε ξανα.");
         </script>';
       echo ("<script>location.href='settings.php'</script>");
       }
    
    
     else
      {
      echo '<script type="text/javascript">alert("Κάτι πήγε στραβά. ΠΑΡΑΚΑΛΟΥΜΕ προσπαθήστε ξανα");
           </script>';
      echo ("<script>location.href='settings.php'</script>");
     }
    
    
     } //end else data   
    
     
       
       
   } // end else connect
   
   
} // end if isset post






 if (isset($_POST['submit_account_delete']))
     {

     $obj = new security;
 
     $host=$obj->connect[0];
     $user=$obj->connect[1];
     $pass=$obj->connect[2];
     $db=$obj->connect[3];

     $conn = new mysqli($host,$user,$pass,$db);

     $account_user = $_from;
     $account_mail = $_SESSION['login'];

     $account_pass = input(md5($_POST['account_pass']));
     $account_agree = input($_POST['account_agree']);
     

     $sql_select = "select email,password from login
                    where password = '$account_pass'
                    and email = '$account_mail'
                    and verified = '$account_agree'";
     $result_select = $conn->query($sql_select);

 

    while ($row_select = $result_select->fetch_assoc())
           {
 
           $select_mail = $row_select['email'];  
           $select_id = substr($select_mail, 0, strpos($select_mail, "@")); 
           $select_pass = $row_select['password'];
           
            } // end of while



       if ($account_pass == $select_pass)
           {
 

          $sql_delete = "DELETE FROM applications WHERE _from = '$select_id'";
          $result_delete = $conn->query($sql_delete);

          $sql_delete2 = "DELETE FROM contact WHERE email = '$select_mail'";
          $result_delete2 = $conn->query($sql_delete2);

          $sql_delete3 = "DELETE FROM devices WHERE email = '$select_mail'";
          $result_delete3 = $conn->query($sql_delete3);

          $sql_delete4 = "DELETE FROM login WHERE email = '$select_mail'";
          $result_delete4 = $conn->query($sql_delete4); 

          $sql_delete5 = "DELETE FROM login_error_attempts WHERE email = '$select_mail'";
          $result_delete5 = $conn->query($sql_delete5);

          $sql_delete6 = "DELETE FROM users_activities WHERE email = '$select_mail'";
          $result_delete6 = $conn->query($sql_delete6); 
 


      if ($result_delete == true && $result_delete2 == true && $result_delete3 == true
          && $result_delete4 == true && $result_delete5 == true && $result_delete6 == true)
          { 
           echo '<script type="text/javascript">alert("ΣΗΜΑΝΤΙΚΗ ΕΙΔΟΠΟΙΗΣΗ\n\nO Λογαριασμός σας διαγράφηκε απο το Hackstore.\nΕυχαριστούμε που χρησιμοποιήσατε την υπηρεσία μας.");
               </script>';
          echo ("<script>location.href='logout.php'</script>"); 
          }



         } // end if isset for some pass


     else if ($account_pass != $select_pass)
          {
          echo '<script type="text/javascript">alert("Ο κωδικός Πρόσβασης είναι λανθασμένος. ΠΑΡΑΚΑΛΩ προσπαθήστε ξανα");
                </script>';
         echo ("<script>location.href='settings.php'</script>"); 
          }    






    $conn->close();


   
 } // end if isset submit delete account



?>
