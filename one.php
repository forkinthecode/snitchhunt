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

<body > 


<!-- These divs are used for anchor-jumps with the pseudoclass :target -->
<div id='nav'>
  <div id="a1">
  <div id="a2">
  <div id="a3">
  <div id="a4">
  <div id="a5">
  <div id="a6">
  <div id="a7">
  <div id="a8">
  <div id="a9">
  <div id="a10">
  <!--<div id="a11">
  <div id="a12">
  <div id="a13">
  <div id="a14">
  <div id="a15">-->
   <!-- Top Navigation. Ya, tables are evil. -->

   <table  class='framework'> 
    <tr> 
     <td><a href="one.php" id="p1">Home</a></td> 
     <td><a href="two.php" id="p2">Government</a></td> 
     <td><a href="three.php" id="p3">Corporations</a></td> 
     <td><a href="four.php" id="p4">What is SnitchHunt?</a></td> 
     <td><a href="five.php" id="p5">Datasets</a></td> </tr>
<tr>
     <td><a href="six.php" id="p6">Data Matching</a></td> 
     <td><a href="seven.php" id="p7">Task</a></td> 
     <td><a href="eight.php" id="p8">Article</a></td> 
     <td><a href="short_quiz.php" id="p9">Short Quiz</a></td> 
     <td><a href="hard_quiz.php" id="p10">Hard Quiz</td> </tr>
  
   </table>

</nav>

<div class='page'>
<div class='left'>
<div class='heading'>
<a href='https://whistleblower.network'><img class='banner' src='images/header.png'/></a>

</div>
<iframe class='video' src="https://embed.theguardian.com/embed/video/world/video/2017/apr/04/wiretaps-data-dumps-and-zero-days-is-digital-privacy-no-longer-possible-video" width="560" height="315" frameborder="0" allowfullscreen></iframe>

<p class='small'><i>"Terrorism is tipping the balance from privacy and toward ongoing mass surveillance."</i></p>

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
<p>The layout of this site came from <a href='http://www.designmadeingermany.de/slideshow/' target='_blank'>here</a>, although it has been altered for my own purposes.</p>

</details>
<details><summary><h5>Donate</h5></summary>
<p>Rosie relies on public support to create and run these projects. Please help <a href='https://whistleblower.network/donate/'>support Rosie's work</a>.</p>
	</details>

<details><summary><h5>Contact</h5></summary>

<p><a href='https://whistleblower.network/contact'>Rosie Williams</a></p>
<p><a href='https://twitter.com/gszathmari'>Gabor Szathmari</a> </p>



	</details>

</div>

</div>


</div>

</div>



</div>

</body>
</html>
