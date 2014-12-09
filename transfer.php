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
			<li><a href="team.php">My Team</a></li>
			<li class="current_page_item"><a href="transfer.php">Transfer</a></li>
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
            $results = mysql_query("select name, user from Team where user='" .mysql_real_escape_string($bruker). "'");
            while($row = mysql_fetch_array($results)) {
?>
<?php $username=$row['name']?>
					<h1><?php echo $username?></h1>
					
					Managed by: <h3><?php echo $row['user']?></h3>
					
			
					<div class="sep"></div>
					<ul class="numbers clearfix">
						<li id="citem">#Players<strong>0</strong></li>
						<li id="cprice">TeamValue<strong>0</strong></li>
						<li id="bank">Bank<strong>45</strong></li>
						<?php }?>
					</ul>
				</div>
				</div>
				<input id="btn_clear" type='submit' name='submit' value='Clear Team'>
				<input class="saveTeam" type='submit' name='submit' value='Transfer'>
				<div id="toptable" class="clearfix">
			  <div class="left"> 
			  
			  <?php
			
$p7 = mysql_query("SELECT player1, player2, player3, player4, player5, player6, player7, captain FROM Squad Where Squad.team='" .mysql_real_escape_string($username). "' ORDER BY gameweek DESC LIMIT 1");
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

<div id="cart1" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl1res['lname']?></div><div class='price'><?php echo $pl1res['price']?></div></div>
    </div>

