
<?php
if ( !isset($_POST['team_name'] ) || !isset($_POST['password'] ))
{
   echo"<div class='homer'><h6>You have to be registered and signed in to see the challenges</h6></div>";
}
if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$data=$_POST['password'];
$password=mysqli_real_escape_string ( $db , $data );
$data1=$_POST['team_name'];
$team=mysqli_real_escape_string ( $db , $data1 );


$query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            if ($num_results<1)
            {
              echo"<div class='homer'><h6>You have to be registered and signed in to see the challenges</h6></div>

<h4>As you move through the challenges, make sure to copy/paste important findings to a separate text file for later use!</h4>";
            }
           if ($num_results>0)
  {



 $query="SELECT ch1 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 


    {
      $answer=$row['ch1'];
    }

  if (  $answer <25  )
            {

echo" 
<div class='answers' >




<h3>Q1. What's the name of the Chief Data Officer?</h3>
<h6>Hint: Search the task page to find this answer.</h6>

<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 

 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge1' name='challenge1' placeholder='Challenge 1 Answer' /></td><td>

<input class='answer'   type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>

</div>";

}

/* challenge 2 */
 $query="SELECT ch1 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
  
             {
    $answer=$row['ch1'];

              }
   
  

     if ($answer!='0')
    {

 $query="SELECT * from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
           {
       $answer=$row['ch2'];
       $new_max=$row['ch2_max'];
      //echo"$answer / $new_max";
            }
      if (  $answer <$new_max  )
{

echo"
<div class='answers' >




<h3>Q2.What is the Google 'user ID' of the whistleblower?</h3>




<table class='forms' border='0px' ><tr><td>
 <form action='' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> 
 <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge2' name='challenge2' placeholder='Challenge 2 Answer' /></td><td>
<input class='answer' onclick='div_show()'  type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>


<h6>Access hints- if you click <img height='20px' src='images/question.png'/> to access hints you will lose 25 points from this question</h6>";
{
  echo"

<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
             
            <input type='hidden' name='hint2' value='".$_POST['hint2']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input class='hint' type='submit' name='submit' value='' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint2']) && $_POST['hint2']='hint2')
            {
              echo"<h6>Hint: </h6>
             <h6>Search Google metadata for the term whistleblower (one word) or anna dupont contact </h6>
             <h6>Look through the search terms to see if you can find other clues and try that Google ID</h6>
             <h6>Try each Google User ID in turn until you get the right one- the long string of letters and numbers. </h6>
             <h6>Keep this search result in mind because you will need to use the Google metadata results to answer Challenge 3.</h6>
              ";
               $sql = "UPDATE teams SET ch2_max='25' WHERE team='".$team."'";

                if ($db->query($sql) === TRUE) 
                               {
                 echo"<h6>25 points have been deducted from the 50 points available for this question</h6>";
    
                               } 
                                else {
                                      echo "Error updating db " . $db->error;
                                      }


    }
            }
echo"</div>";
     
  }
}
            

