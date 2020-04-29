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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link rel=”stylesheet” href=”https://use.fontawesome.com/releases/v5.2.0/css/v4-shim.css”>


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
  
  
  
  
  
  
  

.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}



</style>



<script>
function submit_delete() {
  return confirm('Είστε σίγουροι οτι θέλετε να διαγράψετε αυτή την εφαρμογή? \nΣτην περίπτωση αυτή η εφαρμογή θα χαθεί οριστικά απο το Hackstore.');
}
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


  $sql ="select email from login 
         where binary email='$ses_login' and verified='yes'";

  $result=$conn->query($sql);
  $rows = $result->num_rows;

   if ($rows == 1) 
    {  

while ($row=$result->fetch_assoc())
       {
        $email = $row['email'];
        $user = substr($email, 0, strpos($email, "@")); 
         }   
 

    } // end if


   $_from = $user;

   $sql2 = "select title from applications where _from = '$_from' ";
   $result2 = $conn->query($sql2);


   $sql3 = "select title from applications where _from = '$_from' ";
   $result3 = $conn->query($sql3);


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
         <i class="fa fa-home" style="font-size:16px"></i>  Αρχική
       </a>
       
       <a href="devices.php" id="btn-contact" class="btn btn-success btn-block follow" role="button"> 
          <i class="fa fa-mobile" style="font-size:16px"></i> Συσκευές
       </a>

     <a href="applications.php" id="btn-contact" class="btn btn-success btn-block follow" role="button"> 
         <i class="fa fa-android" style="font-size:16px"></i>  Εφαρμογές
     </a>
     

     <a href="profile.php" id="btn-contact" class="btn btn-warning btn-block" role="button"> 
        <i class="fa fa-user" style="font-size:16px"></i>  Προφίλ
     </a>


       <a href="settings.php" id="btn-contact" class="btn btn-warning btn-block" role="button"> 
           <i class="fa fa-cog" style="font-size:16px"></i>  Ρυθμίσεις
       </a>

          

                        </div>
                        <div class="row user-detail-row">
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                 <img src="img/banner-bg3.jpg" height=225px;" width="100%"> <br><br>
                                 <img src="img/banner-bg2.jpg" height=225px;" width="100%">
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
                    <a href="logout.php" class="btn btn-primary btn-block"> Αποσύνδεση <i class="fa fa-sign-out" style="font-size:16px"></i> </a>
                </div>


                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                        <ul
                                 
                    <a class="nav-link active" role="tab" data-toggle="tab">
                    <i class="fa fa-user-circle"></i> User ID: '.$user.' </a>
                                               
                                                                  
                                         </ul>
                                              
                                              <!-- Tab panes -->
                                              <div class="tab-content">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                 
                                             
                                    <div class="container well">
                                       <form action="" method="post" enctype="multipart/form-data" style="width:100%;">
                                       
                                        <div class="form-group">
                                         <i class="fa fa-user" style="font-size:16px"></i>
                                         <label for="usr"> Όνομα εφαρμογής </label>
                                         <input type="text" name="app_name" class="form-control"       
                                                id="usr" required>
                                       </div>
                                       
                                       
                                      <div class="form-group">
                                       <i class="fa fa-list" style="font-size:16px"></i>
                                       <label for="app_cat"> Κατηγορία εφαρμογής </label>
                                       <select class="form-control" name="app_category" 
                                               id="file" style="height:35px;" required> 
                                        <option value="" disabled selected> Επιλέξτε κατηγορία </option>
                                        <option value="hacking"> Hacking </option>
                                        <option value="spy"> Spy </option> 
                                        <option value="antispy"> Antispy </option>
                                        <option value="hacking - spy"> Hacking - Spy </option>
                                        <option value="hacking - antispy"> Hacking - Antispy </option>
                                        <option value="spy - antispy"> Spy - Antispy </option>
                              <option value="hacking - spy - antispy"> Hacking - Spy - Antispy </option>
                                       </select>
                                      </div>

                                   
                                       <div class="form-group">
                                       <i class="fa fa-plug" style="font-size:16px"></i>
                                       <label for="app_cat"> Συμβατότητα εφαρμογής </label>
                                <select class="form-control" name="app_compat" 
                                        id="file" style="height:35px;" required> 
                                        <option value="" disabled selected> Επιλέξτε Συμβατότητα </option>
                                        <option value="Root"> Root </option> 
                                        <option value="No Root"> No Root </option>
                                       </select>
                                      </div>
                                      
                                       
                                       <div class="form-group">
                                        <i class="fa fa-pencil" style="font-size:16px"></i>
                                        <label for="min_desc"> Σύντομη Περιγραφή </label>
                                         <input type="text" name="app_mini_desc" class="form-control"       
                                                id="usr" required>
                                      </div>
                                      
                                      
                                      
                                     <div class="form-group">
                                       <i class="fa fa-pencil" style="font-size:16px"></i>
                                       <label for="full_desc"> Πλήρης περιγραφή </label>
                                       <textarea class="form-control" name="app_full_desc"
                                                 id="usr" style="height:70px;" required></textarea>
                                      </div>
  
                                                                            
	                              <div class="form-group">
                                       <i class="fa fa-image" style="font-size:16px"></i>
                                       <label for="app_img"> Εικόνα εφαρμογής </label>
                                       <input type="file" name="app_img" class="formcontrol"
                                              style="height:40px;" id="file" required> 
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                       <i class="fa fa-android" style="font-size:16px"></i>
                                       <label for="app_fil"> Αρχείο εφαρμογής (apk) </label>
                                       <input type="file" class="form-control" name="app_apk"              
                                              style="height:40px;" id="file" required>
                                      </div>
                                      
        
	                           <div>
		                     <button type="submit" name="app_submit_upload" 
                                             class="btn btn-primary btn-block"> 
                                         Ανέβασμα εφαρμογής 
                                       <i class="fa fa-upload" style="font-size:16px"></i>
                                    </button>
	                          </div>
	
                                 </form>
                                </div>
                                
                                
                                
   
   
                                                        
                             </div>
                                                
                            </div>
                          
                          </div>
                                
                                
                                <div class="col-md-4 img-main-rightPart">
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="row image-right-part">
                                                <div class="col-md-12 pull-left image-right-detail">
                                                </div>
                                            </div>
                                        </div>
                                        
                                         
                                       <div class="col-md-12 image-right">
                                        
                                        
                                    <div class="container well">
                                       <form action="" method="post" enctype="multipart/form-data" style="width:100%;">

                                    <div class="form-group">
                                       <i class="fa fa-android" style="font-size:16px"></i>
                                       <label for="app_cat"> Εφαρμογή </label>
                                <select class="form-control" name="app_name2" id="file" style="height:35px;" required>
                                        <option value="" disabled selected> Επιλέξτε εφαρμογή </option>';
                                    while ($row2 = $result2->fetch_assoc())
                                      {
                                      $apk_name = $row2['title'];
                                      echo' <option value="'.$apk_name.'">  '.$apk_name.' </option>';
                                         }
                                 echo '</select>
                                      </div>';

                                     

                                 echo' <div class="form-group">
                                        <i class="fa fa-pencil" style="font-size:16px"></i>
                                        <label for="min_desc"> Σύντομη Περιγραφή </label>
                                   <input type="text" name="app_mini_desc2" class="form-control" id="usr" required>
                                      </div>
                                      
                                      
                                      
                                     <div class="form-group">
                                       <i class="fa fa-pencil" style="font-size:16px"></i>
                                       <label for="full_desc"> Πλήρης περιγραφή </label>
                                       <textarea name="app_full_desc2" class="form-control" id="usr"  
                                                style="height:37px;" required></textarea>
                                      </div>';


                                       
                                                                            
	                       echo'   <div class="form-group">
                                       <i class="fa fa-image" style="font-size:16px"></i>
                                       <label for="app_img"> Εικόνα εφαρμογής </label>
                                       <input type="file" name="app_img2" class="form-control"  
                                              style="height:40px;" id="file" required> 
                                      </div>
                               

                                        
                                 <div class="form-group">
                                       <i class="fa fa-android" style="font-size:16px"></i>
                                       <label for="app_fil"> Αρχείο εφαρμογής (apk) </label>
                                       <input type="file" name="app_apk2" class="form-control"  
                                              style="height:40px;" id="file" required>
                                      </div>
                                      
                                     
        
	                           <div>
		                     <button type="submit" name="app_submit_update" class="btn btn-success btn-block"> 
                                       Ενημέρωση εφαρμογής <i class="fa fa-upload" style="font-size:16px"></i>
                                    </button>
	                          </div>
	
                                 </form>
                                </div>
  

                                        </a>
                                        <div class="col-md-12 image-right-detail-section2">


                                      <div class="container well">
                                       <form action="" method="post" onsubmit="return submit_delete(this);"
                                             style="width:100%;">

                                      <div class="form-group">
                                       <i class="fa fa-android" style="font-size:16px"></i>
                                       <label for="app_cat"> Εφαρμογή </label>
                                       <select class="form-control" id="file" name="app_name3"  
                                               style="height:35px;" required>
                                        <option value="" disabled selected> Επιλέξτε εφαρμογή </option>';
                                    while ($row3 = $result3->fetch_assoc())
                                      {
                                      $apk_name_del = $row3['title'];
                                echo' <option value="'.$apk_name_del.'">  '.$apk_name_del.' </option>';
                                         }
                                 echo '</select>
                                      </div>


        
	                           <div>
		             <button type="submit" name="app_submit_delete" class="btn btn-danger btn-block"> 
                                  Διαγραφή εφαρμογής <i class="fa fa-trash" style="font-size:16px"></i>
                                    </button>
	                          </div>
	
                                 </form>
                                </div>
                                        </div>
                                        
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



} // end of else connection 1


