<?php


include('login.php');


include('css.php');



    

?>
<!DOCTYPE html> 
<html>
<title>SnitchHunt</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width = device-width;"> 
<head>




<div class='clear'></div>
<script> 
 function BlockMove(event) {
  // Tell Safari not to move the window.
  event.preventDefault() ;
 }
</script> 
</head>

<body > 
<?php
include('footer.php');

?>

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

   <!-- Fallback -->

   <div id="i0" class="page">

    <h1>There is a problem with your browser</h1>

   </div>



   <!-- First Page #a1 -->

   <div id="i1" class="page">   
    <div class='nav'>

    <a href="#a2" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content_title'>Slide One</div>
    <div class='content'>
 
<?php
include'one.php';
?>
 
</div>
</div>
 <div id="i2" class="page">
  <div class='nav'>
    <a href="#a1" class="backbutton"><img src='images/next-blue-light-left.png'></img></a><div class='content_title'>Slide Two</div>
    <a href="#a3" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div> 
     <div class='content'>
  <?php
  include'two.php';
  ?>

</div>
</div>
<div id="i3" class="page"><div class='content_title'>Slide Three</div>
 <div class='nav'>
     <a href="#a2" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
      <a href="#a4" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
      <div class='content'>
 <?php
  include'three.php';
  ?>
</div>
</div>
 <div id="i4" class="page"><div class='content_title'>Slide Four</div>
  <div class='nav'>
   <a href="#a3" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a5" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content'>
  <?php
  include'four.php';
  ?>
</div>
</div>
  <div id="i5" class="page"><div class='content_title'>Slide Five</div>
   <div class='nav'>
    <a href="#a4" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a6" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content'>
  <?php
  include'five.php';
  ?>
</div>
</div>
  <div id="i6" class="page"><div class='content_title'>Task</div>
   <div class='nav'>
    <a href="#a5" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a7" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content'>
  <?php
  include'six.php';
  ?>
</div>
</div>      
  <div id="i7" class="page"><div class='content_title'>Article</div>
   <div class='nav'>
     <a href="#a6" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a8" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content'>
   <?php
   include'seven.php';
   ?>
 </div>
  </div>
<div id="i8" class="page"><div class='content_title'>Short Challenge</div>
 <div class='nav'>
    <a href="#a7" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a9" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
<div class='content'>
   <?php
   include'eight.php';
   ?>
 </div>
       </div>
 <div id="i9" class="page"><div class='content_title'>Hard Challenge</div>
  <div class='nav'>
    <a href="#a8" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a10" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content'>
   <?php
   include'nine.php';
   ?>
 </div>
</div>
 <div id="i10" class="page"><div class='content_title'>About</div>
  <div class='nav'>
    <a href="#a9" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a1" class="nextbutton">Start</a></div>
    <div class='content'>
<?php
 include'ten.php';
 ?>
</div>

</div>



</div>

</body>
</html>


