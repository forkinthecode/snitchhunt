<?php


include('login.php');


include('css.php');



    

?>
<!DOCTYPE html> 
<html>
<title>SnitchHunt</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width = device-width;"> 
<head>


  
</head>
<div class='clear'></div>
<body>  <h2 class='top_title'>Home</h2>
<?php
include('footer.php');

?>
<table border='0px' class='top-nav'><tr><td>

<a href="https://twitter.com/Info_Aus" class="twitter-follow-button" data-show-count="false">Follow @Info_Aus</a>
<script>!function(d,s,id){var 
  js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

 
 </td>
  <td>

    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
   <?php
    echo" 
<form action='two.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>

<!-- These divs are used for anchor-jumps with the pseudoclass :target -->
<div id='nav'>

<?php

include'framework.php';
?>
   

</div>

<div class='page'>
<div class='left'>
<div class='heading'>
 <h3>How anonymous are we? </h3>
  <p>Get the low down on how easy it is to track us down through our data with this short presentation...</p>
<!--<a href='https://whistleblower.network'><img class='banner' src='https://whistleblower.network/snitch/images/header.png'/></a>
 
  <img class='people' src='https://whistleblower.network/snitch/images/magnifying-glass.jpg'></img>  
  <img class='people_small' src='https://whistleblower.network/snitch/images/people.jpg'></img>-->

   <iframe width="100%" height="380" src="https://chuffed.org/iframe/31544/25aae1/" 
   frameborder="0" style="margin-left:20%;margin-bottom:30px;max-width:310px;border:0px solid #fff;" 
   allowfullscreen></iframe> <br>                   



<h4>This work is proudly sponsored by:</h4>
<a href='https://www.salingerprivacy.com.au/'> <div class='blurb'> 
  <h5>Salinger Privacy</h5>
  <p>Salinger Privacy offers privacy consulting, training and publications.  
  In everything we do, we aim to demystify privacy law, and offer pragmatic solutions.  
  Our latest eBook, Demystifying De-identification, is for anyone who wants to understand the risks of identification from data.</p></div>

</div></a>

</div>
<div class='right'>

<p>Rosie is an accomplished citizen journalist &amp; researcher having been published in multiple citizen journo publications over the past
	15 years, having created multiple open data projects to improve political and financial transparency and having played a lead role in 
	major campaigns such as #CensusFail including '<a href='https://whistleblower.network/submission/'>The CensusFail Submission</a>' which was referenced in the Inquiry Report (twice).</p>
	<p>Read Rosie's <a href='https://whistleblower.network/about/'>testimonials</a>.</p>


<button class="accordion">Resources</button>
<div class="panel">
<ul>

	<li><a href='https://www.letsgetsafe.org/' target='_blank'>Guided self help securing your devices</a></li>
  <li><a href='https://hackblossom.org/' target='_blank'>Hackblossom: 'DIY Cybersecurity for Domestic Violence'</a></li>
	<li><a href='https://www.youtube.com/results?search_query=data+retention+australia' target='_blank'>Data Retention on YouTube</li>
  <li><a href='https://www.ag.gov.au/dataretention' target='_blank'>Attorney-General's Metadata Retention Scheme FAQ</a></li>
	<li><a href='https://whistleblower.network/2016/11/18/privacychat-faq/' target='_blank'>Links of interest</a></li>
	<li><a href='https://www.meetup.com/CryptoAus-Sydney/' target='_blank'>Events</a></li>



<li>You can download a <a href='https://whistleblower.network/snitch/lesson.pdf' target='_blank'>printable PDF</a> of this entire presentation to do offline with a short quiz that does not require access to 
  online datasets.</li>
</ul>
<br>
</div>





<button class="accordion">About/Hire me</button>
<div class="panel">
  <p>
<a href="https://twitter.com/Info_Aus" class="twitter-follow-button" data-show-count="false">Follow @Info_Aus</a>
<script>!function(d,s,id){var 
  js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
     </p>

<p>Contact Rosie at ATCRA@protonmail.com to hire me to run this workshop for your people.</p>


<p>My version of SnitchHunt is currently open sourced at <a href='https://github.com/forkinthecode/snitchhunt'>GitHub</a>.</p>
<p>Rosie Williams has a degree in Sociology (inequality, public policy) and programming skills in PHP, MySQL, CSS &amp; HTML. </p>
<p>Images are from pixabay.com. Icons from flaticon. </p>

	</div>

</div>
<table border='0px' class='bottom-nav'><tr><td>

 
 <!-- <a href='https://whistleblower.network/snitch/eight.php'><img style='margin-top:-30px;' src='https://whistleblower.network/snitch/images/next-blue-light-left.png'></img></a>
-->
 </td>
  <td>

    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
   <?php
    echo" 
<form action='two.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>
</div>


</div>

</div>



</div>
   <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>
<?php
      $query = "INSERT INTO info (id, URL,  ip_address, user_agent,  time, date) 
                           VALUES(NULL, '".$_SERVER['PHP_SELF']."', '".$_SERVER["REMOTE_ADDR"]."' , '".$_SERVER["HTTP_USER_AGENT"]."',CURRENT_TIME, CURDATE()) " ;
      if ($db->query($query) === TRUE) 
{
    //echo "Registration with question 1 using ".$login." Successful.<br>";
} 
else 
{
   // echo "Error: " . $query . "<br>" . $db->error;
}
    $query="SELECT count(URL) as count from info where URL='".$_SERVER['PHP_SELF']."'";
    $result = mysqli_query($db, $query);
   // echo"<table class='results' border='0px'><tr><td>";
   while ($row = $result->fetch_assoc())
   {
echo"<h3>(".number_format($row['count']).") hits to index page  ";
   }mysqli_free_result($result);

  $query="SELECT count(DISTINCT ip_address) as count from info ";
    $result = mysqli_query($db, $query);
  
   while ($row = $result->fetch_assoc())
   {
echo"from  (".number_format($row['count']).") Unique IP's";
   }mysqli_free_result($result);

/*$query="SELECT max(date) as date, max(time) as time from info ";
    $result = mysqli_query($db, $query);
   while ($row = $result->fetch_assoc())
   {echo"Last visit ".$row['time']."".$row['date']." </h3>";
   }mysqli_free_result($result);*/

echo"


<div class='desktop_only'>

<div class='stats'>

<table class='results' border='0px'>
    <tr><td width='85%' height='30px'><h4> User Agent</h4></td><td><h4>IP</h4></td></tr>";


$query="SELECT * from info   order by ID DESC LIMIT 1";
    $result = mysqli_query($db, $query);
    echo"
    ";
   while ($row = $result->fetch_assoc())
   {
echo"<tr><td width='70%'><p class='small'> ".$row['user_agent']." </p></td><td width='200px'><p class='small'><a href='https://who.is/whois-ip/ip-address/".$row['ip_address']."' target='_blank'>Who Is Result</a></p></td></tr>";
 
//echo"<td width='100px'><p class='small'>(".number_format($row['count']).")</p></td></tr>";
   }mysqli_free_result($result);

echo"</table>
</div><!--desktop only-->
</div><!--footer-->


<p>Counting hits starting from 11 June 2017 to demonstrate data that can be collected from website visitors. 
</p>
</div><!--stats>";
?>
</body>
</html>
