<?php
  
require'header.php';
?>

    





 <?php
include'challenges.php';

?>

<br>
       
<?php
if ( isset($_POST['team_name'] )  )
{
 $team= $_POST['team_name'] ;
$query="SELECT *,DATE_FORMAT(date,'%d %b %Y  at  %l:%i:%S') as dates FROM teams where team='".$team."' ";
$result = mysqli_query($db, $query );
   while ($row = $result->fetch_assoc())
   { 
echo"
 <div class='homer'><details><summary>$team Scores</summary>
 <p>If you click on hints (Challenges 2-7) you lose 1/2 the points awarded for that question. Your new max available points will be updated below</p>
<table  class='score' >
 <tr><th>Score</th><th> 
     Points Awarded</th><th>New Max</th><th>Original Max</th></tr>

      <tr><td>Challenge 1</td><td> ".$row['ch1']." points</td><td>".$row['ch1_max']."</td><td>25</td></tr>
      <tr><td>Challenge 2</td><td> ".$row['ch2']." points</td><td>".$row['ch2_max']."</td><td>50</td></tr>
      <tr><td>Challenge 3</td><td> ".$row['ch3']." points</td><td>".$row['ch3_max']."</td><td>100</td></tr>
      <tr><td>Challenge 4</td><td> ".$row['ch4']." points</td><td>".$row['ch4_max']."</td><td>50</td></tr>
      <tr><td>Challenge 5</td><td> ".$row['ch5']." points</td><td>".$row['ch5_max']."</td><td>100</td></tr>
      <tr><td>Challenge 6</td><td> ".$row['ch6']." points</td><td>".$row['ch6_max']."</td><td>25</td></tr>
      <tr><td>Challenge 7</td><td> ".$row['ch7']." points</td><td>".$row['ch7_max']."</td><td>150</td></tr>
       <tr><td>Tally</td><td> ".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])." </td><td>".($row['ch1_max']+$row['ch2_max']+$row['ch3_max']+$row['ch4_max']+$row['ch5_max']+$row['ch6_max']+$row['ch7_max'])."</td><td>500</td></tr>
     </table></div></details> ";
    }



$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch3+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"<br><div class='homer'><details><summary>All Team Scores</summary><table class='scoreboard'><tr><th>Team</th>

<th>Score</th>
</tr>";
  while ($row = $result->fetch_assoc()) 
{
echo"<tr><td>".$row['team']."</td>

<td>".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])."</td>
</tr>";
  }
echo"</table><br></div></details>";mysqli_free_result($result); 
}
?>






 </div>
 <div class='right' style=''>

<div class='homer'>
   <details open><summary>Search Google Usage Data</summary>
<?php
include'google.php';
?>
</details>
</div>

 <div class='homer'>
      <details open><summary>Search Email Useage Data</summary>
<?php
include'email.php';
?>
         </details>
</div>
<div class='homer'>
  <details open><summary>Search Phone Usage Data</summary>
<?php
include'phone.php';
?>
</details>
 </div>
 <div class='homer'>
  <details open><summary>Search Phone Subscriber Data</summary>
<?php
include'subscribers.php';
?>
</details>
  
</div><div class='homer'>
 <details open><summary>Use Cross Search</summary>
<?php
include'cross.php';
?>
</details>
 </div>

  <div class='homer'>
          <details>
            <summary>Help</summary>
            <br><div class='calendar-container' style='margin-top:20px'>
<iframe  src='https://whistleblower.network/snitch/chat/room/chat.php'
    style='border-width:0' width='100%' height='600px' frameborder='0' scrolling='no'></a>
  </div>
  </details>
</div>




</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>


    