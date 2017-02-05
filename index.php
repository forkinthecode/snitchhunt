<?php
	
require'header.php';
?>
 


     
     


 

   

 
  <div class='homer'><h2 >Learn</h2>
<p>Check out the metadata page to see what data is collected and who has access to it.
    The data that is being collected includes IP addresses, email addresses, phone numbers, and location data. 
  Although these individual datasets already reveal a lot of your online presence, the real deal is data correlation. Once an experienced analyst begins correlating the different datasets, 
    your activities throughout the day can be reconstructed.</p>
  
<p>It's easy to ignore that so much information about us is collected and stored. SnitchHunt was created to educate the public about the reality of what metadata retention really means.
   Play the game to find out how people can be tracked through their digital breadcrumbs.</p>
  </div>
 <div class='homer'><h2 >Play</h2>
<p>Snitchhunt puts you in the shoes of a data analyst working for the federal police, using this data to solve the challenges. You will need to dig into, 
  correlate and pivot on the various metadata sets to catch a whistleblower.</p>
<p>Read the article and instructions carefully!  
  Good luck!</p>
</div>
 </div>
 <div class='right'>

<br>

<div class='tabs'>
 
 
   <input type='radio' name='tabs' id='tab1' checked >
   <label for='tab1'>
       <i class=''></i><span>Scoreboard</span>
   </label>
 
 
   <input type='radio' name='tabs' id='tab2' >
   <label for='tab2'>
       <i class=''></i><span>Get Started</span>
   </label>
 
   <input type='radio' name='tabs' id='tab3' >
   <label for='tab3'>
       <i class=''></i><span>Chat</span>
   </label>

   <div id='tab-content1' class='tab-content'>
<div class='expand'>
<?php
$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch2+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"
<table class='scoreboard'><tr><th>Team</th>
<th>Ch1</th>
<th>Ch2</th>
<th>Ch2</th>
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
<td>".$row['ch2']."</td>
<td>".$row['ch4']."</td>
<td>".$row['ch5']."</td>
<td>".$row['ch6']."</td>
<td>".$row['ch7']."</td>
<td>".($row['ch1']+$row['ch2']+$row['ch2']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])."</td>
</tr>";
  }
echo"</table><p>*Only shows teams registered in past month</p>";
?>

</div>
 

<br>

</div>
   <div id='tab-content2' class='tab-content'>
    <div class='expand'>
    <p>SnitchHunt can be played by individuals or teams- just give yourself a team name.</p>
<p>You can solve SnitchHunt together as a group in a cooperative effort or you can compete against one another in competing teams.</p>
<p>To register your team name click play, enter a name and your password will appear on the screen.</p>
<p>Copy-paste your password somewhere in case you get signed out as you will need it to sign back in.</p>
<table><tr><td>
 <p>When you sign in with your team name and password you will see the challenges 
  your team needs to solve. There are seven challenges to complete.</p>
  <p>Solve all the challenges without accessing any hints to reach 500 points.</p>
  <p>No points are lost if you submit incorrect solutions but if you access the hints you lose half the points for that challenge.</p>
  <p>Hints are available for challenges 2-7 inclusive. However if you click on the hints you lose half the points for that challenge.</p>
  <p>You will still need to enter the correct solution for each challenge after accessing any hints.</p>
  <p>If you need help provide a username in the chat window and ask away.</p>
 </div>

</div>
   <div id='tab-content3' class='tab-content'>
   <p>Please be advised that this chat room is public and communications can be seen by anyone viewing the window.</p>


 <iframe src='https://whistleblower.network/snitch/chat/room/chat.php' style='border-width:0' width='500' height='600' frameborder='0' scrolling='no'>


  </div>
</div>



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>