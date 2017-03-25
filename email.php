

<?php

$data=trim($_POST['string']);
$string= mysqli_real_escape_string ( $db , $data );

$email = "SELECT * FROM `email_metadata` WHERE 
source_IP_address='$string' 
|| size='$string'
|| sender_email_address='$string' 
|| recipient_email_address='$string' 
|| email_subject_line='$string'  
|| date_time='$string'  
|| port='$string' ";
$result = mysqli_query($db, $email );
@$num_results = mysqli_num_rows($result);
 if ($num_results >1000 )
        {
         echo"<h6>There are too many results (".number_format($num_results).") to display for the search criteria <i>$string</i>. 
         Maximum results displayed is 1000.</h6><h6> Try a different search string</h6>";
         }
    elseif ($num_results >0 && $num_results <1000) 
    { 

        echo"<h6>There are $num_results <i>email metadata</i> exact matches for <b>".$string."</b></h6>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
            {
     echo" 

  <table class='basic'  style=''><tbody>
  <tr><td width='150px'>IP Address:</td>        <td>".$row['source_IP_address']."</td></tr>
  <tr><td>Sender email:</td>     <td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient email:</td>  <td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td> <td>".$row['email_subject_line']."</td>
  <tr><td>Port:</td>               <td>".$row['port']."</td></tr>
  <tr><td>Date and Time:</td>      <td>".$row['date_time']."</td></tr>
 </tbody></table><br> ";
        }
        echo"</div>";
      }
elseif ($num_results <1)
 {
$data=trim($_POST['string']);
$string= mysqli_real_escape_string ( $db , $data );
       echo"<h6>There are no exact Email metadata matches for the search criteria <i>$string</i>- falling back to partial matches</h6>";

      
      $email = "SELECT * FROM `email_metadata` where 
             source_IP_address         LIKE'%$string%' 
          || size                      LIKE'%$string%' 
          || sender_email_address      LIKE'%$string%' 
          || recipient_email_address   LIKE'%$string%' 
          || email_subject_line        LIKE'%$string%' 
          || date_time                 LIKE'%$string%' 
          || port                      LIKE'%$string%'  ";
         $result = mysqli_query($db, $email);
         @$num_results = mysqli_num_rows($result);
         if ($num_results <1)
        {
        echo"<h6>There are no Email metadata partial matches for the search criteria <i>$string</i></h6>";
        }
        
        elseif ($num_results >1000 )
        {
         echo"<h6>There are too many Email metadata results (".number_format($num_results).") to display for the search criteria <i>$string</i>. 
         Maximum results displayed is 1000.</h6><h6> Try a different search string</h6>";
         }
        elseif ($num_results >0 && $num_results <1000) 
        { 

        echo"<h6>There are $num_results <i>email metadata</i> results for <b>".$string."</b></h6>
  <div class='expand'> ";
        while ($row = $result->fetch_assoc()) 
       {
     echo" 
  <table class='basic'  style=''><tbody>
  <tr><td width='150px'>IP Address:</td>        <td>".$row['source_IP_address']."</td></tr>
  <tr><td>Sender email:</td>     <td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient email:</td>  <td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td> <td>".$row['email_subject_line']."</td>
  <tr><td>Port:</td>               <td>".$row['port']."</td></tr>
  <tr><td>Date and Time:</td>      <td>".$row['date_time']."</td></tr>
  </tbody></table><br> ";
        }
       echo"</div>";

        }      
 
   }
mysqli_free_result($result);

?>


