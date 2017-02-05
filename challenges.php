<?php
if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$data=$_POST['password'];
$password=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );

$query="SELECT * from teams where team='".$team."' && password='".$password."'";
$result = mysqli_query($db, $query );
@$num_results = mysqli_num_rows($result);
if ($num_results<1)
{
	echo"<p>To view and answer challenges you need the correct password.</p>";

	}
if ($num_results>0)
{
/*
echo"<table class='scoreboard'><tr>
<th>Ch1</th>
<th>Ch2</th>
<th>Ch3</th>
<th>Ch4</th>
<th>Ch5</th>
<th>Ch6</th>
<th>Ch7</th>
<th>Score</th>
</tr>";
  while ($row = $result->fetch_assoc()) 
{
echo"<tr>
<td>".$row['ch2']."</td>
<td>".$row['ch2']."</td>
<td>".$row['ch2']."</td>
<td>".$row['ch2']."</td>
<td>".$row['ch5']."</td>
<td>".$row['ch6']."</td>
<td>".$row['ch7']."</td>
<td>".($row['ch2']+$row['ch2']+$row['ch2']+$row['ch2']+$row['ch5']+$row['ch6']+$row['ch7'])."</td>
</tr>";
  }
echo"</table><br>";*/




	

{
	
	

echo" <br>
<div class='answers' ><span class='right'>25 points</span>
<h2>Challenge 1 </h2>



<p>Q.What's the name of the Chief Data Officer?</p>
<p>Hint: Search the <a href='article.php' target='_blank'>article</a> to find this answer.</p>

<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge1' name='challenge1' placeholder='Challenge 1 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

</div><br>";

}





{


echo"<br>
<div class='answers' ><span class='right'>50 points</span>
<h2>Challenge 2 </h2>



<p>Q.What is the Google 'user ID' of the whistleblower?</p>


<br>

<table class='forms' border='0px' ><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge2' name='challenge2' placeholder='Challenge 2 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>
<p>Access hints- if you click reveal to Access hints you will lose 25 points from this question</p>

<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
             <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='hint2' value='".$_POST['hint2']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input  type='submit' name='submit' value='Reveal' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint2'] ) )
            {
              echo"<p>Hint: </p>
<p>Search Google metadata for the term whistleblower (one word) or anna dupont contact </p>
<p>Look through the search terms to see if you can find other clues and try that Google ID</p>
<p>Try each Google User ID in turn until you get the right one- the long string of letters and numbers. </p>
<p>Keep this search result up because you will need to use the Google metadata results to answer Challenge 3.</p>
              ";
$sql = "UPDATE teams SET ch2='-25' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h2>25 points have been deducted from the 50 points available for this question</h2>";
    
                               } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
echo"</div><br>";

}




{


echo"<br>
<div class='answers' ><span class='right'>100 points</span>
<h2>Challenge 3 </h2>



<p>Q.What is the email address is of the whistleblower?</p>

<br>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge3' name='challenge3' placeholder='Challenge 3 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

<p>Access hints- if you click reveal to Access hints you will lose 50 of the 100 points available for this question.</p>

<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
             <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='hint3' value='".$_POST['hint3']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input  type='submit' name='submit' value='Reveal' id='submit' /> </form> ";

            if ( isset($_POST['hint3'] ) )
            {
              echo"<p>Hint: </p>
<p>Search email metadata for minewatch (minewatch is  one word)</p>
<p>There are 705 email metadata results for minewatch</p>
   <p> Use in page search on the IP address from the Google metadata</p>
     <p>Copy email address from first result of in-page search and see if that is answer</p>
              ";
$sql = "UPDATE teams SET ch3='-50' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h2>50 points have been deducted from the 100 points available for this question</h2>";
    
                                } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
echo"</div><br>";

}




