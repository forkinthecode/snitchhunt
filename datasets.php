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
{
  $email = "SELECT * from email_metadata where id='1' ";
$result = mysqli_query($db, $email );
   echo"<h4>Example <i>email</i> metadata <a href='email_metadata.php'><img src='hand-holding-up-a-magnifier.png'></img></a></h4>
";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#f29f91'><tbody>
  <tr><td >IP Address:</td><td> ".$row['source_IP_address']."<td></tr>
  <tr><td>Sender's email:</td><td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient's email:</td><td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td><td> ".$row['email_subject_line']."<td><td></td></tr>
  <tr><td>Port</td><td>Port:".$row['port']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>


 </tbody></table><br>";

}




  $subscriber = "SELECT * from phone_subscriber where id='2' ";
$result = mysqli_query($db, $subscriber );
   echo"<h4>Example <i>phone subscriber</i> metadata <a href='subscriber_metadata.php'><img src='hand-holding-up-a-magnifier.png'></img></a></h4><p>List of organisations reported to have access to this data:</p>";

 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#f2d091;'><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table>";


}
   
     
$phone = "SELECT * from phone_metadata where id='1'";
$result = mysqli_query($db, $phone );
 echo"<h4>Example <i>phone</i> metadata <a href='phone_metadata.php'><img src='hand-holding-up-a-magnifier.png'></img></a></h4>";
 while ($row = $result->fetch_assoc()) 
    {
echo"<table class='basic' border='0' style='background-color:#e3f291;'><tbody>
  <tr><td >Subscriber's <a href='https://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity' target='_blank'>IMEI</a>:</td><td> ".$row['subscriber_imei']."<td><td></td></tr>
  <tr><td>Subscriber's Number:</td><td>".$row['subscriber_phone_number']."</td></tr>
  <tr><td>Dialled Number:</td><td> ".$row['dialled_number']."<td><td></td></tr>
  <tr><td>Cell Tower Location:</td><td>".$row['cell_tower_location']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>
  </tbody></table><br> ";
}

 

$google = "SELECT * from google_metadata where id='4' ";
$result = mysqli_query($db, $google );
   echo"<h4>Example <i>Google</i> metadata <a href='google_metadata.php'><img src='hand-holding-up-a-magnifier.png'></img></a></h4>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#cbdbd8'><tbody>
  <tr><td >IP Address:</td>        <td>".$row['IP_address']."    <td></tr>
  <tr><td >User Id:</td>           <td>".$row['user_id']."       <td></tr>
  <tr><td>Full Name</td>                  <td>".$row['full_name']."</td></tr>
  <tr><td>Username:</td>               <td>".$row['user_name']."</td></tr>
  <tr><td>Email Address:</td>              <td>".$row['email_address']."    <td></tr>
  <tr><td>Address:</td>                     <td>".$row['address']."         </td></tr>
  <tr><td>Employer:</td>                    <td>".$row['employer']."        </td></tr>
  <tr><td>Job Title:</td>                   <td>".$row['job_title']."       </td></tr>
  <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
  <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
  <tr><td>Date and Time:</td>                   <td> ".$row['date_time']."     </td></tr>
 </tbody></table><br>";
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


    <?php //include('../scripts/footer.php');?>

    </body>
</html>