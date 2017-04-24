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

<body > <h2 class='top_title'>Corporations</h2>

<div id='nav'>


 <?php

include'framework.php';
?>

</nav>
<table border='0px' class='top-nav'><tr><td>

   <?php
    echo" 
<form action='two.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
 <!-- <a href='https://whistleblower.network/snitch/eight.php'><img style='margin-top:-30px;' src='https://whistleblower.network/snitch/images/next-blue-light-left.png'></img></a>
-->
 </td>
  <td>

    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
   <?php
    echo" 
<form action='four.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>
<div class='page'>

<div class='left'>
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">What <a href="https://twitter.com/hashtag/Google?src=hash">#Google</a> knows is scary! <a href="https://twitter.com/hashtag/privacy?src=hash">#privacy</a> <a href="https://twitter.com/hashtag/google?src=hash">#google</a> <a href="https://t.co/MnKr9OnWoE">pic.twitter.com/MnKr9OnWoE</a></p>&mdash; Evan Kirstel (@evankirstel) <a href="https://twitter.com/evankirstel/status/847959377839566850">March 31, 2017</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>
<div class='right'>
<p>Corporations also have access to a multitude of information which can be made available to government agencies under various conditions.</p>



<p>Metadata is generated whenever we take any action with our electronic devices. 

	This data is stored by telcos as operational data and this data was always made available 
	to government agencies without a warrant and also parties to civil disputes via subpoena (eg employers, private citizens in family law disputes, corporations in litigation).</p>

<img class='police' src='https://whistleblower.network/snitch/images/AFP.jpg'>
	</div>
	<div class='clear'></div>
	<br>
	<p>When telcos began charging people in new and different ways, they didn't always keep the same data that law enforcement agencies wanted for their investigations.</p>

<p>It was this desire for a standardised set of data for the benefit of law enforcement agencies that prompted the government to establish the <a href='https://www.ag.gov.au/dataretention' target='_blank'>Data Retention Scheme</a>, which the government
  claimed was to be used only to combat the most serious types of crime: Terrorism, child exploitation and organised crime.
</p>

	<p>In the decades before we started carrying out most of our daily activities online, the collection and use of data was not such a pressing
		social and legal issue. Now that so much of our daily activities are captured, who has access to it and under what circumstances is a much more controversial issue.</p>


</div>
<table border='0px' class='bottom-nav'><tr><td>

   <?php
    echo" 
<form action='two.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
 <!-- <a href='https://whistleblower.network/snitch/eight.php'><img style='margin-top:-30px;' src='https://whistleblower.network/snitch/images/next-blue-light-left.png'></img></a>
-->
 </td>
  <td>

    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
   <?php
    echo" 
<form action='four.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>
</div>

</div>

</div>

</body>
</html>
