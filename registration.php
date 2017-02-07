<?php
  
require'header.php';
?>

   

 <?php
if ( !isset($_POST['team'] )  )
{
  echo"<h2>Enter team name</h2>
  <table class='forms' border='0px'><tr><td>
  <form action='registration.php' method='POST'>
   <input type='hidden' name='close' value='".$close."'> 

<input type='text'  id='team' name='team' placeholder='Your team name' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>";



}mysqli_free_result($result);

?>

<?php
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
          <h2> Team name  <i>".$team."</i> already registered with SnitchHunt</h2>
          <h4>To play on team $team, use your correct password and sign in using top left drop down menu</h4>";
  
         }


if ($num_results <1)
  {
    $query="INSERT INTO teams(`team`, `ch1`, `ch2`,`ch3`,`ch4`,`ch5`,`ch6`,`ch7`) 
     VALUES('".$team."', '0', '0','0','0','0','0','0'); ";
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
        <h3>Use your team name and password to log in at top right. </h3>";

      }
     
     $query="UPDATE teams set time=CURRENT_TIME, date=CURDATE(), password='".$password."' where team='".$team."'; ";
      if ($db->query($query) === TRUE) 
             {
     echo"<h2>Password ".$password."</h2>";
             } 
       else 
            {    
    echo "Error: " . $query . "<br>" . $db->error;
            }
}
  }
}mysqli_free_result($result);
    ?>



 


  




         
 </div>
 <div class='right'>
 
<?php
$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch3+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"<br><h3>Only shows teams registered in past month</h3><table class='scoreboard'><tr><th>Team</th>
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



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>