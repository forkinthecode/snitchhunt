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
echo"<br> <h4> Search all fields in the <i>email</i> metadata:</h4><div class='searches' style='background-color:#f29f91'>
       
            <form action='email_metadata.php'  method='GET'>

           <input type='text'  id='search_all_email' name='search_all_email' placeholder='Search string' />
              

        
             <input type='submit' name='submit' placeholder='Search' id='submit' />
              </form>
    

</div>
          ";
     }
if(!isset($_GET['search_all_email']) && !isset($_GET['show_all_email_data'])  )
 {//1



$email = "SELECT * from email_metadata where id='1' ";
$result = mysqli_query($db, $email );
   echo"<h4>Example <i>email</i> metadata</h4>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#f29f91'><tbody>
  <tr><td >IP Address:</td><td> ".$row['source_IP_address']."<td></tr>
  <tr><td>Sender's email:</td><td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient's email:</td><td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td><td> ".$row['email_subject_line']."<td><td></td></tr>
  <tr><td>Port</td><td>Port:".$row['port']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>


 </tbody></table><br>";

}

}
if(isset($_GET['search_all_email'])  )

{

$search_all_email= mysqli_real_escape_string ( $db ,trim($_GET['search_all_email']) );

$email = "SELECT * FROM `email_metadata` where 
   source_IP_address        ='$search_all_email' 
|| size                     ='$search_all_email' 
|| sender_email_address     ='$search_all_email'
|| recipient_email_address  ='$search_all_email'
|| email_subject_line       ='$search_all_email'
|| date_time                ='$search_all_email' 
|| port                     ='$search_all_email' ";
$result = mysqli_query($db, $email );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$search_all_email</b>- falling back to inexact matches</p>";

      
      $search_all_email= mysqli_real_escape_string ( $db ,trim($_GET['search_all_email']) );
      $email = "SELECT * FROM `email_metadata` where 
             source_IP_address         LIKE'%$search_all_email%' 
          || size                      LIKE'%$search_all_email%' 
          || sender_email_address      LIKE'%$search_all_email%' 
          || recipient_email_address   LIKE'%$search_all_email%' 
          || email_subject_line        LIKE'%$search_all_email%' 
          || date_time                 LIKE'%$search_all_email%' 
          || port                      LIKE'%$search_all_email%'  ";
         $result = mysqli_query($db, $email);
         @$num_results = mysqli_num_rows($result);
         if ($num_results <1)
        {//3
        echo"<p>There are no results for the search criteria <b>$search_all_email</b></p>";
        }//3
        
        elseif ($num_results >300)
        {//4
         echo"<p>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_email</b>. 
         Maximum results displayed is 300.</p><p> 
         <a href='email_metadata.php?show_all_email_data=$show_all_email'>Click here</a>
          to override limit and display all ".number_format($num_results).".</p> ";
         }//4
        elseif ($num_results <300 && $num_results >0) 
        { //5
        echo"<h4>There are $num_results <i>email metadata</i> results for <b>$search_all_email</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#f29f91;'><tbody>
  <tr><td >IP Address:</td>        <td>".$row['source_IP_address']."<td><td></td></tr>
  <tr><td>Sender's email:</td>     <td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient's email:</td>  <td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td> <td>".$row['email_subject_line']."<td>
  <tr><td>Port:</td>               <td>".$row['port']."</td></tr>
  <tr><td>Date and Time:</td>      <td>".$row['date_time']."</td></tr>
 </tbody></table><br> ";
        }//6
        echo"</div>Mouse over/scroll for more results.";
      }//5
              
 }//2

  
 elseif ($num_results >300)
 {//11
  echo"<p>There are too many exact matches (".number_format($num_results).") to 
  display for the search criteria <b>$search_all_email</b>. 
  Maximum results displayed is 300.</p><p> 
  <a href='email_metadata.php?show_all_email_data=$search_all_email'>Click here</a> 
  to override limit and display all ".number_format($num_results).".</p> ";
 }//12
 elseif ($num_results <300 && $num_results >0) 
        { //13
          echo"<h4>There are $num_results <i>email metadata</i> exact matches for <b>$search_all_email</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//14

   echo"<table class='basic' border='0' style='background-color:#f29f91;'><tbody>
  <tr><td >IP Address:</td><td> ".$row['source_IP_address']."<td><td></td></tr>
  <tr><td>Sender's email:</td><td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient's email:</td><td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td><td> ".$row['email_subject_line']."<td>
  <tr><td>Port:</td><td> ".$row['port']."</td></tr>
  <tr><td>Date and Time:</td><td> ".$row['date_time']."</td></tr>
 </tbody></table><br> ";

    }//15 
   echo"</div>Mouse over/scroll for more results.";

      
      }//16
}mysqli_free_result($result);

?>

<?php



if(isset($_GET['show_all_email_data'])  )

{

$show_all_email_data= mysqli_real_escape_string ( $db ,trim($_GET['search_all_email_data']) );

$email = "SELECT * FROM `email_metadata` where 
   source_IP_address        ='$show_all_email_data' 
|| size                     ='$show_all_email_data' 
|| sender_email_address     ='$show_all_email_data'
|| recipient_email_address  ='$show_all_email_data'
|| email_subject_line       ='$show_all_email_data'
|| date_time                ='$show_all_email_data' 
|| port                     ='$show_all_email_data' ";
$result = mysqli_query($db, $email );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$show_all_email_data</b>- 
       falling back to inexact matches</p>";

      $show_all_email_data=trim($_GET['show_all_email_data']);
      $email = "SELECT * FROM `email_metadata` where 
             source_IP_address         LIKE'%$show_all_email_data%' 
          || size                      LIKE'%$show_all_email_data%' 
          || sender_email_address      LIKE'%$show_all_email_data%' 
          || recipient_email_address   LIKE'%$show_all_email_data%' 
          || email_subject_line        LIKE'%$show_all_email_data%' 
          || date_time                 LIKE'%$show_all_email_data%' 
          || port                      LIKE'%$show_all_email_data%'  ";
         $result = mysqli_query($db, $email);
         @$num_results = mysqli_num_rows($result);
        
        
        
        
        if ($num_results >300) 
        { //5
        echo"<h4>There are $num_results <i>email metadata</i> results for <b>$show_all_email_data</b></h4>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#f29f91;'><tbody>
  <tr><td >IP Address:</td>        <td>".$row['source_IP_address']."<td><td></td></tr>
  <tr><td>Sender's email:</td>     <td>".$row['sender_email_address']."</td></tr>
  <tr><td>Recipient's email:</td>  <td>".$row['recipient_email_address']."</td></tr>
  <tr><td>Email subject line:</td> <td>".$row['email_subject_line']."<td>
  <tr><td>Port:</td>               <td>".$row['port']."</td></tr>
  <tr><td>Date and Time:</td>      <td>".$row['date_time']."</td></tr>
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


    <?php //include('../scripts/footer.php');?>

    </body>
</html>