 <?php


include('login.php');


include('css.php');



    

?>
<!DOCTYPE html> 
<html>
<title>SnitchHunt</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width = device-width;"> 
<head>




</head>

<body >  <h2 class='top_title'>SnitchHunt  </h2>
<?php
include('footer.php');

?>

<div id='nav'>


 <?php

include'framework.php';
?>

</nav>
<table border='0px' class='top-nav'><tr><td>

   <?php
    echo" 
<form action='three.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
 <!-- <a href='https://whistleblower.network/snitch/eight.php'><img style='margin-top:-30px;' src='https://whistleblower.network/snitch/images/next-blue-light-left.png'></img></a>
-->
 </td>
  <td>

    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
   <?php
    echo" 
<form action='five.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>
<div class='page'>
<div class='left'>
  <p>  The data that is being collected includes IP addresses, email addresses, phone numbers, and location data. </p>

  	<p>
  Although these individual datasets already reveal a lot of your online presence, the real deal is data matching. Once an experienced analyst brings the different datasets together usign a common field, 
    a picture of your activites can emerge though the fragments in each dataset.</p>
     <p>It's easy to ignore that so much information about us is collected and stored. SnitchHunt was created
  to educate the public about how our everyday activities are being recorded and what this may mean for us.
  Snitchhunt puts you in the shoes of a data analyst working for the federal police, using this data to solve the challenges. </p>
<p>You will need to dig into, 
  correlate and pivot on the various metadata sets to catch a whistleblower.</p>
<p>But first we'll learn a little more about the different datasets.</p>
</div>
<div class='right'>
 <img src='https://whistleblower.network/snitch/images/snitch.png'/><br>
    <details><summary><h5>Google search data</h5></summary>
 <img class='data' src='images/google-ex.png'></img>
 </details>
 <details><summary><h5>Email dataset</h5></summary>  <img class='data' src='https://whistleblower.network/snitch/images/email-ex.png'></img>
 </details>

  

<details><summary><h5>SnitchHunt Quizzes</h5></summary>
	<p>There are 2 versions of SnitchHunt. The first is a version designed to be easily done in an evening workshop. The Short Quiz is not scored
		and requires no registration. </p>
		<p>The Hard Quiz is designed to be challenging and takes some time to complete. The Hard Quiz is scored so requires registration of a team name to begin.
			There are hints to step players through the difficulties but clicking on them results in points lost to you or your team. </p>
	<!--	<p>You can proceed through the following pages and return to this page to register if you intend to attempt the Hard Quiz.</p>-->
		</details>
  <?php
/*
if ( !isset($_POST['team_name'] ) )
{


  echo"<h5>Enter team name to register:</h5>
  <table class='forms' border='0px'><tr><td>
  <form action='' method='POST'>

<input type='text'  id='team_name' name='team_name' placeholder='Register your team name' REQUIRED/></td><td>
<input type='submit' class='close' name='submit' value='' id='submit' /></form></td></tr></table>";

}

?>
  <?php

if ( isset($_POST['team_name'] ) )
{


$team= mysqli_real_escape_string($db, $_POST['team_name']);
 
if (strlen($team)>15)
     {
  echo"<div class='toper2'><h3>Your team name $team is too long: (".strlen($team)." chars). 
         Please choose a name with less than 15 characters.</h3></div>";
      }
     

elseif (strlen($team) <15 )
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
   $query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password";
      $result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $password=mysqli_real_escape_string($db, $row['password']); 

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

*/
    ?>
 
</div>
<div class='clear'></div>

</div>
<table border='0px' class='bottom-nav'><tr><td>

   <?php
    echo" 
<form action='three.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
 <!-- <a href='https://whistleblower.network/snitch/eight.php'><img style='margin-top:-30px;' src='https://whistleblower.network/snitch/images/next-blue-light-left.png'></img></a>
-->
 </td>
  <td>

    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
   <?php
    echo" 
<form action='five.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>
</div>
</div>


</div>

</body>
</html>
