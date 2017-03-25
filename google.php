

<?php
 

  
$data=trim($_POST['string']);
$string= mysqli_real_escape_string ( $db , $data );

  
$google = "SELECT * FROM `google_metadata` where 
      IP_address      LIKE'%$string%' 
      || user_id      LIKE'%$string%' 
      || search_terms LIKE'%$string%' 
      || user_name     LIKE'%$string%' 
      || full_name    LIKE'%$string%' 
      || address      LIKE'%$string%' 
      || email_address LIKE'%$string%' 
      || date_time   LIKE'%$string%' 
      || employer     LIKE'%$string%' 
      || job_title    LIKE'%$string%' 
      || address      LIKE'%$string%' 
      || source_tcp_port LIKE'%$string%' 
      || user_agent   LIKE'%$string%' 
      || date_time    LIKE'%$string%' ";
$result = mysqli_query($db, $google );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
        {
        echo"<h6>There are no Google metadata partial matches for the search criteria <b>$string</b></h6>";
        }//3
        
        elseif ($num_results >1000 )
        {//4
         echo"<h6>There are too many Google metadata results ".number_format($num_results)." to display for the search criteria <i>".$string."</i>. 
         Maximum results displayed is 1000.</h6><h6> Try a different search string.</h6>";
         }//4
        elseif ($num_results >0 && $num_results <1000) 
        { //5

        echo"<h6>There are $num_results <i>google metadata</i> results for <b>".$string."</b></h6>
  
  <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic'  style=''><tbody>
      <tr><td width='175px'>IP Address:</td>    <td>".$row['IP_address']."     </td></tr>
      <tr><td>Search Terms:</td>                <td>".$row['search_terms']."   </td></tr>
      <tr><td>User Id:</td>                     <td>".$row['user_id']."        </td></tr>
      <tr><td>Full Name:</td>                   <td>".$row['full_name']."      </td></tr>
      <tr><td>Username:</td>                    <td>".$row['user_name']."      </td></tr>
      <tr><td>Email Address:</td>               <td>".$row['email_address']."  </td></tr>
      <tr><td>Address:</td>                     <td>".$row['address']."        </td></tr>
      <tr><td>Employer:</td>                    <td>".$row['employer']."       </td></tr>
      <tr><td>Job Title:</td>                   <td>".$row['job_title']."      </td></tr>
      <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
      <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
      <tr><td>Date and Time:</td>               <td>".$row['date_time']."      </td></tr>
      </tbody></table><br> ";
        }//6
        echo"</div>";
  }
mysqli_free_result($result);

?>
