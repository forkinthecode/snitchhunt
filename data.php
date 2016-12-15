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





<?php // searches all fields in phone_metadata for a  string
if( isset($_GET['show_all_phone_data']) )
{
$show_all_phone_data=  trim($_GET['show_all_phone_data']);
$phone = "SELECT * from phone_metadata where subscriber_phone_number='$show_all_phone_data' || dialled_number='$show_all_phone_data' || subscriber_imei='$show_all_phone_data'  || cell_tower_location='$show_all_phone_data'  || date_time='$show_all_phone_data'  || duration='$show_all_phone_data'    ";
$result = mysqli_query($db, $phone );

         @$num_results = mysqli_num_rows($result);
          if ($num_results <1)
 {
echo"<p>There are no results for the search criteria <b>$show_all_phone_data</b></p>";
 }
        

 elseif ($num_results >0) 
        { echo"There are ".number_format($num_results)." <i>phone metadata</i> results for <b>$show_all_phone_data</b>
      <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {

echo"<table class='basic' border='0'><tbody>
  <tr><td >Subscriber IMEI:</td><td> ".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber number:</td><td>".$row['subscriber_phone_number']."</td></tr>
  <tr><td>Dialled number:</td><td> ".$row['dialled_phone_number']."<td><td></td></tr>
  <tr><td>Cell Tower Location:</td><td>".$row['cell_tower_location']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>
  </tbody></table><br> ";
   }echo"</div>";
      }

}

?>



 

 <?php // searches all fields in phone_metadata for a  string
if( isset($_GET['show_all_email_data']) )
{
$show_all_email_data=  trim($_GET['show_all_email_data']);
$phone = "SELECT * from phone_metadata where subscriber_phone_number='$show_all_phone_data' || dialled_number='$show_all_phone_data' || subscriber_imei='$show_all_phone_data'  || cell_tower_location='$show_all_phone_data'  || date_time='$show_all_phone_data'  || duration='$show_all_phone_data'    ";
$result = mysqli_query($db, $phone );

         @$num_results = mysqli_num_rows($result);
          if ($num_results <1)
 {
echo"<p>There are no results for the search criteria <b>$show_all_phone_data</b></p>";
 }
        
 /*elseif ($num_results >300)
 {
  echo"<p>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_phone</b>. Maximum results displayed is 300.</p><p> <a href='data.php?data=show_all_phone_data'>Click here</a> to override limit and display all ".number_format($num_results)." results.</p> ";


 }*/
 elseif ($num_results >0) 
        { echo"There are ".number_format($num_results)." <i>phone metadata</i> results for <b>$show_all_phone_data</b>
      <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {

echo"<table class='basic' border='0'><tbody>
  <tr><td >IP Address:</td><td> ".$row['source_IP_address']."<td></tr>
  <tr><td>Sender's email:</td><td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient's email:</td><td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td><td> ".$row['email_subject_line']."<td><td></td></tr>
  <tr><td>Port</td><td>Port:".$row['port']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>


 </tbody></table><br>";
   }echo"</div>";
      }

}

?>

