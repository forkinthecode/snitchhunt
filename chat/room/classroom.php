<!--top level openaus page-->


<?php
include('../../login.php');


include('../../inclusions.php');
include('../scripts/header.php');
?>


   

       

  <div class="jumbotron">

</div>
      <div class='clear'></div>
<div class="row-fluid marketing">

              
 <div class='span6'>
   



        
<?php
 $email= mysqli_real_escape_string ( $db ,$_POST['email'] );
 echo"<table><tr><td>

       
</td>
<td>
<form action='' method='POST'>

<input type='text' name='email' value='Enter email used to register'/>
<input class='nav_link' type='submit' name='submit' value='Log on' id='submit' /></submit> </form> 

</td>
</tr>

</table>";

if (isset($_POST['email']))
{

  $query="SELECT email from classroom";
  $result = mysqli_query($db, $query);
        @$num_results = mysqli_num_rows($result);

if (mysqli_num_rows($result)  >0)
      {
echo"Welcome $email. You may enter the chat.
<iframe width='500px' height='800px' src='chat.php'><iframe>";
      }
      elseif (mysqli_num_rows($result)  ==0)
      {
echo"$eail does not seem to be in the classroom database.";
      }
}

?>

  
  

  


 

 </div>
 <div class='span6'>


           <?php
   



if (isset($_POST['email']) )
{
  $email=$_POST['email'];
      $query="SELECT * FROM classroom where email='".$email."'";

    $result = mysqli_query($db, $query);
     if (mysqli_num_rows($result) ==0)
  
      { echo"<p>$email does not appear to be a OpenAus: Open Data Classroom user.</p>";
      }
     elseif (mysqli_num_rows($result) >0)
     {
      echo"<p>Signed into classroom as $email</p>";

          echo"<br>
 <iframe width='500px' height='800px' src='chat/room/chat.php'><iframe>
       ";
      
    }

}else"You are not logged in";

    ?>

  


    

 


</div>


 </div>

<?php include('../../scripts/footer.php');?>