<?php
  
require'header.php';
?>

    



<?php
if ( isset($_POST['team_name'] ) )
{
 $team= $_POST['team_name'] ;
$query="SELECT *,DATE_FORMAT(date,'%d %b %Y  at  %l:%i:%S') as dates FROM teams where team='".$team."' ";
$result = mysqli_query($db, $query );
   while ($row = $result->fetch_assoc())
   { 
echo"
 <div class='homer'><h2>$team </h2>
 <p>When you click on hints you lose 1/2 the points awarded for that question. Your new max available points will be updated below</p>
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
     </table></div> ";
    }


}

 ?>

  

<?php
$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch3+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"<br><div class='homer'><h3>*Only shows teams registered in past month</h3><table class='scoreboard'><tr><th>Team</th>

<th>Score</th>
</tr>";
  while ($row = $result->fetch_assoc()) 
{
echo"<tr><td>".$row['team']."</td>

<td>".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])."</td>
</tr>";
  }
echo"</table><br></div>";mysqli_free_result($result); 
?>

 </div>
 <div class='right' style=''>
 <?php
include'challenges.php';

?>

<br>
         <div class='homer'>
<h2>Help</h2>
   <iframe src='https://whistleblower.network/snitch/chat/room/chat.php'
    style='border-width:0' width='100%' height='500px' frameborder='0' scrolling='no'>

  </div>


</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>


    