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
	<div id="pagehelp">
	<div id="statc">
	<div id="nr1">
				<a  href="#" onClick="return false;" class="bildelink1" id="man"><img src="img/manager.png" width="200" height="200"/><p>Manager Statistics</p></a>
				
				</div>
				<div id="nr2">
				<a  href="#" onClick="return false;" class="bildelink1" id="play"><img src="/img/Spillerbilde/mats.jpg" width="200" height="200"/><p>Player Statistics</p></a>
				
				</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
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
window.location.replace("http://dinliga.net/statistics.php");
		}

                }
            });	
}
else{
	$fb.html("<p> Please fill in all fields. </p>");
		$('#reg-box').addClass('b1');
}


});
$('.bildelink1').die('click').live('click', function () {
			

if( $(this).attr('id') == 'man'){			
window.location.href = "http://dinliga.net/statManager.php";
}
else if( $(this).attr('id') == 'play'){			
window.location.href = "http://dinliga.net/statPlayer.php";
}
else{
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
window.location.replace("http://dinliga.net/statistics.php");
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
