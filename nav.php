
	         
    
  <nav id="menu">
  
        
          <input type="checkbox" id="toggle-nav"/>
          <label id="toggle-nav-label" for="toggle-nav"><i class="icon-reorder"></i><img src='searching.png'/></label>
        
          <div class="box">
          <?php
{
$team=  $_POST['team_name'];
$password=  $_POST['password'];
$close=$_POST['close'];
 echo"
            <ul>
<li >
 <form action='play.php' method='POST'> <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team' value='".$team."'>
 <input type='hidden' name='password' value='".$password."'>
 <input type='submit' class='user' name='Challenges' value='Challenges' id='submit' /></form></li>
<li><form action='phone_metadata.php' method='POST'>
 <input type='hidden' name='close' value='".$close."'>
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='passsword' value='".$password."'>
  <input  type='submit' name='submit' value='Phone' id='submit' /></submit>  </form></li>

<li>
   <form action='email_metadata.php' method='POST'>
    <input type='hidden' name='close' value='".$close."'>
    <input type='hidden' name='team_name' value='".$team."'>
    <input type='hidden' name='password' value='".$password."'>
    <input  type='submit' name='submit' value='Email' id='submit' /></submit>  </form>
</li>

<li>
   <form action='phone_subscribers.php' method='POST'>
   <input type='hidden' name='close' value='".$close."'>
   <input type='hidden' name='team_name' value='".$team."'>
   <input type='hidden' name='passsword' value='".$password."'>
   <input  type='submit' name='submit' value='Subscriber' id='submit' /></submit>  </form>
</li>
 

 <li>
 <form action='google_metadata.php' method='POST'>
 <input type='hidden' name='close' value='".$close."'>
 <input type='hidden' name='team_name' value='".$team."'>
 <input type='hidden' name='password' value='".$password."'>
 <input  type='submit' name='submit' value='Google' id='submit' /></submit>  </form>
 </li>

<li>
  <form action='cross_search.php' method='POST'>
  <input type='hidden' name='close' value='".$close."'>
  <input type='hidden' name='team_name' value='".$team."'>
  <input type='hidden' name='password' value='".$password."'>
  <input  type='submit' name='submit' value='X Search' id='submit' /></submit>  </form>
</li>
      </ul>
            </div>
        
          </nav> 
      
      <ul class='horizontal'>
       
<li class='horizontal'>
<form action='' method='POST'> <input type='hidden' name='close' value='".$close."'>
<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' />
</li>

<li class='horizontal'><input type='hidden' name='password' value='".$password."'>
<input class='sign-in' type='password'  id='password' name='password' placeholder='Password' />
</li>

<li class='horizontal'>
<input  type='submit'  name='submit' value='Log in' id='submit' /></form>
</li>

<li class='horizontal'>
<form action='' method='POST'> 
<input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='Logout' value='Logout' id='submit' /></form>
</li>

<li class='horizontal'><form action='registration.php' method='POST'> 
 <input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='register' value='Register' id='submit' /></form>
</li>
<li class='horizontal'>
<form action='datasets.php' method='POST'> 
<input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='Metadata' value='Metadata' id='submit' /></form>
</li>
<li class='horizontal'>
<form action='article.php' method='POST'>  <input type='hidden' name='close' value='".$close."'>
<input type='submit' class='user' name='Article' value='Article' id='submit' /></form></li>

<li class='horizontal'>
 <form action='index.php' method='POST'> <input type='hidden' name='close' value='".$close."'>
 <input type='submit' class='user' name='Home' value='Home' id='submit' /></form></li>



      </ul>";

    }
    ?>
	       
	        

		

		 