 <table  class='framework'> 
    <tr> 
     <td>
<?php
    echo" 
<form action='index.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Home' id='submit' />

  

</form> ";
?>
</td>

     <td><?php
    echo" 
<form action='two.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Government' id='submit' />

  

</form> ";
?>


     </td> 


     <td><?php
    echo" 
<form action='three.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Corporations' id='submit' />

  

</form> ";
?>

     </td> 


     <td><?php
    echo" 
<form action='four.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='SnitchHunt' id='submit' />

  

</form> ";
?>


     </td> 


     <td><?php
    echo" 
<form action='five.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Datasets' id='submit' />

  

</form> ";
?>

     </td> </tr>
<tr>
     <td><?php
    echo" 
<form action='six.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Data Matching' id='submit' />

  

</form> ";
?>

     </td> 
     <td><?php
    echo" 
<form action='seven.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Task' id='submit' />

  

</form> ";
?>


     </td> 
     <td><?php
    echo" 
<form action='eight.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Article' id='submit' />

  

</form> ";
?>


     </td> 
     <td><?php
    echo" 
<form action='short_quiz.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Short Quiz' id='submit' />

  

</form> ";
?>


     <td><?php
    echo" 
<form action='hard_quiz.php' method='POST'>
   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
<input class='nav_button'   type='submit'  name='submit' value='Hard Quiz' id='submit' />

  

</form> ";
?>

     </td> </tr>
  </table>