{


echo"<br>
<div class='answers' ><span class='right'>50 points</span>
<h2>Challenge 4</h2>



<p>Q.What is the full address is of the whistleblower?</p>


<br>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge4' name='challenge4' placeholder='Challenge 4 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>
<p>Access hints- if you click reveal to Access hints you will lose 50 of the 100 points available for this question.</p>

<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
             <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='hint4' value='".$_POST['hint4']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input  type='submit' name='submit' value='Reveal' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint4'] ) )
            {
              echo"<p>Hint: </p>
<p>Plug email into phone subscribers and get answer:</p>
              ";
$sql = "UPDATE teams SET ch4='-25' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h2>25 points have been deducted from the 50 points available for this question</h2>";
    
                                } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
echo"</div><br>";

}




{


echo"<br>
<div class='answers' ><span class='right'>100 points</span>
<h2>Challenge 5 </h2>



<p>Q.What is the last known location of the whistleblower?</p>


<br>
<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge5' name='challenge5' placeholder='Challenge 5 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

<p>Access hints- if you click reveal to Access hints you will lose 50 of the 100 points available for this question.</p>

<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
             <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='hint5' value='".$_POST['hint5']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input  type='submit' name='submit' value='Reveal' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint5'] ) )
            {
              echo"<p>Hint: </p>
<p>To get last known location take IMEI from the phone subscriber data of the whistleblower
and plug into phone metadata search</p>


              ";
$sql = "UPDATE teams SET ch5='-25' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h2>25 points have been deducted from the 50 points available for this question</h2>";
    
                                } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
echo"</div><br>";

}




{


echo"<br>
<div class='answers' ><span class='right'>25 points</span>
<h2>Challenge 6 </h2>



<p>Q.How many times did the whistleblower and the journalist talk to each other?</p>

 <br>
 <table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge6' name='challenge6' placeholder='Challenge 6 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>

<p>Access hints- if you click reveal to Access hints you will lose 10 of the 25 points available for this question.</p>

<form class='links' action='' method='POST'>
<input type='hidden' name='team_name' value='".$team."'>
 <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='hint6' value='".$_POST['hint6']."'>
             <input type='hidden' name='password' value='".$password."'>
            <input  type='submit' name='submit' value='Reveal' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint6'] ) )
            {
              echo"<p>Hint: </p>
<p>Get journalist’s phone number </p>
<p>Get whistleblower’s phone number </p>
<p>Plug these into Cross Search to get first part of answer</p>
<p>Switch them over to see how many calls were made in the other direction and add.</p>

              ";
$sql = "UPDATE teams SET ch6='-10' WHERE team='".$team."' ";

if ($db->query($sql) === TRUE) {
    echo"<h2>10 points have been deducted from the 25 points available for this question</h2>";
    
                                } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
echo"</div><br>";

}




{


echo"<br>
<div class='answers'><span class='right'>150 points</span>
<h2>Challenge 7 </h2>



<p>What's the name of the second whistleblower at Minecorp?</p>
<p>Use the cross search to find this answer</p>

 <br>
 <table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
  <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge7' name='challenge7' placeholder='Challenge 7 Answer' /></td><td>
<input type='submit' class='user' name='submit' value='Submit' id='submit' /></form></td></tr></table>
<br>
<p>Access hints- if you click reveal to Access hints you will lose 75 of the 150 points available for this question</p>

<form class='links' action='' method='POST'>
<input type='hidden' name='team_name' value='".$team."'>
 <input type='hidden' name='close' value='".$close."'>
            <input type='hidden' name='hint7' value='".$_POST['hint7']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input  type='submit' name='submit' value='Reveal' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint7'] ) )
            {
              echo"<p>Hint: </p>
<p>Use Cross Search page.</p>
<p> Enter Annas and David’s phone numbers into the 2nd search box to find out which number they both called. </p>
<p>Click on the IMEI to search the phone subscriber records to get the details of the 2nd whistleblower. 
</p>";

$sql = "UPDATE teams SET ch7='-75' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h2>75 points have been deducted from the 150 points available for this question</h2>";
    
                               } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
echo"</div><br>";

    }
}
}
?>
