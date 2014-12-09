<?php 
header('Content-Type: text/html; charset=utf-8');
			session_start();
include 'connect.php';
if (!isset($_SESSION['user'])) {

header("Location: index.php");
}



$user=$_SESSION['user'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>dinliga.net</title>
<link rel="SHORTCUT ICON" href="favicon.png" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='http://code.jquery.com/jquery-1.4.3.min.js'></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.js"></script>
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
<body>
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
	
	
	<div id="menu">
		<ul>
			<li><a href="index.php">Homepage</a></li>
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="points.php">Points</a></li>
			<li class="current_page_item"><a href="team.php">My Team</a></li>
			<li><a href="transfer.php">Transfer</a></li>
						<li><a href="rules.php">Rules</a></li>
			<li><a href="contact.php">Contact</a></li>
			<?php
			session_start();


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
	<div id="contentprofile" class="clearfix">
	<section id="left">
	<div id="userStats" class="clearfix">
				<div class="pic">
					<a href="#"><img src="img/manager.png" width="150" height="150" /></a>
				</div>
	<div class="data">
	<?php 
$bruker =$_SESSION['user'];

		$dinpoengs = mysql_query("SELECT sum(points) FROM Squad, Team Where Team.user='" .mysql_real_escape_string($bruker). "' AND Squad.team=Team.name");
		$dps = mysql_result($dinpoengs,0);
		
            $results = mysql_query("select name, user from Team where user='" .mysql_real_escape_string($bruker). "'");
			
            while($row = mysql_fetch_array($results)) {
?>
					<?php $username=$row['name']?>
					<h1><?php echo $username ?></h1>
					
					Managed by: <h3><?php echo $row['user']?></h3>
					
			
					<div class="sep"></div>
					<ul class="numbers clearfix">
						<li id="citem">Total Points<strong><?php echo $dps?></strong></li>
						<li id="cprice">TeamValue<strong>0</strong></li>
						<li id="bank">Bank<strong>45</strong></li>
						<?php }?>
					</ul>
				</div>
				</div>
				
				Select your captain: 
<select id ="captainlist" name="captain">

<?php

$plid1;
$plid2;
$plid3;
$plid4;
$plid5;
$plid6;
$plid7;
$plidc;


$playerz = mysql_query("SELECT player1, player2, player3, player4, player5, player6, player7, captain FROM Squad Where Squad.team='" .mysql_real_escape_string($username). "' ORDER BY gameweek DESC LIMIT 1");
if(mysql_num_rows($playerz) > 0){

while($p6a = mysql_fetch_array($playerz)) {
global $plid1, $plid2, $plid3, $plid4, $plid5, $plid6, $plid7, $plidc;

$plid1 = $p6a['player1'];
$plid2 = $p6a['player2'];
$plid3 = $p6a['player3'];
$plid4 = $p6a['player4'];
$plid5 = $p6a['player5'];
$plid6 = $p6a['player6'];
$plid7 = $p6a['player7'];
$plidc = $p6a['captain'];
}

$p1l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid1). "'");
$player1ln = mysql_result($p1l,0);

$p2l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid2). "'");
$player2ln = mysql_result($p2l,0);

$p3l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid3). "'");
$player3ln = mysql_result($p3l,0);

$p4l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid4). "'");
$player4ln = mysql_result($p4l,0);

$p5l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid5). "'");
$player5ln = mysql_result($p5l,0);

$p6l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid6). "'");
$player6ln = mysql_result($p6l,0);

$p7l = mysql_query("SELECT lname FROM Player Where Player.id='" .mysql_real_escape_string($plid7). "'");
$player7ln = mysql_result($p7l,0);

$check1 = ($plid1 == $plidc);
$check2 = ($plid2 == $plidc);
$check3 = ($plid3 == $plidc);
$check4 = ($plid4 == $plidc);
$check5 = ($plid5 == $plidc);
$check6 = ($plid6 == $plidc);
$check7 = ($plid7 == $plidc);

