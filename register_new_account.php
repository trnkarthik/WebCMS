<?php require_once("includes/connect.php"); 
require_once("includes/functions.php"); 
require_once("includes/session.php"); 
     if(logged_in()) 
      { 
         redirect_to("index.php"); 
      }
      
      //getting input
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      echo $username."<br/>";
      echo $password."<br/>";
      echo $email."<br/>";
      
      $insert_query = "insert into users (password,email,level,username) values('$password','$email',10,'$username')";
      echo $insert_query;
      
      $result=mysql_query($insert_query);
      
      if(!$result)
      {
         echo "done wrong";
           
         redirect_to("account_creation_failed.php");
      }
      else
      {
         $query="select userid,username,password from users
         where username='{$username}' and password='{$password}' ";
         $result_set=mysql_query($query);

         if(mysql_num_rows($result_set)==1)
         {
          echo "im in "."<br/>";
          
          $found_user=mysql_fetch_array($result_set);
          $_SESSION[user_id]=$found_user['userid'];
          $_SESSION[username]=$found_user['username'];
          
         redirect_to("index.php");
         }
         else
         {
          redirect_to("home.php"); 
         }    
}

?> 
    