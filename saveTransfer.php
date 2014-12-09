<?php

include 'connect.php';



$team=trim(mysql_real_escape_string($_POST['team']));
$player1=trim(mysql_real_escape_string($_POST['p1']));
$player2=trim(mysql_real_escape_string($_POST['p2']));
$player3=trim(mysql_real_escape_string($_POST['p3']));
$player4=trim(mysql_real_escape_string($_POST['p4']));
$player5=trim(mysql_real_escape_string($_POST['p5']));
$player6=trim(mysql_real_escape_string($_POST['p6']));
$player7=trim(mysql_real_escape_string($_POST['p7']));
$capid;




$gw = mysql_query("SELECT MAX(nr) as 'nr' FROM Gameweek");
$gameweek = mysql_result($gw,0);

$p1 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player1). "'");
$player1id = mysql_result($p1,0);

$p2 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player2). "'");
$player2id = mysql_result($p2,0);

$p3 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player3). "'");
$player3id = mysql_result($p3,0);

$p4 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player4). "'");
$player4id = mysql_result($p4,0);

$p5 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player5). "'");
$player5id = mysql_result($p5,0);

$p6 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player6). "'");
$player6id = mysql_result($p6,0);

$p7 = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($player7). "'");
$player7id = mysql_result($p7,0);

if( isset($_POST['c']) ){
$cap=trim(mysql_real_escape_string($_POST['c']));
$cc = mysql_query("SELECT id FROM Player Where Player.lname='" .mysql_real_escape_string($cap). "'");
$capid = mysql_result($cc,0);
}
else{ 

$capid=$player7id;
}

$dag = date("D", time());
$tid = date("G", time());
$min = 0;
$max = 12;

if($dag == "Thu" && (($min <= $tid) && ($tid <= $max))){
echo "TIME";
exit();
}
else{



$checkTeam = mysql_query("SELECT gameweek FROM Squad Where Squad.team='" .mysql_real_escape_string($team). "' ORDER BY gameweek DESC LIMIT 1");
if(mysql_num_rows($checkTeam) > 0){
$teamCheck = mysql_result($checkTeam,0);
}
else{
$teamCheck = 0;
}


$check = ($teamCheck == $gameweek);

if($check>0){


$queryupdate = mysql_query("UPDATE Squad SET player1='" .mysql_real_escape_string($player1id). "', player2='" .mysql_real_escape_string($player2id). "', player3='" .mysql_real_escape_string($player3id). "', player4='" .mysql_real_escape_string($player4id). "', player5='" .mysql_real_escape_string($player5id). "', player6='" .mysql_real_escape_string($player6id). "', player7='" .mysql_real_escape_string($player7id). "', captain='" .mysql_real_escape_string($capid). "', points=0 WHERE team='" .mysql_real_escape_string($team). "' AND gameweek='" .mysql_real_escape_string($gameweek)."' ");
if($queryupdate){
echo "UPDATE";
}
else{
}
}
else{


 $queryinsert=mysql_query("INSERT INTO Squad VALUES('" .mysql_real_escape_string($gameweek). "', '" .mysql_real_escape_string($team). "', '" .mysql_real_escape_string($player1id). "', '" .mysql_real_escape_string($player2id). "', '" .mysql_real_escape_string($player3id). "', '" .mysql_real_escape_string($player4id). "', '" .mysql_real_escape_string($player5id). "', '" .mysql_real_escape_string($player6id). "', '" .mysql_real_escape_string($player7id). "', '" .mysql_real_escape_string($capid)."', 0)");



if($queryinsert){
echo "INSERT";}
else{
echo "fail";
}
}
}
?>