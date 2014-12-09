<?php
$con=mysql_connect('localhost','dinlipbf_javacli','Javacli1');
if(!$con)
{die("could not connecct" . mysql_error());}
mysql_select_db('dinlipbf_fantasy');
mysql_query("SET NAMES 'utf8'", $con);
?>