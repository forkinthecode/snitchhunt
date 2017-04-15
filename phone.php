
  <?php
if(  isset($_POST['search_all_phone'])  )
 {
$data=trim($_POST['search_all_phone']);
$search_all_phone= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching <i>All phone</i> for <i>$search_all_phone</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
MATCH(`subscriber_imei`)         AGAINST('$search_all_phone' IN BOOLEAN MODE) || 
MATCH(`subscriber_phone_number`) AGAINST('$search_all_phone' IN BOOLEAN MODE) ||  
MATCH(`dialled_number`)          AGAINST('$search_all_phone' IN BOOLEAN MODE) || 
MATCH(`cell_tower_location`)     AGAINST('$search_all_phone' IN BOOLEAN MODE) ||  
MATCH(`date_column`)             AGAINST('$search_all_phone' IN BOOLEAN MODE) || 
MATCH(`duration`)                AGAINST('$search_all_phone' IN BOOLEAN MODE) 
ORDER BY phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { 
        echo"<h3>There are ".number_format($num_results)." matches across all <i>phone metadata</i> phone for <b>$search_all_phone</b></h3>
        ";
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
      
      }
elseif ($num_results <1)
 {
       echo"<h3>There are no exact matches for the search criteria <b>$search_all_phone</b>- 
       falling back to partial matches</h3>";
     
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `subscriber_imei` LIKE'%$search_all_phone%'  ||
        `subscriber_phone_number` LIKE'%$search_all_phone%'|| 
        `dialled_number` LIKE'%$search_all_phone%' || 
        `cell_tower_location` LIKE'%$search_all_phone%' || 
        `date_column` LIKE'%$search_all_phone%' || 
        `duration` LIKE'%$search_all_phone%' order by phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {
        echo"<h3>There are no results for the search criteria <b>$search_all_phone</b></h3>";
        }
        
        elseif ($num_results >1000 )
         {
         echo"<h3>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string</h3>";
         }
        elseif ($num_results>0) 
        { 
        echo"<h3>There are ".number_format($num_results)." partial matches across all <i>phone metadata</i> phone for <i>$search_all_phone</i></h3>
  
";
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
          echo"";
    }
  

 

}mysqli_free_result($result);

?>
