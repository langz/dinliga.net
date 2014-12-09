<html>
<head>
<?php 
include 'connect.php';
$code= $_GET['code'];
$email= $_GET['email'];
$query3="select * from User where email='$email' AND temp=$code AND temp!=0";
$result3=mysql_query($query3);
if(mysql_num_rows($result3)){ ?>

<form action="editpw.php" method="post">
Enter your new password: <input type="text" name="pw">
<input type="hidden" name="code" value='<?php echo $code?>'>
<input type="hidden" name="email" value='<?php echo $email?>'>
<input type="submit" name="submit" value="SendPW">
</form>

<?php
}

else{

?>

<form action="reset.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>

<?php
$email=$_POST['email'];



if($_POST['submit']=='Send')
{


$query="select * from User where email='$email'";

$result=mysql_query($query) or die(error);
if(mysql_num_rows($result))
{
$code=rand(100,999);
$message="You activation link is: http://dinliga.net/reset.php?email=$email&code=$code";
mail($email, "Password Reset Requested", $message);
$query1="UPDATE User SET temp=$code WHERE email='$email'";
$result1=mysql_query($query1);
echo "Email sent";
}
else
{
echo "No user exist with this email id";
}

}
}
?>



</head>
</html>