<?php
if(isset($_GET['show_all_google_data'])  )
 {//1
  {
echo"<br><h4> Search all fields in the <i>Google search</i> metadata:</h4><div class='searches' style='background-color:#cbdbd8'>
        
            <form action=''  method='GET'>

           <input type='text'  id='show_all_google_data' name='show_all_google_data' placeholder='Search string' />
              

        
             <input type='submit' name='submit' placeholder='Search' id='submit' />
              </form>
    

</div>
          ";
     }
  $show_all_google_data=trim($_GET['show_all_google_data']);
$google = "SELECT * FROM `google_metadata` where 
IP_address      ='$show_all_google_data' 
|| user_id      ='$show_all_google_data' 
|| search_terms     ='$show_all_google_data' 
|| user_name     ='$show_all_google_data'  
|| full_name   ='$show_all_google_data'  
|| address      ='$show_all_google_data' 
|| email_address ='$show_all_google_data' 
|| date_time   ='$show_all_google_data' 
|| employer     ='$show_all_google_data' 
|| job_title    ='$show_all_google_data' 
|| address      ='$show_all_google_data'  
|| source_tcp_port ='$show_all_google_data' 
|| user_agent   ='$show_all_google_data'  
|| date_time    ='$show_all_google_data' 

";
$result = mysqli_query($db, $google );
 @$num_results = mysqli_num_rows($result);
          if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$show_all_google_data</b>- falling back to inexact matches</p>";

      $show_all_google_data=trim($_GET['show_all_google_data']);
      $google = "SELECT * FROM `google_metadata` where 
      IP_address      LIKE'%$show_all_google_data%' 
      || user_id      LIKE'%$show_all_google_data%' 
      || search_terms     LIKE'%$show_all_google_data%' 
      || user_name     LIKE'%$show_all_google_data%' 
      || full_name    LIKE'%$show_all_google_data%' 
      || address      LIKE'%$show_all_google_data%' 
      || email_address LIKE'%$show_all_google_data%' 
      || date_time   LIKE'%$show_all_google_data%' 
      || employer     LIKE'%$show_all_google_data%' 
      || job_title    LIKE'%$show_all_google_data%' 
      || address      LIKE'%$show_all_google_data%' 
      || source_tcp_port LIKE'%$show_all_google_data%' 
      || user_agent   LIKE'%$show_all_google_data%' 
      || date_time    LIKE'%$show_all_google_data%' 

      ";
      $result = mysqli_query($db, $google );
       @$num_results = mysqli_num_rows($result);
          if ($num_results <1)
        {//3
        echo"<p>There are no results for the search criteria <b>$show_all_google_data</b></p>";
        }//3
        
       
        else
        { //5
        echo"<h4>There are (".number_format($num_results).") <i>Google search metadata</i> results for <b>$show_all_google_data</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
      echo"<table class='basic' border='0' style='background-color:#cbdbd8'><tbody>
      <tr><td>IP Address:</td>                  <td>".$row['IP_address']."     <td></tr>
      <tr><td>Search Terms:</td>                  <td>".$row['search_terms']."     <td></tr>
      <tr><td>User Id:</td>                     <td>".$row['user_id']."        <td></tr>
      <tr><td>Full Name</td>                    <td>".$row['full_name']."      </td></tr>
      <tr><td>Username:</td>                    <td>".$row['user_name']."      </td></tr>
      <tr><td>Email Address:</td>               <td>".$row['email_address']."  <td></tr>
      <tr><td>Address:</td>                     <td>".$row['address']."        </td></tr>
      <tr><td>Employer:</td>                    <td>".$row['employer']."       </td></tr>
      <tr><td>Job Title:</td>                   <td>".$row['job_title']."      </td></tr>
      <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
      <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
      <tr><td>Date and Time:</td>               <td>".$row['date_time']."     </td></tr>
     </tbody></table><br>";
        }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
              
 }//2

  
 elseif ($num_results >300)
 {//11
  echo"<p>There are too many exact matches (".number_format($num_results).") to display for the search criteria <b>$show_all_google_data</b>. Maximum results displayed is 300.</p><p> <a href='data.php?show_all_google_data=$show_all_google_data'>Click here</a> to override limit and display all ".number_format($num_results).".</p> ";
 }//12
 elseif ($num_results <300 && $num_results >0) 
        { //13
          echo"<h4>There are $num_results <i>Google search metadata</i> exact matches for <b>$show_all_google_data</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//14

    echo"<table class='basic' border='0' style='background-color:#cbdbd8'><tbody>
      <tr><td>IP Address:</td>                  <td>".$row['IP_address']."     <td></tr>
      <tr><td>Search Terms:</td>                  <td>".$row['search_terms']."     <td></tr>
      <tr><td>User Id:</td>                     <td>".$row['user_id']."        <td></tr>
      <tr><td>Full Name</td>                    <td>".$row['full_name']."      </td></tr>
      <tr><td>Username:</td>                    <td>".$row['user_name']."      </td></tr>
      <tr><td>Email Address:</td>               <td>".$row['email_address']."  <td></tr>
      <tr><td>Address:</td>                     <td>".$row['address']."        </td></tr>
      <tr><td>Employer:</td>                    <td>".$row['employer']."       </td></tr>
      <tr><td>Job Title:</td>                   <td>".$row['job_title']."      </td></tr>
      <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
      <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
      <tr><td>Date and Time:</td>               <td>".$row['date_time']."     </td></tr>
     </tbody></table><br>";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      
      }//16
}mysqli_free_result($result);

?>
 </div>
 <div class='right'>
  






   
  
        

  
   

</div></div>


    <?php //include('../scripts/footer.php');?>

    </body>
</html>