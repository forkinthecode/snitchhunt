
<div class='left'>
<?php


if ( isset($_POST['challenge1'] ))
{
$challenge_one=  trim($_POST['challenge1']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_one%' && id='1' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 1 is correct! <img style='float:right;margin-right:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_one is Incorrect<img style='float:right;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>

<?php


if ( isset($_POST['challenge2'] ))
{
$challenge_two=  trim($_POST['challenge2']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_two%' && id='2' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 2 is correct! <img style='float:right;margin-right:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_two is Incorrect<img style='float:right;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>

<?php


if ( isset($_POST['challenge3'] ))
{
$challenge_three=  trim($_POST['challenge3']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_three%' && id='3' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 3 is correct! <img style='' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_three is Incorrect<img style='float:right;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>

<?php


if ( isset($_GET['challenge4'] ))
{
$challenge_four=  trim($_GET['challenge4']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_four%' && id='4' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 4 is correct! <img style='float:right;margin-right:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_four is Incorrect<img style='float:right;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>

<?php


if ( isset($_GET['challenge5'] ))
{
$challenge_five=  trim($_GET['challenge5']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_five%' && id='5' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 5 is correct! <img style='float:right;margin-right:50px' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_five is Incorrect<img style='float:right;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>

<?php


if ( isset($_GET['challenge6'] ))
{
$challenge_six=  trim($_GET['challenge6']);
$query="SELECT * FROM `easy` WHERE easy like'%$challenge_six%' && id='3' ";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);

if ($num_results >0)
  {
   while ($row = $result->fetch_assoc()) 

    {
echo"<div class='homer'><h5>Challenge 6 is correct! <img style='' src='images/checked.png'/></h5></div>";
    }
  
  }

else
  {
     
   echo"<div class='homer'  style='padding-bottom:20px'><h5>$challenge_six is Incorrect<img style='float:right;margin-right:50px' src='images/error.png'/></h5></div>";

  }
}

?>


<details><summary><h5>Q1. What's the name of the journalist at Minewatch?</a></h5></summary>
<h6>Hint: Search the article (last slide) to find this answer.</h6>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

<input type='text'  id='challenge1' name='challenge1' placeholder='Challenge 1 Answer' /></td><td>

<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>

</details>
<br>






<details><summary><h5>Q2. What's the phone number of the journalist?</h5></summary>
<h6>Hint: Search the article (slide 7) or phone subscriber data (slide 10).</h6>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

<input type='text'  id='challenge2' name='challenge2' placeholder='Challenge 2 Answer' /></td><td>

<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</details>

<br>







<details><summary><h5>Q3. What's the full address of the journalist?</h5></summary>

<h6>Hint: Search the phone subscriber database (slide 10).</h6>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

<input type='text'  id='challenge3' name='challenge3' placeholder='Challenge 3 Answer' /></td><td>

<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</details>
<br>








<details><summary><h5>Q4. What number called the journalist from the location closest the mine?</h5></summary>
<h6>Hint: Use the journalist's phone number to find calls made to her and see if these results match the cell tower mentioned in the task (slide 6).</h6>

<br>
<table class='forms' border='0px' ><tr><td>
 <form action='' method='GET'> 
<input type='text'  id='challenge4' name='challenge4' placeholder='Challenge 4 Answer' /></td><td>
<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</details>

<br>




<details><summary><h5>Q5. What is the name of the person who has called the journalist from near the mine?</h5></summary>

<h6>Hint: Use the phone subscriber database </h6>
<br>
<table class='forms' border='0px' ><tr><td>
 <form action='' method='GET'> 
<input type='text'  id='challenge5' name='challenge5' placeholder='Challenge 5 Answer' /></td><td>
<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</details>
<br>


<!--

<details><summary><h5>Q6. What is the full address of the person who has called the journalist from near the mine?</h5></summary>
<h5>Hint: Use the phone subscriber database </h5>
<br>
<table class='forms' border='0px' ><tr><td>
 <form action='' method='GET'> 
<input type='text'  id='challenge6' name='challenge6' placeholder='Challenge 6 Answer' /></td><td>
<input class='answer'   type='submit'  name='submit' value='' id='submit' /></form></td></tr></table>
</details>
-->
</div>
<div class='right'>

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
