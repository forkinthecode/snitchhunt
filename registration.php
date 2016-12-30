<!--top level openaus page-->
<!--Budget Home-->
 <!DOCTYPE HTML>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <title>Little Bird</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rosie Williams">
  <link rel="icon" 
    type="image/png" 
    href="../favicon.ico">
    </head>
    <body>

<?php


include('login.php');
//include('../inclusions.php');

include('styles.php');


 
    

?>

  
        
                     
 
  <div class="jumbotron"> 
 <?php
     include'nav.php';
     ?>
  
  
        </div>
          
       

          <div class='clear'></div>
<div class="page_width">


        <div class="left">


   

 <?php
if ( !isset($_POST['email'] )  )
{
  echo"<h4>Enter your email to register your team</h4>
  <form action='registration.php' method='POST'>
<input type='hidden' name='email' value='".$_POST['email']."'>
<input type='hidden' name='team' value='".$_POST['team']."'>
<input type='text'  id='email' name='email' placeholder='Your email' />
<input type='text'  id='team' name='team' placeholder='Your team name' />
<input type='submit' class='user' name='submit' value='Login' id='submit' /></form>";


/*

$query="SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS login";
$result = mysqli_query($db, $query);
      @$num_results = mysqli_num_rows($result);
      while ($row = $result->fetch_assoc()) 
      $login=mysqli_real_escape_string($db, $row['login']); 
      {
        echo"<p>You will see your  login below.</p>
        <p>To return to your answers at a later date 
        you will need to use that login. </p>";

      }*/
}mysqli_free_result($result);

?>

 <?php
if ( isset($_POST['email'] )  && isset($_POST['team'] ) )
{
  
     $email= mysqli_real_escape_string ( $db ,trim($_POST['email']) );
     $team= mysqli_real_escape_string ( $db ,trim($_POST['team']) );

$testing_team="SELECT team FROM teams WHERE team='$team'";
$result = mysqli_query($db, $testing_team );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
  {
  echo"<p>The team name $team has already been registered</p>";
  }
if ($num_results <1)
  {
    $query="INSERT INTO teams(`time`, `date`, `team`,`email`  ) 
     VALUES(CURRENT_TIME, CURDATE(), '".$team."', '".$email."'); ";
      if ($db->query($query) === TRUE) 
      {
        echo"<h4>Team name $team has been registered</h4>";
      }
       else 
      {

          echo "Error: " . $query . "<br>" . $db->error;
      }
    }

////////////////////
$testing_email="SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db, $testing_email );
@$num_results = mysqli_num_rows($result);
if ($num_results >0)
  {
  echo"<p>The email $email has already been registered</p>";
  }
if ($num_results <1)
    {
    $query="INSERT INTO users(`time`, `date`, `team`,`email`  ) 
         VALUES(CURRENT_TIME, CURDATE(), '".$team."', '".$email."'); ";
          if ($db->query($query) === TRUE) 
          {
            echo"<h4>The email $email has been registered</h4>";
          }
     else 
        {

            echo "Error: " . $query . "<br>" . $db->error;
        }
    }






}mysqli_free_result($result);

   ?>
 


  




         
 </div>
 <div class='right'>
 
<?php
include'challenges.php';
?>


</div></div>


    <?php //include('../scripts/footer.php');?>

    </body>
</html>



    