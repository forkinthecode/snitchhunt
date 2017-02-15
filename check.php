
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
if ($num_results >0)
       {

    //     echo"   <div class='homer'>";
 /*if (
  !isset($_POST['hint2']) &&
  !isset($_POST['hint3']) &&
  !isset($_POST['hint4']) &&
  !isset($_POST['hint5']) &&
  !isset($_POST['hint6']) &&
  !isset($_POST['hint7']))
 {

         if (!isset($_POST['challenge1']) && 
             !isset($_POST['challenge2'])  && 
             !isset($_POST['challenge3'])  && 
             !isset($_POST['challenge4']) && 
             !isset($_POST['challenge5']) && 
             !isset($_POST['challenge6']) && 
             !isset($_POST['challenge7'])  )
         {
      
        echo"
        <h2>Signed in as team <i>$team</i> at";    $timezone = date('h:i:sa  M d, Y ');echo" $timezone</h2></div>";
         }

 }*/

if ( isset($_POST['team_name'] ) && isset($_POST['challenge1']) )
{
$data = $_POST['challenge1']; 
$challenge_one=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );
if ($challenge_one !='')
{
$query="SELECT * FROM `solutions` WHERE solutions like'%$challenge_one%' && id='1' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {
  

   $sql = "UPDATE teams SET ch1='25' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
   echo"<div class='homer'><h2>$challenge_one is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h2>$challenge_one is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";

  }
}else"<h3>Enter an answer for Challenge 1.</h3>";



}


if ( isset($_POST['team_name'] ) && isset($_POST['challenge2'] ) )
{
 

$challenge_two=mysqli_real_escape_string ( $db , trim($_POST['challenge2']) );

$team=mysqli_real_escape_string ( $db , trim($_POST['team_name']) );
if ($challenge_two !='')
{
$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_two' && id='2'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


  $sql = "UPDATE `teams` set ch2=ch2_max where team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<div class='homer' style='padding-bottom:20px'><h2>Challenge 2 is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
  
   echo"<div class='homer' style='padding-bottom:20px'><h2>$challenge_two is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";
  }

}else echo"Enter an answer for Challenge 2";

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
    echo"<div class='homer' style='padding-bottom:20px'><h2>$challenge_three is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
   echo"<div class='homer' style='padding-bottom:20px'><h2>Challenge 3 is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";
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
   echo"<div class='homer' style='padding-bottom:20px'><h2>$challenge_four is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
 
   echo"<div class='homer' style='padding-bottom:20px'><h2>$challenge_four is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";
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
   echo"<div class='homer' style='padding-bottom:20px'><h2>Challenge 5 is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
  
   echo"<div class='homer' style='padding-bottom:20px'><h2>$challenge_five is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";
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
 echo"<div class='homer' style='padding-bottom:20px'><h2>Challenge 6 is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {
  
   echo"<div class='homer' style='padding-bottom:20px'><h2>".$challenge_six." is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";
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
   echo"<div class='homer' style='padding-bottom:20px'><h2>Challenge 7 is correct! <img style='float:right;' src='images/checked.png'/></h2></div>
    ";
   } 
   else {
    echo "Error updating db " . $db->error;
         }
    }

}
if ($num_results ==0)
  {

   echo"<div class='homer' style='padding-bottom:20px'><h2>Challenge 7 is Incorrect<img style='float:right;' src='images/error.png'/></h2></div>";
  }


//echo"</div>";
}


}
}

   ?>
   <div class='clear'></div>