<?php
	
require'header.php';
?>


 <!--
<img src='security.jpg' width='700px'></img>-->
<div class='home' style="background-image:'security.jpg';width='700px">
  <div class='homer'><h3>News</h3>
<p>Did you know that ISP's and phone companies have to retain metadata <a href="http://www.news.com.au/technology/online/new-data-retention-laws-begin-today-this-is-what-you-need-to-know/news-story/28ea2dc1b01d15e53f474e21b6d68501" target='_blank'>for two years</a>in case a
	government agency decides to investigate you under crimial law? </p>
<p>Now the government wants to make this data <a href='http://www.canberratimes.com.au/federal-politics/political-news/australians-phone-and-email-records-could-be-used-in-civil-lawsuits-20161222-gtgdy6.html' target='_blank'>available to civil law proceedings</a>, opening people to having their metadata used in family law disputes, workplace and business conflicts.</p>
</div>

<div class='homer'><h3>Learn</h3>
<p>Check out the <a href='datasets.php'>datasets page</a> to see what data is collected and who has access to it.
    The data that is being collected includes IP addresses, email addresses, phone numbers, and location data. 
	Although these individual datasets already reveal a lot of your online presence, the real deal is data correlation. Once an experienced analyst begins correlating the different datasets, 
    your activities throughout the day can be reconstructed.</p>
  
<p>It's easy to ignore that so much information about us is collected and stored. SnitchHunt was created to educate the public about the reality of what metadata retention really means.
	 Play the game to find out how people can be tracked through their digital breadcrumbs.</p>
  </div>
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
echo"<h2>SnitchHunt Scoreboard</h2><p>*Only shows teams registered in past month</p><table class='scoreboard'><tr><th>Team</th>
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


</div>
<!--<p>The raw datasets are available for download <a href="https://ln.sync.com/dl/32f13df20#88cjtdsx-bsrd2iza-fh2qbx7c-tbpcegrq">on this link</a> for the curious. You don't need to download these to solve the challenges.</p>
  --> 
 </div>
 <div class='right'>
  <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Brisbane, Thu 9th Feb: exclusive screening of <a href="https://twitter.com/killswitchfilm">@killswitchfilm</a> + expert panel discussion. Limited seats: BOOK NOW<a href="https://t.co/vIC1H3aGpw">https://t.co/vIC1H3aGpw</a> <a href="https://t.co/0dcpJ0DwpA">pic.twitter.com/0dcpJ0DwpA</a></p>&mdash; EFA (@efa_oz) <a href="https://twitter.com/efa_oz/status/818270026897756160">January 9, 2017</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
             <a class="twitter-timeline"  href="https://twitter.com/hashtag/dataretention" data-widget-id="817226297227157507">#dataretention Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
 
<?php
//include'challenges.php';
?>


</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>