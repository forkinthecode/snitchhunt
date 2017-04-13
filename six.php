
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

<body > 


<!-- These divs are used for anchor-jumps with the pseudoclass :target -->
<div id='nav'>
  <div id="a1">
  <div id="a2">
  <div id="a3">
  <div id="a4">
  <div id="a5">
  <div id="a6">
  <div id="a7">
  <div id="a8">
  <div id="a9">
  <div id="a10">
  <!--<div id="a11">
  <div id="a12">
  <div id="a13">
  <div id="a14">
  <div id="a15">-->
   <!-- Top Navigation. Ya, tables are evil. -->

 <?php

include'framework.php';
?>

</nav>
<table class='top-nav'><tr><td><a href='five.php'><img src='images/next-blue-light-left.png'></img></a></td><td><a href='seven.php'><img src='images/next-blue-light.png'></img></a></td></tr></table>

<div class='page'>
<h2>Data Matching</h2>
<p>Data matching means taking information that appears in more than one data set and finding matching records for it.</p>
<p>For example, when we browse the web or send an email using the same internet connection, the IP address of the router our 
  devices use to access the internet is recorded along with other data about each activity.</p>

<details><summary><h5>Which datasets contain IP address of the device connected to the internet?</h5></summary>
  <p>Google search data & Email metadata</p>
</details>
<details><summary><h5>Which datasets contain email address?</h5></summary>
  <p>Phone subscriber database, Email metadata, Google search metadata.</p>
</details>
<details><summary><h5>Which datasets contain home address?</h5></summary>
  <p>Google search metadata, Phone subscriber data</p>
</details>
<details><summary><h5>Which datasets real time location information?</h5></summary>
  <p>Phone usage metadata</p>
</details>
  <h2>Email metadata </h2>
<!--<table class='metadata'><tr><td>
<img  src='images/email.png'></td><td>
<p>Email metadata that is provided to government without warrant includes data from emails sent to and from Australian email providers, including recipient and sender address, time and date, regardless of whether the email was successfully delivered.</p>
<p>It is worth remembering that while metadata is provided to law enforcement agencies without a warrant,  access to content is available where a warrant has been granted.</p>

</td></tr></table>-->

<?php

  $email = "SELECT * from email_metadata where id='1' ";
$result = mysqli_query($db, $email );
   echo"
 
";
 while ($row = $result->fetch_assoc()) 
    {

echo"  


<br>
<table class='basic' ><tbody>
  <tr><td>IP Address:</td>            <td><a class='mobile' href='' title='IP Address of the device connected to the ISP'>".$row['source_IP_address']." </a>    </td><td>IP Address of the router that connects your devices to the internet.</td></tr>
  <tr><td>Sender :</td>               <td><a class='mobile'href='' title='Sender email'>".$row['sender_email_address']."</a>   </td><td></td></tr>
  <tr><td>Recipient:</td>             <td><a class='mobile'href='' title='Recipient email'>".$row['recipient_email_address']."</a></td><td></td></tr>
  <tr><td>Email subject line:</td>    <td><a class='mobile'href='' title='Email subject line- this is content under the Data Retention Scheme: only available with warrant'> ".$row['email_subject_line']."</a>     </td><td>This is content under the Data Retention Scheme: only available with warrant</td></tr>
  <tr><td>Port</td>                   <td><a class='mobile'href='' title='Port number'>".$row['port']."  </a>              <td></td>    </td></tr>
  <tr><td>Date and Time:</td>         <td><a class='mobile'href='' title='Date/Time'>".$row['date_time']."</a>         <td></td>     </td></tr>


 </tbody></table><br>";

}
?>



<h2>Web search metadata </h2>
<!--<table class='metadata'><tr><td><img  src='images/computer.png'></td><td>
 <p>While the Australian government doesn't have direct access to your browsing history, foreign governments collect this data
and access can be provided to local authorities. Search engine data varies depending on the information you have provided in your use of the internet and your privacy settings.</p>
</td></tr></table>-->

