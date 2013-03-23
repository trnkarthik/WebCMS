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
            
            <input type="button" value="Go back to Login Page" id="submit"
			       style="width: auto;position: absolute;top: 12%;
                               left:5%;height:auto;padding: 10px"
			       onClick="window.location.href='home.php'"
			>
            
         <?php
            //including registerbox
            include("includes/register_box.php");
            ?>
            
        </body>
    </html>