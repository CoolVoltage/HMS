<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Travel Registration</title>
 <script type="text/javascript" src="../Common CSS/jquery.js"></script>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
</head>
<body>
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
   <li ><a class='change' href='Home.php'><span>Home</span></a></li>
   <li class='has-sub '><a class='change' href='../Booking/BookingT.php'><span>Bookings</span></a>
      <ul>
         
         
      </ul>
   </li>
   <li><a class='change' href='../Location/location.php'><span>About Chennai</span></a></li>
   <li><a class='change' href='../Room Tours/tour.php'><span>Room Tours</span></a></li>
   <li><a class='change' href='../Hotel Entertainment/hotel.php'><span>Facilities</span></a></li>
   <li class='has-sub active '><a class='change' href='#'><span>Travel Reservations</span></a>
   <ul>
         <li><a  href='../Travel registrations/travel.php?id=1'><span>Air Tickets</span></a></li>
         <li><a href='../Travel registrations/travel.php?id=2'><span>Train Tickets</span></a></li>
         <li><a  href='../Travel registrations/travel.php?id=3'><span>Bus Tickets</span></a></li>
         <li><a  href='../Travel registrations/travel.php?id=4'><span>Car Service</span></a></li>
    </ul>
	</li>
	<?php
	if(isset($_SESSION['uname']))
	{
	?>
	<li class='has-sub '><a class='change' href='#'><span>Account</span></a>
	<ul>
         
         <li><a href='../myaccount/BookedH.php'><span>Booked History</span></a></li>
         
         <li><a  href='..?LAS/Logout.php'><span>Log Out</span></a></li>
    </ul>
	</li>
	<?php
	}
	?>
	
</ul>
</div>
<?php
echo('<span id="message">You have requested to book tickets with the following details.You will be contacted via phone with more information on complete booking in a few hourse.</span>');
if($_POST['id']=="4")
{
$nop=$_POST['quantity'];
$day = $_POST['day'];
$month = $_POST["month"];
$year = $_POST["year"];
$date = "$day" . '/' . "$month" . '/' . "$year";
$hour=$_POST['time'];
$ampm = $_POST['ampm'];
$time = "$hour" . ' ' . "$ampm" ;
$time2=$_POST['time2'];
?>
<div id="booked">
<table>
<tr><td>Number of passengers :</td><td><?php echo("$nop");?></td></tr>
<tr><td>Date :</td><td><?php echo("$date");?></td></tr>
<tr><td>Time of pickup :</td><td><?php echo("$time");?></td></tr>
<tr><td>Time of travel :</td><td><?php echo("$time2");?></td></tr>
</table>
</div>
<?php
}
else
{
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$class = $_POST['Class'];
$nop = $_POST['quantity'];
$time = $_POST['time'];
?>
<div id="booked">
<table>
<tr><td>From :</td><td><?php echo("$from"); ?></td></tr>
<tr><td>To :</td><td><?php echo("$to"); ?></td></tr>
<tr><td>Date : </td><td><?php echo("$date"); ?></td></tr>
<tr><td>Class : </td><td><?php echo("$class"); ?></td></tr>
<tr><td>Number of Passengers : </td><td><?php echo("$nop")?></td></tr>
<tr><td>Time of day : </td><td><?php echo("$time"); ?></td></tr>
</table>
</div>
<?php
}
?>
<center><a href="../Home/Home.php">Home</a></center>
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
</body>
</html>