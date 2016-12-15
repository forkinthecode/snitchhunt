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
      href="favico.ico">
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



 
<img src='security.jpg' width='700px'></img>

<p>Did you know that service providers have to retain your metadata <a href="http://www.news.com.au/technology/online/new-data-retention-laws-begin-today-this-is-what-you-need-to-know/news-story/28ea2dc1b01d15e53f474e21b6d68501">for two years</a> in Australia? </p>
<p>Check out the <a href='datasets.php'>datasets page</a> to see what data is collected and who has access to it.
    The data that is being collected includes IP addresses, email addresses, phone numbers, and location data. Although these individual datasets already reveal a lot of your online presence, the real deal is data correlation. Once an experienced analyst begins correlating the different datasets, 
    your activities throughout the day can be reconstructed.</p>

<p>Today, you will be in the shoes of a data analyst working for the federal police, using this data to solve the challenges. You will need to dig into, 
  correlate and pivot on the various metadata sets to catch a whistleblower.</p>
<p><img src="https://snitchhunt.global.ssl.fastly.net/user/pages/02.challenge/bigdata.jpg" /></p>
<p>Read the <a href='article.php'>article and instructions</a> carefully! We hid hints and other relevant information that you will need to complete the tasks. 
  Good luck!</p>

<!--<p>The raw datasets are available for download <a href="https://ln.sync.com/dl/32f13df20#88cjtdsx-bsrd2iza-fh2qbx7c-tbpcegrq">on this link</a> for the curious. You don't need to download these to solve the challenges.</p>
  --> 
 </div>
 <div class='right'>
 
<?php
include'challenges.php';
?>


</div></div>


    <?php //include('../scripts/footer.php');?>

    </body>
</html>