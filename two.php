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

<?php

include'framework.php';
?>

</nav>
<table class='top-nav'><tr><td><a href='index.php'><img src='images/next-blue-light-left.png'></img></a></td><td><a href='three.php'><img src='images/next-blue-light.png'></img></a></td></tr></table>

<div class='page'>
<div class='left'>
    <h3>How anonymous are we? </h3>
  <img class='people' src='images/magnifying-glass.jpg'></img>
  <img class='people_small' src='images/people.jpg'></img>


  <p>Get the low down on how easy it is to track us down through our data with this short presentation...</p>
</div>
<div class='right'>
  <h3>Governments and your data</h3>

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
<table class='top-nav'><tr><td><a href='index.php'><img src='images/next-blue-light-left.png'></img></a></td><td><a href='three.php'><img src='images/next-blue-light.png'></img></a></td></tr></table>

</div>

</div>
</div>


</div>

</body>
</html>
