<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>dinliga.net</title>
<link rel="SHORTCUT ICON" href="favicon.png" />
<meta property="og:image" content="http://dinliga.net/img/link.jpg?t=12345?"/>
<meta property="og:title" content="Dinliga.net: A fantasy League for JogaBonitoFutsalBergen" />
<meta property="og:description" content="Dinliga.net is a fantasy league made for the futsalteam JogaBonito" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="image_src" href="http://dinliga.net/images/img05.jpg"/>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.4.3.min.js'></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.js"></script>
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
	
$('.knapp3').die('click').live('click', function () {
			

if( $(this).parent().parent().find('.draktnavn').length){			

$lname1 = $(this).parent().parent().find(".draktnavn").html();


$.ajax({
            type: "POST",
            data: {"playerlname":$lname1},
            url: "player1.php",
            success: function(data){
		
               //data will contain the vote count echoed by the controller i.e.  
                 "yourVoteCount"
              //then append the result where ever you want like
		
				$('fieldset.textbox2').html(data);
				 
				 	var loginBox = $("#s-box");

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
				$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	
	});
                }
            });	
}
else{
 }


});
$('.playerlname').die('click').live('click', function () {
			

		

$lname1 = $(this).html();


$.ajax({
            type: "POST",
            data: {"playerlname":$lname1},
            url: "player1.php",
            success: function(data){
		
               //data will contain the vote count echoed by the controller i.e.  
                 "yourVoteCount"
              //then append the result where ever you want like
		
				$('fieldset.textbox2').html(data);
				 
				 	var loginBox = $("#s-box");

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
				$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	
	});
                }
            });	




});
$('.bildelink').die('click').live('click', function () {
			

if( $(this).attr('id').length){			

var lnamen = $(this).attr('id');


$.ajax({
            type: "POST",
            data: {"playerlname":lnamen},
            url: "player1.php",
            success: function(data){
		
               //data will contain the vote count echoed by the controller i.e.  
                 "yourVoteCount"
              //then append the result where ever you want like
		
				$('fieldset.textbox2').html(data);
				 
				 	var loginBox = $("#s-box");

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
				$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	
	});
                }
            });	
}
else{
 }


});
$('.knapp2').die('click').live('click', function () {
			

if( $(this).parent().find('.lname').length){			

$lname1 = $(this).parent().find(".lname").html();


$.ajax({
            type: "POST",
            data: {"playerlname":$lname1},
            url: "player1.php",
            success: function(data){
		
               //data will contain the vote count echoed by the controller i.e.  
                 "yourVoteCount"
              //then append the result where ever you want like
		
				$('fieldset.textbox2').html(data);
				 
				 	var loginBox = $("#s-box");

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
				$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	
	});
                }
            });	
}
else{
 }


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
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="statistics.php">Statistics</a></li>
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
					<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="statistics.php">Statistics</a></li>
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

</head>
			
		
<section id="right1">

<div class="gcontent">
	
				<div id="toptable" class="clearfix">
								<div class="head1">
	<h1>Gameweek <?php 						$gw = mysql_query("SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)");
$gameweek = mysql_result($gw,0); echo $gameweek?> Dreamteam</h1>
	</div>
			  <div class="left"> 
			  
			  <?php

			  $p7 = mysql_query("SELECT player1, player2, player3, player4, player5 FROM GWTeam Where gameweek='" .mysql_real_escape_string($gameweek). "'");

while($p7a = mysql_fetch_array($p7)) {

$pl7 = $p7a['player1'];
$pl6 = $p7a['player2'];
$pl4 = $p7a['player3'];
$pl2 = $p7a['player4'];
$pl1 = $p7a['player5'];
}
$pl1q = mysql_query("SELECT lname, SUM(points) as 'points' FROM PlayerGW, Player WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.id=PlayerGW.player AND Player.id='" .mysql_real_escape_string($pl1). "'");
while($pl1res = mysql_fetch_array($pl1q)) { ?>

<div id="cart1" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl1res['lname']?></div><div class='price'><?php echo $pl1res['points']?></div></div>
    </div>

<?php } 
$pl2q = mysql_query("SELECT lname, SUM(points) as 'points' FROM PlayerGW, Player WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.id=PlayerGW.player AND Player.id='" .mysql_real_escape_string($pl2). "'");
while($pl2res = mysql_fetch_array($pl2q)) { ?>

<div id="cart2" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl2res['lname']?></div><div class='price'><?php echo $pl2res['points']?></div></div>
    </div>

<?php } 
$pl4q = mysql_query("SELECT lname, SUM(points) as 'points' FROM PlayerGW, Player WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.id=PlayerGW.player AND Player.id='" .mysql_real_escape_string($pl4). "'");
while($pl4res = mysql_fetch_array($pl4q)) { ?>

<div id="cart4" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl4res['lname']?></div><div class='price'><?php echo $pl4res['points']?></div></div>
    </div>


<?php } 
$pl6q = mysql_query("SELECT lname, SUM(points) as 'points' FROM PlayerGW, Player WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.id=PlayerGW.player AND Player.id='" .mysql_real_escape_string($pl6). "'");
while($pl6res = mysql_fetch_array($pl6q)) { ?>

<div id="cart6" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl6res['lname']?></div><div class='price'><?php echo $pl6res['points']?></div></div>
    </div>

<?php } 
$pl7q = mysql_query("SELECT lname, SUM(points) as 'points' FROM PlayerGW, Player WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.id=PlayerGW.player AND Player.id='" .mysql_real_escape_string($pl7). "'");
while($pl7res = mysql_fetch_array($pl7q)) { ?>

<div id="cart7" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl7res['lname']?></div><div class='price'><?php echo $pl7res['points']?></div></div>
    </div>

<?php } ?>


