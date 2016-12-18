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
    href="../favicon.ico">
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




<?php // searches all fields in phone_subscriber data for a  string
{
echo"<br><h4> Search all fields in the <i>phone subscriber</i> metadata:</h4>
<div class='searches' style='background-color:#f2d091;'>
        
            <form action='phone_subscribers.php'  method='GET'>
            <input type='text'  id='search_all_subscribers' name='search_all_subscribers' placeholder='Search string' />
            <input type='submit' name='submit' placeholder='Search' id='submit' />
            </form>
</div>
          ";
     }
if( !isset($_GET['search_all_subscribers']) )
{

    

  $subscriber = "SELECT * from phone_subscriber where id='2' ";
  $result = mysqli_query($db, $subscriber );
   echo"<h4>Example <i>phone subscriber</i> metadata</h4>";

 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#f2d091;'><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table>";


}
}
if( isset($_GET['search_all_subscribers']) )
{
  

$search_all_subscribers= mysqli_real_escape_string ( $db ,trim($_GET['search_all_subscribers']) );
$subscribers = "SELECT * from phone_subscriber where   
subscriber_number       ='$search_all_subscribers' 
|| Date_Time               ='$search_all_subscribers' 
|| subscriber_imei         ='$search_all_subscribers'  
|| subscriber_address      ='$search_all_subscribers'  
|| subscriber_email        ='$search_all_subscribers'  
|| subscriber_name         ='$search_all_subscribers'    ";
  $result = mysqli_query($db, $subscribers );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<h4>There are no exact matches for the search criteria <b>$search_all_subscribers</b>- 
       falling back to inexact matches</h4>";

   
$search_all_subscribers= mysqli_real_escape_string ( $db ,trim($_GET['search_all_subscribers']) );
      $subscribers = "SELECT * from phone_subscriber where   
   subscriber_number        LIKE'%$search_all_subscribers%' 
|| Date_Time                LIKE'%$search_all_subscribers%' 
|| subscriber_imei          LIKE'%$search_all_subscribers%' 
|| subscriber_address       LIKE'%$search_all_subscribers%' 
|| subscriber_email         LIKE'%$search_all_subscribers%'  
|| subscriber_name          LIKE'%$search_all_subscribers%'     ";
  $result = mysqli_query($db, $subscribers );
  @$num_results = mysqli_num_rows($result);
  if ($num_results <1)
        {//3
        echo"<h4>There are no results for the search criteria <b>$search_all_subscribers</b></h4>";
        }//3
        
        elseif ($num_results >300)
        {//4
         echo"<h4>There are too many results (".number_format($num_results).") 
         to display for the search criteria <b>$search_all_subscribers</b>. 
         Maximum results displayed is 300.</h4><h4>
          <a href='phone_subscribers.php?show_all_subscribers_data=$search_all_subscribers'>Click here</a> 
          to override limit and display all ".number_format($num_results).".</h4> ";
         }//4
        elseif ($num_results <300 && $num_results >0) 
        { //5
        echo"<h4>There are $num_results <i>phone subscriber</i> results for
         <b>$search_all_subscribers</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
  echo"<table class='basic' border='0' style='background-color:#f2d091;'><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table><br>";
        }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
              
 }//2

  
 elseif ($num_results >300)
 {//11
  echo"<h4>There are too many exact matches (".number_format($num_results).")
   to display for the search criteria <b>$search_all_subscribers</b>. 
   Maximum results displayed is 300.</h4>
   <h4> <a href='phone_metadata.php?show_all_subscribers=$search_all_subscribers'>Click here</a> 
   to override limit and display all ".number_format($num_results).".</h4> ";
 }//12
 elseif ($num_results <300 && $num_results >0) 
        { //13
          echo"<h4>There are $num_results <i>phone subscribers</i> results for <b>$search_all_subscribers</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//14

echo"<table class='basic' border='0' style='background-color:#f2d091;'><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table>";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      
      }//16
}mysqli_free_result($result);

?>

<?php // searches all fields in phone_subscriber data for a  string

if( !isset($_GET['search_all_subscribers']) && isset($_GET['show_all_subscribers']))
{//1
  
$show_all_subscribers= mysqli_real_escape_string ( $db ,trim($_GET['show_all_subscribers']) );

$subscribers = "SELECT * from phone_subscriber where   
subscriber_number       ='$show_all_subscribers' 
|| Date_Time               ='$show_all_subscribers' 
|| subscriber_imei         ='$show_all_subscribers'  
|| subscriber_address      ='$show_all_subscribers'  
|| subscriber_email        ='$show_all_subscribers'  
|| subscriber_name         ='$show_all_subscribers'    ";
  $result = mysqli_query($db, $subscribers );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<h4>There are no exact matches for the search criteria <b>$show_all_subscribers</b>- 
       falling back to inexact matches</h4>";

     $show_all_subscribers= mysqli_real_escape_string ( $db ,trim($_GET['show_all_subscribers']) );
      $subscribers = "SELECT * from phone_subscriber where   
   subscriber_number        LIKE'%$show_all_subscribers%' 
|| Date_Time                LIKE'%$show_all_subscribers%' 
|| subscriber_imei          LIKE'%$show_all_subscribers%' 
|| subscriber_address       LIKE'%$show_all_subscribers%' 
|| subscriber_email         LIKE'%$show_all_subscribers%'  
|| subscriber_name          LIKE'%$show_all_subscribers%'     ";
  $result = mysqli_query($db, $subscribers );
  @$num_results = mysqli_num_rows($result);
 
        
      
        if ($num_results >300 ) 
        { //3
        echo"<h4>There are $num_results <i>phone subscriber</i> results for
         <b>$show_all_subscribers</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
               {//4
          echo"<table class='basic' border='0' style='background-color:#f2d091;'><tbody>
          <tr><td>Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
          <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
          <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
          <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
          <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
          <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
          </tbody></table><br>";
                }//4
        echo"</div>Mouse over/scroll for more results.";
}//2
         }//3
}mysqli_free_result($result);//1

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
