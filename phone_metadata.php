<?php
	
require'header.php';
?>

<?php

  if(!isset($_GET['search_all_phone']) && !isset($_GET['show_all_phone_data']) && !isset($_GET['search_all_dialled']) && !isset($_GET['show_all_subscribers']) )
 {//
  $phone = "SELECT * from phone_metadata where id='4' ";
$result = mysqli_query($db, $phone );
   echo"<h4>Example <i>phone</i> metadata</h4>";
 while ($row = $result->fetch_assoc()) 
    {
  echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
    </tbody></table><br> ";
    }
}

{
echo"<br><h4>Search all fields in the <i>phone</i> metadata:</h4>
     <div class='searches' style='background-color:#e3f291;'>
       <table class='forms'><tr><td>   
             <form action='phone_metadata.php'  method='GET'>
             <input type='text'  id='search_all_phone' name='search_all_phone' placeholder='Search string' /></td><td>
             <input type='submit' name='submit' placeholder='Search' id='submit' />
             </form></td></tr></table>
      </div>";
}



if(isset($_GET['search_all_phone'])  && !isset($_GET['show_all_phone_data']))
 {//1

$data=trim($_GET['search_all_phone']);
$search_all_phone= mysqli_real_escape_string ( $db , $data );

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
`subscriber_imei`='$search_all_phone' || 
`subscriber_phone_number`='$search_all_phone'|| 
`dialled_number`='$search_all_phone' || 
`cell_tower_location`='$search_all_phone' || 
`date_column`='$search_all_phone' || 
`duration`='$search_all_phone' order by phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$search_all_phone</b>- 
       falling back to inexact matches</p>";

     //$data=trim($_GET['search_all_phone']);
     //$search_all_phone= mysqli_real_escape_string ( $db , $data );
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
        {//3
        echo"<p>There are no results for the search criteria <b>$search_all_phone</b></p>";
        }//3
        
        elseif ($num_results >300)
        {//4
         echo"<p>There are too many results (".number_format($num_results).") 
         to display for the search criteria <b>$search_all_phone</b>. 
         Maximum results displayed is 300.</p><p>
          <a href='phone_metadata.php?show_all_phone_data=$search_all_phone'>Click here</a> 
          to override limit and display all ".number_format($num_results).".</p> ";
         }//4
        elseif ($num_results <300 && $num_results >0) 
        { //5
        echo"<h4>There are $num_results <i>phone metadata</i> results for <b>$search_all_phone</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
        }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
              
 }//2

  
 elseif ($num_results >300)
 {//11
  echo"<p>There are too many exact matches (".number_format($num_results).")
   to display for the search criteria <b>$search_all_phone</b>. 
   Maximum results displayed is 300.</p>
   <p> <a href='phone_metadata.php?show_all_phone_data=$search_all_phone'>Click here</a> 
   to override limit and display all ".number_format($num_results).".</p> ";
 }//12
 elseif ($num_results <300 && $num_results >0) 
        { //13
          echo"<h4>There are $num_results <i>phone metadata</i> exact matches for <b>$search_all_phone</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//14

  echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      
      }//16
}mysqli_free_result($result);

?>


<?php
{//open
  
echo"<br><h4>Search <i>dialled number</i> field only:</h4>
     <div class='searches' style='background-color:#e3f291;'>
       <table class='forms'><tr><td>   
             <form action='phone_metadata.php'  method='GET'>
             <input type='text'  id='search_all_dialled' name='search_all_dialled' placeholder='Dialled number' /></td><td>
             <input type='submit' name='submit' placeholder='Search' id='submit' />
             </form></td></tr></table>
      </div>";
   




if(isset($_GET['search_all_dialled']) && !isset($_GET['search_all_subscriber']) && !isset($_GET['search_all_phone'])  && !isset($_GET['show_all_phone_data']))
 {//1

$data=trim($_GET['search_all_dialled']);
$search_all_dialled= mysqli_real_escape_string ( $db , $data );

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 

`dialled_number`='$search_all_dialled' 
order by phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$search_all_dialled</b>- 
       falling back to inexact matches</p>";

     $data=trim($_GET['search_all_dialled']);
     $search_all_dialled= mysqli_real_escape_string ( $db , $data );
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `dialled_number` LIKE'%$search_all_dialled%'  order by phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<p>There are no exact or partial matches for the search criteria <b>$search_all_dialled</b></p>";
        }//3
        /*
        //elseif ($num_results >300)
        {//4
          
         echo"<p>There are too many results (".number_format($num_results).") 
         to display for the search criteria <b>$search_all_phone</b>. 
         Maximum results displayed is 300.</p><p>
          <a href='phone_metadata.php?show_all_phone_data_dialled=$search_all_dialled'>Click here</a> 
          to override limit and display all ".number_format($num_results).".</p> ";
          
         }//4
        //elseif ($num_results <300 && $num_results >0) 
        */
         elseif ($num_results >0)
        { //5
        echo"<h4>There are $num_results <i>phone metadata</i> results for <b>$search_all_dialled</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
        }//6
        echo"</div>Mouse over/scroll for more results.";
          }//5
              
 }//2

  /*
 elseif ($num_results >300)
 {//11
  echo"<p>There are too many exact matches (".number_format($num_results).")
   to display for the search criteria <b>$search_all_phone_data_dialled</b>. 
   Maximum results displayed is 300.</p>
   <p> <a href='phone_metadata.php?show_all_phone_data_dialled'>Click here</a> 
   to override limit and display all ".number_format($num_results).".</p> ";
 }//11
 elseif ($num_results <300 && $num_results >0) 
        { //12
          echo"<h4>There are $num_results exact matches in the dialled number field for <b>$search_all_dialled</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//13

  echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td><b>Dialled number:</b></td>      <td><b>".$row['dialled_number']."</b><td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";

    }//13
   echo"</div>Mouse over/scroll for more results.";

      
      }//12
    }*/
} //close
mysqli_free_result($result);

