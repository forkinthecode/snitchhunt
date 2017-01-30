<!--top level openaus page-->


<?php
include('login.php');


include('inclusions.php');
include('scripts/header.php');
?>


   


       

  <div class="jumbotron">

</div>
      <div class='clear'></div>
<div class="row-fluid marketing" >

              
 <div class='span6'>
   <h1>SnitchHunt Support</h1>
   
 <p>Got a question? Post it here. </p>




 </div>
 <div class='span6'>


    <?php
    //if (!isset($_POST['email']) )
{


 echo"<table><tr><td>

       
</td>
<td>
<form action='' method='POST'>

<input type='email' name='email' value='Enter login to access'/>
<input class='nav_link' type='submit' name='submit' placeholder='Log on' id='submit' /></submit> </form> 

</td>
</tr>

</table>
<hr>


   <hr>
 <!-- <iframe src='https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=snem4fvlg690n0b8o1r8g6b0co%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Australia%2FSydney' style='border-width:0' width='500' height='300' frameborder='0' scrolling='no'>-->

<div style='width:195px; text-align:center;' >
<iframe  src='https://www.eventbrite.com/calendar-widget?eid=22127627329' frameborder='0' 
height='612' width='195' marginheight='0' marginwidth='0' scrolling='no' 
allowtransparency='true'></iframe><div style='font-family:Helvetica, Arial; 
font-size:10px; padding:5px 0 5px; margin:2px; width:195px; text-align:center;'' ><a class='powered-by-eb' 
style='color: #dddddd; text-decoration: none;' target='_blank' href='http://www.eventbrite.com/r/ecal'>Powered by Eventbrite</a></div>

";
}

//if (isset($_POST['team_name']))
{
 $email= mysqli_real_escape_string ( $db ,$_POST['team'] );
  $query="SELECT team from users where team='".$team."'";
  $result = mysqli_query($db, $query);
     

//if (mysqli_num_rows($result)  >0)
      {
echo"<h3>Welcome $team. Enter a username then click login to enter chat.</h3>
<iframe width='500px' height='500px' style='border:none;'src='chat/room/chat.php'><iframe>";
      }
   //   elseif (mysqli_num_rows($result)  ==0)
      {
//echo"<p>Sorry, $email does not seem to be in the classroom database. Please refresh the page and try again.</p>";
      }
}

?>

        
    

 


</div>


 </div>

<?php include('scripts/footer.php');?>