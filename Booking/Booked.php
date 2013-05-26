<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Booked</title>
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
         <li><a  href='#'><span>Your Profile</span></a></li>
         <li><a href='#'><span>Booked History</span></a></li>
         <li><a  href='#'><span>Cancel Registration</span></a></li>
         <li><a  href='../LAS/Logout.php'><span>Log Out</span></a></li>
    </ul>
	</li>
	<?php
	}
	?>
	
</ul>
</div>
<?php 
$result = session_id();
if(empty($result))
session_start();
require_once('../Common CSS/top.php');
$dbc = mysqli_connect('127.0.0.1', 'root', 'pass', 'bookinginfo')
or die('<span id="message">Error connecting to MySQL server.</span>');
$n_rooms=$_POST['Rnumber'];                                                                              // N_Rooms varchar(10),
$n_adults=$_POST['Anumber'];																					//N_Adults varchar(10),
$n_children=$_POST['Cnumber'];																			//N_Children varchar(10),
$r_type=$_POST['rtype'];																			//R_Type varchar(30),
$day = $_POST['day'];
$month = $_POST["month"];
$year = $_POST["year"];
$i_date = "$day" . '/' . "$month" . '/' . "$year";
$nod = $_POST["nod"];
$uname=$_SESSION['uname'];																							//O_Date varchar(20),
$query = "INSERT INTO $uname(N_Rooms,N_Adults,N_Children,R_Type,I_Date,NOD)" .
"VALUES ('$n_rooms', '$n_adults', '$n_children', '$r_type', '$i_date', '$nod') " ;
$result = mysqli_query($dbc, $query)
or die('<span id="message">Error querying database.</span>');
if($result)
{
?>
<span id="message">You have successfully booked</span>
<div id="booked">
<table>
<tr><td>Number of Rooms : </td><td><?php echo("$n_rooms"); ?></td><td rowspan="6"><img src="../Common CSS/<?php echo("$r_type"); ?>.jpg "/></td></tr>
<tr><td>Number of Adults : </td><td><?php echo("$n_adults"); ?></td></tr>
<tr><td>Number of Children : </td><td><?php echo("$n_children"); ?></td></tr>
<tr><td>Room type : </td><td><?php echo("$r_type"); ?></td></tr>
<tr><td>Checking IN : </td><td><?php echo("$i_date"); ?></td></tr>
<tr><td>Number of days of stay : </td><td><?php echo("$nod"); ?></td></tr>
</table>
</div>
<?php
}
mysqli_close($dbc);
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