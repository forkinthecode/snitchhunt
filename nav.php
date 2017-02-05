    


<!--
  <div class='icons'><img src='tdst.png'></img></icons>*-->
	      
    <h1>SnitchHunt</h1>
	        <div class='box'>
	      	
	         
        
	       
	        

<?php

$team=  $_POST['team_name'];
$password=  $_POST['password'];

 


echo" <table class='navigation'><tr>
<td>
<form action='play.php' method='POST'> <input type='hidden' name='close' value='".$close."'>
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' /></td>
<td>
<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' /></td>
<td>
<input  type='submit'  name='submit' value='Log in' id='submit' /></form></td>
<td>
<form action='index.php' method='POST'> 
<input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='Logout' value='Logout' id='submit' /></form></td>

<td><form action='registration.php' method='POST'> 
<input type='submit' class='user' name='register' value='Play' id='submit' /></form></td>
<td>
<form action='datasets.php' method='POST'> 
<input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='Metadata' value='Metadata' id='submit' /></form></td>
";


echo"
<td>
<form action='article.php' method='POST'>  <input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='Article' value='Article' id='submit' /></form></td>

<td>
 <form action='index.php' method='POST'> <input type='hidden' name='close' value='".$close."'>
 <input type='submit' class='user' name='Home' value='Home' id='submit' /></form></td></tr><tr>
";

echo"
<td> 
<form action='play.php' method='POST'> 
<input type='hidden' name='close' value='".$close."'>
<input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>
<input type='submit' class='user' name='Challenges' value='Challenges' id='submit' /></form></td>

<td>
 <form action='index.php' method='POST'> 
 <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>
 <input type='submit' class='user' name='Home' value='Home' id='submit' /></form></td>
 
<td>
 <form action='article.php' method='POST'> 
 <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'> <input type='hidden' name='password' value='".$password."'>
 <input type='submit' class='user' name='Article' value='Article' id='submit' /></form></td>
";


echo"


<td><form action='phone_metadata.php' method='POST'>
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='passsword' value='".$password."'>
  <input  type='submit' name='submit' value='Phone' id='submit' /></submit>  </form></td>

<td><form action='email_metadata.php' method='POST'>
    <input type='hidden' name='close' value='".$close."'>
    <input type='hidden' name='team_name' value='".$team."'>
    <input type='hidden' name='password' value='".$password."'>
    <input  type='submit' name='submit' value='Email' id='submit' /></submit>  </form></td>

<td>
<form action='phone_subscribers.php' method='POST'>
  <input type='hidden' name='close' value='".$close."'>
   <input type='hidden' name='team_name' value='".$team."'>
    <input type='hidden' name='passsword' value='".$password."'>
    <input  type='submit' name='submit' value='Subscriber' id='submit' /></submit>  </form></td>
 

 <td>
 <form action='google_metadata.php' method='POST'>
 <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'>
 <input type='hidden' name='password' value='".$password."'>
 <input  type='submit' name='submit' value='Google' id='submit' /></submit>  </form></td>

<td>
<form action='cross_search.php' method='POST'>
  <input type='hidden' name='close' value='".$close."'>
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
  <input  type='submit' name='submit' value='X Search' id='submit' /></submit>  </form></td>
  </tr></table>

	          </div>
			";
		 ?>
		 