?>



<?php

 if (isset($_POST['app_submit_upload']))
     {

     $obj = new security;
 
     $host=$obj->connect[0];
     $user=$obj->connect[1];
     $pass=$obj->connect[2];
     $db=$obj->connect[3];

     $conn2 = new mysqli($host,$user,$pass,$db);

     $app_from = $_from;

     $app_name = input($_POST['app_name']);
     $app_category = input($_POST['app_category']);
     $app_compat = input($_POST['app_compat']);
     $app_mini_desc = input($_POST['app_mini_desc']);
     $app_full_desc = input($_POST['app_full_desc']);


     $app_img_name = $conn2->real_escape_string($_FILES['app_img']['name']);
     $app_img_type = $conn2->real_escape_string($_FILES['app_img']['type']);
     $app_img_size = $_FILES['app_img']['size'];
     $app_img_data = $conn2->real_escape_string(file_get_contents($_FILES['app_img']['tmp_name']));

     $app_apk_name = $conn2->real_escape_string($_FILES['app_apk']['name']);
     $app_apk_type = $conn2->real_escape_string($_FILES['app_apk']['type']);
     $app_apk_size = $_FILES['app_apk']['size'];
     $app_apk_data = $conn2->real_escape_string(file_get_contents($_FILES['app_apk']['tmp_name']));
       
     $maxsize=16777216;


 // echo $app_name ."<br>" .$app_category ."<br>"  .$app_compat ."<br>" .$app_mini_desc ."<br>" .$app_full_desc ."<br>"
 //        .$app_img_name ."<br>" .$app_img_type ."<br>" .$app_img_size ."<br>" .$app_img_data ."<br>"
  //       .$app_apk_name ."<br>" .$app_apk_type ."<br>" .$app_apk_size ."<br>" .$app_apk_data;
     

     
     $sql_upload = "insert into applications (_from, title, mini_description, full_description, compatibility, 
                                       category, app_img_name, app_img_type, app_img_size, app_img_data,
                                       app_apk_name, app_apk_type, app_apk_size, app_apk_data)
                               values ('$app_from', '$app_name', '$app_mini_desc', '$app_full_desc', '$app_compat',
                                      '$app_category', '$app_img_name', '$app_img_type', '$app_img_size', '$app_img_data',
                                      '$app_apk_name', '$app_apk_type', '$app_apk_size', '$app_apk_data')";
    $result_upload = $conn2->query($sql_upload);

  

      if ($result_upload == true)
          { 
           echo '<script type="text/javascript">alert("Η εφαρμογή σας ανέβηκε με επιτυχία στο Hackstore");
                </script>';
          echo ("<script>location.href='upload_apk.php'</script>"); 
           }


      else
         {
         echo $result->error;
        // echo '<script type="text/javascript">alert("Κάτι πήγε λάθος. ΠΑΡΑΚΑΛΩ προσπαθήστε ξανα");
         //       </script>';
        // echo ("<script>location.href='upload_apk.php'</script>"); 
          }    


     $conn2->close();

   
 } // end if isset submit upload









 if (isset($_POST['app_submit_update']))
     {

     $obj = new security;
 
     $host=$obj->connect[0];
     $user=$obj->connect[1];
     $pass=$obj->connect[2];
     $db=$obj->connect[3];


     $conn3 = new mysqli($host,$user,$pass,$db);

     $app_from2 = $_from;

     $app_name2 = input($_POST['app_name2']);
     $app_mini_desc2 = input($_POST['app_mini_desc2']);
     $app_full_desc2 = input($_POST['app_full_desc2']);


     $app_img_name2 = $conn3->real_escape_string($_FILES['app_img2']['name']);
     $app_img_type2 = $conn3->real_escape_string($_FILES['app_img2']['type']);
     $app_img_size2 = $_FILES['app_img2']['size'];
     $app_img_data2 = $conn3->real_escape_string(file_get_contents($_FILES['app_img2']['tmp_name']));

     $app_apk_name2 = $conn3->real_escape_string($_FILES['app_apk2']['name']);
     $app_apk_type2 = $conn3->real_escape_string($_FILES['app_apk2']['type']);
     $app_apk_size2 = $_FILES['app_apk2']['size'];
     $app_apk_data2 = $conn3->real_escape_string(file_get_contents($_FILES['app_apk2']['tmp_name']));
       
     $maxsize=16777216;

     
     $sql_update = "update applications set _from = '$app_from2', mini_description = '$app_mini_desc2', 
                                            full_description = '$app_full_desc2',  
                                            app_img_name = '$app_img_name2', app_img_type = '$app_img_type2',
                                            app_img_size = '$app_img_size2', app_img_data = '$app_img_data2',
                                            app_apk_name = '$app_apk_name2', app_apk_type = '$app_apk_type2', 
                                            app_apk_size = '$app_apk_size2', app_apk_data = '$app_apk_data2'
                   where title = '$app_name2' ";
    $result_update = $conn3->query($sql_update);

  

      if ($result_update == true)
          { 
           echo '<script type="text/javascript">alert("Η εφαρμογή σας στο Hackstore ενημερώθηκε με επιτυχία ");
                </script>';
          echo ("<script>location.href='upload_apk.php'</script>"); 
           }


      else
         {
         echo '<script type="text/javascript">alert("Κάτι πήγε λάθος. ΠΑΡΑΚΑΛΩ προσπαθήστε ξανα");
                </script>';
         echo ("<script>location.href='upload_apk.php'</script>"); 
          }    


     $conn3->close();

   
 } // end if isset submit update









 if (isset($_POST['app_submit_delete']))
     {

     $obj = new security;
 
     $host=$obj->connect[0];
     $user=$obj->connect[1];
     $pass=$obj->connect[2];
     $db=$obj->connect[3];


     $conn4 = new mysqli($host,$user,$pass,$db);

     $app_from3 = $_from;

     $app_name3 = input($_POST['app_name3']);
    
     
     $sql_delete = "DELETE FROM applications WHERE _from = '$app_from3' and title = '$app_name3'";
     $result_delete = $conn4->query($sql_delete);

  

      if ($result_delete == true)
          { 
           echo '<script type="text/javascript">alert("Η εφαρμογή διαγράφηκε απο το Hackstore");
                </script>';
          echo ("<script>location.href='upload_apk.php'</script>"); 
           }


      else
        { 
         echo '<script type="text/javascript">alert("Κάτι πήγε λάθος. ΠΑΡΑΚΑΛΩ προσπαθήστε ξανα");
                </script>';
         echo ("<script>location.href='upload_apk.php'</script>"); 
          }    


     $conn4->close();

   
 } // end if isset submit delete


?>

