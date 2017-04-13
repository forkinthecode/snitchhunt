


  
<?php

 
$data=trim($_POST['string']);
$string= mysqli_real_escape_string ( $db , $data );
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
MATCH(`subscriber_imei`)         AGAINST('$string' IN BOOLEAN MODE) || 
MATCH(`subscriber_phone_number`) AGAINST('$string' IN BOOLEAN MODE) ||  
MATCH(`dialled_number`)          AGAINST('$string' IN BOOLEAN MODE) || 
MATCH(`cell_tower_location`)     AGAINST('$string' IN BOOLEAN MODE) ||  
MATCH(`date_column`)             AGAINST('$string' IN BOOLEAN MODE) || 
MATCH(`duration`)                AGAINST('$string' IN BOOLEAN MODE) ORDER BY phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0 && $num_results<1000) 
        { //5
        echo"<h6>There are ".number_format($num_results)." matches across all <i>phone metadata</i> fields for <b>$string</b></h6>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
             }//6
        echo"</div>";
      }//5

       elseif ($num_results >1000 )
        {
         echo"<h6>There are too many phone metadata results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h6><h6> Try a different search string</h6>";
        }
elseif ($num_results <1)
 {//2
       echo"<h6>There are no exact matches in phone subscriber metadata for the search criteria <b>$string</b>- 
       falling back to partial matches</h6>";
     
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `subscriber_imei` LIKE'%$string%'  ||
        `subscriber_phone_number` LIKE'%$string%'|| 
        `dialled_number` LIKE'%$string%' || 
        `cell_tower_location` LIKE'%$string%' || 
        `date_column` LIKE'%$string%' || 
        `duration` LIKE'%$string%' order by phone_metadata4.date_column,time  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {
        echo"<h6>There are no phone metadata results for the search criteria <b>$string</b></h6>";
        }
        
        elseif ($num_results >1000 )
        {
         echo"<h6>There are too many phone metadata results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h6><h6> Try a different search string</h6>";
        }
        elseif ($num_results>0 && $num_results <1000) 
        { 
        echo"<h6>There are ".number_format($num_results)." partial matches across all <i>phone metadata</i> fields for <i>$string</i></h6>
  
            <div class='expand'>";
           while ($row = $result->fetch_assoc()) 
           {
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
          }
          echo"</div>";
   }
  }mysqli_free_result($result);

?>
