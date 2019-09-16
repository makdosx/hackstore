<?php

require('../__DEV__/force_https.php');

$ref = $_SERVER['HTTP_REFERER'];
$origin =  substr($ref, 0, 22); 


 if ($origin != 'https://www.paypal.com')
    {
        
echo'        
<html>
<head>

  <link rel="icon" href="/img/favicon.png" type="image/png">
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
    <img src="bg-01.jpg" height="450px" width="100%">
  </div>
 
   <br>




</body>

</html>

  <div align="center">  <font size="6"> Δεν έχετε πραγματοποιήσει αγορά μέσω τράπεζας. <br>
      <a href="/"> Προσπαθήστε ξανά </a> </font> </div>

<p class="p"></p>';   

exit;

    }
    
    
    
    else
     {
    
echo"    
<html>
<head>

<meta charset='utf-8'>
<title> Hackstore </title>

<link rel='icon' href='/img/favicon.png' type='image/png'>


<style>
    
#top
{
position:absolute;
top:0;
}


#center
{
position:absolute;
top:260;
}


#center2
{
position:absolute;
top:290;
}



#footer
{
position:absolute;
top:500;
}


#footer2
{
position: absolute;
top: 85%;
left: 40%;
margin-top: 0px;
margin-left: -100px;
}


h2
{
background-color: #ffd200;
color: white;
}

h3
{
background-color: #ffd200;
color: black;
}

tr
{
height: 40px;
background-color: #ffd200;
color: black;
font-weight: bold;
}

#a1 
{
color: black;
text-decoration: none;
font-weight: bold;
}

#a1:hover
{
color: grey;
}


#a2
{
color: black;
text-decoration: none;
font-weight: bold;
position:fixed;
top:13;
left:20;
}

#a2:hover
{
color: grey;
}



#a3
{
color: white;
font-weight: bold;
}

#a3:hover
{
color: #b0a8a8;
}






#tr2
{
background-color: transparent;
color:black;
}


#tr3
{
background-color: transparent;
height: 10px;
}


    
</style>    
    
</head>

<body>



<table border='0' style='width:99.4%;' id='top'>


<th> 
<a href='/' id='a2'> Πίσω στην αρχική  <a/>
<font size='6'> <a href='' id='a1'> Hackstore </a> </font> 
</th>

<tr>

<td align='center'> 
<img src='/img/buy.png' height='23' width='23'>
<font size='5'> Ολοκλήρωση αγοράς </font>  
</td>

</tr>


<tr>
<td colspan='2' align='center'> <font size='5'> Η αγορά σας ολοκληρώθηκε με επιτυχία. </font>  
</td>
</tr>

<tr>
<td colspan='2' align='center'> <font size='5'> Με εκτίμηση Hackstore </font>  
</td>
</tr>



</table>



<table border='0' style='width:99.4%;' id='center2'>

<tr id='tr2'>
<td  align='center'> 
<img src='/img/hackstore.jpg' height='400' width='35%'>  
</td>
</tr>


</table>


</body>
</html";
       
     }
  
  
?>  

