<?php 

$dag = date("D", time());
$tid = date("G", time());
$min = 18;
$max = 22;
echo $tid;
if($dag == "Tue" && (($min <= $tid) && ($tid <= $max))){
echo "sant";
echo $tid;
}

?>