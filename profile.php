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


</head>

<body>

<br>

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

  $sql ="select email, device_name, device_category, imei1, imei2, verified from login 
         where binary email='$ses_login' and verified='yes'";

  $result=$conn->query($sql);
  $rows = $result->num_rows;

   if ($rows == 1) 
    {  

while ($row=$result->fetch_assoc())
       {
        $email = $row['email'];
        $device_name = $row['device_name'];
        $device_category = $row['device_category'];
        $user = substr($email, 0, strpos($email, "@")); 
        $imei1 = $row['imei1'];
        $imei2 = $row['imei2'];
        $verified = $row['verified'];
         }   
 

    } // end if


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

       <a href="settings.php" id="btn-contact" class="btn btn-warning btn-block" role="button"> 
         <i class="fa fa-cog" style="font-size:16px"></i> Ρυθμίσεις
       </a>
          

                        </div>
                        <div class="row user-detail-row">
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                <p> <h4> Πληροφορίες συσκευής </h4> </p>
                                <img src="img/profile/android.png" height="60px" width="70px">
                                  <br>
                                <span> '.$user.' </span>
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
                    <i class="fa fa-user-circle"></i> Τα στοιχεία της συσκευής σας </a>
                                               
                                                                  
                                         </ul>
                                              
                                              <!-- Tab panes -->
                                              <div class="tab-content">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                              
                                                        <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Συσκευή </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> '.$device_name.' </p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Κατηγορία </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> '.$device_category.' </p>
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
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Imei 1 </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> '.$imei1.' </p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label> Imei2 </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p> '.$imei2.' </p>
                                                                </div>
                                                            </div>
                                                            
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