<?php
$google = "SELECT * from google_metadata where id='46' ";
$result = mysqli_query($db, $google );
 
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' ><tbody>
  <tr><td width='150px'>IP Address:</td>        <td><a class='mobile' href='' title='IP Address'>".$row['IP_address']." </a>    </td><td>This is the IP address of the device not the web page. <a href='https://en.wikipedia.org/wiki/IP_address'>More</a></td></tr>
      <tr><td>Search Terms:</td>                <td><a class='mobile' href='' title='search terms'>".$row['search_terms']." </a>    </td><td></td></tr>
      <tr><td>User Id:</td>                     <td><a class='mobile' href='' title='Google user ID'>".$row['user_id']."  </a>      </td><td></td></tr>
      <tr><td>Full Name:</td>                   <td><a class='mobile' href='' title='Full name'>".$row['full_name']."</a>      </td><td></td></tr>
      <tr><td>Username:</td>                    <td><a class='mobile' href='' title='Username'>".$row['user_name']." </a>     </td><td></td></tr>
      <tr><td>Email Address:</td>               <td><a class='mobile' href='' title='Email address'>".$row['email_address']." </a> </td><td></td></tr>
      <tr><td>Address:</td>                     <td><a class='mobile' href='' title='Street Address'>".$row['address']." </a>       </td><td></td></tr>
      <tr><td>Employer:</td>                    <td><a class='mobile' href='' title='Employer'>".$row['employer']."</a>       </td><td></td></tr>
      <tr><td>Job Title:</td>                   <td><a class='mobile' href='' title='Job Title'>".$row['job_title']."</a>      </td><td></td></tr>
      <tr><td>Source TCP Port:</td>             <td><a class='mobile' href='' title='Source TCP port'>".$row['source_tcp_port']."</a></td><td>Port numbers can be used to identify particular services used such as FTP, HTTP or IRC. <a href='https://en.wikipedia.org/wiki/Port_(computer_networking)'>More</a></td></tr>
      <tr><td>User agent:</td>                  <td><a class='mobile' href='' title='Browser/Device type'>".$row['user_agent']." </a>    </td><td>The browser/version used & device type is sent with web activity to customise content. <a href='https://en.wikipedia.org/wiki/User_agent'>More</a> </td></tr>
      <tr><td>Date and Time:</td>               <td><a class='mobile' href='' title='Date/Time'>".$row['date_time']."</a>     </td><td></td></tr>
     </tbody></table><br>";
}
      
?>

<h2>Phone subscriber metadata  </h2>
<!--<table class='metadata'><tr><td>
  <img src='images/smartphone-blue.png'></td><td>
<p>Every phone has a number called an <a href='https://en.wikipedia.org/wiki/International_Mobile_Equipment_Identity' target='_blank'>IMEI</a> that is unique to that device. This number is part of your customer records with your phone company along with your basic personal information like name, address and email. 
</p><p>People can be identified by taking information from one dataset and using it search a different dataset. Mouse over the fields for more information on where this data comes from and compare with the other datasets here to see which fields occur in more than one dataset.</p>

</td></tr></table>-->

<?php
  $subscriber = "SELECT * from phone_subscriber where id='2' ";
$result = mysqli_query($db, $subscriber );
   echo"<br>
";

 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' ><tbody>
  <tr><td>Subscriber IMEI:</td>      <td><a class='mobile' href='' title='Device IMEI'>".$row['subscriber_imei']."</a></td><td>International Mobile Equipment Identity is a unique number used to identify individual devices to the GSM network</td></tr>
  <tr><td>Subscriber Address:</td>    <td><a class='mobile' href='' title='Subscriber address'>".$row['subscriber_address']."</a></td><td></td></tr>
  <tr><td>Subscriber Email:</td>      <td><a class='mobile' href='' title='Subscriber email'>".$row['subscriber_email']."</a></td><td></td></tr>
  <tr><td>Subscriber Name:</td>       <td><a class='mobile' href='' title='Subscriber name'>".$row['subscriber_name']."</a></td><td></td></tr>
  <tr><td>Subscriber Number</td>      <td><a class='mobile' href='' title='Subscriber number'>".$row['subscriber_number']."</a></td><td></td></tr>
  <tr><td>Date and Time:</td>         <td><a class='mobile' href='' title='Date/Time'>".$row['Date_Time']."</a>    </td><td></td></tr>
  </tbody></table><br>";


}

?>


<h2>Phone usage metadata </h2>
<!--<table class='metadata'><tr><td><img src='images/sim-card.png'></td><td>
   <p>Your IMEI can be used to track your geographical location and find all the records for that device.
 These records show when calls were made, how long they lasted, when texts were sent, 
 who they were sent to or received from and the locations of each party during the call or text.
</p>
<p>The government also has warrantless access to when (and where) you log into and out of your voice mail messages.</p>
</td></tr></table>-->

    <?php
$phone = "SELECT * from phone_metadata where id='1'";
$result = mysqli_query($db, $phone );

 while ($row = $result->fetch_assoc()) 
    {
echo"<br><table class='basic' border='0' ><tbody>
  <tr><td>Subscriber IMEI:</td><td><a class='mobile' href='' title='Device IMEI'> ".$row['subscriber_imei']."</a></td><td>International Mobile Equipment Identity is a unique number used to identify individual devices to the GSM network.</td></tr>
  <tr><td>Subscriber Number:</td><td><a class='mobile' href='' title='Suscriber phone number'>".$row['subscriber_phone_number']."</a></td><td></td></tr>
  <tr><td>Dialled Number:</td><td><a class='mobile' href='' title='Dialled number'> ".$row['dialled_number']."</a></td><td></td></tr>
  <tr><td>Cell Tower Location:</td><td><a class='mobile' href='' title='Cell tower location'>".$row['cell_tower_location']."</a></td><td>The Global System for Mobile Communications uses cell towers to relay information to and from your phone. <a href='https://en.wikipedia.org/wiki/Cell_site'>More</a></td></tr>
  <tr><td>Date and Time:</td><td><a class='mobile' href='' title='Date/Time'> ".$row['date_time']."</a></td><td></td></tr>
  </tbody></table><br> ";
}

 ?>
</div>

</div>

</div>

</div>

</body>
</html>

