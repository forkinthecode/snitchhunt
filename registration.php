<?php
  
require'header.php';
?>

   

 <?php
if ( !isset($_POST['team'] )  )
{
   $query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password";
      $result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $password=mysqli_real_escape_string($db, $row['password']); 
  echo"<h2>Enter team name</h2>
  <table class='forms' border='0px'><tr><td>
  <form action='play.php' method='POST'>
   <input type='hidden' name='password' value='".$password."'> 

<input type='text'  id='team' name='team' placeholder='Your team name' /></td><td>
<input type='submit' class='close' name='submit' value='' id='submit' /></form></td></tr></table>";



}mysqli_free_result($result);

?>
  


<?php/*
if ( isset($_POST['team'] )  )
{
$team=  $_POST['team'];

 
     if (strlen($team)>15)
     {
  echo"<h3>Your team name $team is too long: (".strlen($team)." chars). Please choose a name with less than 20 characters.</h3>";
     }
     if (strlen($team)<15)
      {
$testing_team="SELECT team FROM teams WHERE team ='".$team."'";
$result = mysqli_query($db, $testing_team );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
         {
          echo"<br> 
          <h2> Team name  <i>".$team."</i> already registered with SnitchHunt.</h2>
          <h2>To play on team $team, use your correct password and sign in using top left drop down menu.</h2>";
  
         }


if ($num_results <1)
  {
    $query="INSERT INTO teams(`team`, `ch1`, `ch1_max`, `ch2`,`ch2_max`,  `ch3`,`ch3_max`,  `ch4`,`ch4_max`,  `ch5`,`ch5_max`,  `ch6`,`ch6_max`,  `ch7`,`ch7_max`) 
                    VALUES('".$team."', '0',   '25',     '0',  '50',       '0',    '100',     '0',  '50',      '0',   '100',    '0',  '25',          '0','150'); ";
      if ($db->query($query) === TRUE) 
      {
        echo"
     <h2>   Team name $team has been registered</h2>";

      }
       else 
      {

          echo "Error: " . $query . "<br>" . $db->error;
      }


      $query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password";
      $result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $password=mysqli_real_escape_string($db, $row['password']); 
      {
        echo"<h3>You will see your password below. Copy & paste it somewhere as you may need to use it! </h3>
      ";

      }
     
     $query="UPDATE teams set time=CURRENT_TIME, date=CURDATE(), password='".$password."' where team='".$team."'; ";
      if ($db->query($query) === TRUE) 
             {
     echo"<h2>Password ".$password."</h2> <form class='links' action='play.php' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
             <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='password' value='".$password."'>
         <table><tr><td style='background:background:RGBA(42, 91, 114, 1);'>
    <h3>Click button to sign in or use the log in at the top of the page</h3></td><td>   
    <input class='play' type='submit' name='submit' value='' id='submit' /></submit>  </form></td></tr></table>
     
            <br>";
             } 
       else 
            {    
    echo "Error: " . $query . "<br>" . $db->error;
            }
}
  }
}mysqli_free_result($result);*/
    ?>



 





         
 </div>
 <div class='right'>
 




</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>