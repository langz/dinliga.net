<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>dinliga.net</title>
<link rel="SHORTCUT ICON" href="favicon.png" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script type='text/javascript' src='http://code.jquery.com/jquery-1.4.3.min.js'></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
 
	//ACCORDION BUTTON ACTION	
	$('.rules').click(function() {


		$('div.accordionContent').slideUp('normal');
		$(this).next().addClass('ned');
		$(this).next().slideDown('normal');
		
		return false;
	});
 
	//HIDE THE DIVS ON PAGE LOAD	
	$("div.accordionContent").hide();
	
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
			<li><a href="statistics.php">Statistics</a></li>
			<li class="current_page_item"><a href="rules.php">Rules</a></li>
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
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="points.php">Points</a></li>
			<li><a href="team.php">My Team</a></li>
			<li><a href="transfer.php">Transfer</a></li>
			<li class="current_page_item"><a href="rules.php">Rules</a></li>
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
<div id="pagehelp">
	<!-- start content -->


</head>
			
		



	
				<div id="toptablerules" class="clearfix">

	
	<div id="products">
  								<div class="head1">
	<h1>Rules</h1>
	</div>
  <div id="catalog">
    <h2 class="rules"><a href="#">Selecting your initial squad</a></h2>
   <div class="accordionContent">
      <ul>
        <li>Squad Size</li>
		<p>To join the game select a fantasy futsal squad of 7 players <p>
        <li>Budget</li>
		<p>The total value of your initial squad must not exceed £45 million <p>
      </ul>
    </div>
    <h2 class="rules"><a href="#">Managing your team</a></h2>
   <div class="accordionContent">
      <ul>
        <li>Choosing your starting 5</li>
		<p>From your 7 player squad, select 5 players by the Gameweek deadline to form your team</p>
		<p>All your points of the Gameweek will be scored by these 5 players, however if one or more doesn’t show up or get injured they may be automatically substituted</p>
		<p>Your team must play in formation 1-2-2 and there is no permanent goalkeeper</p>
		<p>A player can play at any position</p>
        <li>Selecting a captain</li>
		<p>From your starting 5 you nominate a captain </p>
		<p>Your captain’s score will be doubled</p>
        <li>Prioritizing your bench for automatic substitutions</li>
		<p>Your substitutes provide cover for unforeseen events like injuries and no-show by automatically replacing starting players who don’t play in a Gameweek</p>
		<p>If any of your outfield players play 0 minutes in the Gameweek, they will be substituted by the highest priority outfield substitute who played in the Gameweek</p>
      </ul>
    </div>
    <h2 class="rules"><a href="#">Making transfers</a></h2>
    <div class="accordionContent">
      <ul>
        <li>General</li>
		<p>After selecting your squad you can buy and sell players in the transfer market</p>
		<p>Unlimited transfers can be made at no cost before each Gameweek</p>
        <li>Player prices</li>
		<p>Player prices change during the season depends on the score of the player from the last Gameweek</p>
        <li>Deadlines</li>
		<p>All changes to your team must be made by the Gameweek deadline in order to take effect for that set of matches.</p>
		<p>Deadline: Wednesday, 23:59 </p>
      </ul>
    </div>
	    <h2 class="rules"><a href="#">Scoring</a></h2>
   <div class="accordionContent">
      <ul>
	  <p>During the season, your fantasy football players will be allocated points based on their performance in the Joga Bonito Futsal Training League</p>
        <li>Action</li>
		<p>For each victory = 1 p</p>
		<p>For each goal = 1 p</p>
		<p>For each goal assist = 1 p</p>
		<p>For each humiliations = 0,5 p</p>
		<p>For each combined win =  2 p</p>
        <li>Assists</li>
		<p>Assists are awarded to the player from the goal scoring team, who makes the final pass before a goal is scored</p>
		<p>If an opposing player touches the ball after the final pass before a goal is scored, significantly altering the intended destination of the ball, then no assist is awarded</p>
		<p>If a shot on goal is blocked by an opposition player, is saved by a goalkeeper or hits the woodwork, and a goal is scored from the rebound, then an assist is awarded</p>
        <p>If a player shoots or passes the ball and forces an opposing player to put the ball in his own net, then an assist is awarded</p>
		<p>In the event of a penalty or free-kick, the player earning the penalty or the free-kick is awarded an assist if a goal is directly scored, but not if he takes it himself, in which case no assists is given</p>
		<li>Humiliations</li>
		<p>If a player causes an opponent humiliation, 0,5 p will be awarded</p>
		<p>For example: Player 1 dribbles the other team and scores, and the crowd goes wild.</p>
		<li>Bonus</li>
		<p>The top 3 players from each Gameweek will be awarded 3,2,1 bonus points</p>
      </ul>
    </div>
	    
  </div>

			  
			</div>
	
	</div>
	<!-- end content -->
	<!-- start sidebar -->


	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>


</div>
<div id="s-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
		
          <div method="" class="signin" action="">
                <fieldset class="textbox2">
            	
                
                
                
                </fieldset>
          </div>
		</div>

<!-- start footer -->
<div id="footer">

	<p id="legal">( c ) 2014. All Rights Reserved. <a href="http://www.anderslangseth.no" target="_blank">Anders Langseth</a></p>
</div>
<script type="text/javascript">
$(document).ready(function() {
$('.register').die('click').live('click', function () {

var pw = $('#password').val();
var tn = $('#teamName').val();
var un = $('#username').val();
$fb = $('.feedback');
$regbox = $('#reg-box');
if(pw && tn && un){



$.ajax({
            type: "POST",
            data: {"teamName":tn, "username":un, "password":pw, "submit":"submit"},
            url: "register.php",
            success: function(data){
          if(data == "NOEMAIL"){
		
		  $regbox.addClass('b1');
		$fb.html("<p> This is no valid email address </p>");
		
		}
		else if(data =="TEAMNAMETAKEN"){
		$regbox.addClass('b1');
		$fb.html("<p> This teamname is taken </p>");

		}
		else if(data =="USERNAMETAKEN"){
		$regbox.addClass('b1');
		$fb.html("<p> This username is taken</p>");

		}
		else if(data =="SUCCESS"){
		$regbox.removeClass('b1');
		$regbox.addClass('b2');
			$fb.html("<p> Welcome </p>");
$('#reg-box').fadeOut(1000);
$('#mask').fadeOut(1000);
window.location.replace("http://dinliga.net/index.php");
		}

                }
            });	
}
else{
$regbox.addClass('b1');
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
		
          if(data == "WRONGUNPW" || data == "PWNOTMATCH"){
		  $loginbox.addClass('b1');
		$fb.html("<p> Email and Password combination is wrong </p>");
		}
		else if(data =="NOEMAIL"){
		  $loginbox.addClass('b1');
		$fb.html("<p> This is not a valid Email address </p>");
		
		}
		else if(data =="SUCCESS"){
				  $loginbox.removeClass('b1');
		  $loginbox.addClass('b2');
			$fb.html("<p> Welcome </p>");
$('#log-box').fadeOut(1000);
$('#mask').fadeOut(1000);
window.location.replace("http://dinliga.net/index.php");
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
