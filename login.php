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


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


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
  
  if($conn->connect_error)
     {
     die ("Cannot connect to server " .$conn->connect_error);
       }
 else
   {
 
   if(empty($_POST['email'] || $_POST['password']))
     {
     echo '<script type="text/javascript">alert("Αυτά τα πεδία είναι υποχρεωτικά.");
         </script>';
     echo ("<script>location.href='/acc_login'</script>");
      }


else
{

  $email = input($_POST['email']);
  $password = md5(input($_POST['password']));

  $email = $conn->real_escape_string($email);
  $password = $conn->real_escape_string($password); 

  $sql ="select email,password,verified from login 
         where binary email='$email' and password='$password' and verified='yes'";

  $result=$conn->query($sql);
  $rows = $result->num_rows;

   if ($rows == 1) 
    {  
    
     $finger = substr(str_shuffle(str_repeat("0123456789ABCDEF", 32)), 0, 32);
    
    $length = 30;
   $cookie_id= substr(str_shuffle
   ("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+|-=[]{};./:?>< "),0, $length);
   
     $cookie_name="hackstore";
     setcookie($email,$cookie_id,time() + (3600),"/",false,true);

     require ('browser_user.php');

      $ip_addr = $_SERVER['REMOTE_ADDR'];

     $sql4="insert into users_activities (email,ip_addr,browser,log_in_time,fingerprint,cookies)
            values('$email','$ip_addr','$yourbrowser',NOW(),'$finger','$cookie_id')";
     $result4=$conn->query($sql4);
   

       session_start();
 
     //all sessions
    $_SESSION['fingerprint']=$finger;
   $_SESSION['login']=$email;


while ($row=$result->fetch_assoc())
       {
   $_SESSION['mail']=$row['email'];
         }   
 
     echo ("<script>location.href='index.php'</script>");

    } // end id
   // log file for login error atempts


  else 
   { 
  

       require ('browser_user.php');

       $ip_addr2 = $_SERVER['REMOTE_ADDR'];

    $sql5="insert login_error_attempts (ip_addr,browser,email,password) 
           values('$ip_addr2','$yourbrowser','$email','$password')";
    $result5=$conn->query($sql5);   

   echo ("<script>location.href='/acc_login/error_login.php'</script>");

   } 

  }//end else for control

 }// end else for data

 $conn->close(); 

}// end big if

?>
