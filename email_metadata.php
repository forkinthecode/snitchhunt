<?php
	
require'header.php';
?>


<h2>Email usage metadata</h2>

<?php



     
if(!isset($_POST['search_all_email']) && !isset($_POST['show_all_email_data'])  )
 {//1



$email = "SELECT * from email_metadata where id='1' ";
$result = mysqli_query($db, $email );
  // echo"<h3>Example <i>email</i> metadata</h3>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<div class='homer'><table class='basic' border='0' style=''><tbody>
  <tr><td width='150px'>IP Address:</td><td> ".$row['source_IP_address']."</td></tr>
  <tr><td>Sender email:</td><td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient email:</td><td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td><td> ".$row['email_subject_line']."</td></tr>
  <tr><td>Port</td><td>Port:".$row['port']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>


 </tbody></table></div><br>";

     }

}

?>


<?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   $team=$_POST['team_name'];
   $password=$_POST['password'];
    
    if ( $team!='' && $password!='' )
{
  
   $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
   $result = mysqli_query($db, $query);
   @$num_results = mysqli_num_rows($result);
if ($num_results >0)
       {
  echo"<br> <h2> Search all fields in the <i>email</i> metadata:</h2><div class='searches' style=''>
    <table class='forms'><tr><td>     
  <form action='email_metadata.php'  method='POST'>
 <input type='hidden' name='team_name' value='".$team."'> 
 <input type='hidden' name='password' value='".$password."'>

 <input type='text'  id='search_all_email' name='search_all_email' placeholder='Search string' />
              
</td><td>
<input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
    

</div>
          ";
        }
 
if(isset($_POST['search_all_email'])  )
{
$data=trim($_POST['search_all_email']);
$search_all_email= mysqli_real_escape_string ( $db , $data );
$email = "SELECT * FROM `email_metadata` where 
   source_IP_address        ='$search_all_email' 
|| size                     ='$search_all_email' 
|| sender_email_address     ='$search_all_email'
|| recipient_email_address  ='$search_all_email'
|| email_subject_line       ='$search_all_email'
|| date_time                ='$search_all_email' 
|| port                     ='$search_all_email' ";
$result = mysqli_query($db, $email );
@$num_results = mysqli_num_rows($result);
 if ($num_results >1000 )
        {//4
         echo"<h3>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string</h3>";
         }//4
        elseif ($num_results >0 && $num_results <1000) 
        { //5

        echo"<h3>There are $num_results <i>email metadata</i> exact matches for <b>".$search_all_email."</b></h3>
     <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0px' style=''><tbody>
  <tr><td width='150px'>IP Address:</td>        <td>".$row['source_IP_address']."</td></tr>
  <tr><td>Sender email:</td>     <td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient email:</td>  <td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td> <td>".$row['email_subject_line']."</td>
  <tr><td>Port:</td>               <td>".$row['port']."</td></tr>
  <tr><td>Date and Time:</td>      <td>".$row['date_time']."</td></tr>
 </tbody></table><br> ";
        }//6
        echo"</div>";
      }
elseif ($num_results <1)
 {//2
       echo"<h2>There are no exact matches for the search criteria <b>$search_all_email</b>- falling back to inexact matches</h2>";

      
      $search_all_email= mysqli_real_escape_string ( $db ,trim($_POST['search_all_email']) );
      $email = "SELECT * FROM `email_metadata` where 
             source_IP_address         LIKE'%$search_all_email%' 
          || size                      LIKE'%$search_all_email%' 
          || sender_email_address      LIKE'%$search_all_email%' 
          || recipient_email_address   LIKE'%$search_all_email%' 
          || email_subject_line        LIKE'%$search_all_email%' 
          || date_time                 LIKE'%$search_all_email%' 
          || port                      LIKE'%$search_all_email%'  ";
         $result = mysqli_query($db, $email);
         @$num_results = mysqli_num_rows($result);
         if ($num_results <1)
        {//3
        echo"<h2>There are no partial matches for the search criteria <b>$search_all_email</b></h2>";
        }//3
        
        elseif ($num_results >1000 )
        {//4
         echo"<h3>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string</h3>";
         }//4
        elseif ($num_results >0 && $num_results <1000) 
        { //5

        echo"<h3>There are $num_results <i>email metadata</i> results for <b>".$search_all_email."</b></h3>
     <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0px' style=''><tbody>
  <tr><td width='150px'>IP Address:</td>        <td>".$row['source_IP_address']."</td></tr>
  <tr><td>Sender email:</td>     <td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient email:</td>  <td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td> <td>".$row['email_subject_line']."</td>
  <tr><td>Port:</td>               <td>".$row['port']."</td></tr>
  <tr><td>Date and Time:</td>      <td>".$row['date_time']."</td></tr>
  </tbody></table><br> ";
        }//6
        echo"</div>";
 }//5
              
 }
 }
}   
}mysqli_free_result($result);

?>







 </div>
 <div class='right'>
 
<?php
//include'score.php';
?>
<?php
include'challenges.php';
?>



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>
