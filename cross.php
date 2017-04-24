

			

<?php
  //if ( isset($_POST['team_name'] ) && isset($_POST['password'] ))
{
   //$team=$_POST['team_name'];
   //$password=$_POST['password'];
    
   // if ( $team!='' && $password!='' )
{
  
  // $query="SELECT id FROM teams where team='".$team."' && password='".$password."'";
   //$result = mysqli_query($db, $query);
  // @$num_results = mysqli_num_rows($result);
//if ($num_results >0)
       {
			echo"
			     <div class='searches' style=''>
			     <form action=''  method='POST'>

   <input type='hidden' name='team_name' value='".$_POST['team_name']."'> 
   <input type='hidden' name='password' value='".$_POST['password']."'> 
         <table class='forms'><tr><td> 
		

	<input type='text'  id='subscriber_phone_number' name='subscriber_phone_number' placeholder='Journalist Number' REQUIRED/>
	<input type='text'  id='cell_tower_location' name='cell_tower_location' placeholder='Cell Tower Location' REQUIRED/></td><td>
	<input class='searching'   type='submit' name='submit' value='' id='submit' /></form></td></tr></table>
			      </div>";
			}
			
			if( isset($_POST['subscriber_phone_number']))
			 {//1

			//$data=trim($_POST['subscriber_number']);
			//$subscriber_number= mysqli_real_escape_string ( $db , $data );
			$data1=trim($_POST['subscriber_phone_number']);
			$subscriber_phone_number= mysqli_real_escape_string ( $db , $data1 );
			$data2=trim($_POST['cell_tower_location']);
			$cell_tower_location= mysqli_real_escape_string ( $db , $data2 );
			
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
			       echo"<h3>There are no calls originating from $subscriber_phone_number at the $cell_tower_location location. </h3><br>";
	   
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
