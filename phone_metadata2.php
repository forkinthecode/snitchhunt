<?php
	
require'header.php';
?>

<?php
echo"    <div class='searches' style='background-color:#e3f291;'>
         <table class='forms'><tr><td> 
   <form action='phone_metadata2.php' class='search' method='GET'>
   <input type='text' id='search_string' name='search_string' placeholder='1.Search string' > 
   </td><td>
      <select name='field' >
       <option value=''>2.Click to Select Search Type</option>
       <option value='search_all_phone'>All fields</option>
      <option value='search_all_subscriber'>Subscriber numbers only</option>
 <option value='search_all_dialled'>Dialled numbers only</option>
       </select> </td><td>
       
       <input type='submit' name='submit' placeholder='Search' id='submit' />
 
      </form></td></tr></table>
      </div>";

  if( !isset($_GET['field']) && !isset($_GET['search_string']) )
 {//

  $phone = "SELECT * from phone_metadata where id='1' ";
$result = mysqli_query($db, $phone );
   echo"<h4>Example <i>phone</i> metadata</h4>";
 while ($row = $result->fetch_assoc()) 
    {
  echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td>Subscriber number:</td>          <td><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
    </tbody></table><br>
    <p>This page searches all fields or by subscriber or dialled number. To search using two phone numbers use the <a href='cross_search.php' target='_blank'>Cross Search</a> page. ";
    }
}

  if( isset($_GET['field']) && $_GET['search_string']=='' ||  isset($_GET['search_string']) && $_GET['field']=='')
 {//
echo"<h4>You need to provide a value in the search box (1.) to match against the fields (2.)</h4>
 ";

 }


 if( isset($_GET['field']) && isset($_GET['search_string']) && $_GET['search_string']!='' && $_GET['field']!='' )
 {
  echo"<p>Click on subscriber or dialled number in any result to search by that field with that number</p>";

 }

///////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['field']) && $_GET['field']=='search_all_subscriber' && isset($_GET['search_string']) && $_GET['search_string']!='' )
 {//1
$data=trim($_GET['search_string']);
$search_all_subscribers= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching subscriber numbers for <i>$search_all_subscribers</i></h3>";
  

$phone = "SELECT *
FROM `phone_metadata` WHERE 
`subscriber_phone_number`='$search_all_subscribers' order by phone_metadata.date_time  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h4>There are $num_results matches in subscriber numbers for <b>$search_all_subscribers</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
 
    <tr><td><b>Subscriber number:</b></td>   <td><b><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></b></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']." </td></tr>
    </tbody></table><br> ";
             }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
elseif ($num_results <1)
 {//2
       echo"<p>There are no exact matches in subsciber numbers for <b>$search_all_subscribers</b>- 
       falling back to partial matches</p>";
     
      $phone = "SELECT *
       FROM `phone_metadata` where 
        `subscriber_phone_number` LIKE'%$search_all_subscribers%' order by phone_metadata.date_time  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<p>There are no results for the search criteria <b>$search_all_subscribers</b></p>";
        }//3
        
       
        elseif ($num_results>0) 
            { //5
        echo"<h4>There are ".number_format($num_results)." partial matches in subscriber numbers for <i>$search_all_subscribers</i></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
                 {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td><b>Subscriber number:</b></td>   <td><b><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></b></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']." </td></tr>
    </tbody></table><br> ";
                 }//6
        echo"</div>Mouse over/scroll for more results.";
            }//5
  }
}mysqli_free_result($result);

?>

<?php

if(isset($_GET['field']) && $_GET['field']=='search_all_dialled' && isset($_GET['search_string'])  && $_GET['search_string']!='')
 {//1
$data=trim($_GET['search_string']);
$search_all_dialled= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching dialled numbers for <i>$search_all_dialled</i></h3>";
  

$phone = "SELECT *
FROM `phone_metadata` WHERE 
`dialled_number`='$search_all_dialled' order by phone_metadata.date_time  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h4>There are $num_results matches in subscriber numbers for <b>$search_all_dialled</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>          <td><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></td></tr>
    <tr><td><b>Dialled number:</b></td>      <td><b><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a></b><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']." </td></tr>
    </tbody></table><br> ";
             }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
