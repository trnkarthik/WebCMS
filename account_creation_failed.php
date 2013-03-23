<?php require_once("includes/connect.php"); 
require_once("includes/functions.php"); 
require_once("includes/session.php"); 
     if(logged_in()) 
      { 
         redirect_to("index.php"); 
      } 
?> 
    <html> <head> 
        <title> 
            Welcome to PHANTOM CMS
        </title>
        
        
        <link rel="stylesheet" href="stylesheets/login_page.css">

        </head>
        <body id=page_bg>

         <?php
            //including header
            include("includes/header.php");
            ?>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
            <center>
                 <h2 style="font-weight:normal">
                     Account Creation Failed.<br/>
                     This may be due to following reasons
                     <br/>
                      1 . Username already present.<br/>
                     Try using a different username.<br/>
                      2 .  Server Problem<br/>
                     <br/><br/>
                     You will be automatically redirected to login page in 5 seconds.<br/>
                    <a href="home.php"><img src="images/home.png" width=50px height=50px style="position:relative;top:10px;">
Click here</a> to go to login page
                 </h2>
                 <?php
                 header( "refresh:5;url=home.php" );
                 ?>

            </center>
        </body>
    </html>