if($check1>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player1ln?></option> 
<OPTION><?php echo $player2ln?></option> 
<OPTION><?php echo $player3ln?></option> 
<OPTION><?php echo $player4ln?></option> 
<OPTION><?php echo $player5ln?></option> 
<OPTION><?php echo $player6ln?></option> 
<OPTION><?php echo $player7ln?></option> 

<?php }
else if($check2>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player2ln?></option> 
<OPTION><?php echo $player1ln?></option> 
<OPTION><?php echo $player3ln?></option> 
<OPTION><?php echo $player4ln?></option> 
<OPTION><?php echo $player5ln?></option> 
<OPTION><?php echo $player6ln?></option> 
<OPTION><?php echo $player7ln?></option> 


<?php }
else if($check3>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player3ln?></option> 
<OPTION><?php echo $player1ln?></option> 
<OPTION><?php echo $player2ln?></option> 
<OPTION><?php echo $player4ln?></option> 
<OPTION><?php echo $player5ln?></option> 
<OPTION><?php echo $player6ln?></option> 
<OPTION><?php echo $player7ln?></option> 


<?php }
else if($check4>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player4ln?></option> 
<OPTION><?php echo $player1ln?></option> 
<OPTION><?php echo $player2ln?></option> 
<OPTION><?php echo $player3ln?></option> 
<OPTION><?php echo $player5ln?></option> 
<OPTION><?php echo $player6ln?></option> 
<OPTION><?php echo $player7ln?></option> 


<?php }
else if($check5>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player5ln?></option> 
<OPTION><?php echo $player1ln?></option> 
<OPTION><?php echo $player2ln?></option> 
<OPTION><?php echo $player3ln?></option> 
<OPTION><?php echo $player4ln?></option> 
<OPTION><?php echo $player6ln?></option> 
<OPTION><?php echo $player7ln?></option> 


<?php }
else if($check6>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player6ln?></option> 
<OPTION><?php echo $player1ln?></option> 
<OPTION><?php echo $player2ln?></option> 
<OPTION><?php echo $player3ln?></option> 
<OPTION><?php echo $player4ln?></option> 
<OPTION><?php echo $player5ln?></option> 
<OPTION><?php echo $player7ln?></option> 


<?php }
else if($check7>0){
global $player1ln, $player2ln, $player3ln, $player4ln, $player5ln, $player6ln, $player7ln;
?>
<OPTION selected="selected"><?php echo $player7ln?></option> 
<OPTION><?php echo $player1ln?></option> 
<OPTION><?php echo $player2ln?></option> 
<OPTION><?php echo $player3ln?></option> 
<OPTION><?php echo $player4ln?></option> 
<OPTION><?php echo $player5ln?></option> 
<OPTION><?php echo $player6ln?></option> 

<?php } ?>



<?php } else{ ?>
<OPTION>Du har ingen spillere</option> 
<?php } ?>

</select>
<input class="saveTeam" type='submit' name='submit' value='Save Team'>
				
				<div id="toptable" class="clearfix">
			  <div class="leftsub"> 
			  
			  <?php
			
			  $p7 = mysql_query("SELECT player1, player2, player3, player4, player5, player6, player7 FROM Squad Where Squad.team='" .mysql_real_escape_string($username). "' ORDER BY gameweek DESC LIMIT 1");
