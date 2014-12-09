<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user'])) {

header("Location: index.php");
}


$user=$_SESSION['user'];

?>
<html>
<head>
<title>Simple login and signup system</title>
</head>
<body>
<?php echo $user; ?> </br>
<a href='logout.php'>logout.php</a>
</body>
</html>