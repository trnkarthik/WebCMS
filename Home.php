<?php
require_once("includes/connect.php"); 
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

            
            This is home.You are not logged in.
            
         <?php
            //including loginbox
            include("includes/login_box.php");
            include("includes/register_link.php");
            include("includes/login_page_image_text.php");
            ?>
            
        </body>
    </html>