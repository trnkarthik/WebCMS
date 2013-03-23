<?php

require_once("includes/session.php");
require_once("includes/connect.php");
require_once("includes/functions.php");

// check the validation of login page and redirects to corresponding page depending on the result

$username=$_POST['username'];
$password=$_POST['password'];
//$hashed_password=sha1($password);

$query="select userid,username,password,level from users
        where username='{$username}' and password='{$password}' ";
$result_set=mysql_query($query);

echo $username."<br/>";
echo $password."<br/>";
echo "res " .mysql_num_rows($result_set);

if(mysql_num_rows($result_set)==1)
{
    echo "im in "."<br/>";

    $found_user=mysql_fetch_array($result_set);
    $_SESSION[user_id]=$found_user['userid'];
    $_SESSION[username]=$found_user['username'];
    $_SESSION[level]=$found_user['level'];
    
   
    redirect_to("index.php");
}
else
{
    redirect_to("home.php");    
}


?>