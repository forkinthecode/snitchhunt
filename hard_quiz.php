<?php


include('login.php');


include('css.php');



    

?>
<!DOCTYPE html> 
<html>
<title>SnitchHunt</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width = device-width;"> 
<head>

<?php
include('footer.php');

?>


</head>

<body > <h2 class='top_title'>Hard Quiz</h2>


<div id='nav'>
 

<?php

include'framework.php';
?>

</nav>
<table class='top-nav'><tr><td>

    <?php
    echo" 
<form action='short_quiz.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>


</td><td><a href='index.php'>Home</a></td></tr></table>

<div class='page'>
<div class='left'>

  <?php

if ( isset($_POST['team_name'] ) &&  isset($_POST['password'] ))
{
$team=  $_POST['team_name'];
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
    
 $query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password";
      $result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $password=mysqli_real_escape_string($db, $row['password']); 

  echo"<h3>Enter team name to register:</h3>
  <table class='forms' border='0px'><tr><td>
  <form action='' method='POST'>
   <input type='hidden' name='password' value='".$password."'> 

<input type='text'  id='team_name' name='team_name' placeholder='Register your team name' /></td><td>
<input type='submit' class='close' name='submit' value='' id='submit' /></form></td></tr></table>";



     }
     if (strlen($team)<15)
      {

$testing_team="SELECT team FROM teams WHERE team ='".$team."'";
$result = mysqli_query($db, $testing_team );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
         {
         /* echo"<div class='toper2'>
          <h4> Team name <i>".$team."</i> already registered with SnitchHunt. To play on team $team, 
          use your correct password and sign in using top left drop down menu.</h4></div>";
  */
         }


if ($num_results <1)

  {
   

    $query="INSERT INTO teams(`date`, `time`, `team`, `password`, `ch1`, `ch1_max`, `ch2`,`ch2_max`,  `ch3`,`ch3_max`,  `ch4`,`ch4_max`,  `ch5`,`ch5_max`,  `ch6`,`ch6_max`,  `ch7`,`ch7_max`) 
                    VALUES( CURDATE(), CURRENT_TIME(), '".$team."', '".$password."', '0',   '25',     '0',  '50',       '0',    '100',     '0',  '50',      '0',   '100',    '0',  '25',          '0','150'); ";
      if ($db->query($query) === TRUE) 
      {
        echo"<div class='toper'>
     <h4>Team name <i>$team</i> has been registered with password <i>$password</i>. Copy/paste your password to a safe place.
    </h4></div>";

      }
       else 
      {

          echo "Error: " . $query . "<br>" . $db->error;
      }


     
     }
     
     
}
  }

}
    ?>
    <?php
if ( !isset($_POST['team_name']) &&  !isset($_POST['password']) ||
 $_POST['team_name']=='' &&  $_POST['password']=='')
{
   $query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password";
      $result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $password=mysqli_real_escape_string($db, $row['password']); 
  echo"
  <table class='forms' border='0px'><tr><td>
  <form action='' method='POST'>
   <input type='hidden' name='password' value='".$password."'> 

<input type='text'  id='team_name' name='team_name' placeholder='Your team name' /></td><td>
<input type='submit' class='close' name='submit' value='' id='submit' /></form></td></tr></table>";



}

?>
<?php

 if ( !isset($_POST['team_name'] ) && isset($_POST['password']))
         {
  

 
   echo"   <div class='toper'><h3>Signed out</h3> </div>";


   
          }
      
          
 elseif (  $_POST['team_name']=='' &&  $_POST['password']==''  )
         {
   
 
  echo"   <div class='toper'><p>Register to play above or log in below</p> </div>";

  
         }

elseif ( !isset($_POST['team_name'] ) && !isset($_POST['password']  ))
         {
   
 
  echo"   <div class='toper2'><span class='lefty'>"; $timezone = date('h:i:sa  M d, Y ');
         echo"<h4>Signed out <i>$team</i> at $timezone </span></h4></div>";

  
         }

         ?>
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
  echo"   
<table border='0px' class='forms' border='0px' id='log-in'>
<tr>
<td>
<form action='' method='POST'> 
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' />

<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' />
</td>
<td>
<input class='close' type='submit'  name='submit' value='' id='submit' /></form>
</td>

</tr>
</table>";
            }

          }
   
     

?>
 
  


   <?php
  

   if ( !isset($_POST['team_name'] ) || !isset($_POST['password'] ) )
{
echo"
<table border='0px' class='forms' border='0px' id='log-in'>
<tr>
<td>
<form action='' method='POST'> 
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' />

<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' />
</td>
<td>
<input class='close' type='submit'  name='submit' value='' id='submit' /></form>
</td>

</tr>
</table>";
}

?>

  

  
 

<div class='clear'></div>
<?php

include'check.php';
include'challenges.php';

include'play.php';
include'cross2.php';
?>

</div>
<div class='right'>

<?php

include'search.php'
?>
</div>
</div>
<table class='bottom-nav'><tr><td>

  <?php
    echo" 
<form action='short_quiz.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>



</td><td><a href='index.php'>Home</a></td></tr></table>
</div>

</div>

</div>

</body>
</html>