

			

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
			echo"<br><h3>Search a subscriber number against a dialled number to find out how many calls were made:</h3>
			     <div class='searches' style=''>
         <table class='forms'><tr><td> 
			             <form action=''  method='POST'>
			              <input type='hidden' name='team_name' value='".$team."'> 
			              <input type='hidden' name='password' value='".$password."'>

			             <input type='text'  id='subscriber_number' name='subscriber_number' placeholder='Subscriber phone number' />
						 <input type='text'  id='dialled_number' name='dialled_number' placeholder='Dialled number' /></td><td>
			           
        <input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
			      </div>";
			}
			
			if(isset($_POST['subscriber_number'])  && isset($_POST['dialled_number']))
			 {//1

			$data=trim($_POST['subscriber_number']);
			$subscriber_number= mysqli_real_escape_string ( $db , $data );
			$data1=trim($_POST['dialled_number']);
			$dialled_number= mysqli_real_escape_string ( $db , $data1 );
			
			$number_of_calls="SELECT * FROM `phone_metadata3` WHERE
				MATCH(`subscriber_phone_number`) AGAINST('$subscriber_number' IN BOOLEAN MODE) 
				&& MATCH(`dialled_number`) AGAINST('$dialled_number' IN BOOLEAN MODE) 
				ORDER BY date_column DESC";
			$result = mysqli_query($db, $number_of_calls );
			@$num_results = mysqli_num_rows($result);
			if ($num_results <1)
			    {//2
			       echo"<h3>There are no calls originating with $subscriber_number to $dialled_number </h3>";
	   
			   }
			   else
			   {
				   echo"<h3>".$num_results." calls were made <i>from</i> $subscriber_number <i>to</i> $dialled_number</h3><div class='expand'> ";
				   while ($row = $result->fetch_assoc()) 
					 
			       {//6
			     echo"<table class='basic' border='0' style=''><tbody>
			
			    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
			    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
			    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
			    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
			    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
			    <tr><td>Date and Time:</td>       <td>".$row['date_column']." ".$row['time']."</td></tr>
			    </tbody></table><br> ";
			        }//6
			        echo"</div><h3>Mouse over/scroll for more results.</h3>";
			   }
			   
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
$data=trim($_POST['team_name']);
$team= mysqli_real_escape_string ( $db , $data );
$data1=trim($_POST['password']);
$password= mysqli_real_escape_string ( $db , $data1 );

echo"<br><h3>Search two phone numbers to see who they both called:</h3>
     <div class='searches' style=''>
         <table class='forms'><tr><td> 
             <form action=''  method='POST'>
<input type='hidden' name='team_name' value='".$team."'> 
<input type='hidden' name='password' value='".$password."'>

             <input type='text'  id='caller_one' name='caller_one' placeholder='Phone number one' />
			 <input type='text'  id='caller_two' name='caller_two' placeholder='Phone number two' /></td><td>
           
        <input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
      </div>";



  if(isset($_POST['caller_one'])  && isset($_POST['caller_two']) && 
	!isset($_POST['subscriber_number'])  && !isset($_POST['dialled_number']))
 {//1

$data=trim($_POST['caller_one']);
$caller_one= mysqli_real_escape_string ( $db , $data );
$data1=trim($_POST['caller_two']);
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
}mysqli_free_result($result); 

?>