<?php
  
require'header.php';
?>


          <h2>Google search metadata</h2>

          <?php
if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
$team=  $_POST['team_name'];
$password=  $_POST['password'];
echo"<br>
<h2> Search all fields in the <i>Google search</i> metadata:</h2><div class='searches' style='background-color:#cbdbd8'>
        
         <table class='forms'><tr><td>   <form action=''  method='POST'>
          <input type='hidden' name='close' value='".$close."'>
          <input type='hidden' name='close' value='".$close."'>
         <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

           <input type='text'  id='search_all_google' name='search_all_google' placeholder='Search string' />
              </td><td>

        
             <input type='submit' name='submit' placeholder='Search' id='submit' />
              </form></td></tr></table>
    

</div>
          ";
     }
if(!isset($_POST['search_all_google']) && !isset($_POST['show_all_google_data'])  )
{
  

$google = "SELECT * from google_metadata where id='4' ";
$result = mysqli_query($db, $google );
  // echo"<h3>Example:</h3>";
 while ($row = $result->fetch_assoc()) 
    {

echo"<table class='basic' border='0' style=''><tbody>
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

?>

<?php
if(isset($_POST['search_all_google'])  )
 {//1
  
$data=trim($_POST['search_all_google']);
$search_all_google= mysqli_real_escape_string ( $db , $data );

  
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
LIMIT 1000
";
$result = mysqli_query($db, $google );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
   {//2
       echo"<h5>There are no exact matches for the search criteria <b>$search_all_google</b></h5>";

    }
       /* elseif ($num_results >300 )
        {//4
         echo"<h5>There are too many exact matches (".number_format($num_results).") to display for the search criteria <b>$search_all_google</b>. 
         Maximum results displayed is 300.</h5>
         <table class='forms'><tr><td>   <form action=''  method='POST'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>
<input type='hidden' name='search_all_google' value='".$_POST['search_all_google']."'> 
              </td><td>

        
             <input type='submit' name='submit' placeholder='Search' id='submit' /> </td></tr></table>
         <h5>Click search to override limit and display all ".number_format($num_results).".</h5> ";
         }//4*/
        elseif ( $num_results >0) 
        { //5
        echo"<h2>There are $num_results exact matches in <i>Google search metadata</i> for <b>$search_all_google</b></h2>
        <h5>Results are limited to 1,000. Will display first 1,000 results.</h5>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
      echo"<table class='basic' border='0' style=''><tbody>
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
        echo"</div>Mouse over/scroll for more results.<br>";
    }
             
      
}mysqli_free_result($result);

?>


<?php

/*
if(isset($_POST['search_all_google'])  )
 {//1
   echo"<br><div style='background:#eee; padding:10px'>";
 
$data=trim($_POST['search_all_google']);
$search_all_google= mysqli_real_escape_string ( $db , $data );

$search_all_google=trim($_POST['search_all_google']);
      $google = "SELECT * FROM `google_metadata` where 
MATCH(IP_address)   AGAINST('$search_all_google' )
|| MATCH(user_id)   AGAINST('$search_all_google') 
|| MATCH(search_terms)   AGAINST('c$search_all_google') 
|| MATCH(user_name)   AGAINST('$search_all_google')  
|| MATCH(full_name)   AGAINST('c$search_all_google')
|| MATCH(address)   AGAINST('$search_all_google')
|| MATCH(email_address)   AGAINST('$search_all_google')
|| MATCH(date_time)   AGAINST('$search_all_google')
|| MATCH(employer)   AGAINST('$search_all_google')
|| MATCH(job_title )   AGAINST('$search_all_google')
|| MATCH(address)   AGAINST('$search_all_google')
|| MATCH(source_tcp_port)   AGAINST('c$search_all_google')
|| MATCH(user_agent)   AGAINST('$search_all_google')  
|| MATCH(date_time)   AGAINST('$search_all_google')

      ";
      $result = mysqli_query($db, $google );
      @$num_results = mysqli_num_rows($result);
      if ($num_results <1)
        {//3
        echo"<h5>There are no results for the search criteria <b>$search_all_google</b></h5>";
        }//3
        
        elseif ($num_results >300)
        {//4
         echo"<h5>There are too many results (".number_format($num_results).") to display for the search criteria <b>$search_all_google</b>. 
         Maximum results displayed is 300.</h5><h5> 
         <a href='google_metadata.php?show_all_google_data=$search_all_google'>Click here</a> 
         to override limit and display all ".number_format($num_results).".</h5> ";
         }//4
        elseif ($num_results <300 && $num_results >0) 
        { //5
        echo"<h2>There are $num_results partial matches in <i>Google search metadata</i> results for <b>$search_all_google</b></h2>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
      echo"<table class='basic' border='0' style=''><tbody>
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
              


  
 elseif ($num_results >300)
 {//11
  echo"<h5>There are too many inexact matches (".number_format($num_results).") to display for the search criteria <b>$search_all_google</b>. 
  Maximum results displayed is 300.</h5><h5> <a href='google_metadata.php?show_all_google_data=$search_all_google'>Click here</a> to override limit and display all ".number_format($num_results).".</h5> ";
 }//11
 elseif ($num_results <300 && $num_results >0) 
        { //12
          echo"<h2>There are $num_results <i>Google search metadata</i> exact matches for <b>$search_all_google</b></h2>
         <div class='expand'>";
 while ($row = $result->fetch_assoc()) 

    {//13

    echo"<table class='basic' border='0' style=''><tbody>
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

      }echo"</div>";
      
}mysqli_free_result($result);
*/
?>

<?php/*
if(isset($_POST['show_all_google_data'])  && !isset($_POST['search_all_google'])  )

 {//1

$data=trim($_POST['show_all_google_data']);
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
       echo"<h5>There are no exact matches for the search criteria <b>$show_all_google_data</b>- falling back to inexact matches</h5>";

      $show_all_google_data=trim($_POST['show_all_google_data']);
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
        echo"<h5>There are no results for the search criteria <b>$show_all_google_data</b></h5>";
        }//3
        
       
        else
        { //5
        echo"<h2>There are (".number_format($num_results).") <i>Google search metadata</i> results for <b>$show_all_google_data</b></h2>
        <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
      echo"<table class='basic' border='0' style=''><tbody>
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
  echo"<h5>There are (".number_format($num_results).") results for <b>$show_all_google_data</b>. </h5> ";

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
*/
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
