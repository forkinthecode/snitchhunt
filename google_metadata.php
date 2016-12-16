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
echo"<br><h4> Search all fields in the <i>Google search</i> metadata:</h4><div class='searches' style='background-color:#cbdbd8'>
        
            <form action=''  method='GET'>

           <input type='text'  id='search_all_google' name='search_all_google' placeholder='Search string' />
              

        
             <input type='submit' name='submit' placeholder='Search' id='submit' />
              </form>
    

</div>
          ";
     }
if(!isset($_GET['search_all_google']) && !isset($_GET['show_all_google_data'])  )
{
  

$google = "SELECT * from google_metadata where id='4' ";
$result = mysqli_query($db, $google );
   echo"<h4>Example <i>Google</i> metadata</h4>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style='background-color:#cbdbd8'><tbody>
  <tr><td >IP Address:</td>        <td>".$row['IP_address']."    <td></tr>
  <tr><td >User Id:</td>           <td>".$row['user_id']."       <td></tr>
  <tr><td>Full Name</td>                  <td>".$row['full_name']."</td></tr>
  <tr><td>Username:</td>               <td>".$row['user_name']."</td></tr>
  <tr><td>Email Address:</td>              <td>".$row['email_address']."    <td></tr>
  <tr><td>Address:</td>                     <td>".$row['address']."         </td></tr>
  <tr><td>Employer:</td>                    <td>".$row['employer']."        </td></tr>
  <tr><td>Job Title:</td>                   <td>".$row['job_title']."       </td></tr>
  <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
  <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
  <tr><td>Date and Time:</td>                   <td> ".$row['date_time']."     </td></tr>
 </tbody></table><br>";
}
}
if(isset($_GET['search_all_google'])  )
 {//1
  
$data=trim($_GET['search_all_google']);
$search_all_google= mysqli_real_escape_string ( $db , $data );

  
$google = "SELECT * FROM `google_metadata` where 
IP_address      ='$search_all_google' 
|| user_id      ='$search_all_google' 
|| search_terms     ='$search_all_google' 
|| user_name     ='$search_all_google'  
|| full_name   ='$search_all_google'  
|| address      ='$search_all_google' 
|| email_address ='$search_all_google' 
|| date_time   ='$search_all_google' 
|| employer     ='$search_all_google' 
|| job_title    ='$search_all_google' 
|| address      ='$search_all_google'  
|| source_tcp_port ='$search_all_google' 
|| user_agent   ='$search_all_google'  
|| date_time    ='$search_all_google' 

";
$result = mysqli_query($db, $google );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no exact matches for the search criteria <b>$search_all_google</b>- 
       falling back to inexact matches</p>";

      $search_all_google=trim($_GET['search_all_google']);
      $google = "SELECT * FROM `google_metadata` where 
      IP_address      LIKE'%$search_all_google%' 
      || user_id      LIKE'%$search_all_google%' 
      || search_terms     LIKE'%$search_all_google%' 
      || user_name     LIKE'%$search_all_google%' 
      || full_name    LIKE'%$search_all_google%' 
      || address      LIKE'%$search_all_google%' 
      || email_address LIKE'%$search_all_google%' 
      || date_time   LIKE'%$search_all_google%' 
      || employer     LIKE'%$search_all_google%' 
      || job_title    LIKE'%$search_all_google%' 
      || address      LIKE'%$search_all_google%' 
      || source_tcp_port LIKE'%$search_all_google%' 
      || user_agent   LIKE'%$search_all_google%' 
      || date_time    LIKE'%$search_all_google%' 

      ";
      $result = mysqli_query($db, $google );
      @$num_results = mysqli_num_rows($result);
      if ($num_results <1)
        {//3
        echo"<p>There are no results for the search criteria <b>$search_all_google</b></p>";
        }//3
        
        elseif ($num_results >300)
        {//4
         echo"<p>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_google</b>. 
         Maximum results displayed is 300.</p><p> 
         <a href='google_metadata.php?show_all_google_data=$search_all_google'>Click here</a> 
         to override limit and display all ".number_format($num_results).".</p> ";
         }//4
        elseif ($num_results <300 && $num_results >0) 
        { //5
        echo"<h4>There are $num_results <i>Google search metadata</i> results for <b>$search_all_google</b></h4>
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
  echo"<p>There are too many exact matches (".number_format($num_results).") to display for the search criteria <b>$search_all_google</b>. 
  Maximum results displayed is 300.</p><p> <a href='google_metadata.php?show_all_google_data=$search_all_google'>Click here</a> to override limit and display all ".number_format($num_results).".</p> ";
 }//11
 elseif ($num_results <300 && $num_results >0) 
        { //12
          echo"<h4>There are $num_results <i>Google search metadata</i> exact matches for <b>$search_all_google</b></h4>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//13

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

    }//13
   echo"</div>Mouse over/scroll for more results.";

      
      }//12
}mysqli_free_result($result);

?>

<?php
if(isset($_GET['show_all_google_data'])  && !isset($_GET['search_all_google'])  )

 {//1
 
$data=trim($_GET['show_all_google_data']);
$show_all_google_data= mysqli_real_escape_string ( $db , $data );

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
  echo"<p>There are (".number_format($num_results).") results for <b>$show_all_google_data</b>. </p> ";

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