if(mysql_num_rows($p7) > 0){
while($p7a = mysql_fetch_array($p7)) {

$pl1 = $p7a['player1'];
$pl2 = $p7a['player2'];
$pl3 = $p7a['player3'];
$pl4 = $p7a['player4'];
$pl5 = $p7a['player5'];
$pl6 = $p7a['player6'];
$pl7 = $p7a['player7'];
}
$pl1q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl1). "'");
while($pl1res = mysql_fetch_array($pl1q)) { ?>

<div id="cart1" class="draktdiv"> 
      <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl1res['lname']?></div><div class='price'><?php echo $pl1res['price']?></div>
    </div>

<?php } 
$pl2q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl2). "'");
while($pl2res = mysql_fetch_array($pl2q)) { ?>

<div id="cart2" class="draktdiv"> 
     <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl2res['lname']?></div><div class='price'><?php echo $pl2res['price']?></div>
    </div>


<?php } $pl3q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl3). "'");
while($pl3res = mysql_fetch_array($pl3q)) { ?>

<div id="cart4" class="draktdiv"> 
      <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl3res['lname']?></div><div class='price'><?php echo $pl3res['price']?></div>
    </div>

<?php } $pl4q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl4). "'");
while($pl4res = mysql_fetch_array($pl4q)) { ?>

<div id="cart6" class="draktdiv"> 
       <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl4res['lname']?></div><div class='price'><?php echo $pl4res['price']?></div>
    </div>

<?php } $pl5q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl5). "'");
while($pl5res = mysql_fetch_array($pl5q)) { ?>

<div id="cart7" class="draktdiv"> 
      <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl5res['lname']?></div><div class='price'><?php echo $pl5res['price']?></div>
    </div>

<?php } $pl6q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl6). "'");
while($pl6res = mysql_fetch_array($pl6q)) { ?>

<div id="cart8" class="draktdiv"> 
      <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl6res['lname']?></div><div class='price'><?php echo $pl6res['price']?></div>
    </div>

<?php } $pl7q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl7). "'");
while($pl7res = mysql_fetch_array($pl7q)) { ?>

<div id="cart9" class="draktdiv"> 
       <div class='drakt'> </div><div class='knapper'><div class='knapp3'> </div></div><div class='draktnavn'><?php echo $pl7res['lname']?></div><div class='price'><?php echo $pl7res['price']?></div>
    </div>

<?php } ?>


<?php } else{ ?>

    <div id="cart1" class="drakt1"> 
      
    </div> 
	 <div id="cart2" class="drakt1"> 
      
    </div> 
	 <div id="cart3" class="drakt1"> 
     
    </div> 
	 <div id="cart4" class="drakt1"> 
    
    </div> 
		 <div id="cart5" class="drakt1"> 
    
    </div> 
			 <div id="cart6" class="drakt1"> 
    
    </div> 
			 <div id="cart7" class="drakt1"> 
    
    </div> 

<?php } ?>
			  

</div> 
	
		
		
</div>


			</section>
			
			
			
	
	
	<!-- end content -->
	<!-- start sidebar -->
	
	
	
	
	
	
	
	
	
	
	
<p>	
Drag players around on the field to change positions.
</p>
<p>
The gray area is considered as the bench.
</p>
<section id="right">
				
				<div class="gcontent">
				<div class="head"><h1>Points/Ranking</h1></div>
				<div class="boxy">
			
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
    </thead>
    <tbody>
					<?php
		
	
			
		$antallMan = mysql_query("SELECT COUNT(DISTINCT(team)) from Squad");
		$am = mysql_result($antallMan,0);
		$dinpos = mysql_query("SELECT position FROM Team Where Team.user='" .mysql_real_escape_string($bruker). "'");
		$dinpo = mysql_result($dinpos,0);
		$dinpoeng = mysql_query("SELECT sum(Squad.points) FROM Squad, Team Where Team.user='" .mysql_real_escape_string($bruker). "' AND Squad.team=Team.name");
		
		$dp = mysql_result($dinpoeng,0);
            ?>
    	
		               <tr>
					   <td>Overall Points</td>
                    <td class="opoints"><?php echo $dp?></td>
                </tr>
        		               <tr>
							      <td>Overall Rank</td>
                    <td class="orank"><?php echo $dinpo?></td>
                </tr>		              
				<tr>
				   <td>Total Managers</td>
                    <td class="totalman"><?php echo $am?></td>
                </tr>
      
					   </tbody>
</table>

		

				</div>
				
			</div>
						<div class="gcontent">
				<div class="head"><h1>5 Last GW</h1></div>
				<div class="boxy">
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
    <thead>
	   	<tr>
        	<th scope="col">GW</th>
            <th scope="col">Points</th>
        </tr>
    </thead>
    <tbody>
					<?php
		
	
		
		
			$siste5 = mysql_query("SELECT gameweek, points FROM Squad, Team WHERE Squad.team=Team.name AND Team.user='" .mysql_real_escape_string($bruker). "' AND gameweek!=(SELECT MAX(nr) FROM Gameweek) ORDER BY gameweek DESC LIMIT 5");
		 
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
										<form name="statform" method="post" action ="statManager.php">
			<input type="hidden" name="playerid" value="">
			<p> <input class ="submitLink" type="submit" name= "playeridsubmit" value="See all Teams and Points" ></p>
			</form>
			</section>
	</div>
	<!-- end sidebar -->

