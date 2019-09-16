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


<html>
<head>

  <link rel="icon" href="images/favicon.png" type="image/png">
  <title> Hackstore </title>


<style>

.p 
{
background-color:blue;
height: 30px;
}


a
{
text-decoration:black;
color:red;
}


a:hover
{
color:black;
}


</style>


</head>

<body bgcolor="white">


  <p class="p"></p>

  <div align="center">
    <img src="images/bg-01.jpg" height="450px" width="100%">
  </div>
 
   <br>




</body>

</html>


<?php

//header("refresh:2;url=/acc_login");
echo "<div align='center'>  <font size='6'> Η προσπάθεια σύνδεσης στο hackstore απέτυχε. <br>
      <a href='/acc_login'> Προσπαθήστε ξανά </a> </font> </div>";

echo "<p class='p'></p>";

exit; 

?>
