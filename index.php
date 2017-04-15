<?php


include('login.php');


include('css.php');



    

?>
<!DOCTYPE html> 
<html>
<title>SnitchHunt</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width = device-width;"> 
<head>

<?php
include('footer.php');

?>

</head>

<body> <h2 class='top_title'>Home</h2>
<table class='top-nav'><tr><td></td><td><a href='two.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a></td></tr></table>


<!-- These divs are used for anchor-jumps with the pseudoclass :target -->
<div id='nav'>

<?php

include'framework.php';
?>
   

</nav>

<div class='page'>
<div class='left'>
<div class='heading'>
<a href='https://whistleblower.network'><img class='banner' src='https://whistleblower.network/snitch/images/header.png'/></a>
 
  <img class='people' src='https://whistleblower.network/snitch/images/magnifying-glass.jpg'></img>
  <img class='people_small' src='https://whistleblower.network/snitch/images/people.jpg'></img>

 <h3>How anonymous are we? </h3>
  <p>Get the low down on how easy it is to track us down through our data with this short presentation...</p>
<p><i>Your logo here</i> Contact Rosie to become an organisational sponsor for this work.</p>
</div>
</div>
<div class='right'>

<p>Rosie is an accomplished citizen journalist & researcher having been published in multiple citizen journo publications over the past
	15 years, having created multiple open data projects to improve political and financial transparency and having played a lead role in 
	major campaigns such as #CensusFail including '<a href='https://whistleblower.network/submission/'>The CensusFail Submission</a>' which was referenced in the Inquiry Report.</p>
	<p>Read my <a href='https://whistleblower.network/about/'>testimonials</a>.</p>


<details><summary><h5>Resources</summary>
<ul>
	<li><a href='https://www.letsgetsafe.org/' target='_blank'>Guided self help</a></li>
	<li><a href='https://www.youtube.com/results?search_query=data+retention+australia' target='_blank'>Data Retention on YouTube</li>
	<li><a href='https://whistleblower.network/2016/11/18/privacychat-faq/' target='_blank'>Links of interest</a></li>
	<li><a href='https://www.meetup.com/CryptoAus-Sydney/' target='_blank'>Events</a></li>


</ul>
<br>
</details>


<details><summary><h5>About</h5></summary>

<p><a href='http://www.abc.net.au/triplej/programs/hack/how-team-of-pre-teens-found-whisteblower-using-metadata/8113668' target='_blank'>SnitchHunt</a> is a game designed by secruity consultant, Gabor Szathmari to teach the public about how different sets
of metadata can be brought together to identify & track the movements of individuals.</p>
<p>The original version of SnitchHunt was taken offline due to costs of hosting because it relied on <a href='https://en.wikipedia.org/wiki/Kibana'>Kibana</a> to allow 
	users to search against the datasets. </p>
	<p>It was for this reason that I decided to create a different version of the game that did not use Kibana so that 
		it could be kept online indefinitely.  </p>
<p>I also decided to add a simpler, quicker 'game' based on the SnitchHunt data that can be run in evening time-slots.</p>
<p>The <a href='index.php#a9'>short/easy version</a> is suitable for evening timeslots, the <a href='index.php#a10'>longer much harder version</a> is suitable for day-long events.</p>
<p>Either version can be done online at your leisure, just follow the introductory slides through to get the gist.</p>
<p>The easy version does not require log in and is not scored. The difficult version requires sign up to keep track of scoring so is a more competitive type of event.</p>
<p>My version of SnitchHunt is currently open sourced at <a href='https://github.com/forkinthecode/snitchhunt'>GitHub</a>.</p>
<p>Rosie Williams has a degree in Sociology (inequality, public policy) and programming skills in PHP, MySQL, CSS & HTML. </p>

</details>
<details><summary><h5>Sponsor</h5></summary>
<p>Sponsor this project or <a href='https://whistleblower.network/donate/'>donate</a>.</p>
	</details>

<details><summary><h5>Contact</h5></summary>

<p><a href='https://whistleblower.network/contact'>Rosie Williams</a></p>
<p><a href='https://twitter.com/gszathmari'>Gabor Szathmari</a> </p>



	</details>

</div>
<table class='bottom-nav'><tr><td></td><td><a href='two.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a></td></tr></table>

</div>


</div>

</div>



</div>

</body>
</html>
