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

<body > <h2 class='top_title'>Government</h2>


<div id='nav'>
 

<?php

include'framework.php';
?>

</nav>
<table border='0px' class='top-nav'><tr><td>

   <?php
    echo" 
<form action='index.php' method='POST'>
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
<form action='three.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>
<div class='page'>
<div class='left'>
  <iframe class='video' src="https://embed.theguardian.com/embed/video/world/video/2017/apr/04/wiretaps-data-dumps-and-zero-days-is-digital-privacy-no-longer-possible-video" width="560" height="315" frameborder="0" allowfullscreen></iframe>

<p class='small'><i>"Terrorism is tipping the balance from privacy and toward ongoing mass surveillance."</i></p>

</div>
<div class='right'>
 

  <p>There are different levels of access government agencies can have of the information generated whenever we contact someone with an electronic device:</p>
<details><summary><h5>1. 'warrantless metadata'</h5></summary>
    <p>So called 'metadata' that has been generated within the last two years is available to law enforcement agencies without a warrant. </p>
</details>
<details><summary>
   <h5>2. data made available once a warrant is granted</h5></summary>
      <p>All of the 'metadata' created and stored for the past two years on any device with Australian ISP, email or phone accounts as well as 
      	the 'content' & subject line of emails, voiemail and your web browsing history can be accessed by law enforcement agencies with a warrant.</p>




  <p>It should be noted that the definition between the above categories is not set in stone. What is considered content today can be moved into the category for warrantless access as the definition of
    what is or is not metadata is not made clear in the legislation and can be changed without the need to change the underlying Act.</p>
 </details>
<details><summary><h5>3. data collected & stored internationally</h5></summary>

<p>The <a href='https://en.wikipedia.org/wiki/Five_Eyes'>Five Eyes</a> intelligence alliance comprising Australia, Canada, New Zealand, the United Kingdom and the United States has great
	powers to access our data. According to Wikipedia:</p>
	<p><i>
	"The Five Eyes has two types of information collection methods. The first is the PRISM program and the second is the Upstream system. The PRISM program gathers user information from technology firms such as Google, Apple and Microsoft, while the Upstream system gathers 
	information directly from the communications of civilians via fiber cables and infrastructure as data flows past."</i></p></details>



</div>
<table border='0px' class='bottom-nav'><tr><td>

   <?php
    echo" 
<form action='index.php' method='POST'>
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
<form action='three.php' method='POST'>
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

</body>
</html>
