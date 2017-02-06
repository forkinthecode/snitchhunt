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

$query="SELECT *,DATE_FORMAT(date,'%d %b %Y  at  %l:%i:%S') as dates FROM teams where team='".$team."' ";
$result = mysqli_query($db, $query );
   while ($row = $result->fetch_assoc())
   { 
echo"
<h3>Score for ".$team."</h3>
<table  class='score' >
 <tr><th>Score</th><th> 
     ".($row['ch1']+$row['ch2']+$row['ch3']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])." points</th><th>Max Points</th></tr>

    <tr><td>Challenge 1:</td><td> ".$row['ch1']." points</td><td>25</td></tr>
      <tr><td>Challenge 2:</td><td> ".$row['ch2']." points</td><td>50</td></tr>
      <tr><td>Challenge 3:</td><td> ".$row['ch3']." points</td><td>100</td></tr>
      <tr><td>Challenge 4:</td><td> ".$row['ch4']." points</td><td>50</td></tr>
      <tr><td>Challenge 5:</td><td> ".$row['ch5']." points</td><td>100</td></tr>
      <tr><td>Challenge 6:</td><td>".$row['ch6']." points</td><td>25</td></tr>
      <tr><td>Challenge 7:</td><td> ".$row['ch7']." points</td><td>150</td></tr>
     </table> ";
    }echo"";


      }
    }
  }
}
 ?>