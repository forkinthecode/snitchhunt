<?php
	
require'header.php';
?>


 
<!--
<img src='output_QXO6ff.gif'></img>-->


<?php
{
  $email = "SELECT * from email_metadata where id='1' ";
$result = mysqli_query($db, $email );
   echo"<h3>Example <i>email</i> metadata</h3>
";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#2a5b72'><tbody>
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
   echo"<h3>Example <i>phone subscriber</i> metadata </h3>
";

 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#2a5b72;'><tbody>
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
 echo"<h3>Example <i>phone usage</i> metadata </h3>";
 while ($row = $result->fetch_assoc()) 
    {
echo"<table class='basic' border='0' style='background-color:#2a5b72;'><tbody>
  <tr><td >Subscriber <a href='https://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity' target='_blank'>IMEI</a>:</td><td> ".$row['subscriber_imei']."<td><td></td></tr>
  <tr><td>Subscriber Number:</td><td>".$row['subscriber_phone_number']."</td></tr>
  <tr><td>Dialled Number:</td><td> ".$row['dialled_number']."<td><td></td></tr>
  <tr><td>Cell Tower Location:</td><td>".$row['cell_tower_location']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>
  </tbody></table><br> ";
}

 

$google = "SELECT * from google_metadata where id='46' ";
$result = mysqli_query($db, $google );
   echo"<h3>Example <i>Google</i> metadata </h3>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#2a5b72;'><tbody>
  <tr><td width='150px'>IP Address:</td>                  <td>".$row['IP_address']."     <td></tr>
      <tr><td>Search Terms:</td>                  <td>".$row['search_terms']."     <td></tr>
      <tr><td>User Id:</td>                     <td>".$row['user_id']."        <td></tr>
      <tr><td>Full Name:</td>                    <td>".$row['full_name']."      </td></tr>
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
 <div class='right'>
 
 

 <div class='expand'>

 <p>List of organisations <a href='https://www.righttoknow.org.au/request/requests_for_access_to_telecommu#incoming-4557'>reported</a> to have applied for access to phone call, subscriber and email metadata: </p>


<h3><a href='http://projects.propublica.org/nsa-grid/' target='_blank'>National Security Agency, USA</h3>
<h3>Australian Financial Security Authority</h3>
<h3>Australian Health Practitioner Regulation Agency (AHPRA)</h3>
<h3>Australian Postal Corporation</h3>
<h3>Australian Taxation Office</h3>
<h3>Australian Transaction Reports and Analysis Centre</h3>
<h3>Civil Aviation Safety Authority (CASA)</h3>
<h3>Clean Energy Regulator</h3>
<h3>Department of Agriculture</h3>
<h3>Department of Defence (ADFIS and IGD)</h3>
<h3> Department of the Environment and Energy</h3>
<h3> Department of Foreign Affairs and Trade</h3>
<h3> Department of Health</h3>
<h3>Department of Human Services</h3>
<h3> Department of Social Services</h3>
<h3>Fair Work Building and Construction</h3>
<h3> National Measurement Institute</h3>
<h3>ACT Revenue Office, ACT</h3>
<h3>Access Canberra (Department of Treasury and Economic Development), ACT</h3>
<h3>Bankstown City Council, NSW</h3>
<h3>Consumer Affairs, VIC</h3>
<h3>Consumer, Building and Occupational Services (Consumer Affairs and Fair Trading – Department of Justice), TAS</h3>
<h3>Consumer and Business Services, SA</h3>
<h3>Department of Agriculture, Fisheries and Forestry, QLD</h3>
<h3>Department of Commerce, WA</h3>
<h3>Department of Corrective Services, WA</h3>
<h3>Department of Environment and Heritage Protection, QLD</h3>
<h3>Department of Economic Development, Jobs, Transport & Resources (Fisheries), VIC</h3>
<h3>Department of Environment, Land, Water and Planning, VIC</h3>
<h3>Department of Environment Regulation, WA</h3>
<h3>Department of Fisheries, WA</h3>
<h3>Department of Justice and Regulation (Consumer Affairs), VIC</h3>
<h3>Department of Justice and Regulation (Sheriff of Victoria), VIC</h3>
<h3>Department of Mines and Petroleum, WA</h3>
<h3>Department of Primary Industries (Fisheries), NSW</h3>
<h3>Environment Protection Authority, SA</h3>
<h3>Greyhound Racing Victoria, VIC</h3>
<h3>Harness Racing New South Wales, NSW</h3>
<h3>Health Care Complaints Commission, NSW</h3>
<h3>Legal Services Board, VIC</h3>
<h3>NSW Environment Protection Authority, NSW</h3>
<h3>NSW Fair Trading, NSW</h3>
<h3>Office of Environment & Heritage, NSW</h3>
<h3>Office of Fair Trading (Department of Justice And Attorney-General Office of the Director General), QLD</h3>
<h3>Office of State Revenue, NSW</h3>
<h3>Office of State Revenue, QLD</h3>
<h3>Office of the Racing Integrity Commissioner, VIC</h3>
<h3>Primary Industries and Regions South Australia (PIRSA)</h3>
<h3>Queensland Building and Construction Commission</h3>
<h3>Racing and Wagering Western Australia</h3>
<h3>Racing NSW, </h3>
<h3>Racing Queensland, QLD</h3>
<h3>Roads and Maritime Services NSW, NSW</h3>
<h3>Royal Society for the Prevention of Cruelty to Animals (RSPCA)</h3>
<h3>State Revenue Office, VIC</h3>
<h3>Taxi Services Commission, VIC</h3>
<h3>RevenueSA</h3>
<h3>Victorian WorkSafe Authority</h3>


 </div>Mouse/Scroll over for more results
</div><!--
  <div style='background-color:#cbdbd8'>
 <h3>List of organisations reported to have access to Google metadata:</h3>-->
          <br>         

</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>
