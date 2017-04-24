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
<div id='nav'>
 

<?php

include'framework.php';
?>

</nav>


<div class='page'>
<div class='left'>

    
  <?php

if ( isset($_POST['team_name'] ) && $_POST['team_name']!='' && !isset($_POST['password'] ))
{
//tests set team name against existing users in database

$team= mysqli_real_escape_string($db, $_POST['team_name']);
$testing_team="SELECT team FROM teams WHERE team ='".$team."'";
        $result = mysqli_query($db, $testing_team );
        @$num_results = mysqli_num_rows($result);


        if ($num_results >0)
                 {
                  echo"<div class='toper2'>
                  <h4> Team name <i>".$team."</i> already registered with SnitchHunt. To play on team $team, 
                  use your correct password and sign in using top left drop down menu.</h4></div>";
 //if there is an existing user by the same name, registration form is displayed again so a new team name can be registered
  echo"
  <table class='forms' border='0px'><tr><td>
  <form action='' method='POST'>

<input type='text'  id='team_name' name='team_name' placeholder='Register your team/user name' REQUIRED/></td><td>
<input type='submit' class='close' name='submit' value='' id='submit' /></form></td></tr></table>";
}

                if ($num_results <1)
                {
 
if (strlen($team)>15)
     {
//tests to see team name is not tooo long. If it is longer than 15 characters the following error message is displayed
  echo"<h3>Your team/user name $team is too long: (".strlen($team)." chars). 
         Please choose a name with less than 15 characters.</h3>";
      }
     

elseif (strlen($team) <15 )
{

 //if team name netered is not already in use and is under 15 characters, the password is automatically generated, 
  //entered into database along with team name and displayed to the user for them to record
   $query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password";
      $result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $password=mysqli_real_escape_string($db, $row['password']); 

    $query="INSERT INTO teams(`date`, `time`, `team`, `password`, `ch1`, `ch1_max`, `ch2`,`ch2_max`,  `ch3`,`ch3_max`,  `ch4`,`ch4_max`,  `ch5`,`ch5_max`,  `ch6`,`ch6_max`,  `ch7`,`ch7_max`) 
                    VALUES( CURDATE(), CURRENT_TIME(), '".$team."', '".$password."', '0',   '25',     '0',  '50',       '0',    '100',     '0',  '50',      '0',   '100',    '0',  '25',          '0','150'); ";
                if ($db->query($query) === TRUE) 
                {
                  echo"
               <h3>Team/user name <i>$team</i> has been registered with password $password
              </h3>
              <h3>Copy/paste this info to text or Google doc that you can use to paste useful information as you proceed.</h3>";

                }
                   else 
                  {

                      echo "Error: " . $query . "<br>" . $db->error;
                  }


  }
}

    }


    ?>
   
   
<?php

 if ( !isset($_POST['team_name'] ) && !isset($_POST['password']))
         {
  
//tests to see if user is signed out and displays appropriate message
 
   echo"   <h3>Signed out</h3> ";


   
          }
      
          
 elseif (  $_POST['team_name']=='' &&  $_POST['password']==''  )
         {
   
 
  echo"  <p>Register to play above or log in below</p> ";

  
         }



         ?>

 
  


  
 <?php
//tests that credentials are not set and displays forms for first run at registration
if ( !isset($_POST['team_name'] ) || !isset($_POST['password'] ) && $_POST['password']!='')
{


 echo" 
  <table class='forms' border='0px'><tr><td>
  <form action='' method='POST'>

<input type='text'  id='team_name' name='team_name' placeholder='Register your team/user name' REQUIRED/></td><td>
<input type='submit' class='close' name='submit' value='' id='submit' /></form></td></tr>
</table>

";
}

?>
 <?php
if ( !isset($_POST['team_name'] ) || !isset($_POST['password'] ) )
{
echo"
<table class='forms'> <tr><td>
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



</td><td><a href='https://whistleblower.network/snitch/index.php'>Home</a></td></tr></table>
</div>

</div>

</div>

</body>
</html>
