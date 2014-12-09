<?php 

$selected_stat = $_POST['stat'];
$selected_gw = $_POST['gw'];
		
		echo $selected_stat;
		echo $selected_gw;

if ( $selected_stat == Player ){
  header("Location: statisticsOrderdbyPlayer.php");
}
else if ( $selected_stat == Victories ){
header("Location: statisticsOrderdbyVictories.php");
}
else if ( $selected_stat == Attendance ){
header("Location: statisticsOrderdbyAttendance.php");
}
else if ( $selected_stat == Humiliation ){
header("Location: statisticsOrderdbyHumiliation.php");
}
else if ( $selected_stat == Assists ){
header("Location: statisticsOrderdbyAssists.php");
}
else if ( $selected_stat == Goals ){
header("Location: statisticsOrderdbyGoals.php");
}
else if ( $selected_stat == Points ){
header("Location: statisticsOrderdbyPoints.php");
}
else{
}


?>

PTION VALUE="m1">Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" selected="selected">Goals</option> 
<OPTION VALUE="m8">Points</option> 
<OPTION VALUE="m9">P/A</option> 