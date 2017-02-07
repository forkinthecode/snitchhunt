 <?php

  if ( !isset($_POST['close'] ) )
{include('login.php');
  include'styles.php';

  echo"
  <form class='top' action='' method='POST'> 
         <input type='hidden' name='close' value='".$close."'>
 <input type='submit' class='close' name='close' value='' id='submit' /></form>
 <h1>Welcome to SnitchHunt!</h1>
<table><tr><td>

<div class='homer'>

<h2>Snitchhunt is a game desgined by Gabor Szathmari of CryptoParty Sydney to demonstrate how metadata 
can be used to track our movements. Following on from an <a href=http://www.abc.net.au/triplej/programs/hack/how-team-of-pre-teens-found-whisteblower-using-metadata/8113668' target='_blank'>event</a> hosted by Melbourne Uni, Rosie Williams created this version to keep the 
 game up and running.
          </h2>
<h2>You can find <a href='https://twitter.com/gszathmari' target='_blank'>Gabor</a> and <a href='https://twitter.com/Info_Aus' target='_blank'>Rosie</a> on Twitter. You can find future events at <a href='https://www.cryptoparty.in/index'>CryptoParty Australia</a>.
        </h2>
</div>

     </td>

 <td style='padding:20px'>
<div class='homer'>
 


  

  
<iframe src='https://calendar.google.com/calendar/embed?title=Events&amp;showDate=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffcc&amp;src=0r80kjpj3en973b8iomrpuebb8%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Australia%2FSydney'
 style='border:solid 1px #777' width='500' height='500' frameborder='0' scrolling='no'></iframe>
</div>
</td></tr></table>

      ";
}
  elseif ( isset($_POST['close'] ) )
{
  include'header.php';
 
echo"




     

<div class='homer'>
<h2 >News</h2>
<p>Did you know that ISP's and phone companies have to retain metadata <a href='http://www.news.com.au/technology/online/new-data-retention-laws-begin-today-this-is-what-you-need-to-know/news-story/28ea2dc1b01d15e53f474e21b6d68501' target='_blank'>for two years</a> in case a
  government agency decides to investigate you under crimial law? </p>
<p>Now the government wants to make this data <a href='http://www.canberratimes.com.au/federal-politics/political-news/australians-phone-and-email-records-could-be-used-in-civil-lawsuits-20161222-gtgdy6.html' target='_blank'>available to civil law proceedings</a>, opening people to having their metadata used in family law disputes, workplace and business conflicts.</p>
<p>Submissions to the departmental inquiry closed at the end of January the and the government is to review the recommendations by mid April.
</div>
 

   

 
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
 <div class='right' style='background:RGBA(199,211,162, 0.5);padding:15px'>

<br>

<div class='homer'>";


$query="SELECT * FROM teams WHERE date BETWEEN date_sub( now( ) , INTERVAL 30 DAY ) AND NOW( )
 order by (ch1+ch2+ch2+ch4+ch5+ch6+ch7) DESC";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
echo"
<table class='scoreboard'><tr>
<th>Team</th>

<th>Score</th>
</tr>";
  while ($row = $result->fetch_assoc()) 
{
echo"
<tr><td>".$row['team']."</td>

<td>".($row['ch1']+$row['ch2']+$row['ch2']+$row['ch4']+$row['ch5']+$row['ch6']+$row['ch7'])."</td>
</tr>";
  }
echo"</table><p>*Only shows teams registered in past month</p>";
echo"


<br>

</div>
   <div class='homer'>
 <h2>Get Started</h2>
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


 



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>";
}

?>