</div>
<!-- end page -->
</div>
<div style="clear: both;">&nbsp;</div>
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
<script type='text/javascript'>//<![CDATA[ 

 $(function() {
 var bank =45;
 var total_price=0;
 if($('#cart1 .draktnavn').length && $('#cart2 .draktnavn').length && $('#cart4 .draktnavn').length && $('#cart6 .draktnavn').length && $('#cart7 .draktnavn').length && $('#cart8 .draktnavn').length && $('#cart9 .draktnavn').length){

var s1 = parseFloat( $('#cart1 .price').html());
var s2 = parseFloat( $('#cart2 .price').html());
var s3 = parseFloat( $('#cart4 .price').html());
var s4 = parseFloat( $('#cart6 .price').html());
var s5 = parseFloat( $('#cart7 .price').html());
var s6 = parseFloat( $('#cart8 .price').html());
var s7 = parseFloat( $('#cart9 .price').html());
var summen = s1 + s2 + s3 + s4 + s5 + s6 + s7;
bank = bank - summen;
total_price = total_price + summen;
	$("#cprice").html("Teamvalue <strong>" + total_price.toFixed(2) + "</strong>");
	$("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
}
 
			initSwap();
           function initSwap() {
		   
		   $('.ui-draggable-dragging').remove();
                initDroppable($(".leftsub .draktdiv"));
                initDraggable($(".leftsub .draktdiv"));
				$("#.leftsub .draktdiv").disableSelection();
            }
           function initDraggable($elements) {
                $elements.draggable({
                   
                    helper: "clone",
                    cursorAt: {
        left: 24,
        bottom: 68
    },
                    revert: "invalid"
                });
            }
            function initDroppable($elements) {
                $elements.droppable({
                    activeClass: "ui-state-default",
                    hoverClass: "ui-drop-hover",
                    accept: ":not(.ui-sortable-helper)",
 
             
                over: function(event, ui) {
                        var $this = $(this);
                    },
                    drop: function(event, ui) {
					var html = [];
					var html2 =[];
					
					         $(this).each(function() {
						
                html.push('<div id='+ui.draggable.get(0).id+' class="draktdiv">'+$(this).html()+'</div>');
				
				html2.push('<div id='+this.id+' class="draktdiv">'+ui.draggable.html()+'</div>');
			
                     });
					 $(this).replaceWith(html.join(''));
					 $(ui.draggable).replaceWith(html2.join(''));
				
			
          
			
				 
 
				 
                        initSwap();
					
				   
				
                       
	             
		
                    }
                });
            }
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
		$('.saveTeam').die('click').live('click', function () {
		$player1 = $('#cart1 .draktnavn').html();
		$player2 = $('#cart2 .draktnavn').html();
		$player3 = $('#cart4 .draktnavn').html();
		$player4 = $('#cart6 .draktnavn').html();
		$player5 = $('#cart7 .draktnavn').html();
		$player6 = $('#cart8 .draktnavn').html();
		$player7 = $('#cart9 .draktnavn').html();
		$c = $('#captainlist option:selected').html();
		$user = $('.data h3').html();
		$team = $('.data h1').html();
		
$.ajax({
            type: "POST",
            data: {"team":$team, "p1":$player1, "p2":$player2, "p3":$player3, "p4":$player4, "p5":$player5, "p6":$player6, "p7":$player7, "c":$c},
            url: "saveTransfer.php",
            success: function(data){

			if(data == "INSERT"){
			alert("Your team is saved");
			}
			else if(data == "UPDATE"){
			alert("Your team is saved");
			}
			else if(data == "TIME"){
			alert("Changes is not allowed between 01.00 - 14.00 on Thursday");
			}
			else{
			}
			}
            });
			

});
        });

  


//]]>  

</script>
</body>
</html>