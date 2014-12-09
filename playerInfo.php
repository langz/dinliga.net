<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Unembellished 
Version    : 1.0
Released   : 20090428
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>dinliga.net</title>
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
	</div>
	
	
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="points.php">Points</a></li>
			<li><a href="team.php">My Team</a></li>
			<li><a href="transfer.php">Transfer</a></li>
			<?php
			session_start();
include 'connect.php';

if (!isset($_SESSION['user'])) {
 ?>
			<li>	        	<div class="btn-sign">
				<a href="#login-box" class="login-window">Login</a>
        	</div>
			       <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="login.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                <input class="submit button" type='submit' name='submit' value='Sign in'>
                
                
              
                
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
		
          <form method="post" class="signin" action="register.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
				
				<label class="teamName">
                <span>TeamName</span>
                <input id="teamName" name="teamName" value="" type="text" autocomplete="on" placeholder="teamName">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                <input class="submit button" type='submit' name='submit' value='Register'>
                
                
                
                </fieldset>
          </form>
		</div>
		</li>
	
        <?php } else{  $user=$_SESSION['user']; ?>
		
		
		<li>
	<div class="btn-sign1">
		<form method="post" action="logout.php">
		<input class="submitLogOut" type='submit' name='submit' value='Logout'>
		</form>
		</div>
		</li>
 <?php } ?>
 
 
		</ul>
	</div>
</div>
<!-- end header -->

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
	


</body>
<form method="post" action ="player.php">
	<table id="newspaper-a" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col">Gameweek</th>
            <th scope="col">Victories</th>
			<th scope="col">Combined Victories</th>
            <th scope="col">Attendance</th>
            <th scope="col">Humiliation</th>
			<th scope="col">Assists</th>
			<th scope="col">Goals</th>
            <th scope="col">Points</th>
			
        </tr>
    </thead>
    <tbody>
    	<?php
		     
			include 'connect.php';
			$playerid = $_POST['playerid'];
            $results = mysql_query("SELECT gameweek, victory, combinedvictory, goals, assists, attendance, points, humiliated FROM PlayerGW, Player WHERE PlayerGW.player=Player.id AND Player.lname='" .mysql_real_escape_string($playerid). "' ORDER BY gameweek");
            echo '<h2>' .$playerid. '</h2>';
			while($row = mysql_fetch_array($results)) { 
            ?>
			
                <tr>
                   
					<td><?php echo $row['gameweek']?></td>
					<td><?php echo $row['victory']?></td>
					<td><?php echo $row['combinedvictory']?></td>
					<td><?php echo $row['attendance']?></td>
					<td><?php echo $row['humiliated']?></td>
					<td><?php echo $row['assists']?></td>
					<td><?php echo $row['goals']?></td>
					<td><?php echo $row['points']?></td>
				
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
<!-- start footer -->
<div id="footer">
	<p id="legal">( c ) 2014. All Rights Reserved. <a href="http://www.anderslangseth.no" target="_blank">Anders Langseth</a></p>
</div>
<!-- end footer -->
</body>
</html>
