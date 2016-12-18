<!--Budget Home-->
 <!DOCTYPE HTML>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <title>Little Bird</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rosie Williams">
   <link rel="icon" 
     type="image/png" 
     href="../favicon.ico">
    </head>
    <body>

<?php


include('login.php');
//include('../inclusions.php');

include('styles.php');


 
    

?>

  
        
                     
 
  <div class="jumbotron"> 
     
 <?php
     include'nav.php';
     ?>
  
        </div>
          
       

          <div class='clear'></div>
<div class="page_width">


        <div class="left">
			<?php
			{
			echo"<br><h4>Search a subscriber number against a dialled number to find out how many calls were made:
			     <div class='searches' style='background-color:#e3f291;'>
        
			             <form action='cross_search.php'  method='GET'>
			             <input type='text'  id='subscriber_number' name='subscriber_number' placeholder='Subscriber phone number' />
						 <input type='text'  id='dialled_number' name='dialled_number' placeholder='Dialled number' />
			             <input type='submit' name='submit' placeholder='Search' id='submit' />
			             </form>
			      </div>";
			}
			
			if(isset($_GET['subscriber_number'])  && isset($_GET['dialled_number']))
			 {//1

			$data=trim($_GET['subscriber_number']);
			$subscriber_number= mysqli_real_escape_string ( $db , $data );
			$data1=trim($_GET['dialled_number']);
			$dialled_number= mysqli_real_escape_string ( $db , $data1 );
			
			$number_of_calls="SELECT * FROM `phone_metadata` WHERE
				 `subscriber_phone_number`='$subscriber_number' && `dialled_number` = '$dialled_number'";
			$result = mysqli_query($db, $number_of_calls );
			@$num_results = mysqli_num_rows($result);
			if ($num_results <1)
			 {//2
			       echo"<h4>There are no calls originating with $subscriber_number to $dialled_number </h4>";
	   
			   }
			   else
			   {
				   echo"<h4>".$num_results." calls were made <i>from</i> $subscriber_number <i>to</i> $dialled_number</h4><div class='expand'> ";
				   while ($row = $result->fetch_assoc()) 
					 
			       {//6
			     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
			    <tr><td>Subscriber IMEI:</td>     <td>".$row['subscriber_imei']."<td><td></td></tr>
			    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
			    <tr><td>Dialled number:</td>      <td>".$row['dialled_number']."<td><td></td></tr>
			    <tr><td>Cell Tower Location:</td> <td>".$row['cell_tower_location']."</td></tr>
			    <tr><td>Duration:</td>            <td>".$row['duration']."</td></tr>
			    <tr><td>Date and Time:</td>       <td>".$row['date_time']."</td></tr>
			    </tbody></table><br> ";
			        }//6
			        echo"</div>Mouse over/scroll for more results.";
			   }
			   
		   }
			
			?>
<?php
{
echo"<br><h4>Search two phone numbers to see who they both called:
     <div class='searches' style='background-color:#e3f291;'>
        
             <form action='cross_search.php'  method='GET'>
             <input type='text'  id='caller_one' name='caller_one' placeholder='Phone number one' />
			 <input type='text'  id='caller_two' name='caller_two' placeholder='Phone number two' />
             <input type='submit' name='submit' placeholder='Search' id='submit' />
             </form>
      </div>";
}



if(isset($_GET['caller_one'])  && isset($_GET['caller_two']) && !isset($_GET['subscriber_number'])  && !isset($_GET['dialled_number']))
 {//1

$data=trim($_GET['caller_one']);
$caller_one= mysqli_real_escape_string ( $db , $data );
$data1=trim($_GET['caller_two']);
$caller_two= mysqli_real_escape_string ( $db , $data1 );

$phone = "SELECT `subscriber_imei`,subscriber_phone_number,count(subscriber_phone_number) FROM `phone_metadata` 
	WHERE subscriber_phone_number IN (SELECT subscriber_phone_number FROM `phone_metadata` 
	WHERE dialled_number='$caller_one' ) && subscriber_phone_number IN 
	(SELECT subscriber_phone_number FROM `phone_metadata` WHERE dialled_number='$caller_two' ) 
	GROUP BY subscriber_phone_number ORDER BY count(subscriber_phone_number) DESC LIMIT 1 ";
$result = mysqli_query($db, $phone );
@$num_results = mysqli_num_rows($result);
if ($num_results <1)
 {//2
       echo"<p>There are no number that called both $caller_one and $caller_two </p>";
	   
   }
	  else  { //5
        echo"<h4>The details for the number that dialled both $caller_one and $caller_two are:</h4>
        ";
        while ($row = $result->fetch_assoc()) 
       {//6
     echo"<table class='basic' border='0' style='background-color:#e3f291;;'><tbody>
    <tr><td>Subscriber IMEI:</td>     <td><a href='phone_subscribers.php?search_all_subscribers=".$row['subscriber_imei']."'>".$row['subscriber_imei']."</a><td><td></td></tr>
    <tr><td>Subscriber number:</td>   <td>".$row['subscriber_phone_number']."</td></tr>
    
    </tbody></table><br> ";
        }//6
        echo"<p>Click on the subscriber IMEI to get results from the phone subscriber database for that IMEI</p>";
  
	
	}

  
    
}mysqli_free_result($result);

?>



 </div>
 <div class='right'>
 
<?php
include'challenges.php';
?>


</div></div>


    <?php //include('../scripts/footer.php');?>

    </body>
</html>

