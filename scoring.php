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
      href="favico.ico">
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
if ( !isset($_POST['login'] ) )
{
 $login=mysqli_real_escape_string($db, $_POST['login']);
  echo"
<form action='scoring.php' method='POST'>
<input type='hidden' name='login' value='".$_POST['login']."'>
<input type='text'  id='login' name='login' placeholder='Your login' />
<input type='text'  id='team' name='team' placeholder='Team number' />
<input type='submit' class='user' name='submit' value='Login' id='submit' /></form>";
}


?>



<?php
 if ( isset($_POST['login'])  )
{   
$login=mysqli_real_escape_string($db, $_POST['login']);
$query="SELECT login from users where login=\"".$login."\"";
  $result = mysqli_query ($db, $query);

if (mysqli_num_rows($result)  >0)
      {
 
echo"<h4> You are logged in as ".$_POST['login']."</h4>";

}




 



     


 


      





}mysqli_free_result($result);
?>

 

 </div>
 <p>Click on the links in the top navigation or the magnifying glass to search that dataset</p>
 <div class='right'>
  <div style='background-color:#f29f91'>
 <p>List of organisations reported to have access to email metadata:</p>
</div>
  <div style='background-color:#f2d091;'>
 <p>List of organisations reported to have access to phone subscriber metadata:</p>
</div>
  <div style='background-color:#e3f291;'>
 <p>List of organisations reported to have access to phone call data:</p>
</div>
  <div style='background-color:#cbdbd8'>
 <p>List of organisations reported to have access to Google metadata:</p>
</div>
</div></div>


    <?php include('../scripts/footer.php');?>

    </body>
</html>