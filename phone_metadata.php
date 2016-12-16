<!--Budget Home-->
 <!DOCTYPE HTML>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <title>Little Bird</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rosie Williams">
    <link rel="icon" 
      type="image/png" 
      href="favico.ico">
    </head>
    <body>

<?php


include('login.php');
//include('../inclusions.php');

include('styles.php');


 
    

?>

  
        
                     
 
  <div class="jumbotron"> 
     
 <?php
     include'nav.php';
     ?>
  
        </div>
          
       

          <div class='clear'></div>
<div class="page_width">


        <div class="left">

<?php
{
echo"<br><h4>Search all fields in the <i>phone</i> metadata:</h4>
     <div class='searches' style='background-color:#e3f291;'>
        
             <form action='phone_metadata.php'  method='GET'>
             <input type='text'  id='search_all_phone' name='search_all_phone' placeholder='Search string' />
             <input type='submit' name='submit' placeholder='Search' id='submit' />
             </form>
      </div>";
}

if(!isset($_GET['search_all_phone']) && !isset($_GET['show_all_phone_data']) )
{
  

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
if(isset($_GET['search_all_phone'])  )
 {//1

$data=trim($_GET['search_all_phone']);
$search_all_phone= mysqli_real_escape_string ( $db , $data );

$phone = "SELECT * FROM `phone_metadata` WHERE 
`subscriber_imei`='$search_all_phone' || 
`subscriber_phone_number`='$search_all_phone'|| 
`dialled_number`='$search_all_phone' || 
`cell_tower_location`='$search_all_phone' || 
`date_time`='$search_all_phone' || 
`duration`='$search_all_phone' ";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$search_all_phone</b>- 
       falling back to inexact matches</p>";

     //$data=trim($_GET['search_all_phone']);
     //$search_all_phone= mysqli_real_escape_string ( $db , $data );
      $phone = "SELECT * FROM `phone_metadata` where 
        `subscriber_imei` LIKE'%$search_all_phone%'  
        `subscriber_phone_number` LIKE'%$search_all_phone%'|| 
        `dialled_number` LIKE'%$search_all_phone%' || 
        `cell_tower_location` LIKE'%$search_all_phone%' || 
        `date_time` LIKE'%$search_all_phone%' || 
        `duration` LIKE'%$search_all_phone%'  ";
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
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
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
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
    </tbody></table><br> ";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      
      }//16
}mysqli_free_result($result);

?>

<?php

  


if(!isset($_GET['search_all_phone']) && isset($_GET['show_all_phone_data']))
 {//1
  
$data=trim($_GET['search_all_phone_data']);
$search_all_phone_data= mysqli_real_escape_string ( $db , $data );
$phone = "SELECT * from phone_metadata where 
   subscriber_phone_number ='$show_all_phone_data' 
|| cell_tower_location ='$show_all_phone_data' 
|| subscriber_IMEI='$show_all_phone_data'  
|| duration='$show_all_phone_data' 
|| date_time='$show_all_phone_data'  ";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$show_all_phone_data</b>- 
       falling back to inexact matches</p>";

      $show_all_phone_data=trim($_GET['show_all_phone_data']);
      $phone = "SELECT * FROM `phone_metadata` where 
      subscriber_phone_number     LIKE'%$show_all_phone_data%' 
      || cell_tower_location   LIKE'%$show_all_phone_data%' 
      || subscriber_IMEI       LIKE'%$show_all_phone_data%'  
      || duration LIKE'%$show_all_phone_data%' 
      || date_time    LIKE'%$show_all_phone_data%'   ";
      $result = mysqli_query($db, $phone );
            @$num_results = mysqli_num_rows($result);
          
        if ($num_results >300 ) 
        { //5
        echo"<h4>There are $num_results <i>phone metadata</i> results for <b>$show_all_phone_data</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
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
   <p> <a href='data.php?show_all_phone_data=$search_all_phone'>Click here</a> 
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
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
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


    <?php //include('../scripts/footer.php');?>

    </body>
</html>

