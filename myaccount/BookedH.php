<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Home</title>
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
   <li class='active '><a class='change' href='../Home/Home.php'><span>Home</span></a></li>
   <li><a class='change' href='../Booking/BookingT.php'><span>Bookings</span></a>
      
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
         <li><a  href='..?LAS/Logout.php'><span>Log Out</span></a></li>
    </ul>
	</li>
	<?php
	}
	?>
	
</ul>
</div>
<br/>
<?php

$action ='BookedH.php';

$dbc = mysqli_connect('127.0.0.1', 'root', 'pass', 'bookinginfo')
or die('<span id="message">Error connecting to MySQL server.</span>');
session_start();
$uname = $_SESSION['uname'];
if ((isset($_POST["submit"]))) {
	$option = $_POST["radio"];
	$query="DELETE FROM $uname WHERE id=$option";
	$result = mysqli_query($dbc,$query);
	
}
$query = "SELECT * FROM $uname";
$result = mysqli_query($dbc,$query)
or die('<span id="message">Error querying database.</span>');
echo("<form action='$action' method='post'>");
echo("<table id='table'>");
echo("<tr id='special'>");
echo("<td>Number of Rooms</td>");
echo("<td>Number of Adults</td>");
echo("<td>Number of Children</td>");
echo("<td>Room Type</td>");
echo("<td>Checking In Date</td>");
echo("<td>Number of Days</td>");
echo("<td>Cancel</td>");
echo("</tr>");
$i=1;
while($row=mysqli_fetch_row($result))
{	
	if($i%2==0)
	{echo("<tr class='one'>");
}	
	else
{	echo("<tr class='two'>");
}	
	echo("<td>$row[1]</td>");
	echo("<td>$row[2]</td>");
	echo("<td>$row[3]</td>");
	echo("<td>$row[4]</td>");
	echo("<td>$row[5]</td>");
	echo("<td>$row[6]</td>");
	echo("<td><input type='radio' name='radio' value=$row[0] /></td>");
	echo("</tr>");
	$i=$i+1;
}

echo("</table>");
echo("<br/><br/><center><input type='submit' name='submit' value='Cancel'/></center>");
echo("</form>");
?>
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