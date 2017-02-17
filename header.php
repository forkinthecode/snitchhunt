
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


 include'nav.php';
    

?>



  
    </div> <div class='clear'></div>   
 



  <div class="page_width">



    <?php
      if ( isset($_POST['team_name'] ) && isset($_POST['password']))
         {
     $data=$_POST['password'];
$password=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );


$query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            if ($num_results<1)
            {
  echo"   <div class='toper'> <h3>Wrong team or password</h3> </div>";
            }

          }
   
      if ( !isset($_POST['team_name'] ) && isset($_POST['password']))
         {
  

 
   echo"   <div class='toper'><h3>Signed out</h3> </div>";


   
          }
        
          
 elseif (  $_POST['team_name']=='' &&  $_POST['password']==''  )
         {
   
 
  //echo"   <div class='toper'><h3>No team or password entered</h3> </div>";

  
         }

elseif ( !isset($_POST['team_name'] ) && !isset($_POST['password']  ))
         {
   
 
  echo"   <div class='toper2'><span class='lefty'>"; $timezone = date('h:i:sa  M d, Y ');
         echo"<h4>Signed out <i>$team</i> at $timezone </span></h4></div>";

  
         }

?>
 

 <?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   $team=$_POST['team_name'];
   $password=$_POST['password'];


  
    if ( $team!='' && $password!='' )
{
  
   $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
  $result = mysqli_query($db, $query);
@$num_results = mysqli_num_rows($result);
 
          if (!isset($_POST['challenge1']) &&
          !isset($_POST['challenge2'] ) &&
          !isset($_POST['challenge3'] ) &&
          !isset($_POST['challenge4'] ) &&
          !isset($_POST['challenge5'] ) &&
          !isset($_POST['challenge6'] ) &&
          !isset($_POST['challenge7'] )) 
          {

            echo"<div class='toper'><h3>Enter an answer to see your progress</h3></div>";
          }


if ($num_results >0)
       {

        if (isset($_POST['challenge1']) ||
          isset($_POST['challenge2'] ) ||
          isset($_POST['challenge3'] ) ||
          isset($_POST['challenge4'] ) ||
          isset($_POST['challenge5'] ) ||
          isset($_POST['challenge6'] ) ||
          isset($_POST['challenge7'] )) 
       
echo"<div class='toper'>";
if ( isset($_POST['team_name'] ) && isset($_POST['challenge1']) )
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
    echo"<span class='right' >Question 1</span>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
     echo"<span class='wrong'>Challenge 1</span>";

  }



}


if ( isset($_POST['team_name'] ) && isset($_POST['challenge2'] )   )
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
    echo"<span class='right'>Question 1</span><span class='right' >Question 2</span>

    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
    echo"<span class='right'>Question 1</span><span class='wrong'>Challenge 2</span>";
  }



}


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


   $sql = "UPDATE `teams` set ch3=ch3_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right' >Question 3</span>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='wrong'>Challenge 3 </span>";
  }



}


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
 

   $sql = "UPDATE `teams` set ch4=ch4_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
   echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right' >Question 3</span><span class='right' >Question 4</span>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
 echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right'>Question 3</span><span class='wrong'>Challenge 4</span>";
  }



}


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


   $sql = "UPDATE `teams` set ch5=ch5_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right' >Question 3</span><span class='right' >Question 4</span><span class='right' >Question 5</span>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
  echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right'>Question 3</span><span class='right' >Question 4</span><span class='wrong'>Challenge 5</span>";
  }



}


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


  $sql = "UPDATE `teams` set ch6=ch6_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right' >Question 3</span><span class='right' >Question 4</span><span class='right' >Question 5</span><span class='right' >Question 6</span>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right'>Question 3</span><span class='right' >Question 4</span><span class='right'>Question 5</span><span class='wrong'>Challenge 6</span>";
  }

}

}


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


   $sql = "UPDATE `teams` set ch7=ch7_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right' >Question 3</span><span class='right' >Question 4</span><span class='right' >Question 5</span><span class='right' >Question 6</span><span class='right' >Question 7</span>";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
elseif ($num_results ==0)
  {
 echo"<span class='right'>Question 1</span><span class='right' >Question 2</span><span class='right'>Question 3</span><span class='right' >Question 4</span><span class='right'>Question 5</span><span class='right' >Quetion 6</span><span class='wrong'>Challenge 7</span>";
  }



}


}echo"</div>";
}

   ?>  
  <div class='clear'></div>
   <?php
if ( isset($_POST['team'] ) &&  isset($_POST['password'] ))
{
$team=  $_POST['team'];
$password=  $_POST['password'];

 if (!isset($_POST['challenge1']) && 
             !isset($_POST['challenge2'])  && 
             !isset($_POST['challenge3'])  && 
             !isset($_POST['challenge4']) && 
             !isset($_POST['challenge5']) && 
             !isset($_POST['challenge6']) && 
             !isset($_POST['challenge7'])  )
         {
 
     if (strlen($team)>15)
     {
  echo"<div class='toper2'><h3>Your team name $team is too long: (".strlen($team)." chars). Please choose a name with less than 15 characters.</h3></div>";
     }
     if (strlen($team)<15)
      {

$testing_team="SELECT team FROM teams WHERE team ='".$team."'";
$result = mysqli_query($db, $testing_team );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
         {
          echo"<div class='toper2'>
          <h4> Team name <i>".$team."</i> already registered with SnitchHunt. To play on team $team, 
          use your correct password and sign in using top left drop down menu.</h4></div>";
  
         }


if ($num_results <1)

  {
   

    $query="INSERT INTO teams(`date`, `time`, `team`, `password`, `ch1`, `ch1_max`, `ch2`,`ch2_max`,  `ch3`,`ch3_max`,  `ch4`,`ch4_max`,  `ch5`,`ch5_max`,  `ch6`,`ch6_max`,  `ch7`,`ch7_max`) 
                    VALUES( CURDATE(), CURRENT_TIME(), '".$team."', '".$password."', '0',   '25',     '0',  '50',       '0',    '100',     '0',  '50',      '0',   '100',    '0',  '25',          '0','150'); ";
      if ($db->query($query) === TRUE) 
      {
        echo"<div class='toper'>
     <h4>Team name $team has been registered with password $password. Use these credentials to log in.
    </h4></div>";

      }
       else 
      {

          echo "Error: " . $query . "<br>" . $db->error;
      }


     
     }
     
     
}
  }
}mysqli_free_result($result);
    ?>

  <br>
        <div class="left">
