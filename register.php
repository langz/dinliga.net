<?php

include 'connect.php';
require_once('PasswordHash.php');

// a new phpass instance, providing the iteration count
// and if to use the in-built MD5 crypto or not
$phpass = new PasswordHash(8, FALSE);


$user=trim(mysql_real_escape_string($_POST['username']));
   if(filter_var($user, FILTER_VALIDATE_EMAIL)) {
        // valid address
    }
    else {
        echo "NOEMAIL";
		exit();
    }

//get form data

$teamName=trim(mysql_real_escape_string($_POST['teamName']));
$pass=$_POST['password'];
$submit=$_POST['submit'];


if ($submit) {
$query=mysql_query("SELECT * FROM User WHERE email='" .mysql_real_escape_string($user). "'");

/* note mysql_num_rows checks our table named users, if username and password exits, the number returns as 1
if dosen't it returns as 0 */	

if (mysql_num_rows($query) == 0) {


 
 
 $queryteamname=mysql_query("SELECT * FROM Team WHERE name='" .mysql_real_escape_string($teamName). "'");
 if (mysql_num_rows($queryteamname) == 0){
 $passhash = $phpass->HashPassword($pass);
 $queryinsert=mysql_query("INSERT INTO User VALUES('" .mysql_real_escape_string($user). "','$passhash', 0)");
 $queryinsertTeam=mysql_query("INSERT INTO Team VALUES('" .mysql_real_escape_string($teamName). "','" .mysql_real_escape_string($user). "', 0)");
 if ($queryinsertTeam && $queryinsert){
 session_start();
$_SESSION['user']=$user;

echo 'SUCCESS';
}
}
else{echo 'TEAMNAMETAKEN';}
}
else{echo 'USERNAMETAKEN';}
}
else{
header("Location: index.php");
}
?>