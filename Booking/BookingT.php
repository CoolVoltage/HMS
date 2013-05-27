<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Tourist Booking</title>
 <script type="text/javascript" src="../Common CSS/jquery.js"></script>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
<script type="text/javascript" src="../Common CSS/Form_validate.js"></script>
<script type="text/javascript" src="../Common CSS/booking.js"></script>
</head>
<body onload="dropbox();">
<div id="matter">
<?php
$result = session_id();
if(empty($result))
session_start();
require_once('../Common CSS/top.php');
if(isset($_SESSION['uname']))
{
?>
<script>

$(document).ready(function()
{
$("#cssmenu a").css({"width":"128px"});
});

</script>
<?php
}
?>
<br />
<div id='header'>
<center><img id="img" src="../Common CSS/header.gif " alt="header"/></center>
</div>
<div id='cssmenu'>
<ul>
   <li class=''><a class='change' href='../Home/Home.php'><span>Home</span></a></li>
   <li class='has-sub active '><a class='change' href='../Booking/BookingT.php'><span>Bookings</span></a>
      <ul>
         
      </ul>
   </li>
   <li><a class='change' href='../Location/location.php'><span>About Chennai</span></a></li>
   <li><a class='change' href='../Room Tours/tour.php'><span>Room Tours</span></a></li>
   <li><a class='change' href='../Hotel Entertainment/hotel.php'><span>Facilities</span></a></li>
   <li class='has-sub '><a class='change' href='#'><span>Travel Reservations</span></a>
   <ul>
         <li><a  href='../Travelregistrations/travel.php?id=1'><span>Air Tickets</span></a></li>
         <li><a href='../Travelregistrations/travel.php?id=2'><span>Train Tickets</span></a></li>
         <li><a  href='../Travelregistrations/travel.php?id=3'><span>Bus Tickets</span></a></li>
         <li><a  href='../Travelregistrations/travel.php?id=4'><span>Car Service</span></a></li>
    </ul>
	</li>
	<?php
	if(isset($_SESSION['uname']))
	{
	?>
	<li class='has-sub '><a class='change' href='#'><span>Account</span></a>
	<ul>
         
         <li><a href='../myaccount/BookedH.php'><span>Booked History</span></a></li>
         
         <li><a  href='../LAS/Logout.php'><span>Log Out</span></a></li>
    </ul>
	</li>
	<?php
	}
	?>
	
</ul>
</div>
<?php
require('../LAS/login.php');
if(isset($_SESSION['uname']))
{ 

?>
<br/>
<br/>
<div id="BookT">
<form name="booking" method="POST" action="../Booking/Booked.php">
<p>Number of Room(s) :
<select name="Rnumber">
	<option value ="1">1</option>
	<option value ="2">2</option>
	<option value ="3">3</option>
	<option value ="4">4</option>
	<option value ="5">5</option>
	</select>
	</p>
<p>Number of Adults(per room) :
<select id="anum" name="Anumber" onblur="calc();">
	<option value ="1">1</option>
	<option value ="2">2</option>
	<option value ="3">3</option>
	<option value ="4">4</option>
	<option value ="5">5</option>
	<option value ="6">6</option>
	</select>
	</p>
<p>Number of Children(per room) :
<select id="cnum" name="Cnumber" onblur="calc();">
	<option value ="nil"></option>
	<option value ="0">0</option>
	<option value ="1">1</option>
	<option value ="2">2</option>
	<option value ="3">3</option>
	<option value ="4">4</option>
	</select>
	</p>
<p>Room Type : 
<select id="rtype" name="rtype"> 
</select>
</p>
<p> Check In :
<select name="day" id="day"></select><select name="month" id="month"></select><select name="year"><option>2013</option><option>2014</option></select>

<p> Number of days of stay :
<select name="nod">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
</select>

</p>
<input type="submit" value="Book Now!!!"/>
</form>
</div>
<div id="footer">
&copy; 2012, Le Royal Merdien
<span class="validator">
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
</span>
<br />
All trademarks and registered trademarks appearing on
this site are the property of their respective owners.
</div>
</div>
</div>
</body>
</html>
<?php
}
?>
