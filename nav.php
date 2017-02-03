    

<nav id="menu">

           
	        <input type="checkbox" id="toggle-nav"/>
	        <label id="toggle-nav-label" for="toggle-nav"><i class="icon-reorder"></i><img src='list.png'></img></label>
	      
    
	        <div class="box">
	      	
	         
        
	       
	        

<?php



echo"
 <ul>

";
if ( !isset($_POST['team_name'] ) || !isset($_POST['password'] ))
{
$team=  $_POST['team_name'];
echo"
<li>
<form action='play.php' method='POST'>
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' /></li><li>
<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' /></li><li>
<input  type='submit'  name='submit' value='Log in' id='submit' /></form></li><li><form action='registration.php' method='POST'> 
<input type='submit' class='user' name='register' value='Play' id='submit' /></form></li>
";
}echo"<li><form action='index.php' method='POST'> 
<input type='submit' class='user' name='Logout' value='Logout' id='submit' /></form></li>
<li>
 <form action='index.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>
 <input type='submit' class='user' name='Home' value='Home' id='submit' /></form></li><li>

 <form action='article.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='submit' class='user' name='Article' value='Article' id='submit' /></form></li><li>
<form action='datasets.php' method='POST'> 
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>

<input type='submit' class='user' name='Metadata' value='Metadata' id='submit' /></form></li>

<li><form action='phone_metadata.php' method='POST'>
            <input type='hidden' name='team_name' value='".$team."'>
            <input type='hidden' name='team_name' value='".$password."'>
            <input  type='submit' name='submit' value='Phone' id='submit' /></submit>  </form></li>

<li><form action='email_metadata.php' method='POST'>
           <input type='hidden' name='team_name' value='".$team."'>
            <input type='hidden' name='team_name' value='".$password."'>
            <input  type='submit' name='submit' value='Email' id='submit' /></submit>  </form></li>

            <li><form action='phone_subscribers.php' method='POST'>

            <input type='hidden' name='team_name' value='".$team."'>
            <input type='hidden' name='team_name' value='".$password."'>
            <input  type='submit' name='submit' value='Subscriber' id='submit' /></submit>  </form></li>

           </ul> <li><form action='google_metadata.php' method='POST'>
           <input type='hidden' name='team_name' value='".$team."'>
            <input type='hidden' name='team_name' value='".$password."'>
            <input  type='submit' name='submit' value='Google' id='submit' /></submit>  </form></li>

<li><form action='cross_search.php' method='POST'>
           <input type='hidden' name='team_name' value='".$team."'>
            <input type='hidden' name='team_name' value='".$password."'>
            <input  type='submit' name='submit' value='X Search' id='submit' /></submit>  </form></li>
  </ul>
	          </div>
			 </nav>";
		 ?>
		 