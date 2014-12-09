<?php include 'connect.php';
require_once('PasswordHash.php');

// a new phpass instance, providing the iteration count
// and if to use the in-built MD5 crypto or not

session_start();
$user=trim(mysql_real_escape_string($_POST['username']));
   if(filter_var($user, FILTER_VALIDATE_EMAIL)) {
        // valid address
    }
    else {
        echo "NOEMAIL";
		exit();
    }
$pass=$_POST['password'];

$submit=$_POST['submit'];
if($submit){
$query=mysql_query("SELECT password FROM User WHERE email='$user'");
if(mysql_num_rows($query)>0){
$phpass = new PasswordHash(8, FALSE);
$dbpw = mysql_result($query,0);
 
if($phpass->CheckPassword( $pass, $dbpw )){
$_SESSION['user']=$user;
echo "SUCCESS";
}
else{
echo "PWNOTMATCH";
}
}
else{
echo "WRONGUNPW";
}
}
else{
header("Location: index.php");
}
?>