/* challenge 3 */
 $query="SELECT ch2 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
     {
    $answer=$row['ch2'];

              }
   
    if ($answer!='0')
    {

 $query="SELECT * from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
           {
       $answer=$row['ch3'];
       $new_max=$row['ch3_max'];
     // echo"$answer / $new_max";
            }
      if (  $answer <$new_max  )
{


echo"
<div class='answers' >




<h3>Q3. What is the email address of the whistleblower?</h3>


<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> 
 <input class='answer'type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge3' name='challenge3' placeholder='Challenge 3 Answer' /></td><td>
<input class='answer' type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>

<h6>Access hints- if you click <img height='20px' src='images/question.png'/> to access hints you will lose 
50 of the 100 points available for this question.</h6>";
{
  echo"


<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
           
            <input type='hidden' name='hint3' value='".$_POST['hint3']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input class='hint' type='submit' name='submit' value='' id='submit' /></submit>  </form> ";

         if ( isset($_POST['hint3']) && $_POST['hint3']='hint3')
            {
              echo"<h6>Hint: </h6>
              <h6>Search email metadata for minewatch (minewatch is  one word)</h6>
              <h6>There are 705 email metadata results for minewatch</h6>
              <h6> Use in page search on the IP address from the Google metadata</h6>
              <h6>Copy email address from first result of in-page search and see if that is answer</h6>
              ";
              $sql = "UPDATE teams SET ch6_max='50' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h6>50 points have been deducted from the 100 points available for this question</h6>";
    
                                } 
                             else {
                                   echo "Error updating db " . $db->error;
                                  }
            }
          }
echo"</div>";

}


}
     

 $query="SELECT ch3 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
            {
    $answer=$row['ch3'];

              }
      if ($answer!='0')
    {
  $query="SELECT * from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
           {
       $answer=$row['ch4'];
       $new_max=$row['ch4_max'];
  //    echo"$answer / $new_max";
            }
      if (  $answer <$new_max  )
{

    

echo"
<div class='answers' >




<h3>Q4. What is the full address is of the whistleblower?</h3>



<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> 
 <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge4' name='challenge4' placeholder='Challenge 4 Answer' /></td><td>
<input class='answer' type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>
<h6>Access hints- if you click <img height='20px' src='images/question.png'/> to access hints you will lose 25 of the 50 points available for this question.</h6>
";

{
  echo"
 <form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
         
            <input type='hidden' name='hint4' value='".$_POST['hint4']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input class='hint' type='submit' name='submit' value='' id='submit' /></submit>  </form> ";

    if ( isset($_POST['hint4']) && $_POST['hint4']='hint4')
            {
              echo"<h6>Hint: </h6>
        <h6>You need to plug the whistleblower's email address into the phone subscribers database to get potential matches,
         then do an in page search (via the browser) using the email address to get this answer.</h6>


              ";
         $sql = "UPDATE teams SET ch4_max='25' WHERE team='".$team."'";

           if ($db->query($sql) === TRUE) {
                 echo"<h6>25 points have been deducted from the 50 points available for this question</h6>";
    
                                } 
               else {
                      echo "Error updating db " . $db->error;
                     }
          }
            }
echo"</div>";

}
}

 $query="SELECT ch4 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
             {
    $answer=$row['ch4'];

              }
     if ($answer!='0')
    {


  $query="SELECT * from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
           {
       $answer=$row['ch5'];
       $new_max=$row['ch5_max'];
  //    echo"$answer / $new_max";
            }
      if (  $answer <$new_max  )
{




echo"
<div class='answers' >




<h3>Q5. What is the last known location of the whistleblower?</h3>



<table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> 
 <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge5' name='challenge5' placeholder='Challenge 5 Answer' /></td><td>
<input class='answer' type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>

<h6>Access hints- if you click <img height='20px' src='images/question.png'/> to access hints you will lose 50 of the 100 points available for this question.</h6>
";
{ echo"
<form class='links' action='' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
           
            <input type='hidden' name='hint5' value='".$_POST['hint5']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input class='hint' type='submit' name='submit' value='' id='submit' /></submit>  </form> ";

             if ( isset($_POST['hint5']) && $_POST['hint5']='hint5')
            {
              echo"<h6>Hint: </h6>
<h6>To get last known location take the subscriber IMEI of the whistleblower
and plug into phone metadata search</h6>


              ";
$sql = "UPDATE teams SET ch5_max='50' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h6>25 points have been deducted from the 50 points available for this question</h6>";
    
                                } 
   else {
    echo "Error updating db " . $db->error;
        }
            }

          }
echo"</div>";

}

}


 $query="SELECT ch5 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
             {
    $answer=$row['ch5'];

              }
     if ($answer!='0')
    {


 $query="SELECT * from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
           {
       $answer=$row['ch6'];
       $new_max=$row['ch6_max'];
   //   echo"$answer / $new_max";
            }
      if (  $answer <$new_max  )
{

echo"
<div class='answers' >




<h3>Q6. How many times did the whistleblower and the journalist talk to each other?</h3>

 
 <table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge6' name='challenge6' placeholder='Challenge 6 Answer' /></td><td>
<input class='answer' type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>

<h6>Access hints- if you click <img height='20px' src='images/question.png'/> to access hints you will lose 10 of the 25 points available for this question.</h6>
";
{echo"
<form class='links' action='' method='POST'>
<input type='hidden' name='team_name' value='".$team."'>

            <input type='hidden' name='hint6' value='".$_POST['hint6']."'>
             <input type='hidden' name='password' value='".$password."'>
            <input class='hint' type='submit' name='submit' value='' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint6']) && $_POST['hint6']='hint6')
            {
              echo"<h6>Hint: </h6>
<h6>Get journalist's phone number </h6>
<h6>Get whistleblower's phone number </h6>
<h6>Plug these into Cross Search to get first part of answer</h6>
<h6>Switch them over to see how many calls were made in the other direction and add.</h6>

              ";
$sql = "UPDATE teams SET ch6_max='15' WHERE team='".$team."' ";

if ($db->query($sql) === TRUE) {
    echo"<h6>10 points have been deducted from the 25 points available for this question</h6>";
    
                                } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
          }
echo"</div>";
}

}


 $query="SELECT ch6 from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
             {
    $answer=$row['ch6'];

              }
    if ($answer!='0')
    {


 $query="SELECT * from teams where team='".$team."'";
  $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
            while ($row = $result->fetch_assoc()) 
           {
       $answer=$row['ch7'];
       $new_max=$row['ch7_max'];
    //  echo"$answer / $new_max";
            }
      if (  $answer <$new_max  )
{



echo"
<div class='answers'>




<h3>What's the name of the second whistleblower at Minecorp?</h3>
<h6>Use the cross search to find this answer</h6>

 
 <table class='forms' border='0px'><tr><td>
 <form action='' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='text'  id='challenge7' name='challenge7' placeholder='Challenge 7 Answer' /></td><td>
<input class='answer' type='submit' class='user' name='submit' value='' id='submit' /></form></td></tr></table>

<h6>Access hints- if you click <img height='20px' src='images/question.png'/> to access hints you will lose 75 of the 150 points available for this question</h6>
";
{ echo"
<form class='links' action='' method='POST'>
<input type='hidden' name='team_name' value='".$team."'>

            <input type='hidden' name='hint7' value='".$_POST['hint7']."'>
            <input type='hidden' name='password' value='".$password."'>
            <input class='hint' type='submit' name='submit' value='' id='submit' /></submit>  </form> ";

            if ( isset($_POST['hint7']) && $_POST['hint7']='hint7')
            {
              echo"<h6>Hint: </h6>
<h6>Use Cross Search page.</h6>
<h6> Enter the journalist and whistleblower's phone numbers into the 2nd cross search box to find out which number they both called. </h6>
<h6>Click on the IMEI to search the phone subscriber records to get the details of the 2nd whistleblower. 
</h6>";

$sql = "UPDATE teams SET ch7_max='75' WHERE team='".$team."'";

if ($db->query($sql) === TRUE) {
    echo"<h6>75 points have been deducted from the 150 points available for this question</h6>";
    
                               } 
   else {
    echo "Error updating db " . $db->error;
        }
            }
          }
echo"</div>";
}

    }
}
}
?>