</div>
</div>
</div>



<form method="post" action ="teamcheck.php">
			<div class="gcontent">
		<div id="toptable2" class="clearfix">
			<div class="gcontent">
			
					<?php

			$gw = mysql_query("SELECT max(nr) as 'nr' FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)");
			while($g = mysql_fetch_array($gw)) {
			?>
			<div class="head"><h1>Top3 Teams GW <?php echo $g['nr']?></h1></div>
			<?php
			}
            ?>
				
				<div class="boxy">
			
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
    <thead>
	   	<tr>
        	<th scope="col">Team</th>
            <th scope="col">Points</th>
        </tr>
    </thead>
    <tbody>
					<?php
	
	
		$dinpoeng = mysql_query("SELECT points, team FROM Squad WHERE gameweek =(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) ORDER BY points DESC LIMIT 3");
		
			
		 
		 while($m3 = mysql_fetch_array($dinpoeng)) {
            ?>
    	<tr>
		<td> <input class ="submitLink" type="submit" name= "managername" value="<?php echo $m3['team']?>" ></td>
         
            <td><?php echo $m3['points']?></td>
        </tr>
            <?php
			
            }
			?>
					   </tbody>
</table>	
			

				</div>
				
			</div>
			
			<div class="gcontent">
				<div class="head"><h1>Top3 Teams</h1></div>
				<div class="boxy">
				
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
	   	<tr>
        	<th scope="col">Teams</th>
            <th scope="col">Points</th>
        </tr>
    </thead>
    <tbody>
					<?php

	
		
		
			$dinpoengs = mysql_query("SELECT sum(Squad.points) as 'total', team FROM Squad, Team WHERE Squad.team = Team.name GROUP BY team ORDER BY total DESC LIMIT 3");
		 
		 while($m3a = mysql_fetch_array($dinpoengs)) {
            ?>
    	<tr>
		
       <td> <input class ="submitLink" type="submit" name= "managername" value="<?php echo $m3a['team']?>" ></td>
            <td><?php echo $m3a['total']?></td>
        </tr>
            <?php
			
            }
			?>
					   </tbody>
</table>	
			

				</div>
				
			</div>
			</div>
			</div>
			</form>

			<div class="gcontent">
		<div id="toptable2" class="clearfix">
			<div class="gcontent">
			
					<?php

			$gw = mysql_query("SELECT max(nr) as 'nr' FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)");
			while($g = mysql_fetch_array($gw)) {
			?>
			<div class="head"><h1>Top3 Players Picked GW <?php echo $g['nr']?></h1></div>
			<?php
			}
            ?>
				
				<div class="boxy">
			
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
    <thead>
	   	<tr>
        	<th scope="col">Player</th>
            <th scope="col">%</th>
        </tr>
    </thead>
    <tbody>
					<?php
	
	
		$dinpoengaas = mysql_query("SELECT lname, (COUNT(*)/(SELECT COUNT(*) as 'as' FROM Squad WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek))))*100 as 'telle' FROM Player, Squad WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND (Player.id=player1 OR Player.id=player2 OR Player.id=player3 OR Player.id=player4 OR Player.id=player5 OR Player.id=player6 OR Player.id=player7) GROUP BY lname ORDER BY telle DESC LIMIT 3");
		
			
		 
		 while($m3e = mysql_fetch_array($dinpoengaas)) {
            ?>
    	<tr>
		<td class="playerlname"><?php echo $m3e['lname']?></td>
         
            <td><?php
			
			$capps = $m3e['telle'];
			$capps = round( $capps, 1, PHP_ROUND_HALF_UP);
			echo $capps;?>%</td>
        </tr>
            <?php
			
            }
			?>
					   </tbody>
