<?php

  
$data=trim($_POST['string']);
$string= mysqli_real_escape_string ( $db , $data );

  

$subscribers = "SELECT * from phone_subscriber where   
subscriber_number='$string' 
|| Date_Time               ='$string'  
|| subscriber_imei         ='$string'   
|| subscriber_address      ='$string'  
|| subscriber_email        ='$string'   
|| subscriber_name        ='$string'     ";
  $result = mysqli_query($db, $subscribers );
@$num_results = mysqli_num_rows($result);if ($num_results >0 && $num_results <1000) 
        { 
   
        echo"<h6>There are ".number_format($num_results)." <i>phone subscriber</i> results for
         <b>$string</b></h6>";
        while ($row = $result->fetch_assoc()) 
       {
  echo"<table class='basic' border='0' style=''><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."</td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."</td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table><br>";
        }
       
    }

         elseif ($num_results <1)
        {
       echo"<h6>There are no Phone subscriber exact matches for the search criteria <b>".stripslashes($string)."</b>- 
       falling back to partial matches</h6>";

   
      $subscribers = "SELECT * from phone_subscriber where   
   subscriber_number        LIKE'%$string%' 
|| Date_Time                LIKE'%$string%' 
|| subscriber_imei          LIKE'%$string%' 
|| subscriber_address       LIKE'%$string%' 
|| subscriber_email         LIKE'%$string%'  
|| subscriber_name          LIKE'%$string%'     ";
  $result = mysqli_query($db, $subscribers );
  @$num_results = mysqli_num_rows($result);
  if ($num_results <1)
        {
        echo"<h6>There are no results for the search criteria <b>".stripslashes($string)."</b></h6>";
        }
       
          elseif ($num_results >1000 )
        {
         echo"<h6>There are too many Phone subscriber results (".number_format($num_results).") to display for the search criteria <i>".$string."</i>. 
         Maximum results displayed is 1000.</h6><h6> Try a different search string</h6>";
         }//4
        elseif ($num_results >0 && $num_results <1000) 
        { 
        echo"<h6>There are ".number_format($num_results)." <i>phone subscriber</i> results for
         <b>$string</b></h6>
        
  <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {
  echo"<table class='basic' border='0' style=''><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."</td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."</td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table><br>";
        }
        echo"</div>";
    }
    
}

mysqli_free_result($result);

?>

