<?php
	
require'header.php';
?>


 <!--
<img src='security.jpg' width='700px'></img>-->

  <div class='homer'><h3>Play</h3>
<p>Snitchhunt puts you in the shoes of a data analyst working for the federal police, using this data to solve the challenges. You will need to dig into, 
  correlate and pivot on the various metadata sets to catch a whistleblower.</p>
<!--<p><img src="https://snitchhunt.global.ssl.fastly.net/user/pages/02.challenge/bigdata.jpg" /></p>-->
<p>Read the <a href='article.php'>article and instructions</a> carefully! We hid hints and other relevant information that you will need to complete the tasks. 
  Good luck!</p>
</div>

<?php
$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch3+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"<h2>SnitchHunt Scoreboard</h2>
<p>*Only shows teams registered in past month</p><table class='scoreboard'><tr><th>Team</th>
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


  <div class='homer'><h3>News</h3>
<p>Did you know that ISP's and phone companies have to retain metadata <a href="http://www.news.com.au/technology/online/new-data-retention-laws-begin-today-this-is-what-you-need-to-know/news-story/28ea2dc1b01d15e53f474e21b6d68501" target='_blank'>for two years</a> in case a
  government agency decides to investigate you under crimial law? </p>
<p>Now the government wants to make this data <a href='http://www.canberratimes.com.au/federal-politics/political-news/australians-phone-and-email-records-could-be-used-in-civil-lawsuits-20161222-gtgdy6.html' target='_blank'> available to civil law proceedings</a>, opening people to having their metadata used in family law disputes, workplace and business conflicts.</p>
</div>

<div class='homer'><h3>Learn</h3>
<p>Check out the <a href='datasets.php'>datasets page</a> to see what data is collected and who has access to it.
    The data that is being collected includes IP addresses, email addresses, phone numbers, and location data. 
  Although these individual datasets already reveal a lot of your online presence, the real deal is data correlation. Once an experienced analyst begins correlating the different datasets, 
    your activities throughout the day can be reconstructed.</p>
  
<p>It's easy to ignore that so much information about us is collected and stored. SnitchHunt was created to educate the public about the reality of what metadata retention really means.
   Play the game to find out how people can be tracked through their digital breadcrumbs.</p>
  </div>
</div>

 </div>
 <div class='right'>
   
<div class='tabs'>
 
 
   <input type='radio' name='tabs' id='tab1' checked >
   <label for='tab1'>
       <i class=''></i><span>Instructions</span>
   </label>
 
 
   <input type='radio' name='tabs' id='tab2' >
   <label for='tab2'>
       <i class=''></i><span>About</span>
   </label>
 
   <input type='radio' name='tabs' id='tab3' >
   <label for='tab3'>
       <i class=''></i><span>Chat</span>
   </label>

   <div id='tab-content1' class='tab-content'>
 
<p>SnitchHunt can be played by individuals or teams- just give yourself a team name.</p>
<p>You can solve SnitchHunt together as a group as a cooperative effort or you can compete against one another by registering competing teams.</p>
<p><a href='registration.php' target='_blank'>Register</a> your team name then use your team name to <a href='play.php' target='_blank'>sign in</a> and you will see the challenges 
  your team needs to solve.</p>
  <p>Solve all the challenges without accessing any hints to reach 500 points.</p>
  <p>Hints are available for challenges 2-7 inclusive. However if you click on the hints you lose half the points for that challenge.</p>
  <p>You will still need to enter the correct solution for each challenge after accessing any hints.</p>
  <p>If you need help provide a username in the chat below and ask away.</p>
 

<br>

</div>
   <div id='tab-content2' class='tab-content'>
 <p>Snitchhunt is a game desgined by Gabor Szathmari of CryptoParty Sydney to demonstrate how metadata that is kept on every
 one of us can be used to track our movements. I discovered Snitchunt at the recent event run by Melbourne University which generated these media stories:
</p>
<a href=''>http://www.abc.net.au/triplej/programs/hack/how-team-of-pre-teens-found-whisteblower-using-metadata/8113668</a>
<a href=''>http://www.startupsmart.com.au/technology/hackathon-exposes-how-easily-you-can-be-found-with-metadata/</a>
<p>

You can find Gabor at https://twitter.com/gszathmari You can find me at https://twitter.com/Info_Aus</p>
<p> You can find CryptoParty Australia at https://www.cryptoparty.in/index
</p><p>
Code is intended to be open source licenced as CC BY-SA until further notice.</p>

</div>
   <div id='tab-content3' class='tab-content'>
   

 <iframe src='https://whistleblower.network/snitch/chat/room/chat.php' style='border-width:0' width='500' height='600' frameborder='0' scrolling='no'>
<br>


  </div>
 </div>
</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>