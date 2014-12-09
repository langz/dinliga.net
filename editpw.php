<?php

include 'connect.php';
require_once('PasswordHash.php');

// a new phpass instance, providing the iteration count
// and if to use the in-built MD5 crypto or not
$phpass = new PasswordHash(8, FALSE);

if($_POST['submit']=='SendPW')
{
$email=$_POST['email'];
$pw=$_POST['pw'];
$code=$_POST['code'];
 $passhash = $phpass->HashPassword($pw);
 $queryinsert=mysql_query("UPDATE User SET password='$passhash' WHERE email='$email' AND temp=$code");
if($queryinsert){
header("Location: index.php");
}
else{ echo "sporring feil";}
 }
 else{
 echo "masse feil";
 }
?>