</table>	
			

				</div>
				
			</div>
			
			<div class="gcontent">
					<?php

			$gws = mysql_query("SELECT max(nr) as 'nr' FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)");
			while($gs = mysql_fetch_array($gws)) {
			?>
			<div class="head"><h1>Top3 Players Captained GW<?php echo $gs['nr']?></h1></div>
			<?php
			}
            ?>
				<div class="boxy">
				
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
	   	<tr>
        	<th scope="col">Player</th>
            <th scope="col">%</th>
        </tr>
    </thead>
    <tbody>
					<?php

	
		
		
			$dinpoengsse = mysql_query("SELECT lname, (COUNT(*)/(SELECT COUNT(*) as 'as' FROM Squad WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek))))*100 as 'telle' FROM Player, Squad WHERE gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND Player.id=Squad.captain GROUP BY lname ORDER BY telle DESC LIMIT 3");
		 
		 while($m3aes = mysql_fetch_array($dinpoengsse)) {
            ?>
    	<tr>
		
       <td class="playerlname"><?php echo $m3aes['lname']?> </td>
            <td><?php $capp = $m3aes['telle'];
			$capp = round( $capp, 1, PHP_ROUND_HALF_UP);
			echo $capp;?>%</td>
        </tr>
            <?php
			
            }
			?>
					   </tbody>
</table>	
			

				</div>
				
			</div>
			</div>
			</div>
	
							<form name="statform" method="post" action ="statManager.php">
			<input type="hidden" name="playerid" value="">
			<p> <input class ="submitLink" type="submit" name= "playeridsubmit" value="See all Teams and Points" ></p>
			</form>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
<div id="sidebar">
<section id="right">

		<div class="gcontent">
								<?php
		$selected_player = $_POST["playerlname"];
	
			include 'connect.php';
			

			$mvp = mysql_query("SELECT player1 from GWTeam WHERE GWTeam.gameweek='" .mysql_real_escape_string($gameweek). "'");

$mvpid = mysql_result($mvp,0);
						$plok7 = mysql_query("SELECT img FROM Player Where Player.id='" .mysql_real_escape_string($mvpid). "'");
			$bilde = mysql_result($plok7,0);
$mvpname = mysql_query("SELECT fname, lname from Player WHERE Player.id='" .mysql_real_escape_string($mvpid). "'");
$pppp = mysql_query("SELECT points FROM PlayerGW where gameweek=(SELECT max(nr) FROM Gameweek
WHERE nr NOT IN (SELECT MAX(nr) FROM Gameweek)) AND PlayerGW.player='" .mysql_real_escape_string($mvpid). "'");
$pop = mysql_result($pppp,0);
while($rowzz = mysql_fetch_array($mvpname)) {
            ?>
				<div class="head"><h1>MVP GW<?php echo $gameweek?></h1></div>
				<div class="boxy">
				<div id="mvpdiv">
				<div id="mvp">
				<a  href="#" onClick="return false;" class="bildelink" id="<?php echo $rowzz['lname']?>"><img src=<?php if($bilde==""){
					echo "img/user_avatar.jpg";
					}
					else{
					echo $bilde;
					}?> width="150" height="150"/> </a>
				</div>
				<div id="mvptext">
				<?php echo $rowzz['fname']?> <?php echo $rowzz['lname']?> (<?php echo $pop ?>p)
				
				</div>
				
				
				</div>
					
		
				</div>
				<?php } ?>
			</div>
			
				<div class="gcontent">
				<div class="head"><h1>This Round</h1></div>
				<div class="boxy">
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
	   	<tr>
        	<th scope="col">Statistics</th>
            <th scope="col">Value</th>
        </tr>
    </thead>
    <tbody>
					<?php
	
	
		
		
			$dwg = mysql_query("SELECT sum(victory) as 'victory', sum(combinedvictory) as 'combinedvictory', sum(goals) as 'goals', sum(assists) as 'assists', sum(attendance) as 'attendance', sum(humiliated) as 'humiliated', sum(points) as 'points', gameweek FROM PlayerGW WHERE gameweek='" .mysql_real_escape_string($gameweek). "'");
		 $mostp =  mysql_query("SELECT points FROM Squad WHERE gameweek='" .mysql_real_escape_string($gameweek). "' ORDER BY points DESC LIMIT 1");
		 $antallplayersz = mysql_query("SELECT COUNT(*) FROM Squad WHERE gameweek='" .mysql_real_escape_string($gameweek)."'");
		 $ap = mysql_result($antallplayersz,0);
		 $mp = mysql_result($mostp,0);
		  $mostpsss =  mysql_query("SELECT SUM(points) FROM Squad WHERE gameweek='" .mysql_real_escape_string($gameweek). "'");
		   $mpss = mysql_result($mostpsss,0);
		 while($dw = mysql_fetch_array($dwg)) {
            ?>
    	
		
			<tr>
			<td>Total Points</td>
            <td><?php echo $dw['points']?></td>
			</tr>
						<tr>
			<td>Most Manager Points</td>
            <td><?php echo $mp?></td>
			</tr>
						<tr>
			<td>Average Manager Points</td>
            <td>
			<?php $snittz = $mpss/$ap;
			$snittz = round( $snittz, 1, PHP_ROUND_HALF_UP);
			echo $snittz?>
			</td>
			</tr>
				<tr>
			<td>Players Attended</td>
            <td><?php echo $dw['attendance']?></td>
			</tr>
			<tr>
			<td>Goals</td>
			<td><?php echo $dw['goals']?></td>
			</tr>
			<tr>
			<td>Assists</td>
            <td><?php echo $dw['assists']?></td>
			</tr>
			<tr>
			<td>Humiliations</td>
			<td><?php echo $dw['humiliated']?></td>
			</tr>
			<tr>
			<td>Victories</td>
            <td><?php echo $dw['victory']?></td>
			</tr>
			<tr>
			<td>CombinedVictories</td>
			<td><?php echo $dw['combinedvictory']?></td>
			</tr>
			
        
            <?php
			
            }
			?>
					   </tbody>
