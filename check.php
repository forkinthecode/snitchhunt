<?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   $team=$_POST['team_name'];
   $password=$_POST['password'];

//echo"$team $password";
  

  
  

if ( isset($_POST['challenge1']) )
{
$data = trim($_POST['challenge1']); 
$challenge_one=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_one' && id='1'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {
  

   $sql = "UPDATE teams SET ch1='25' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='correct'>Question 1 Correct!</div><br>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
     echo"<div class='wrong'>$challenge_one Incorrect</div><br>";

  }



}


if (  isset($_POST['challenge2'] )   )
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


  $sql = "UPDATE `teams` set ch2=ch2_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='correct'>Question 2 Correct!</div>

    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
    echo"<div class='wrong'>$challenge_two Incorrect</div>";
  }



}


if (  isset($_POST['challenge3'] ) )
{
 

$challenge_three=mysqli_real_escape_string ( $db , trim($_POST['challenge3']) );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_three' && id='3'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE `teams` set ch3=ch3_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='correct'>Question 3 Correct!</div>";
  } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<div class='wrong'>$challenge_three Incorrect</div>";
}



}


if (  isset($_POST['challenge4'] ) )
{
 

$challenge_four=mysqli_real_escape_string ( $db , trim($_POST['challenge4']) );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_four' && id='4'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {
 

   $sql = "UPDATE `teams` set ch4=ch4_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
   echo"<div class='correct'>Question 4 Correct!</div>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
 echo"<div class='wrong'>$challenge_four Incorrect</div>";
 }



}


if ( isset($_POST['challenge5'] ) )
{
 

$challenge_five=mysqli_real_escape_string ( $db , trim($_POST['challenge5']) );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_five' && id='5'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE `teams` set ch5=ch5_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='correct'>Question 5 Correct!</div>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
  echo"<div class='wrong'>$challenge_five Incorrect</div><br>";
  }



}


if (  isset($_POST['challenge6'] ) )
{
 

$challenge_six=mysqli_real_escape_string ( $db , trim($_POST['challenge6']) );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_six' && id='6'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


  $sql = "UPDATE `teams` set ch6=ch6_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='correct'>Question 6 Correct!</div>";
  } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<div class='wrong'>$challenge_six Incorrect</div><br>";
  }

}

}


if ( isset($_POST['challenge7'] ) )
{
 

$challenge_seven=mysqli_real_escape_string ( $db , trim($_POST['challenge7']) );

$team=mysqli_real_escape_string ( $db , $_POST['team_name'] );


$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_seven' && id='7'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE `teams` set ch7=ch7_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='correct'>Question 7 Correct!<h3>Congratulations $team, you're all done!</h3></div> ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
elseif ($num_results ==0)
  {
 echo"<div class='wrong'>$challenge_seven Incorrect</div>";
  }







}

   ?> 