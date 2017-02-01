<!--top level openaus page-->
<!--BudPOST Home-->
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

  
        
                     
 
  <div class="jumbotron"> 
 <?php
     include'nav.php';
     ?>
  
  
        </div>
          
       

          <div class='clear'></div>
<div class="page_width">


        <div class="left">
           <?php/*
if ( !isset($_POST['team_name'] )  )
{
  echo"<h1>If your team is registered log in using the team name</h1>
  <table class='forms' border='0px'><tr><td>
  <form action='play.php' method='POST'>

<input type='hidden' name='team' value='".mysqli_real_escape_string($db, $_POST['team'])."'>
<input type='text'  id='team_name' name='team_name' placeholder='Your team name' /></td><td>
<input type='submit'  name='submit' value='Submit' id='submit' /></form></td></tr></table>";



}mysqli_free_result($result);
*/
?>

      <?php
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
    echo"<h2>Your solution for Challenge 1 is correct</h2>";
    echo "<h2>25 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
      echo"<h2>Your solution is Incorrect</h2>";

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
    echo"<h2>Your solution for Challenge 2 is correct</h2>";
    echo "<h2>50 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
    echo"<h2>Your solution is Incorrect</h2>";
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
    echo"<h2>Your solution for Challenge 3 is correct</h2>";
    echo "<h2>100 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<h2>Your solution is Incorrect</h2>";
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
   echo"<h2>Your solution for Challenge 4 is correct</h2>";
    echo "<h2>50 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<h2>Your solution is Incorrect</h2>";
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
    echo"<h2>Your solution for Challenge 5 is correct</h2>";
    echo "<h2>100 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
    echo"<h2>Your solution is Incorrect</h2>";
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
    echo"<h2>Your solution for Challenge 6 is correct</h2>";
    echo "<h2>25 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<h2>Your solution is Incorrect</h2>";
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
    echo"<h2>Your solution for Challenge 7 is correct</h2>";
    echo "<h2>150 points added to team $team!</h2>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
 echo"<h2>Your solution is Incorrect</h2>";
  }



}

?>
<?php
if ( isset($_POST['team_name'] ) )
{
 $team= $_POST['team_name'] ;
$query="SELECT *,DATE_FORMAT(date,'%d %b %Y  at  %l:%i:%S') as dates FROM teams where team='".$team."' LIMIT 1";
$result = mysqli_query($db, $query );
   while ($row = $result->fetch_assoc())
   { 
echo"<h1>Score for team: $team </h1>
<h3>Last active  ".$row['dates']." </h3>
<table  class='score' >
 <tr><th>Score</th><th> 
     ".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])." points</th><th>Max Points</th></tr>

    <tr><td>Challenge 1:</td><td> ".$row['ch1']." points</td><td>25</td></tr>
      <tr><td>Challenge 2:</td><td> ".$row['ch2']." points</td><td>50</td></tr>
      <tr><td>Challenge 3:</td><td> ".$row['ch3']." points</td><td>100</td></tr>
      <tr><td>Challenge 4:</td><td> ".$row['ch4']." points</td><td>50</td></tr>
      <tr><td>Challenge 5:</td><td> ".$row['ch5']." points</td><td>100</td></tr>
      <tr><td>Challenge 6:</td><td>".$row['ch6']." points</td><td>25</td></tr>
      <tr><td>Challenge 7:</td><td> ".$row['ch7']." points</td><td>150</td></tr>
     </table> ";
    }echo"";


}

 ?>
<?php
$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch3+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"<br><br><p>*Only shows teams registered in past month</p><table class='scoreboard'><tr><th>Team</th>
<th>Ch1</th>
<th>Ch2</th>
<th>Ch3</th>
<th>Ch4</th>
<th>Ch5</th>
<th>Ch6</th>
<th>Ch7</th>
<th>Score</th>
</tr>";
  while ($row = $result->fetch_assoc()) 
{
echo"<tr><td>".$row['team']."</td>
<td>".$row['ch1']."</td>
<td>".$row['ch2']."</td>
<td>".$row['ch3']."</td>
<td>".$row['ch4']."</td>
<td>".$row['ch5']."</td>
<td>".$row['ch6']."</td>
<td>".$row['ch7']."</td>
<td>".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])."</td>
</tr>";
  }
echo"</table>";
?>



         
 </div>
 <div class='right'>

<?php
include'challenges.php';

?>
  


</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>


    