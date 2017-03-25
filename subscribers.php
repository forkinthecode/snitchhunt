
<?php
//  if ( isset($_GET['team_name'] ) && isset($_GET['password'] ))
{//1
 //  $team=$_GET['team_name'];
//   $password=$_GET['password'];
    
  //  if ( $team!='' && $password!='' )
{//2
  
     /*       $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
            $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
         if ($num_results >0)*/
  {//3
echo"
<div class='searches' style=''>
       <table class='forms'><tr><td>   
            <form action=''  method='GET'>

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
  if (  isset($_GET['search_all_subscribers'])   && $_GET['search_all_subscribers']!='')
{//1
  // $team=$_GET['team_name'];
   //$password=$_GET['password'];
   //$search_all_subscribers= $_GET['search_all_subscribers'];
    
   // if ( $team!='' && $password!='' )
{//2
  
       /*     $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
            $result = mysqli_query($db, $query);
           @$num_results = mysqli_num_rows($result);
         if ($num_results >0)*/
  {//3
   // echo"$team $password: $search_all_subscribers<br>";


  

$search_all_subscribers= mysqli_real_escape_string ( $db ,trim($_GET['search_all_subscribers']) );
$subscribers = "SELECT * from phone_subscriber where   
MATCH(subscriber_number)          AGAINST('$search_all_subscribers' IN BOOLEAN MODE) 
|| MATCH(Date_Time)               AGAINST('$search_all_subscribers' IN BOOLEAN MODE) 
|| MATCH(subscriber_imei)         AGAINST('$search_all_subscribers' IN BOOLEAN MODE)  
|| MATCH(subscriber_address)      AGAINST('$search_all_subscribers' IN BOOLEAN MODE) 
|| MATCH(subscriber_email)        AGAINST('$search_all_subscribers' IN BOOLEAN MODE)  
|| MATCH(subscriber_name)         AGAINST('$search_all_subscribers' IN BOOLEAN MODE)    ";
  $result = mysqli_query($db, $subscribers );
@$num_results = mysqli_num_rows($result);

         if ($num_results <1)
        {//4
       echo"<h3>There are no exact matches for the search criteria <b>$search_all_subscribers</b>- 
       falling back to partial matches</h3>";

   
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
        echo"<h3>There are no results for the search criteria <b>$search_all_subscribers</b></h3>";
        }//5
       }
          elseif ($num_results >1000 )
        {//4
         echo"<h3>There are too many results (".number_format($num_results).") to display for the search criteria <i>".$search_all_subscribers."</i>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string</h3>";
         }//4
        elseif ($num_results >0 && $num_results <1000) 
        { //6
        echo"<h3>There are ".number_format($num_results)." <i>phone subscriber</i> results for
         <b>$search_all_subscribers</b></h3>
        
  ";
        while ($row = $result->fetch_assoc()) 
       {//7
  echo"<table class='basic' border='0' style=''><tbody>
  <tr><td >Subscriber IMEI:</td>      <td>".$row['subscriber_imei']."</td></tr>
  <tr><td>Subscriber Address:</td>    <td>".$row['subscriber_address']."</td></tr>
  <tr><td>Subscriber Email:</td>      <td>".$row['subscriber_email']."</td></tr>
  <tr><td>Subscriber Name:</td>       <td>".$row['subscriber_name']."</td></tr>
  <tr><td>Subscriber Number</td>      <td>".$row['subscriber_number']."</td></tr>
  <tr><td>Date and Time:</td>         <td>".$row['Date_Time']."     </td></tr>
  </tbody></table><br>";
        }//7
        //echo"</div><h3>Mouse/Scroll for more</h3>";
    
    

}



}//3
}//2
}mysqli_free_result($result);

?>

