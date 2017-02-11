<?php
	
require'header.php';
?>


<h2>Phone subscriber metadata</h2>

<?php
if( !isset($_POST['search_all_subscribers']) )
{

    

  $subscriber = "SELECT * from phone_subscriber where id='2' ";
  $result = mysqli_query($db, $subscriber );
  // echo"<h2>Example <i>phone subscriber</i> metadata</h2>";

 while ($row = $result->fetch_assoc()) 
    {

echo"<div class='homer'><table class='basic' border='0' style=''><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table></div>";


}
}

?>

<?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{//1
   $team=$_POST['team_name'];
   $password=$_POST['password'];
    
    if ( $team!='' && $password!='' )
{//2
  
            $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
            $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
         if ($num_results >0)
  {//3
echo"<br><h2> Search all fields in the <i>phone subscriber</i> metadata:</h2>
<div class='searches' style=''>
       <table class='forms'><tr><td>   
            <form action='phone_subscribers.php'  method='POST'>
             <input type='hidden' name='close' value='".$close."'>
             <input type='hidden' name='team_name' value='".$team."'> 
             <input type='hidden' name='password' value='".$password."'>

            <input type='text'  id='search_all_subscribers' name='search_all_subscribers' placeholder='Search string' />
         </td><td> 
        <input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
</div><br>
          ";
     }
   }
 }
 ?>
 <?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ) && isset($_POST['search_all_subscribers']))
{//1
   $team=$_POST['team_name'];
   $password=$_POST['password'];
   $search_all_subscribers= $_POST['search_all_subscribers'];
    
    if ( $team!='' && $password!='' )
{//2
  
            $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
            $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
         if ($num_results >0)
  {//3
 //   echo"$team $password: $search_all_subscribers<br>";


  

$search_all_subscribers= mysqli_real_escape_string ( $db ,trim($_POST['search_all_subscribers']) );
$subscribers = "SELECT * from phone_subscriber where   
MATCH(subscriber_number)       AGAINST('$search_all_subscribers') 
|| MATCH(Date_Time)               AGAINST('$search_all_subscribers') 
|| MATCH(subscriber_imei)         AGAINST('$search_all_subscribers')  
|| MATCH(subscriber_address)      AGAINST('$search_all_subscribers') 
|| MATCH(subscriber_email)        AGAINST('$search_all_subscribers')  
|| MATCH(subscriber_name)         AGAINST('$search_all_subscribers')    ";
  $result = mysqli_query($db, $subscribers );
@$num_results = mysqli_num_rows($result);
//echo"$num_results";
         if ($num_results <1)
        {//4
       echo"<h2>There are no exact matches for the search criteria <b>$search_all_subscribers</b>- 
       falling back to partial matches</h2>";

   
//$search_all_subscribers= mysqli_real_escape_string ( $db ,trim($_POST['search_all_subscribers']) );
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
        {//5
        echo"<h2>There are no results for the search criteria <b>$search_all_subscribers</b></h2>";
        }//5
       }
        elseif ($num_results >0) 
        { //6
        echo"<h2>There are $num_results <i>phone subscriber</i> results for
         <b>$search_all_subscribers</b></h2>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//7
  echo"<table class='basic' border='0' style=''><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table><br>";
        }//7
        echo"</div><h4>Mouse over/scroll for more results.</h4>";
    
              
 }//4



}//3
}//2
}mysqli_free_result($result);

?>

<?php // searches all fields in phone_subscriber data for a  string
/*
if( !isset($_POST['search_all_subscribers']) && isset($_POST['show_all_subscribers']))
{//1
  
$show_all_subscribers= mysqli_real_escape_string ( $db ,trim($_POST['show_all_subscribers']) );

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
       echo"<h2>There are no exact matches for the search criteria <b>$show_all_subscribers</b>- 
       falling back to inexact matches</h2>";

     $show_all_subscribers= mysqli_real_escape_string ( $db ,trim($_POST['show_all_subscribers']) );
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
        echo"<h2>There are $num_results <i>phone subscriber</i> results for
         <b>$show_all_subscribers</b></h2>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
               {//4
          echo"<table class='basic' border='0' style=''><tbody>
          <tr><td>Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."<td></tr>
          <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
          <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."<td></tr>
          <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
          <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
          <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
          </tbody></table><br>";
                }//4
        echo"</div><h4>Mouse over/scroll for more results.</h4>";
}//2
         }//3
}mysqli_free_result($result);//1
*/
?>

















   
  
           

         
 </div>
 <div class='right'>
 
<?php
//include'score.php';

include'challenges.php';
?>



</div></div>
<div class='clear'></div>


    <?php include'footer.php';?>

    </body>
</html>