</table>	
		

				</div>
				
			</div>
							<div class="gcontent">
				<div class="head"><h1>All Time</h1></div>
				<div class="boxy">
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
	   	<tr>
        	<th scope="col">Statistics</th>
            <th scope="col">Value</th>
        </tr>
    </thead>
    <tbody>
					<?php
	
	
		
		
			$dwgA = mysql_query("SELECT sum(victory) as 'victory', sum(combinedvictory) as 'combinedvictory', sum(goals) as 'goals', sum(assists) as 'assists', sum(attendance) as 'attendance', sum(humiliated) as 'humiliated', sum(points) as 'points', gameweek FROM PlayerGW");
		 $mostpA =  mysql_query("SELECT points FROM Squad ORDER BY points DESC LIMIT 1");
		 $antallplayerszA = mysql_query("SELECT COUNT(*) FROM Squad");
		 $apA = mysql_result($antallplayerszA,0);
		 $mpA = mysql_result($mostpA,0);
		  $mostpsssA =  mysql_query("SELECT SUM(points) FROM Squad");
		   $mpssA = mysql_result($mostpsssA,0);
		   
		   		 $unikspillere = mysql_query("SELECT COUNT(DISTINCT(player)) FROM PlayerGW");
		 $unk = mysql_result($unikspillere,0);
		   
		 while($dwA = mysql_fetch_array($dwgA)) {
            ?>
    	
		
			<tr>
			<td>Total Points</td>
            <td><?php echo $dwA['points']?></td>
			</tr>
						<tr>
			<td>Most Manager Points</td>
            <td><?php echo $mpA?></td>
			</tr>
						<tr>
			<td>Average Manager Points</td>
            <td>
			<?php $snittzA = $mpssA/$apA;
			$snittzA=round( $snittzA, 1, PHP_ROUND_HALF_UP);
			echo $snittzA?>
			</td>
			</tr>
				<tr>
			<td>Players Attended</td>
            <td><?php echo $unk?></td>
			</tr>
			<tr>
			<td>Goals</td>
			<td><?php echo $dwA['goals']?></td>
			</tr>
			<tr>
			<td>Assists</td>
            <td><?php echo $dwA['assists']?></td>
			</tr>
			<tr>
			<td>Humiliations</td>
			<td><?php echo $dwA['humiliated']?></td>
			</tr>
			<tr>
			<td>Victories</td>
            <td><?php echo $dwA['victory']?></td>
			</tr>
			<tr>
			<td>CombinedVictories</td>
			<td><?php echo $dwA['combinedvictory']?></td>
			</tr>
			
        
            <?php
			
            }
			?>
					   </tbody>
</table>	
		

				</div>
				
			</div>
					<div class="gcontent">
			

	
	
			<div class="head"><h1>Top3 Player Value</h1></div>
	
				<div class="boxy">
				
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
	   	<tr>
        	<th scope="col">Player</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
					<?php

	
		
		
	$gwsert = mysql_query("SELECT lname, price FROM Player ORDER BY price DESC LIMIT 3");
			
		 
		 while($mrt = mysql_fetch_array($gwsert)) {
            ?>
    	<tr>
		
       <td class="playerlname"><?php echo $mrt['lname']?> </td>
            <td><?php echo $mrt['price']?>$</td>
        </tr>
            <?php
			
            }
			?>
					   </tbody>
</table>	
			

				</div>
				
			</div>
			</section>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>

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
