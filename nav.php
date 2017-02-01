<h3>
	<nav id="menu">
  
        
	        <input type="checkbox" id="toggle-nav"/>
	        <label id="toggle-nav-label" for="toggle-nav"><i class="icon-reorder"></i>Datasets</label>
        
	        <div class="box">
	      	
	          <ul>
	          	<?php
	          	if ( !isset($_POST['team_name'] ) )
{
echo"
	            <li><a href='phone_metadata.php' >Phone</a></li>
				<li><a href='phone_subscribers.php' >Subscriber</a></li>
				<li><a href='email_metadata.php' >Email</a></li>
				<li><a href='google_metadata.php' >Google</a></li>
	            <li><a href='cross_search.php'>Cross Search</a></li> 
	            ";
	        }

 elseif ( isset($_POST['team_name'] ) )
{

	$data=$_POST['team_name'];
$team_name=mysqli_real_escape_string ( $db , $data );
//echo"$team_name ".$_POST['password']."";
  echo"<li><form action='phone_metadata.php' method='POST'>
            <input type='hidden' name='team_name' value='".$team_name."'>
            <input  type='submit' name='submit' value='Phone' id='submit' /></submit>  </form></li>

<li><form action='email_metadata.php' method='POST'>
            <input type='hidden' name='team_name' value='".$team_name."'>
            <input  type='submit' name='submit' value='Email' id='submit' /></submit>  </form></li>

            <li><form action='phone_subscribers.php' method='POST'>

            <input type='hidden' name='team_name' value='".$team_name."'>
            <input  type='submit' name='submit' value='Subscriber' id='submit' /></submit>  </form></li>

            <li><form action='google_metadata.php' method='POST'>
            <input type='hidden' name='team_name' value='".$team_name."'>
            <input  type='submit' name='submit' value='Google' id='submit' /></submit>  </form></li>

<li><form action='cross_search.php' method='POST'>
            <input type='hidden' name='team_name' value='".$team_name."'>
            <input  type='submit' name='submit' value='Cross Search' id='submit' /></submit>  </form></li>";
        }

	        echo"
	        
	    </ul>
	          </div>
			 </nav> 
<ul class='horizontal' >
<li class='horizontal' ><a href='index.php'>Home</a></li>
<li class='horizontal' ><a href='article.php'>Article</a></li>
<li class='horizontal' ><a href='datasets.php'>About Metadata</a></li>
<li class='horizontal' style='float:right'>
  <table  border='0px'><tr><td>
  <form action='play.php' method='POST'>

<input class='sign-in' type='text'  id='team_name' name='team_name' placeholder='Team name' /></td><td>
<input class='sign-in' type='password'  id='password' name='password' placeholder='password' /></td><td>
<input  type='submit'  name='submit' value='Log in' id='submit' /></form></td>

</tr></table></li>
<li class='horizontal' style='float:right'><a class='active' href='play.php'>Log out</a></li>
<li class='horizontal' style='float:right'><a class='active' href='registration.php' target='_blank'>Register to Play</a></li>
			</ul></h3>";
		

			?>

				  