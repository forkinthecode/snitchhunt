<?php


include('login.php');


include('css.php');



    

?>
<!DOCTYPE html> 
<html>
<title>SnitchHunt</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width = device-width;"> 
<head>



<script> 
 function BlockMove(event) {
  // Tell Safari not to move the window.
  event.preventDefault() ;
 }
</script> 
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
     <td><a href="#a1" id="p1">1 </a></td> 
     <td><a href="#a2" id="p2">2 </a></td> 
     <td><a href="#a3" id="p3">3 </a></td> 
     <td><a href="#a4" id="p4">4 </a></td> 
     <td><a href="#a5" id="p5">5 </a></td> </tr>
</table>
<table class='framework2'>
     <tr>
     <td><a href="#a6" id="p6">Task</a></td> 
     <td><a href="#a7" id="p7">Article</a></td> 
     <td><a href="#a8" id="p8">Short quiz</a></td> 
     <td><a href="#a9" id="p9">Hard quiz</a></td> 
     <td><a href="#a10" id="p10">About</td> </tr>
    
    <!-- <tr><td><a href="#a11" id="p11">11</a></td> </tr><tr>
     <td><a href="#a12" id="p12">12</a></td> </tr><tr>
     <td><a href="#a13" id="p13">13</a></td> </tr><tr>
     <td><a href="#a14" id="p10">14</a></td> </tr><tr>
     <td><a href="#a15" id="p10">15</a></td>
    </tr> -->
   </table>

</nav>

   <!-- Fallback -->

   <div id="i0" class="page">

    <h1>There is a problem with your browser</h1>

   </div>



   <!-- First Page #a1 -->

   <div id="i1" class="page">   
    <div class='nav'>
   <div class='content_title'>One</div>
    <a href="#a2" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
 
    <div class='content'>
 
<?php
include'one.php';
?>
 
</div>
</div>
 <div id="i2" class="page">
  <div class='nav'>
    <a href="#a1" class="backbutton"><img src='images/next-blue-light-left.png'></img></a><div class='content_title'>Two</div>
    <a href="#a3" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div> 
     <div class='content'>
  <?php
  include'two.php';
  ?>

</div>
</div>
<div id="i3" class="page"><div class='content_title'>Three</div>
 <div class='nav'>
     <a href="#a2" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
      <a href="#a4" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
      <div class='content'>
 <?php
  include'three.php';
  ?>
</div>
</div>
 <div id="i4" class="page"><div class='content_title'>Four</div>
  <div class='nav'>
   <a href="#a3" class="backbutton"><img src='images/next-blue-light-left.png'></img></a>
    <a href="#a5" class="nextbutton"><img src='images/next-blue-light.png'></img></a></div>
    <div class='content'>
  <?php
  include'four.php';
  ?>
</div>
</div>
  <div id="i5" class="page"><div class='content_title'>Five</div>
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


