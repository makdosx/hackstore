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


else
{

require('__ROOT__/class_cn.php');

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



  if(isset($_GET['id']))
     {

     $id = intval($_GET['id']);

    
        $sql= " SELECT app_apk_name, app_apk_type, app_apk_size, app_apk_data FROM applications WHERE id ='$id'";
        $result = $conn->query($sql);
 
        if($result) 
         {
                $row = $result->fetch_assoc();
             
                header("Content-Type: ". $row['app_apk_type']);
                header("Content-Length: ". $row['app_apk_size']);
                header('Content-Disposition:attachment;filename="' .$row['app_apk_name'] .'"');
 
              
                echo $row['app_apk_data'];
            }
            else 
            {
                echo 'Error! No data exists with that ID.';
            }

     } // end of isset id


    } // end else of connect



 } // end else of session login


?>



