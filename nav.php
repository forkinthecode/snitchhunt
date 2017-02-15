   <?php
  if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   $team=$_POST['team_name'];
   $password=$_POST['password'];


  
    if ( $team=='' || $password=='' )
{





    echo"
<nav id='menu'>
        
    <nav id='menu'>
<table class='log-in' border='0px' id='log-in'>
<tr>
<td>
<form action='play.php' method='POST'> 
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' />
</td>
<td>
<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' />
</td>
<td>
<input class='menu-button' type='submit'  name='submit' value='Log in' id='submit' /></form>
</td>

</tr>
</table>



<table border='0px' class='main-menu'>
<tr>
<td>
<form action='registration.php' method='POST'> 
<input class='menu-button' type='submit'  name='register' value='Register' id='submit' /></form>
</td>
<td>
<form action='datasets.php' method='POST'> 
<input class='menu-button' type='submit'  name='Metadata' value='Metadata' id='submit' /></form>
</td>
<td>
<form action='article.php' method='POST'> 
<input class='menu-button' type='submit'  name='Article' value='Article' id='submit' /></form>
</td>
<td>
 <form action='index.php' method='POST'> 
 <input class='menu-button' type='submit'  name='Home' value='Home' id='submit' /></form>
 </td>

</tr>  
</table></nav>


      ";
}

}

?>

 <?php
  if ( !isset($_POST['team_name'] ) || !isset($_POST['password'] ))
{
   


  


    echo"
<nav id='menu'>
        
    <nav id='menu'>
<table class='log-in' border='0px' id='log-in'>
<tr>
<td>
<form action='play.php' method='POST'> 
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' />
</td>
<td>
<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' />
</td>
<td>
<input class='menu-button' type='submit'  name='submit' value='Log in' id='submit' /></form>
</td>

</tr>
</table>



<table border='0px' class='main-menu'>
<tr>
<td>
<form action='registration.php' method='POST'> 
<input class='menu-button' type='submit'  name='register' value='Register' id='submit' /></form>
</td>
<td>
<form action='datasets.php' method='POST'> 
<input class='menu-button' type='submit'  name='Metadata' value='Metadata' id='submit' /></form>
</td>
<td>
<form action='article.php' method='POST'> 
<input class='menu-button' type='submit'  name='Article' value='Article' id='submit' /></form>
</td>
<td>
 <form action='index.php' method='POST'> 
 <input class='menu-button' type='submit'  name='Home' value='Home' id='submit' /></form>
 </td>

</tr>  
</table></nav>


      ";
    
  
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
    
  

 echo"<nav id='menu'>
   <table class='main-menu'><tr>
   <td>
 <form action='index.php' target='_blank' method='POST'> 

  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
 <input class='menu-button' type='submit'  name='Home' value='Home' id='submit' /></form>
 </td>
<td>
<form action='article.php' target='_blank'  method='POST'> 

  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
<input class='menu-button' type='submit'  name='Article' value='Article' id='submit' /></form>
</td>
<td>
<form action='datasets.php' target='_blank' method='POST'> 
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
<input class='menu-button' type='submit'  name='Metadata' value='Metadata' id='submit' /></form>
</td>
<td>
 <form action='play.php'target='_blank'  method='POST'> 

 <input type='hidden' name='team_name' value='".$team."'>
 <input type='hidden' name='password' value='".$password."'>
 <input class='menu-button' type='submit'  name='Challenges' value='Play' id='submit' /></form>
 </td>
<td>
<form action='' method='POST'> 
<input type='hidden' name='logout' value='".$logout."'>
<input  class='menu-button' type='submit'  name='Logout' value='Logout' id='submit' /></form>
</td>
 </tr>
</table>
<!--
<table border='0px' class='data-menu'><tr>


 <td>
 <form action='google_metadata.php' target='_blank' method='POST'>
 <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'>
 <input type='hidden' name='password' value='".$password."'>
 <input class='menu-button' type='submit' name='submit' value='Google' id='submit' /></submit>  </form>
 </td>

<td>
   <form action='email_metadata.php' target='_blank' method='POST'>
    <input type='hidden' name='close' value='".$close."'>
    <input type='hidden' name='team_name' value='".$team."'>
    <input type='hidden' name='password' value='".$password."'>
    <input class='menu-button'  type='submit' name='submit' value='Email' id='submit' /></submit>  </form>
</td>

<td>
<form action='phone_metadata.php' target='_blank' method='POST'>
 <input type='hidden' name='close' value='".$close."'>
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
  <input class='menu-button'  type='submit' name='submit' value='Phone' id='submit' /></submit>  </form>
  </td>



<td>
   <form action='phone_subscribers.php' target='_blank' method='POST'>
   <input type='hidden' name='close' value='".$close."'>
   <input type='hidden' name='team_name' value='".$team."'>
   <input type='hidden' name='password' value='".$password."'>
   <input class='menu-button'  type='submit' name='submit' value='Subscriber' id='submit' /></submit>  </form>
</td>


<td>
  <form action='cross_search.php' target='_blank' method='POST'>
  <input type='hidden' name='search' value='cross_search'>
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
  <input class='menu-button' type='submit' name='submit' value='X Search' id='submit' /></submit>  </form>
</td>
-->
 


      </tr></table></nav>";
}
}
    }
?>
  
         

    

     