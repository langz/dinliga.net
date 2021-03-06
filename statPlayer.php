<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>dinliga.net</title>
<link rel="SHORTCUT ICON" href="favicon.png" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
	
	
});
</script>
</head>

<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="index.php">DinLiga.net  </a></h1>
		<h2>Fantasy League</h2>
			<div class="social">
		<ul>
   <li class="facebook"><a href="https://www.facebook.com/JogaBonitoFutsalBergen" title="Visit us on Facebook">Facebook</a></li>
   <li class="twitter"><a href="https://twitter.com/DinLiga" title="Visit us on Twitter">Twitter</a></li>
   <ul>
		</div>
	</div>
				<?php
		session_start();
include 'connect.php';

if (!isset($_SESSION['user'])) {
 ?>	<div id="menu">
		<ul>
			<li><a href="index.php">Homepage</a></li>
			<li class="current_page_item"><a href="statistics.php">Statistics</a></li>
			<li><a href="rules.php">Rules</a></li>
			<li><a href="contact.php">Contact</a></li>
			
			<li>	        	<div class="btn-sign">
				<a href="#login-box" class="login-window">Login</a>
        	</div>
			       <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="" class="signin" action="">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="usernamelog" name="username" value="" type="text" autocomplete="on" placeholder="Email">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="passwordlog" name="password" value="" type="password" placeholder="Password">
                </label>
                <input class="submit button login" type='button' name='submit' value='Sign in'>
				  <a href="http://www.dinliga.net/reset.php">Forgot Password?</a>
                <div class="feedbacklog"> </div>
                
              
                
                </fieldset>
          </form>
		
		</div>
		</li>
		<li>
		       	<div class="btn-sign">
				<a href="#reg-box" class="login-window">Register</a>
        	</div>
		<div id="reg-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
		
          <form method="" class="signin" action="">
                <fieldset class="textbox">
            	<label class="username">
                <span>Email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Email">
                </label>
				
				<label class="teamName">
                <span>TeamName</span>
                <input id="teamName" name="teamName" value="" type="text" autocomplete="on" placeholder="Teamname">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                <input class="submit button register" type='button' name='submit' value='Register'>
                <div class="feedback"> </div>
                
                
                </fieldset>
          </form>
		</div>
		</li>
	</ul>
		</div>
        <?php } else{  $user=$_SESSION['user']; ?>
		<div id="menu">
		<ul>
					<li><a href="index.php">Homepage</a></li>
			<li class="current_page_item"><a href="statistics.php">Statistics</a></li>
			<li><a href="points.php">Points</a></li>
			<li><a href="team.php">My Team</a></li>
			<li><a href="transfer.php">Transfer</a></li>
			<li><a href="rules.php">Rules</a></li>
			<li><a href="contact.php">Contact</a></li>
		<li>
	<div class="btn-sign1">
		<form method="post" action="logout.php">
		<input class="submitLogOut" type='submit' name='submit' value='Logout'>
		</form>
		</div>
		</li>
		</ul>
		</div>
 <?php } ?>
	



 
 
	
</div>
<!-- end header -->

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
	
	
	<FORM NAME="myform"  method="post" action="statPlayer.php"> 
	Sort by: <select name="stat">
	   	<?php
		
	$selected_stat = $_POST['stat'];
	$string;
		
		
		

		
 if ( $selected_stat == "m1" ){
 
  echo '<OPTION VALUE="m1" selected="selected">Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8">Points</option> ';
}
else if ( $selected_stat == "m2" ){
  echo '<OPTION VALUE="m1">Player</option> 
<OPTION VALUE="m2" selected="selected">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8">Points</option>';
}
else if ( $selected_stat == "m4" ){
  echo '<OPTION VALUE="m1" >Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4" selected="selected">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8">Points</option>';
}
else if ( $selected_stat == "m3" ){
  echo '<OPTION VALUE="m1">Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3" selected="selected">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8">Points</option>';
}
else if ( $selected_stat == "m5" ){
  echo '<OPTION VALUE="m1" >Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5" selected="selected">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8">Points</option>';
}
else if ( $selected_stat == "m6" ){
  echo '<OPTION VALUE="m1" >Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6" selected="selected">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8">Points</option>';
}
else if ( $selected_stat == "m7" ){
  echo '<OPTION VALUE="m1" >Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" selected="selected">Goals</option> 
<OPTION VALUE="m8">Points</option>';
}
else if ( $selected_stat == "m8" ){
  echo '<OPTION VALUE="m1" >Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8" selected="selected">Points</option>';
}
else{
  echo '<OPTION VALUE="m1" >Player</option> 
<OPTION VALUE="m2">Victories</option> 
<OPTION VALUE="m3">Combined Victories</option> 
<OPTION VALUE="m4">Attendance</option> 
<OPTION VALUE="m5">Humiliation</option> 
<OPTION VALUE="m6">Assists</option> 
<OPTION VALUE="m7" >Goals</option> 
<OPTION VALUE="m8" selected="selected">Points</option>';
}

?>


</select>


<input type='submit' name='submit1' value='Sort'>
</FORM> 

