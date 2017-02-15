
<?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   $team=$_POST['team_name'];
   $password=$_POST['password'];
    
    if ( $team!='' && $password!='' )
{
  
   $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
   $result = mysqli_query($db, $query);
   @$num_results = mysqli_num_rows($result);
if ($num_results >0)
       {
echo"<br>
<h3> Search all fields in the <i>Google search</i> metadata:</h3><div class='searches' style=''>
        
      <p>   <table class='forms' border='0px'><tr><td>   <form action=''  method='POST'>
         
         <input type='hidden' name='team_name' value='".$team."'> 
         <input type='hidden' name='password' value='".$password."'>

           <input  type='text'  id='search_all_google' name='search_all_google' placeholder='Search string' />
              </td><td>

        
           <input class='searching'   type='submit' name='submit' value='' id='submit' /></form>
              </form></td></tr></table>
    </p>

</div>
          ";
     }

}
}
?>

<?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   $team=$_POST['team_name'];
   $password=$_POST['password'];
    
    if ( $team!='' && $password!='' )
{
  
   $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
   $result = mysqli_query($db, $query);
   @$num_results = mysqli_num_rows($result);
if ($num_results >0)
       {
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
";
$result = mysqli_query($db, $google );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
        {
        echo"<h3>There are no partial matches for the search criteria <b>$search_all_google</b></h3>";
        }//3
        
        elseif ($num_results >1000 )
        {//4
         echo"<h3>There are too many results ".number_format($num_results)." to display for the search criteria <i>".$search_all_google."</i>. 
         Maximum results displayed is 1000.</h3><h3> Try a different search string.</h3>";
         }//4
        elseif ($num_results >0 && $num_results <1000) 
        { //5

        echo"<h3>There are $num_results <i>google metadata</i> results for <b>".$search_all_google."</b></h3>
  
  <div class='expand'>";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic'  style=''><tbody>
      <tr><td width='175px'>IP Address:</td>    <td>".$row['IP_address']."     </td></tr>
      <tr><td>Search Terms:</td>                <td>".$row['search_terms']."   </td></tr>
      <tr><td>User Id:</td>                     <td>".$row['user_id']."        </td></tr>
      <tr><td>Full Name:</td>                   <td>".$row['full_name']."      </td></tr>
      <tr><td>Username:</td>                    <td>".$row['user_name']."      </td></tr>
      <tr><td>Email Address:</td>               <td>".$row['email_address']."  </td></tr>
      <tr><td>Address:</td>                     <td>".$row['address']."        </td></tr>
      <tr><td>Employer:</td>                    <td>".$row['employer']."       </td></tr>
      <tr><td>Job Title:</td>                   <td>".$row['job_title']."      </td></tr>
      <tr><td>Source TCP Port:</td>             <td>".$row['source_tcp_port']."</td></tr>
      <tr><td>User agent:</td>                  <td>".$row['user_agent']."     </td></tr>
      <tr><td>Date and Time:</td>               <td>".$row['date_time']."      </td></tr>
  </tbody></table><br> ";
        }//6
        echo"</div><h3>Mouse/Scroll for more</h3>";
 }//5
              
 }
 }
}   
}mysqli_free_result($result);

?>