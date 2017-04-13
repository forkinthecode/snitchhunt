

    <p>Copy/Paste interesting results to a text file or google doc for later use.</p>


  <?php

 {
  echo"<form action='' method='POST'>

 <input type='hidden' name='team_name' value='".$team."'> 
 <input type='hidden' name='password' value='".$password."'>
  <table class='basic'><tr>
<td><input type='radio' name='checklist'  value='phone'></td>    <td> Search against all fields in the <b>phone usage</b> data </input>  </td><td><img height='70px' src='images/sim-card.png'/></td></tr><tr>
<td><input type='radio' name='checklist'  value='email'> </td>   <td> Search against all fields in the <b>email usage</b> data  </input>  </td><td><img height='70px' src='images/email.png'/></td>   </tr><tr>
<td><input type='radio' name='checklist'  value='google'> </td>  <td> Search against all fields in the <b>Google search</b> data  </input>  </td><td><img height='70px' src='images/computer.png'/></td> </tr><tr>
<td><input type='radio' name='checklist'  value='subscriber'></td><td>Search against all fields in the <b>phone subscriber</b> database</input></td><td><img height='70px' src='images/smartphone.png'/></td> </tr>
<td>
   </td></td><td><input  type='text'  id='string' name='string' placeholder='Search string' /></td><td><input class='searching' type='submit' name='Submit' value='' /></form></td>
   </tr></table>";

 }

  if( $_POST['string']==''||  $_POST['checklist']=='')
 {
echo"<h6>You need to choose a dataset to search <i>and</i> enter a search term into the text box!</h6><br>";
 }
 if( $_POST['string']!='' && $_POST['checklist']!='')
{

echo"<h6>Searching ".$_POST['checklist']." metadata for ".$_POST['string']."</h6>";

if($_POST['checklist']=='phone'  && $_POST['string']!='')
{         
include'phone2.php';
echo"<br><br>";
}

if($_POST['checklist']=='google'  && $_POST['string']!='')
{
include'google.php';
echo"<br><br>";
}

if($_POST['checklist']=='subscriber' && $_POST['string']!='' )
{
include'subscribers2.php';
echo"<br><br>";
}

if($_POST['checklist']=='email' && $_POST['string']!='' )
{ 
include'email.php';
echo"<br><br>";
}

echo"<br><br>";

        }



       

 ?>

  
 
  


 


  