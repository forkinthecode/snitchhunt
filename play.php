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
           <?php
if ( !isset($_POST['team_name'] )  )
{
  echo"<h1>If your team is registered log in using the team name</h1>
  <table class='forms' border='0px'><tr><td>
  <form action='play.php' method='POST'>

<input type='hidden' name='team' value='".mysqli_real_escape_string($db, $_POST['team'])."'>
<input type='text'  id='team_name' name='team_name' placeholder='Your team name' /></td><td>
<input type='submit'  name='submit' value='Submit' id='submit' /></form></td></tr></table>";



}mysqli_free_result($result);

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
 
$data = $_POST['challenge2']; 
$challenge_two=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_two' && id='2'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE teams SET ch2='50' WHERE team='".$team."'";

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
 
$data = $_POST['challenge3']; 
$challenge_three=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_three' && id='3'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE teams SET ch3='100' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h2>Your solution for Challenge 2 is correct</h2>";
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
 
 $data = $_POST['challenge4']; 
$challenge_four=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_four' && id='4'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {
 

   $sql = "UPDATE teams SET ch4='50' WHERE team='".$team."'";

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
 
$data = $_POST['challenge5']; 
$challenge_five=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_five' && id='5'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE teams SET ch5='100' WHERE team='".$team."'";

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
 
 $data = $_POST['challenge6']; 
$challenge_six=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_six' && id='6'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE teams SET ch6='25' WHERE team='".$team."'";

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
 
$data = $_POST['challenge7']; 
$challenge_seven=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );



$query="SELECT * FROM `solutions` WHERE solutions ='$challenge_seven' && id='7'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
{
   while ($row = $result->fetch_assoc()) 

    
    {


   $sql = "UPDATE teams SET ch7='150' WHERE team='".$team."'";

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
if ( isset($_POST['team_name'] )  )
{
 $team= $_POST['team_name'] ;
$query="SELECT *,DATE_FORMAT(date,'%d %b %Y  at  %l:%i:%S') as dates FROM teams where team='$team'";
$result = mysqli_query($db, $query );
   while ($row = $result->fetch_assoc())
   { 
echo"<h1>Score for team: $team </h1>
<h3>Last update  ".$row['dates']." </h3>
<table  class='score' >
 <tr><th><h2>Score</h2></th><th><h2> 
     ".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])." points</h2></th></tr>

    <tr><td>Challenge 1:</td><td> ".$row['ch1']." points</td></tr>
      <tr><td>Challenge 2:</td><td> ".$row['ch2']." points</td></tr>
      <tr><td>Challenge 3:</td><td> ".$row['ch3']." points</td></tr>
      <tr><td>Challenge 4:</td><td> ".$row['ch4']." points</td></tr>
      <tr><td>Challenge 5:</td><td> ".$row['ch5']." points</td></tr>
      <tr><td>Challenge 6:</td><td>".$row['ch6']." points</td></tr>
      <tr><td>Challenge 7:</td><td> ".$row['ch7']." points</td></tr>
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
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch1 FROM teams where team='$team' && ch1='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{

echo" 
<div class='answers' style='background-color:#f29f91'><span class='right'>25 points</span>
 <h4> Challenge 1 </h4>



<p>Q.What's the name of the Chief Data Officer?</p>
<p>Hint: Search the <a href='article.php'>article</a> to find this answer.</p>

<table class='forms' border='0px'><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge1' name='challenge1' placeholder='Challenge 1 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div><br>";
}

}

?>

<?php
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch2 FROM teams where team='$team' && ch2='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{


echo"<br>
<div class='answers' style='background-color:#f2d091;'><span class='right'>50 points</span>
 <h4> Challenge 2 </h4>



<p>Q.What the Google 'user ID' of the whistleblower?</p>

<p>Hint: Search the <a href='google_metadata.php'>Google metadata</a> to find this answer.</p>



<table class='forms' border='0px' ><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge2' name='challenge2' placeholder='Challenge 2 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div>";
}
}
?>
<?php
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch3 FROM teams where team='$team' && ch3='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{


echo"<br>
<div class='answers' style='background-color:#e3f291;'><span class='right'>100 points</span>
 <h4> Challenge 3 </h4>



<p>Q.What the email address is of the whistleblower?</p>

<p>Hint: Search the <a href='email_metadata.php'>email metadata</a> to find this answer.</p>


<table class='forms' border='0px'><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge3' name='challenge3' placeholder='Challenge 3 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div>";
}
}
?>
<?php
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch4 FROM teams where team='$team' && ch4='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{


echo"<br>
<div class='answers' ><span class='right'>50 points</span>
 <h4> Challenge 4</h4>



<p>Q.What the full address is of the whistleblower?</p>


<p>Hint: You'll need to search <a href='phone_subscribers.php'>phone subscribers</a> for this answer.</p>

<table class='forms' border='0px'><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge4' name='challenge4' placeholder='Challenge 4 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div>";
}
}
?>
<?php
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch5 FROM teams where team='$team' && ch5='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{


echo"<br>
<div class='answers' style='background:#aae2f7'><span class='right'>100 points</span>
 <h4> Challenge 5 </h4>



<p>Q.What the last known location of the whistleblower?</p>


<p>Hint: For this answer you will need to use <a href='phone_metadata.php'>phone metadata</a> search.</p>
<table class='forms' border='0px'><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge5' name='challenge5' placeholder='Challenge 5 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div>";
}
}
?>
<?php
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch6 FROM teams where team='$team' && ch6='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{


echo"<br>
<div class='answers' style='background:#b09bef'><span class='right'>25 points</span>
 <h4> Challenge 6 </h4>



<p>Q.How many times did the whistleblower and the journalist talk to each other?</p>


<p>Hint: You will need the <a href='cross_search.php'>cross search</a> to answer this one.</p>

 <table class='forms' border='0px'><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge6' name='challenge6' placeholder='Challenge 6 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div>";
}
}
?>
<?php
if ( isset($_POST['team_name'] ) )
{

$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT ch7 FROM teams where team='$team' && ch7='0'";
  $result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)

{


echo"<br>
<div class='answers' style='background:#f2f26a'><span class='right'>150 points</span>
 <h4> Challenge 7 </h4>



<p>What's the name of the second whistleblower at Minecorp?</p>

<p>Hint: You will need the <a href='cross_search.php'>cross search</a> to answer this one.</p>


 <table class='forms' border='0px'><tr><td>
 <form action='play.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'>

<input type='text'  id='challenge7' name='challenge7' placeholder='Challenge 7 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div>";

}
}

?>

 


  

</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>
    