elseif ($num_results <1)
 {//2
       echo"<p>There are no exact matches in subsciber numbers for <b>$search_all_dialled</b>- 
       falling back to partial matches</p>";
     
      $phone = "SELECT *
       FROM `phone_metadata` where 
        `dialled_number` LIKE'%$search_all_dialled%' order by phone_metadata.date_time  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<p>There are no results for the search criteria <b>$search_all_dialled</b></p>";
        }//3
        
       
        elseif ($num_results>0) 
            { //5
        echo"<h4>There are ".number_format($num_results)." partial matches in dialled numbers for <i>$search_all_dialled</i></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
                 {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
   
    <tr><td>Subscriber number:</td>          <td><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></td></tr>
    <tr><td><b>Dialled number:</b></td>      <td><b><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a></b><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']." </td></tr>
    </tbody></table><br> ";
                 }//6
        echo"</div>Mouse over/scroll for more results.";
            }//5
  }
}mysqli_free_result($result);

?>
  <?php
///////////////////////////////////////////////////////////////////////////////////////////

  if(isset($_GET['field']) && $_GET['field']=='search_all_phone' && isset($_GET['search_string'])  && $_GET['search_string']!='' )
 {//1
$data=trim($_GET['search_string']);
$search_all_fields= mysqli_real_escape_string ( $db , $data );
echo"<h3>Searching All Fields for <i>$search_all_fields</i></h3>";
  

$phone = "SELECT *
FROM `phone_metadata` WHERE 
`subscriber_imei`='$search_all_fields' || 
`subscriber_phone_number`='$search_all_fields'|| 
`dialled_number`='$search_all_fields' || 
`cell_tower_location`='$search_all_fields' || 
`date_time`='$search_all_fields' || 
`duration`='$search_all_fields' order by phone_metadata.date_time  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);

      if ($num_results>0) 
        { //5
        echo"<h4>There are $num_results matches across all <i>phone metadata</i> fields for <b>$search_all_fields</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
             {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
 
    <tr><td>Subscriber number:</td>   <td><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']." </td></tr>
    </tbody></table><br> ";
             }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
elseif ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$search_all_fields</b>- 
       falling back to partial matches</p>";
     
      $phone = "SELECT *
       FROM `phone_metadata` where 
        `subscriber_imei` LIKE'%$search_all_fields%'  ||
        `subscriber_phone_number` LIKE'%$search_all_fields%'|| 
        `dialled_number` LIKE'%$search_all_fields%' || 
        `cell_tower_location` LIKE'%$search_all_fields%' || 
        `date_time` LIKE'%$search_all_fields%' || 
        `duration` LIKE'%$search_all_fields%' order by phone_metadata.date_time  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<p>There are no results for the search criteria <b>$search_all_fields</b></p>";
        }//3
        
       
        elseif ($num_results>0) 
        { //5
        echo"<h4>There are ".number_format($num_results)." partial matches across all <i>phone metadata</i> fields for <i>$search_all_fields</i></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    
    <tr><td>Subscriber number:</td>   <td><a href='phone_metadata2.php?search_string=".$row['subscriber_phone_number']."&field=search_all_subscriber'>".$row['subscriber_phone_number']."</a></td></tr>
    <tr><td>Dialled number:</td>      <td><a href='phone_metadata2.php?search_string=".$row['dialled_number']."&field=search_all_dialled'>".$row['dialled_number']."</a><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']." </td></tr>
    </tbody></table><br> ";
        }//6
        echo"</div>Mouse over/scroll for more results.";
    }//5
  

  
            
            }
 
}mysqli_free_result($result);

?>

 </div>
 <div class='right'>
 
<?php
include'challenges.php';
?>



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>