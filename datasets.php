<?php
	
require'header.php';
?>


 
<!--
<img src='output_QXO6ff.gif'></img>-->


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
   echo"<h4>Example <i>phone subscriber</i> metadata <a href='phone_subscribers.php'><img src='hand-holding-up-a-magnifier.png'></img></a></h4>
";

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

 

$google = "SELECT * from google_metadata where id='46' ";
$result = mysqli_query($db, $google );
   echo"<h4>Example <i>Google</i> metadata <a href='google_metadata.php'><img src='hand-holding-up-a-magnifier.png'></img></a></h4>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#cbdbd8'><tbody>
  <tr><td>IP Address:</td>                  <td>".$row['IP_address']."     <td></tr>
      <tr><td>Search Terms:</td>                  <td>".$row['search_terms']."     <td></tr>
      <tr><td>User Id:</td>                     <td>".$row['user_id']."        <td></tr>
      <tr><td>Full Name</td>                    <td>".$row['full_name']."      </td></tr>
      <tr><td>Username:</td>                    <td>".$row['user_name']."      </td></tr>
      <tr><td>Email Address:</td>               <td>".$row['email_address']."  <td></tr>
      <tr><td>Address:</td>                     <td>".$row['address']."        </td></tr>
      <tr><td>Employer:</td>                    <td>".$row['employer']."       </td></tr>
      <tr><td>Job Title:</td>                   <td>".$row['job_title']."      </td></tr>
      <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
      <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
      <tr><td>Date and Time:</td>               <td>".$row['date_time']."     </td></tr>
     </tbody></table><br>";
}
      





}mysqli_free_result($result);
?>

 

 </div>
 <p>Click on the links in the Datasets drop-down navigation or the magnifying glass to search that dataset</p>
 <div class='right'>
 
 

  <div class='agencies' style='background-color:#cbdbd8'>
 <div class='expand'>

 <p>List of organisations <a href='https://www.righttoknow.org.au/request/requests_for_access_to_telecommu#incoming-4557'>reported</a> to have applied for access to phone call, subscriber and email metadata. Click on the name for more info.</p>


<h4><a href='http://projects.propublica.org/nsa-grid/' target='_blank'>National Security Agency, USA</a></h4>
<h4><a href='../govspend/agency.php?Agency=Australian Financial Security Authority' target='_blank'>Australian Financial Security Authority</a></h4>
<h4><a href='../govspend/agency.php?Agency=Australian Health Practitioner Regulation Agency' target='_blank'>Australian Health Practitioner Regulation Agency (AHPRA)</a></h4>
<h4><a href='../govspend/agency.php?Agency=Australian Postal Corporation' target='_blank'>Australian Postal Corporation</a></h4>
<h4><a href='../govspend/agency.php?Agency=Australian Taxation Office' target='_blank'>Australian Taxation Office</a></h4>
<h4><a href='../govspend/agency.php?Agency=Australian Transaction Reports and Analysis Centre'>Australian Transaction Reports and Analysis Centre</a></h4>
<h4><a href='../govspend/agency.php?Agency=Civil Aviation Safety Authority' target='_blank'>Civil Aviation Safety Authority (CASA)</a></h4>
<h4><a href='../govspend/agency.php?Agency=Clean Energy Regulator' target='_blank'>Clean Energy Regulator</a></h4>
<h4><a href='../govspend/agency.php?Agency=Department of Agriculture' target='_blank'>Department of Agriculture</a></h4>
<h4><a href='../govspend/agency.php?Agency=Department of Defence' target='_blank'>Department of Defence (ADFIS and IGD)</a></h4>
<p> <a href='../govspend/agency.php?Agency=Department of the Environment and Energy' target='_blank'>Department of the Environment and Energy</a></h4>
<p> <a href='../govspend/agency.php?Agency=Department of Foreign Affairs and Trade' target='_blank'>Department of Foreign Affairs and Trade</a></h4>
<p> <a href='../govspend/agency.php?Agency=Department of Health' target='_blank'>Department of Health</a></h4>
<p> <a href='../govspend/agency.php?Agency=Department of Human Services' target='_blank'> Department of Human Services</a></h4>
<p> <a href='../govspend/agency.php?Agency=Department of Social Services' target='_blank'>Department of Social Services</a></h4>
<p> <a href='../govspend/agency.php?Agency=Fair Work Building and Construction' target='_blank'>Fair Work Building and Construction</a></h4>
<p> <a href='../govspend/agency.php?Agency=National Measurement Institute' target='_blank'>National Measurement Institute</a></h4>
<p>ACT Revenue Office, ACT</p>
<p>Access Canberra (Department of Treasury and Economic Development), ACT</p>
<p>Bankstown City Council, NSW</p>
<p>Consumer Affairs, VIC</p>
<p>Consumer, Building and Occupational Services (Consumer Affairs and Fair Trading – Department of Justice), TAS</p>
<p>Consumer and Business Services, SA</p>
<p>Department of Agriculture, Fisheries and Forestry, QLD</p>
<p>Department of Commerce, WA</p>
<p>Department of Corrective Services, WA</p>
<p>Department of Environment and Heritage Protection, QLD</p>
<p>Department of Economic Development, Jobs, Transport & Resources (Fisheries), VIC</p>
<p>Department of Environment, Land, Water and Planning, VIC</p>
<p>Department of Environment Regulation, WA</p>
<p>Department of Fisheries, WA</p>
<p>Department of Justice and Regulation (Consumer Affairs), VIC</p>
<p>Department of Justice and Regulation (Sheriff of Victoria), VIC</p>
<p>Department of Mines and Petroleum, WA</p>
<p>Department of Primary Industries (Fisheries), NSW</p>
<p>Environment Protection Authority, SA</p>
<p>Greyhound Racing Victoria, VIC</p>
<p>Harness Racing New South Wales, NSW</p>
<p>Health Care Complaints Commission, NSW</p>
<p>Legal Services Board, VIC</p>
<p>NSW Environment Protection Authority, NSW</p>
<p>NSW Fair Trading, NSW</p>
<p>Office of Environment & Heritage, NSW</p>
<p>Office of Fair Trading (Department of Justice And Attorney-General Office of the Director General), QLD</p>
<p>Office of State Revenue, NSW</p>
<p>Office of State Revenue, QLD</p>
<p>Office of the Racing Integrity Commissioner, VIC</p>
<p>Primary Industries and Regions South Australia (PIRSA)</p>
<p>Queensland Building and Construction Commission</p>
<p>Racing and Wagering Western Australia</p>
<p>Racing NSW, </p>
<p>Racing Queensland, QLD</p>
<p>Roads and Maritime Services NSW, NSW</p>
<p>Royal Society for the Prevention of Cruelty to Animals (RSPCA)</p>
<p>State Revenue Office, VIC</p>
<p>Taxi Services Commission, VIC</p>
<p>RevenueSA</p>
<p>Victorian WorkSafe Authority</p>


 </div>Mouse/Scroll over for more results
</div><!--
  <div style='background-color:#cbdbd8'>
 <p>List of organisations reported to have access to Google metadata:</p>-->
          <br>         

</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>
