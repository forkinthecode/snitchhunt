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
  if ( !isset($_POST['close'] ) )
{
  

  echo"
  <form action='' method='POST'> 
         <input type='hidden' name='close' value='".$close."'>
 <input type='submit' class='close' name='close' value='' id='submit' /></form>
 <h1>Welcome to SnitchHunt!</h1>
<table><tr><td>



<h1>Snitchhunt is a game desgined by Gabor Szathmari of CryptoParty Sydney to demonstrate how metadata 
can be used to track our movements. Following on from an event hosted by Melbourne Uni I created my own version to keep the 
 game up and running.
          </h1>
<h1>You can find <a href='https://twitter.com/gszathmari'>Gabor</a> and <a href='https://twitter.com/Info_Aus'>Rosie</a> on Twitter. You can find future events at <a href='https://www.cryptoparty.in/index'>CryptoParty Australia.</a>
        </h1>


     </td>

 <td style='padding:20px'>

 


  

  
<iframe src='https://calendar.google.com/calendar/embed?title=Events&amp;showDate=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffcc&amp;src=0r80kjpj3en973b8iomrpuebb8%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Australia%2FSydney'
 style='border:solid 1px #777' width='500' height='400' frameborder='0' scrolling='no'></iframe>

</td></tr></table>

      ";

         

  

}

?>

<?php

     include'nav.php';
     ?>
 <?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$team=$_POST['team_name'];
echo"<div class='toper' style='padding-left:80px'>Signed in as team <i>$team</i></div><div class='signt'>";
   
if ( isset($_POST['team_name'] ) && isset($_POST['challenge1'] ) )
{
 
  $data = $_POST['challenge1']; 
$challenge_one=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions like'%$challenge_one%' && id='1'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {
  

   $sql = "UPDATE teams SET ch1='25' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"Your solution for Challenge 1 is correct: 25 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
      echo"Your solution is Incorrect";

  }



}

?>
<?php
if ( isset($_POST['team_name'] ) && isset($_POST['challenge2'] ) )
{
 

$challenge_two=mysqli_real_escape_string ( $db , trim($_POST['challenge2']) );

$team=mysqli_real_escape_string ( $db , trim($_POST['team_name']) );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_two' && id='2'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


  $sql = "UPDATE `teams` set ch2=(ch2+50) where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"Your solution for Challenge 2 is correct: 50 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
    echo"Your solution for Challenge 2 is Incorrect";
  }



}

?>

<?php
if ( isset($_POST['team_name'] ) && isset($_POST['challenge3'] ) )
{
 

$challenge_three=mysqli_real_escape_string ( $db , $_POST['challenge3'] );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_three' && id='3'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE `teams` set ch3=(ch3+100) where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"Your solution for Challenge 3 is correct: 100 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"Your solution for Challenge 3 is Incorrect";
  }



}

?>
<?php
if ( isset($_POST['team_name'] ) && isset($_POST['challenge4'] ) )
{
 

$challenge_four=mysqli_real_escape_string ( $db , $_POST['challenge4'] );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_four' && id='4'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {
 

   $sql = "UPDATE `teams` set ch4=(ch4+50) where team='".$team."'";

if ($db->query($sql) === TRUE) {
   echo"Your solution for Challenge 4 is correct: 50 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"Your solution for Challenge 4 is Incorrect";
  }



}

?>
<?php
if ( isset($_POST['team_name'] ) && isset($_POST['challenge5'] ) )
{
 

$challenge_five=mysqli_real_escape_string ( $db , $_POST['challenge5'] );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_five' && id='5'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE `teams` set ch5=(ch5+100) where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"Your solution for Challenge 5 is correct: 100 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
    echo"Your solution for Challenge 5 is Incorrect";
  }



}

?>
<?php
if ( isset($_POST['team_name'] ) && isset($_POST['challenge6'] ) )
{
 

$challenge_six=mysqli_real_escape_string ( $db , $_POST['challenge6'] );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_six' && id='6'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


  $sql = "UPDATE `teams` set ch6=(ch6+25) where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"Your solution for Challenge 6 is correct: 25 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"Your solution for Challenge 6 is Incorrect";
  }



}

?>
<?php
if ( isset($_POST['team_name'] ) && isset($_POST['challenge7'] ) )
{
 

$challenge_seven=mysqli_real_escape_string ( $db , $_POST['challenge7'] );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );


$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_seven' && id='7'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE `teams` set ch7=(ch7+150) where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"Your solution for Challenge 7 is correct: 150 points added to team $team!";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
 echo"Your solution for Challenge 7 is Incorrect";
  }



}
echo"
</div>";

}else{

}
   ?>  
 
  
        
   


      
 
  
      
       
       
               
 
          <div class='clear'></div>


  
<div class="page_width">
  
        <div class="left">
