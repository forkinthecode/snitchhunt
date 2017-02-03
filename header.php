<!--Budget Home-->
 <!DOCTYPE HTML>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <title>Little Bird</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rosie Williams">
  <link rel="icon" 
    type="image/png" 
    href="../favicon.ico">

    </head>
    <body>

<?php


include('login.php');
//include('../inclusions.php');

include('styles.php');


 
    

?>
 <?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$team=$_POST['team_name'];
echo"<div class='signt'>Signed in as ".$team."</div>";

}else{echo"<div class='signt'>You are not signed in.</div>";

}
   ?>  
 <?php

     include'nav.php';
     ?>
  
        
   


      
 
  
      
       
       
               
 
          <div class='clear'></div>


  
<div class="page_width">
  
        <div class="left">