?>
<?php
{
  


echo"<br><h4>Search <i>subscriber number</i> field only:</h4>
     <div class='searches' style='background-color:#e3f291;'>
       <table class='forms'><tr><td>   
             <form action='phone_metadata.php'  method='GET'>
             <input type='text'  id='search_all_subscriber' name='search_all_subscriber' placeholder='Subscriber number' /></td><td>
             <input type='submit' name='submit' placeholder='Search' id='submit' />
             </form></td></tr></table>
      </div>";




if(isset($_GET['search_all_subscriber']) && !isset($_GET['show_all_dialled']) 
  && !isset($_GET['search_all_phone']) && !isset($_GET['show_all_phone_data']) )

 {//1

$data=trim($_GET['search_all_subscriber']);
$search_all_subscriber= mysqli_real_escape_string ( $db , $data );

$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
FROM `phone_metadata4` WHERE 
`subscriber_phone_number`='$search_all_subscriber'order by phone_metadata4.date_column  DESC";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches in the subscriber number field for <b>$search_all_subscriber</b>- 
       falling back to inexact matches</p>";

     //$data=trim($_GET['search_all_phone']);
     //$search_all_phone= mysqli_real_escape_string ( $db , $data );
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time 
       FROM `phone_metadata4` where 
        `subscriber_phone_number` LIKE'%$search_all_subscriber%' order by phone_metadata4.date_column  DESC ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
            if ($num_results <1)
        {//3
        echo"<p>There are no results in the subscriber number field for <b>$search_all_subscriber</b></p>";
        }//3
        
        elseif ($num_results >300)
        {//4
         echo"<p>There are too many results (".number_format($num_results).") 
         to display for the search criteria <b>$search_all_subscriber</b>. 
         Maximum results displayed is 300.</p><p>
          <a href='phone_metadata.php?show_all_phone_data=$search_all_subscriber'>Click here</a> 
          to override limit and display all ".number_format($num_results).".</p> ";
         }//4
        elseif ($num_results <300 && $num_results >0) 
        { //5
        echo"<h4>There are $num_results matches in the subscriber number field for <b>$search_all_subscriber</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
        }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
              
 }//2

  
 elseif ($num_results >300)
 {//11
  echo"<p>There are too many exact matches (".number_format($num_results).")
   to display for the search criteria <b>$search_all_phone</b>. 
   Maximum results displayed is 300.</p>
   <p> <a href='phone_metadata.php?show_all_phone_data=$search_all_subscriber'>Click here</a> 
   to override limit and display all ".number_format($num_results).".</p> ";
 }//12
 elseif ($num_results <300 && $num_results >0) 
        { //13
          echo"<h4>There are $num_results exat matches in the subscriber field for <b>$search_all_subscriber</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//14

  echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      }
      }//16
}mysqli_free_result($result);

?>




<?php


if(!isset($_GET['search_all_phone']) && isset($_GET['show_all_phone_data']) )
 {//1
  
$data=trim($_GET['show_all_phone_data']);
$show_all_phone_data= mysqli_real_escape_string ( $db , $data );
$phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time  
from phone_metadata3 where 
   subscriber_phone_number     ='$show_all_phone_data'
|| dialled_number              ='$show_all_phone_data'  
|| cell_tower_location         ='$show_all_phone_data' 
|| subscriber_IMEI             ='$show_all_phone_data'  
|| duration                    ='$show_all_phone_data' 
|| date_column                   ='$show_all_phone_data'  order by phone_metadata3.date_column  DESC ";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$show_all_phone_data</b>- 
       falling back to inexact matches</p>";

      $show_all_phone_data=trim($_GET['show_all_phone_data']);
      $phone = "SELECT *,DATE_FORMAT(date_column, '%D %M %Y') AS date_column, TIME_FORMAT(time,'%h:%i %p') AS time
       FROM `phone_metadata4` where 
      subscriber_phone_number     LIKE'%$show_all_phone_data%'
	    || dialled_number           LIKE'%$show_all_phone_data%' 
      || cell_tower_location      LIKE'%$show_all_phone_data%' 
      || subscriber_IMEI          LIKE'%$show_all_phone_data%'  
      || duration                 LIKE'%$show_all_phone_data%' 
      || date_column                LIKE'%$show_all_phone_data%'  order by phone_metadata4.date_column  DESC  ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
          
        if ($num_results >300 ) 
        { //5
        echo"<h4>There are ".number_format($num_results)." <i>phone metadata</i> results for <b>$show_all_phone_data</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";
        }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
              
 }//2

  
 elseif ($num_results >300)
 {//11
  
          echo"<h4>There are $num_results <i>phone metadata</i> exact matches for <b>$show_all_phone_data</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//14

   echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td><b>Subscriber number:</b></td>   <td><b>".$row['subscriber_phone_number']."</b></td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_column']." (".$row['time'].")</td></tr>
    </tbody></table><br> ";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      
      }//16
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
