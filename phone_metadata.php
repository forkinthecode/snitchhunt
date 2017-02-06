<?php
	
require'header.php';
?>
<h2>Phone usage metadata</h2>
<?php


  if( !isset($_POST['field']) && !isset($_POST['search_string']) )
 {//

  $phone = "SELECT * from phone_metadata where id='1' ";
$result = mysqli_query($db, $phone );
 //  echo"<h3>Example</h3>";
 while ($row = $result->fetch_assoc()) 
    {
  echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td>Subscriber number:</td>    <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
    </tbody></table><br>
    <h3>This page searches all fields or by subscriber or dialled number. To search using two phone numbers use the Cross Search page. </h3>";
    }
}

  
if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$team=  $_POST['team_name'];
$password=  $_POST['password'];
  if ( $team!='' && $password!='' )
{
echo" <h2> Search all fields, subscriber numbers or dialled numbers in the <i>phone</i> metadata:</h2>   <div class='searches' style=''>
         <table class='forms' border='0px'><tr><td> 
   <form action='phone_metadata.php' class='search' method='POST'>
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
       
       <input type='submit' name='Search'  id='Search' />
 
      </form></td></tr></table>
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

echo"<h3>Searching subscriber numbers for <i>$search_all_subscribers</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
`subscriber_phone_number`='$search_all_subscribers' order by phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h3>There are $num_results matches in subscriber numbers for <b>$search_all_subscribers</b></h3>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
 
    <tr><td><b>Subscriber number:</b></td>   <td><b><a href='phone_metadata.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></b></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
             }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
elseif ($num_results <1)
 {//2
       echo"<h3>There are no exact matches in subsciber numbers for <b>$search_all_subscribers</b>- 
       falling back to partial matches</h3>";
     
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `subscriber_phone_number` LIKE'%$search_all_subscribers%' order by phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<h3>There are no results for the search criteria <b>$search_all_subscribers</b></h3>";
        }//3
        
       
        elseif ($num_results>0) 
            { //5
        echo"<h3>There are ".number_format($num_results)." partial matches in subscriber numbers for <i>$search_all_subscribers</i></h3>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
                 {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td><b>Subscriber number:</b></td>   <td><b><a href='phone_metadata.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></b></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
                 }//6
        echo"</div>Mouse over/scroll for more results.";
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
if(isset($_POST['field']) && $_POST['field']=='search_all_dialled' && isset($_POST['search_string'])  && $_POST['search_string']!='')
 {//1
$data=trim($_POST['search_string']);
$search_all_dialled= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching dialled numbers for <i>$search_all_dialled</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
`dialled_number`='$search_all_dialled' order by phone_metadata4.date_column  DESC";
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
        echo"</div>Mouse over/scroll for more results.";
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
        
       
        elseif ($num_results>0) 
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
        echo"</div>Mouse over/scroll for more results.";
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
echo"<h3>Searching All Fields for <i>$search_all_fields</i></h3>";
  

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
`subscriber_imei`='$search_all_fields' || 
`subscriber_phone_number`='$search_all_fields'|| 
`dialled_number`='$search_all_fields' || 
`cell_tower_location`='$search_all_fields' || 
`date_column`='$search_all_fields' || 
`duration`='$search_all_fields' order by phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h3>There are $num_results matches across all <i>phone metadata</i> fields for <b>$search_all_fields</b></h3>
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
        echo"</div>Mouse over/scroll for more results.";
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
        echo"</div>Mouse over/scroll for more results.";
    }//5
  

  
            
            }
 }
}
}mysqli_free_result($result);

?>

 </div>
 <div class='right'>
 
<?php
include'score.php';
?>



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>
