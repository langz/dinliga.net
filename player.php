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
	<body>	
	<div id="contentprofile" class="clearfix">
		<section id="left">
	   	<?php
		$selected_player = $_POST["playerlname"];
	
			include 'connect.php';
						$plok7 = mysql_query("SELECT img FROM Player Where Player.lname='" .mysql_real_escape_string($selected_player). "'");
			$bilde = mysql_result($plok7,0);
			$maxpoint = mysql_query("SELECT id, fname, lname, position, price, SUM(points) as 'points' FROM PlayerGW, Player WHERE PlayerGW.player=Player.id AND Player.lname= '" .mysql_real_escape_string($selected_player). "'");   
            while($maxpoints = mysql_fetch_array($maxpoint)) {
            ?>
    			<div id="userStats" class="clearfix">
				<div class="pic">
					<a href="#"><img src=<?php if($bilde==""){
					echo "img/user_avatar.jpg";
					}
					else{
					echo $bilde;
					}?> width="150" height="150" /></a>
				</div>
				
				<div class="data">
					<h1><?php echo $maxpoints['fname']?> <?php echo $maxpoints['lname']?></h1>
					<h3><?php echo $maxpoints['position']?></h3>
					
			
					<div class="sep"></div>
					<ul class="numbers clearfix">
						<li>Points<strong><?php echo $maxpoints['points']?></strong></li>
						<li>Value<strong><?php echo $maxpoints['price']?></strong></li>
						<li class="nobrdr">Selected by<strong>
						 <?php
            }
			?>
			
						<?php 
						include 'connect.php'; 
						
												$antallSpillere = mysql_query("SELECT COUNT(*) as 'as' FROM Squad WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek))");
						$antallAktuelle = mysql_query("SELECT COUNT(*) as 'aa' FROM Squad, Player WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.lname= '" .mysql_real_escape_string($selected_player). "' AND(Player.id=Squad.player1 OR Player.id=Squad.player2 OR Player.id=Squad.player3 OR Player.id=Squad.player4 OR Player.id=Squad.player5 OR Player.id=Squad.player6 OR Player.id=Squad.player7)");
						while($as = mysql_fetch_array($antallSpillere)) {
							while($aa = mysql_fetch_array($antallAktuelle)) {
							$snitt = ($aa['aa']/$as['as'])*100;
							$svar = round( $snitt, 1, PHP_ROUND_HALF_UP);
							
							echo $svar.'%';
							
							}
							}
						?>
						
						</strong></li>
					</ul>
				</div>
				
			</div>

           
		<?php 
			$sistrunde = mysql_query("SELECT gameweek, victory, combinedvictory, attendance, humiliated, assists, goals, bonus, points FROM PlayerGW, Player WHERE gameweek=(SELECT MAX(gameweek) FROM PlayerGW) AND Player.id = PlayerGW.player AND Player.lname= '" .mysql_real_escape_string($selected_player). "'"); 
                       while($sistrund = mysql_fetch_array($sistrunde)) {
					   
            ?>
    					<div id ="toptable" class="clearfix">
				<p>Gameweek <?php echo $sistrund['gameweek']?></p>
				<table id="hor-minimalist-b" summary="Employee Pay Sheet">
    <thead>
    	<tr>
        	<th scope="col">Statistics</th>
            <th scope="col">Value</th>
            <th scope="col">Points</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
        	<td>Victories</td>
            <td>1</td>
            <td><?php echo $sistrund['victory']*1?></td>
        </tr>
        <tr>
        	<td>Combined Victory</td>
            <td>2</td>
            <td><?php echo $sistrund['combinedvictory']*2?></td>
        </tr>
        <tr>
        	<td>Attendance</td>
            <td>1</td>
            <td><?php echo $sistrund['attendance']*1?></td>
        </tr>
        <tr>
        	<td>Humiliation</td>
            <td>0.5</td>
            <td><?php echo $sistrund['humiliated']*0.5?></td>
        </tr>
		    <tr>
        	<td>Assists</td>
            <td>1</td>
            <td><?php echo $sistrund['assists']*1?></td>
        </tr>
		    <tr>
        	<td>Goals</td>
            <td>1</td>
            <td><?php echo $sistrund['goals']*1?></td>
        </tr>
				    <tr>
        	<td>Bonus</td>
            <td><?php echo $sistrund['bonus']*1?></td>
            <td><?php echo $sistrund['bonus']*1?></td>
        </tr>
		    <tr>
        	<td>Total Points</td>
            <td></td>
            <td><?php echo $sistrund['points']?></td>
        </tr>
    </tbody>
</table>
</div>	

            <?php
			
            }
	?>

		
	
		

</section>
<section id="right">
				<div class="gcontent">
								<?php
		$selected_player = $_POST["playerlname"];
	
			include 'connect.php';
			$spellrid = mysql_query("SELECT id from Player WHERE Player.lname='" .mysql_real_escape_string($selected_player). "'");
			$spellrIDEN = mysql_result($spellrid,0);
			$badg = mysql_query("SELECT * FROM GWTeam WHERE player1='" .mysql_real_escape_string($spellrIDEN). "'");

            ?>
				<div class="head"><h1>MVP(<?php echo mysql_num_rows($badg) ?>)</h1></div>
				<div class="boxy">
				
					
					<div class="badgeCount">
					<?php
							 if(mysql_num_rows($badg) > 0){
		 while($badges = mysql_fetch_array($badg)) {
					
					?>
						<a><img src="img/foursquare-badge.png" /></a>
						<?php }} ?>
					
					</div>
				</div>
			</div>
			
			<div class="gcontent">
				<div class="head"><h1>5 Last GW</h1></div>
				<div class="boxy">
						<table id="hor-minimalist-bc" summary="Employee Pay Sheet">
    <thead>
	   	<tr>
        	<th scope="col">GW</th>
            <th scope="col">Points</th>
        </tr>
    </thead>
    <tbody>
					<?php
		$selected_player = $_POST["playerlname"];
	
			include 'connect.php';
		
			$siste5 = mysql_query("SELECT gameweek, points FROM PlayerGW, Player WHERE PlayerGW.player=Player.id AND Player.lname='" .mysql_real_escape_string($selected_player). "' ORDER BY gameweek DESC LIMIT 5");
		 
		 while($s5 = mysql_fetch_array($siste5)) {
            ?>
    	<tr>
            <td><?php echo $s5['gameweek']?></td>
            <td><?php echo $s5['points']?></td>
        </tr>
            <?php
			
            }
			?>
					   </tbody>
</table>					

				</div>
				
			</div>
			<form name="statform" method="post" action ="playerInfo.php">
			<input type="hidden" name="playerid" value="<?php echo $selected_player?>">
			<p> <input class ="submitLink" type="submit" name= "playeridsubmit" value="See all gameweeks..." ></p>
			</form>
		</section>


	
	</div>


			
		</div>
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
<!-- start footer -->
<div id="footer">
	<p id="legal">( c ) 2014. All Rights Reserved.<a href="http://www.anderslangseth.no" target="_blank">Anders Langseth</a></p>
</div>
<!-- end footer -->
</body>
</html>
