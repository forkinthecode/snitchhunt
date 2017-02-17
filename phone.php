


  
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
echo" <h3> Search all fields, originating numbers or dialled numbers in the <i>phone</i> metadata:</h3>   <div class='searches' style=''>
         <table class='forms' border='0px'><tr><td>  


   <form action='' class='search' method='POST'>
    <input type='hidden' name='close' value='".$close."'>
    <input type='hidden' name='team_name' value='".$team."'> 
    <input type='hidden' name='password' value='".$password."'>

    <input type='text' id='search_string' name='search_string' placeholder='1.Search string' > 
<select name='field'>
       <option value=''>2.Click to Select Search Type</option>
       <option value='search_all_phone'>All fields</option>
       <option value='search_all_subscriber'>Subscriber numbers only</option>
       <option value='search_all_dialled'>Dialled numbers only</option>
       </select> 
 </td><td>
   


       
        <input class='searching'   type='submit' name='submit' value='' id='submit' /></form>
 
      </td></tr></table>
      </div>";
  if( isset($_POST['field']) && $_POST['search_string']=='' ||  isset($_POST['search_string']) && $_POST['field']=='')
 {//
echo"<h3>You need to provide a value in the search box (1.) to match against the fields (2.)</h3>
 ";

 }




///////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['field']) && $_POST['field']=='search_all_subscriber' && 
  isset($_POST['search_string']) && $_POST['search_string']!='' )
 {//1
$data=trim($_POST['search_string']);
$search_all_subscribers= mysqli_real_escape_string ( $db , $data );

echo"<h3>Searching <i>subscriber numbers</i> for <i>$search_all_subscribers</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE MATCH(`subscriber_phone_number`) AGAINST('$search_all_subscribers' IN BOOLEAN MODE) order by phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h3>There are ".number_format($num_results)." matches in subscriber numbers for <b>".$search_all_subscribers."</b></h3>
    <div class='expand'> ";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."</td></tr>
 
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."</td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
             }//6
       echo"</div><h3>Mouse/Scroll for more</h3>";
      }//5
      elseif ($num_results <1)
       {//2
       echo"<h3>There are no exact matches in subsciber numbers for <i>$search_all_subscribers</i>- 
       falling back to partial matches</h3>";
     
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where `subscriber_phone_number` LIKE('%$search_all_subscribers%') ORDER BY phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<h3>There are no results for the search criteria <i>$search_all_subscribers</i></h3>";
        }//3
        
        elseif ($num_results >1000 )
        {//4
         echo"<h3>There are too many results ".number_format($num_results)." to display for the search criteria <i>".$search_all_subscribers."</i>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string.</h3>";
         }//4
        elseif ($num_results>0 && $num_results <1000) 
            { //5
        echo"<h3>There are ".number_format($num_results)." partial matches in subscriber numbers for <i>$search_all_subscribers</i></h3>
        
  <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
                 {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
                 }//6
  echo"</div><h3>Mouse/Scroll for more</h3>";
            }//5
         }
}
}
}
}mysqli_free_result($result);

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
if(isset($_POST['field']) && $_POST['field']=='search_all_dialled' && isset($_POST['search_string'])  && $_POST['search_string']!='')
 {//1
$data=trim($_POST['search_string']);
$search_all_dialled= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching <i>dialled numbers</i> for <i>$search_all_dialled</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE MATCH(`dialled_number`) AGAINST('$search_all_dialled' IN BOOLEAN MODE) ORDER BY phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h3>There are $num_results matches in subscriber numbers for <b>$search_all_dialled</b></h3>
     
  <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>    <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td><b>Dialled number:</b></td>      <td><b>".$row['dialled_number']."</b><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
             }//6
           echo"</div><h3>Mouse/Scroll for more</h3>";
      }//5
elseif ($num_results <1)
 {//2
       echo"<h3>There are no exact matches in subsciber numbers for <b>$search_all_dialled</b>- 
       falling back to partial matches</h3>";
     
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `dialled_number` LIKE'%$search_all_dialled%' order by phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<h3>There are no results for the search criteria <b>$search_all_dialled</b></h3>";
        }//3
        
          elseif ($num_results >1000 )
        {//4
         echo"<h3>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string</h3>";
         }//4
        
        elseif ($num_results>0 && $num_results<1000) 
            { //5
        echo"<h3>There are ".number_format($num_results)." partial matches in dialled numbers for <i>$search_all_dialled</i></h3>
       
  <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
                 {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td>Subscriber number:</td>          <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td><b>Dialled number:</b></td>      <td><b>".$row['dialled_number']."</b><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
                 }//6
         echo"</div><h3>Mouse/Scroll for more</h3>";
            }//5
  }
}
}
}mysqli_free_result($result);

?>
  <?php
if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$team=  $_POST['team_name'];
$password=  $_POST['password'];
  if ( $team!='' && $password!='' )
{
  if(isset($_POST['field']) && $_POST['field']=='search_all_phone' && isset($_POST['search_string'])  && $_POST['search_string']!='' )
 {//1
$data=trim($_POST['search_string']);
$search_all_fields= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching <i>All Fields</i> for <i>$search_all_fields</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
MATCH(`subscriber_imei`)         AGAINST('$search_all_fields' IN BOOLEAN MODE) || 
MATCH(`subscriber_phone_number`) AGAINST('$search_all_fields' IN BOOLEAN MODE) ||  
MATCH(`dialled_number`)          AGAINST('$search_all_fields' IN BOOLEAN MODE) || 
MATCH(`cell_tower_location`)     AGAINST('$search_all_fields' IN BOOLEAN MODE) ||  
MATCH(`date_column`)             AGAINST('$search_all_fields' IN BOOLEAN MODE) || 
MATCH(`duration`)                AGAINST('$search_all_fields' IN BOOLEAN MODE) ORDER BY phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h3>There are ".number_format($num_results)." matches across all <i>phone metadata</i> fields for <b>$search_all_fields</b></h3>
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
        echo"</div><h3>Mouse over/scroll for more results.</h3>";
      }//5
elseif ($num_results <1)
 {//2
       echo"<h3>There are no exact matches for the search criteria <b>$search_all_fields</b>- 
       falling back to partial matches</h3>";
     
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `subscriber_imei` LIKE'%$search_all_fields%'  ||
        `subscriber_phone_number` LIKE'%$search_all_fields%'|| 
        `dialled_number` LIKE'%$search_all_fields%' || 
        `cell_tower_location` LIKE'%$search_all_fields%' || 
        `date_column` LIKE'%$search_all_fields%' || 
        `duration` LIKE'%$search_all_fields%' order by phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<h3>There are no results for the search criteria <b>$search_all_fields</b></h3>";
        }//3
        
        elseif ($num_results >1000 )
        {//4
         echo"<h3>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string</h3>";
         }//4
        elseif ($num_results>0) 
        { //5
        echo"<h3>There are ".number_format($num_results)." partial matches across all <i>phone metadata</i> fields for <i>$search_all_fields</i></h3>
  
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
          echo"</div><h3>Mouse/Scroll for more</h3>";
    }//5
  

  }
            
}
}
}
}mysqli_free_result($result);

?>
