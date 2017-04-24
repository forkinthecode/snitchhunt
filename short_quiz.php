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

<body > <h2 class='top_title'>Short Quiz</h2>


<div id='nav'>
 

 <?php

include'framework.php';
?>

</nav>
<table border='0px' class='top-nav'><tr><td>

   <?php
    echo" 
<form action='eight.php' method='POST'>
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
<form action='hard_quiz.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_right'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  </td></tr></table>

<div class='page'>
<div class='left'>
   
<?php
 

if ( isset($_POST['challenge1'] ) && $_POST['challenge1']=='')

 
  {
  echo  "<h3>Please enter an answer for Question 1</h3>";
  }

if ( isset($_POST['challenge1'] ) && $_POST['challenge1']!='')
  {

$challenge_one=  trim($_POST['challenge1']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_one%' && id='1'  ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 1 is correct! <img style='float:left;margin-right:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_one is Incorrect for Q1<img style='float:left;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}


?>









<br><br>

<div class='searches'>
<h5>Q1. What's the name of the journalist at Minewatch?</a></h5>
<details><!--[if !IE]><!-->

  <summary><img height='20px' style='float:right' src='images/information.png'></img></summary><!--<![endif]-->
<h6>Search the article (last page) to find this answer.</h6>
</details>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

<input type='text'  id='challenge1' name='challenge1' placeholder='Challenge 1 Answer' REQUIRED/></td><td>

<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</div>

<br>

<?php

if ( isset($_POST['challenge2'] ) && $_POST['challenge2']=='')

 
  {
  echo  "<h3>Please enter an answer for Question 2</h3>";
  }

if ( isset($_POST['challenge2'] ) && $_POST['challenge2']!='')
  {


$query="SELECT * FROM `easy` WHERE easy like'%$challenge_two%' && id='2' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 2 is correct! <img style='float:right;margin-left:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_two is Incorrect for Q2<img style='float:left;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>


<div class='searches'>


<h5>Q2. What is the phone number of the journalist?</h5>

<details><summary><img height='20px' style='float:right' src='images/information.png'></img></summary>
<h6>Hint: Search the article (last page) to find this answer.</h6>
</details>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

<input type='text'  id='challenge2' name='challenge2' placeholder='Challenge 2 Answer' REQUIRED/></td><td>

<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</div>

<br>


<?php


if ( isset($_POST['challenge3'] ) && $_POST['challenge3']=='')

 
  {
  echo  "<h3>Please enter an answer for Question 3</h3>";
  }

if ( isset($_POST['challenge3'] ) && $_POST['challenge3']!='')
  {
$challenge_three=  trim($_POST['challenge3']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_three%' && id='3' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 3 is correct! <img style='float:right;margin-left:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_three is Incorrect for Q3<img style='float:left;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>


<div class='searches'>

<h5>Q3. What is the full address of the journalist?</h5>

<details><summary><img height='20px' style='float:right' src='images/information.png'></img></summary>
<h6>Hint: Search the phone subscriber database (opposite).</h6>
</details>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

<input type='text'  id='challenge3' name='challenge3' placeholder='Challenge 3 Answer' REQUIRED/></td><td>

<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</div>

<br>



<?php


if ( isset($_POST['challenge4'] ) && $_POST['challenge4']=='')

 
  {
  echo  "<h3>Please enter an answer for Question 4</h3>";
  }

if ( isset($_POST['challenge4'] ) && $_POST['challenge4']!='')
  {
$challenge_four=  trim($_POST['challenge4']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_four%' && id='4' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 4 is correct! <img style='float:right;margin-left:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_four is Incorrect for Q4<img style='float:left;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>


<div class='searches'>

<h5>Q4. What number called the journalist from the location closest the mine?</h5>

<details><summary><img height='20px' style='float:right' src='images/information.png'></img></summary>
<h6>Hint: Search phone usage metadata by entering the journalist's phone number and the cell tower name mentioned in the task to get any numbers that called
  the journalist from near the mine.</h6>
</details>
<br>
<table class='forms' border='0px' ><tr><td>
 <form action='' method='POST'> 
<input type='text'  id='challenge4' name='challenge4' placeholder='Challenge 4 Answer' REQUIRED/></td><td>
<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</div>

<br>

<?php


if ( isset($_POST['challenge5'] ) && $_POST['challenge5']=='')

 
  {
  echo  "<h3>Please enter an answer for Question 5</h3>";
  }

if ( isset($_POST['challenge5'] ) && $_POST['challenge5']!='')
  {
$challenge_five=  trim($_POST['challenge5']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_five%' && id='5' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 5 is correct! <img style='float:right;margin-left:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_five is Incorrect for Q5<img style='float:left;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>

<div class='searches'>
<h5>Q5. What is the name of the person who has called the journalist from near the mine?</h5>

<details><summary><img height='20px' style='float:right' src='images/information.png'></img></summary>
<h6>Hint: Use the phone subscriber database </h6>
</details>
<br>
<table class='forms' border='0px' ><tr><td>
 <form action='' method='POST'> 
<input type='text'  id='challenge5' name='challenge5' placeholder='Challenge 5 Answer' REQUIRED/></td><td>
<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</div>

<br>


<!--

<details><summary><h5>Q6. What is the full address of the person who has called the journalist from near the mine?</h5></summary>
<h5>Hint: Use the phone subscriber database </h5>
<br>
<table class='forms' border='0px' ><tr><td>
 <form action='' method='POST'> 
<input type='text'  id='challenge6' name='challenge6' placeholder='Challenge 6 Answer' /></td><td>
<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</details>
-->
</div>
<div class='right'>
 
<p>Searches are not case sensitive</p>
<h5>Phone subscriber database</h5>

<?php
include'subscribers.php';

?>

<br><div class='clear'></div>
<h5>Phone usage metadata</h5>



<?php
include'cross.php';

?>
</div>
</div>
<table class='bottom-nav'><tr><td>
  <?php
    echo" 
<form action='eight.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button_left'   type='submit'  name='submit' value='' id='submit' />

  

</form> ";
?>
  <!--<a href='https://whistleblower.network/snitch/eight.php'><img src='https://whistleblower.network/snitch/images/next-blue-light-left.png'></img></a></td>-->
  <td>
    <!--<a href='https://whistleblower.network/snitch/hard_quiz.php'><img src='https://whistleblower.network/snitch/images/next-blue-light.png'></img></a>-->
     <?php
    echo" 
<form action='hard_quiz.php' method='POST'>
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