</body>
<form method="post" action ="player.php">
	<table id="newspaper-a" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col">Player</th>
            <th scope="col">Victories</th>
			<th scope="col">Combined Victories</th>
            <th scope="col">Attendance</th>
            <th scope="col">Humiliation</th>
			<th scope="col">Assists</th>
			<th scope="col">Goals</th>
            <th scope="col">Points</th>
			<th scope="col">P/A</th>
        </tr>
    </thead>
    <tbody>
    	<?php
		
	$selected_stat = $_POST['stat'];
	$string;
		
		
		

		
 if ( $selected_stat == "m1" ){
  $string = "lname";
}
else if ( $selected_stat == "m2" ){
$string = "victory";
}
else if ( $selected_stat == "m4" ){
$string = "attendance";
}
else if ( $selected_stat == "m3" ){
$string = "combinedvictory";
}
else if ( $selected_stat == "m5" ){
$string ="humiliated";
}
else if ( $selected_stat == "m6" ){
$string ="assists";
}
else if ( $selected_stat == "m7" ){
$string ="goals";
}
else if ( $selected_stat == "m8" ){
$string = "points";
}
else{
$string = "points";
}
       
			include 'connect.php';
            $results = mysql_query("SELECT id, lname, SUM(victory) as 'victory', SUM(combinedvictory) as 'combinedvictory', SUM(goals) as 'goals' , SUM(assists) as 'assists' , SUM(attendance) as 'attendance', SUM(humiliated) as 'humiliated', SUM(points) as 'points' FROM PlayerGW, Player WHERE PlayerGW.player=Player.id Group by player ORDER BY " .mysql_real_escape_string($string). " DESC");
			
            while($row = mysql_fetch_array($results)) {
			settype($attendance, "int");
			settype($points, "int");
			$points = $row['points'];
			$attendance = $row['attendance'];
			$pa = $points / $attendance; 
			$pa = round( $pa, 1, PHP_ROUND_HALF_UP);
            ?>
                <tr>
                    <td> <input class ="submitLink" type="submit" name= "playerlname" value="<?php echo $row['lname']?>" ></td>
					<td><?php echo $row['victory']?></td>
					<td><?php echo $row['combinedvictory']?></td>
					<td><?php echo $row['attendance']?></td>
					<td><?php echo $row['humiliated']?></td>
					<td><?php echo $row['assists']?></td>
					<td><?php echo $row['goals']?></td>
					<td><?php echo $row['points']?></td>
					<td><?php echo $pa?></td>
                </tr>

            <?php
			
            }
            ?>
    </tbody>
</table>
</form>

			
		</div>
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
		<div id="s-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
		
          <form method="post" class="signin" action="register.php">
                <fieldset class="textbox2">
            	
                
                
                
                </fieldset>
          </form>
		</div>
<div id="footer">
		<p id="legal">( c ) 2014. All Rights Reserved. <a href="http://www.anderslangseth.no" target="_blank">Anders Langseth</a></p>
</div>
<!-- end footer -->
<script type="text/javascript">
$(document).ready(function() {
$('.register').die('click').live('click', function () {

var pw = $('#password').val();
var tn = $('#teamName').val();
var un = $('#username').val();
$fb = $('.feedback');
if(pw && tn && un){



$.ajax({
            type: "POST",
            data: {"teamName":tn, "username":un, "password":pw, "submit":"submit"},
            url: "register.php",
            success: function(data){
          if(data == "NOEMAIL"){
		$fb.html("<p> This is no valid email address </p>");
		
		}
		else if(data =="TEAMNAMETAKEN"){
		$fb.html("<p> This teamname is taken </p>");

		}
		else if(data =="USERNAMETAKEN"){
		$fb.html("<p> This username is taken</p>");

		}
		else if(data =="SUCCESS"){
			$fb.html("<p> Welcome </p>");
$('#reg-box').fadeOut(1000);
$('#mask').fadeOut(1000);
window.location.replace("http://dinliga.net/statPlayer.php");
		}

                }
            });	
}
else{
	$fb.html("<p> Please fill in all fields. </p>");
		$('#reg-box').addClass('b1');
}


});
$('.login').die('click').live('click', function () {

var pw = $('#passwordlog').val();
var un = $('#usernamelog').val();
$fb = $('.feedbacklog');
$loginbox = $('#login-box');
if(pw && un){



$.ajax({
            type: "POST",
            data: {"username":un, "password":pw, "submit":"submit"},
            url: "login.php",
            success: function(data){

          if(data == "WRONGUNPW"){
		  $loginbox.addClass('b1');
		$fb.html("<p> Email and Password is wrong </p>");
		}
		else if(data =="NOEMAIL"){
		  $loginbox.addClass('b1');
		$fb.html("<p> This is not a valid Email address </p>");
		
		}
		else if(data =="SUCCESS"){
				  $loginbox.removeClass('b1');
		  $loginbox.addClass('b2');
			$fb.html("<p> Welcome </p>");
$('#reg-box').fadeOut(1000);
$('#mask').fadeOut(1000);
window.location.replace("http://dinliga.net/statPlayer.php");
		}

                }
            });	
}
else{
 $loginbox.addClass('b1');
	$fb.html("<p> Please fill in all fields. </p>");
		
}


});
});
</script>
</body>
</html>
