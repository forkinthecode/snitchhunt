

			

<?php
  //if ( isset($_GET['team_name'] ) && isset($_GET['password'] ))
{
   //$team=$_GET['team_name'];
   //$password=$_GET['password'];
    
   // if ( $team!='' && $password!='' )
{
  
  // $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
   //$result = mysqli_query($db, $query);
  // @$num_results = mysqli_num_rows($result);
//if ($num_results >0)
       {
			echo"
			     <div class='searches' style=''><form action=''  method='GET'>
         <table class='forms'><tr><td> 
		

	<input type='text'  id='subscriber_phone_number' name='subscriber_phone_number' placeholder='Dialled Number' />
	<input type='text'  id='cell_tower_location' name='cell_tower_location' placeholder='Cell Tower Location' /></td><td>
	<input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
			      </div>";
			}
			
			if( isset($_GET['subscriber_phone_number']))
			 {//1

			//$data=trim($_GET['subscriber_number']);
			//$subscriber_number= mysqli_real_escape_string ( $db , $data );
			$data1=trim($_GET['subscriber_phone_number']);
			$subscriber_phone_number= mysqli_real_escape_string ( $db , $data1 );
			$data1=trim($_GET['cell_tower_location']);
			$cell_tower_location= mysqli_real_escape_string ( $db , $data1 );
			
			$number_of_calls="SELECT *
			FROM `phone_metadata3` WHERE
			 MATCH(`dialled_number`) AGAINST('$subscriber_phone_number' IN BOOLEAN MODE) 
			 && `cell_tower_location` LIKE('%$cell_tower_location%') 
			 GROUP BY cell_tower_location
           ";
			$result = mysqli_query($db, $number_of_calls );
			@$num_results = mysqli_num_rows($result);
			if ($num_results <1)
			    {//2
			       echo"<h3>There are no calls originating from $subscriber_phone_number at the $cell_tower_location location. </h3>";
	   
			   }
			   else
			   {
				   echo"<h3>".$num_results." unique phones called the number </i> $subscriber_phone_number in the past two years from $cell_tower_location</h3> ";
				   	 echo"<table class='basic' border='0' style=''><tbody>
			
			     <td>Subscriber IMEI:</td>     
			     <td>Subscriber number:</td>  
			     <td>Dialled number:</td>  
			     <td>Location: </td> 
			  </tr><tr>";
			      
				   while ($row = $result->fetch_assoc()) 
				 {//6
			     echo"
			   <tr> <td>".$row['subscriber_imei']."</td>
			    <td>".$row['subscriber_phone_number']."</td>
			    <td>".$row['dialled_number']."</td>
			     <td>".$row['cell_tower_location']."</td>
			   </tr>
			    ";
			        }//6
			        echo" </tbody></table><br>";
			   }
			   
		   }
	}
		}
			?>
<?php/*
  if ( isset($_GET['team_name'] ) && isset($_GET['password'] ))
{
   $team=$_GET['team_name'];
   $password=$_GET['password'];
    
    if ( $team!='' && $password!='' )
{
  
   $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
   $result = mysqli_query($db, $query);
   @$num_results = mysqli_num_rows($result);
if ($num_results >0)
       {
$data=trim($_GET['team_name']);
$team= mysqli_real_escape_string ( $db , $data );
$data1=trim($_GET['password']);
$password= mysqli_real_escape_string ( $db , $data1 );

echo"<br><h3>Search two phone numbers to see who they both called:</h3>
     <div class='searches' style=''>
         <table class='forms'><tr><td> 
             <form action=''  method='GET'>
<input type='hidden' name='team_name' value='".$team."'> 
<input type='hidden' name='password' value='".$password."'>

             <input type='text'  id='caller_one' name='caller_one' placeholder='Phone number one' />
			 <input type='text'  id='caller_two' name='caller_two' placeholder='Phone number two' /></td><td>
           
        <input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
      </div>";



  if(isset($_GET['caller_one'])  && isset($_GET['caller_two']) && 
	!isset($_GET['subscriber_number'])  && !isset($_GET['dialled_number']))
 {//1

$data=trim($_GET['caller_one']);
$caller_one= mysqli_real_escape_string ( $db , $data );
$data1=trim($_GET['caller_two']);
$caller_two= mysqli_real_escape_string ( $db , $data1 );

$phone = "SELECT `subscriber_imei`,subscriber_phone_number,count(subscriber_phone_number) FROM phone_metadata4 
	WHERE subscriber_phone_number IN 
	(SELECT subscriber_phone_number FROM phone_metadata4 
	WHERE MATCH(dialled_number) AGAINST('$caller_one' IN BOOLEAN MODE)) && subscriber_phone_number IN 
	(SELECT subscriber_phone_number FROM phone WHERE MATCH(dialled_number) AGAINST('$caller_two'IN BOOLEAN MODE ) )
	GROUP BY subscriber_phone_number ORDER BY count(subscriber_phone_number) DESC LIMIT 1 ";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<h3>There are no number that called both $caller_one and $caller_two </h3>";
	   
   }
	  else  { //5
        echo"<h3>The details for the number that dialled both $caller_one and $caller_two are:</h3>
        ";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style=''><tbody>
    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."</td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    
    </tbody></table><br> ";
        }//6
        echo"<h3>Search using the subscriber IMEI to get results from the phone subscriber database for that IMEI</h3>";
  
	
	}

  }
}
 }   
}mysqli_free_result($result); */

?>