<?php } 
$pl2q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl2). "'");
while($pl2res = mysql_fetch_array($pl2q)) { ?>

<div id="cart2" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl2res['lname']?></div><div class='price'><?php echo $pl2res['price']?></div></div>
    </div>


<?php } $pl3q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl3). "'");
while($pl3res = mysql_fetch_array($pl3q)) { ?>

<div id="cart3" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl3res['lname']?></div><div class='price'><?php echo $pl3res['price']?></div></div>
    </div>

<?php } $pl4q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl4). "'");
while($pl4res = mysql_fetch_array($pl4q)) { ?>

<div id="cart4" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl4res['lname']?></div><div class='price'><?php echo $pl4res['price']?></div></div>
    </div>

<?php } $pl5q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl5). "'");
while($pl5res = mysql_fetch_array($pl5q)) { ?>

<div id="cart5" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl5res['lname']?></div><div class='price'><?php echo $pl5res['price']?></div></div>
    </div>

<?php } $pl6q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl6). "'");
while($pl6res = mysql_fetch_array($pl6q)) { ?>

<div id="cart6" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl6res['lname']?></div><div class='price'><?php echo $pl6res['price']?></div></div>
    </div>

<?php } $pl7q = mysql_query("SELECT lname, price FROM Player Where Player.id='" .mysql_real_escape_string($pl7). "'");
while($pl7res = mysql_fetch_array($pl7q)) { ?>

<div id="cart7" class="drakt"> 
      <div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'><?php echo $pl7res['lname']?></div><div class='price'><?php echo $pl7res['price']?></div></div>
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
	
	
	
	
	
	
	
	
	
	
	
	
<p>Drag players from the list into the field.</p>

<section id="right">
				
				<div class="gcontent">
				<div class="head"><h1>Players</h1></div>
				
				<div class="boxy">
				<form method="post" action ="player.php">
						<table id="hor-minimalist-bca" summary="Employee Pay Sheet">
						
    <thead>
	   	<tr>
		<th scope="col">  </th>
			<th scope="col">Player</th>
            <th scope="col">$</th>
			<th scope="col">#</th>
        </tr>
    </thead>
    <tbody>
					<?php
		
	
			
		
			$dwg = mysql_query("SELECT price, lname, SUM(points) as 'points' FROM PlayerGW, Player WHERE PlayerGW.player=Player.id GROUP BY player ORDER BY points DESC");
		 
		 while($dw = mysql_fetch_array($dwg)) {
            ?>
    	
		               <tr>
					   <td class='knapp2'></td>
                    <td class="lname"><?php echo $dw['lname']?></td>
					<td class="value"><?php echo $dw['price']?></td>
					<td class="points"><?php echo $dw['points']?></td>
                </tr>
        
            <?php
			
            }
			?>
					   </tbody>
</table>
</form>	
		

				</div>
				
			</div>
			
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

$(window).load(function(){
var dropHelp = true;
var cart1has = false;
var cart2has = false;
var cart3has = false;
var cart4has = false;
var cart5has = false;
var cart6has = false;
var cart7has = false;
var table = $('table');
    var total_items = 0;
    var total_price = 0;
	var bank = 45;
if($('#cart1 .draktnavn').length && $('#cart2 .draktnavn').length && $('#cart3 .draktnavn').length && $('#cart4 .draktnavn').length && $('#cart5 .draktnavn').length && $('#cart6 .draktnavn').length && $('#cart7 .draktnavn').length){
total_items = 7;
var s1 = parseFloat( $('#cart1 .price').html());
var s2 = parseFloat( $('#cart2 .price').html());
var s3 = parseFloat( $('#cart3 .price').html());
var s4 = parseFloat( $('#cart4 .price').html());
var s5 = parseFloat( $('#cart5 .price').html());
var s6 = parseFloat( $('#cart6 .price').html());
var s7 = parseFloat( $('#cart7 .price').html());
var cart1has = true;
var cart2has = true;
var cart3has = true;
var cart4has = true;
var cart5has = true;
var cart6has = true;
var cart7has = true;
var summen = s1 + s2 + s3 + s4 + s5 + s6 + s7;
bank = bank - summen;
total_price = total_price + summen;
        $("#citem").html("#Players <strong>" + total_items + "</strong>");
	$("#cprice").html("Teamvalue <strong>" + total_price.toFixed(2) + "</strong>");
	$("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
}

var draggable_opts = {
      
            helper: "clone",
            opacity: 0.75,
            revert: 'invalid',
            stop: function(event, ui) {
                //alert(ui)
            }
        };
table.find('tbody').find('tr').bind('mousedown', function() {
    table.disableSelection();
}).bind('mouseup', function() {
    table.enableSelection();
}).draggable({
    helper: function(event) {
        return $('<div class="helper">Helper</div>');
    },
    cursorAt: {
        left: 24,
        bottom: 68
    },
    cursor: 'move',
    distance: 10,
    delay: 100,
    scope: 'cart-item',
    revert: 'invalid',
	clone:'true',
	helper: function( event ) {
        return $( "<div class='draktdiv'> <div class='drakt'> </div><div class='knapper'><div class='knapp1'></div><div class='knapp2'> </div></div><div class='draktnavn'>"+ $(this).find('td.lname').html() +"</div><div class='price'>"+ $(this).find('td.value').html() +"</div></div>" );
    }
	
});

$('#cart1').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {
	
	
	if (!cart1has) {
           if (ui.draggable.find('.lname').html() == $('#cart2 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart3 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart4 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart5 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart6 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart7 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);            
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
      total_items++;
        $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
        var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
        $("#cprice").html("TeamValue <strong>"  + total_price.toFixed(2) + "</strong>");
		        bank = bank - price;
        $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart1has =true;
				}
				
				}
			
    
	else{
	var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
$('#cart2').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {
	
	if (!cart2has) {
	          if (ui.draggable.find('.lname').html() == $('#cart1 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart3 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart4 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart5 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart6 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart7 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	cart2has=true;
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);          
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
            total_items++;
       $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
        var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
      $("#cprice").html("TeamValue <strong>" + total_price.toFixed(2) + "</strong>");
	  		        bank = bank - price;
        $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart2has =true;
    }
	}
	else{
	var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
$('#cart3').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {

	if (!cart3has) {
	          if (ui.draggable.find('.lname').html() == $('#cart2 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart1 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart4 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart5 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart6 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart7 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);            
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
       total_items++;
       $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
        var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
        $("#cprice").html("TeamValue <strong>"  + total_price.toFixed(2) + "</strong>");
				        bank = bank - price;
       $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart3has =true;
				}
    }
		else{
	var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
$('#cart4').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {

	if (!cart4has) {
          if (ui.draggable.find('.lname').html() == $('#cart2 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart3 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart1 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart5 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart6 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart7 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);            
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
         total_items++;
       $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
        var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
        $("#cprice").html("TeamValue <strong>"  + total_price.toFixed(2) + "</strong>");
				        bank = bank - price;
        $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart4has =true;
				}

    }
		else{
		var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
$('#cart5').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {

	if (!cart5has) {
	          if (ui.draggable.find('.lname').html() == $('#cart2 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart3 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart4 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart1 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart6 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart7 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);            
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
      total_items++;
       $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
        var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
       $("#cprice").html("TeamValue <strong>" + total_price.toFixed(2) + "</strong>");
	   		        bank = bank - price;
        $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart5has =true;
    }
	}
		else{
	var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
$('#cart6').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {

	if (!cart6has) {
	
	          if (ui.draggable.find('.lname').html() == $('#cart2 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart3 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart4 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart5 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart1 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart7 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);            
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
      total_items++;
      $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
        var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
        $("#cprice").html("TeamValue <strong>"  + total_price.toFixed(2) + "</strong>");
				        bank = bank - price;
       $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart6has =true;
				}
    }
		else{
	var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
$('#cart7').droppable({
    scope: 'cart-item',
    activeClass: 'active',
    hoverClass: 'hover',
    tolerance: 'pointer',
    drop: function(event, ui) {
	
	if (!cart7has) {
          if (ui.draggable.find('.lname').html() == $('#cart2 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart3 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart4 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart5 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart6 .draktnavn').html() || ui.draggable.find('.lname').html() == $('#cart1 .draktnavn').html()){
		  var navn = ui.draggable.find('.lname').html();
		  alert("You allready have " + navn);	
		   }   	   
                else{
	      if(dropHelp){
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:0, top:0})
			   .draggable(draggable_opts);            
           $(this).append(newDiv);
		   }
		   else{
        $(this).append(ui.draggable);
        }
      total_items++;
       $("#citem").html("#Players <strong>" + total_items + "</strong>");
        // update totl price
       var price = parseFloat( $(this).find(".price").html());
        total_price = total_price + price;
        $("#cprice").html("TeamValue <strong>"  + total_price.toFixed(2) + "</strong>");
				        bank = bank - price;
      $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
				cart7has =true;
    
	}
	}
		else{
	var mannen =  $(this).find('.draktnavn').html();
	alert( "You allready have " + mannen + " in that position!");
	}
	
	}
});
       $("#btn_clear").click(function() {
            $("#cart1").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
			   
            });
                  $("#cart2").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
            });
			            $("#cart3").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
            });
			            $("#cart4").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
            });
			            $("#cart5").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
            });
				            $("#cart6").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
            });
				            $("#cart7").fadeOut("2000", function() {
               $(this).removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
            });
			cart1has=false;
			cart2has=false;
			cart3has=false;
			cart4has=false;
			cart5has=false;
			cart6has=false;
			cart7has=false;
			 
         
            total_items = 0;
            total_price = 0;
			bank=45;
			$("#citem").html("#Players <strong>"+ total_items +"</strong>");
      $("#cprice").html("TeamValue <strong>"  + total_price.toFixed(2) + "</strong>");
	  		      
        $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
            return false;
        });
		
		$('.knapp1').die('click').live('click', function () {
		
   $(this).parent().parent().fadeOut('1000');
if($(this).parent().parent().parent('div#cart7').length){

$('#cart7').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart7has=false;
}
else if ($(this).parent().parent().parent('div#cart6').length){
$('#cart6').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart6has=false;

}
else if ($(this).parent().parent().parent('div#cart5').length){
$('#cart5').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart5has=false;

}
else if ($(this).parent().parent().parent('div#cart4').length){
$('#cart4').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart4has=false;

}
else if ($(this).parent().parent().parent('div#cart3').length){
$('#cart3').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart3has=false;

}
else if ($(this).parent().parent().parent('div#cart2').length){
$('#cart2').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart2has=false;

} 
else if ($(this).parent().parent().parent('div#cart1').length){
$('#cart1').removeClass("drakt").addClass("drakt1").html("").fadeIn("fast");
cart1has=false;

}     
 
     
		
		        total_items--;
				
        $("#citem").html("#Players <strong>" + total_items + "</strong>");
	
        // update totl price
        var price = parseFloat( $(this).parent().parent().find(".price").html());
        total_price = total_price - price;
        $("#cprice").html("Teamvalue <strong>" + total_price.toFixed(2) + "</strong>");
		        bank = bank + price;
       $("#bank").html("Bank <strong>"  + bank.toFixed(2) + "</strong>");
});

	
			$('.knapp2').die('click').live('click', function () {
			

if( $(this).parent('tr.ui-draggable').length){			

$lname1 = $(this).parent().find("td.lname").html();


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
else if( $(this).parent('div.knapper').length){
$lname2 = $(this).parent().parent().find("div.draktnavn").html();

$.ajax({
            type: "POST",
            data: {"playerlname":$lname2},
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
	return false;
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
		$player3 = $('#cart3 .draktnavn').html();
		$player4 = $('#cart4 .draktnavn').html();
		$player5 = $('#cart5 .draktnavn').html();
		$player6 = $('#cart6 .draktnavn').html();
		$player7 = $('#cart7 .draktnavn').html();
		$user = $('.data h3').html();
		$team = $('.data h1').html();
		
		if (!$player1 || !$player2 || !$player3 || !$player4 || !$player5 || !$player6 || !$player7) {
alert("You need to chose 7 players");
}
else if(bank<0){
alert("You have spent more money then you have.");
}

	
else{
$.ajax({
            type: "POST",
            data: {"team":$team, "p1":$player1, "p2":$player2, "p3":$player3, "p4":$player4, "p5":$player5, "p6":$player6, "p7":$player7},
            url: "saveTransfer.php",
            success: function(data){
			if(data == "INSERT"){
			alert("Transfers completed");
			}
			else if(data == "UPDATE"){
			alert("Transfers completed");
			}
			else if(data == "TIME"){
			alert("Changes is not allowed between 01.00 - 14.00 on Thursday");
			}
			else{
			}
			}
            });
			}

});

});



  


//]]>  

</script>
</body>
</html>
