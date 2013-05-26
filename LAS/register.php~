<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Registrations</title>
 <script type="text/javascript" src="../Common CSS/jquery.js"></script>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
</head>
<body onload="resize();">
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
$("#cssmenu a.change").css({"padding":"0 56px"});
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
   <li class='has-sub '><a class='change' href='../Booking/BookingT.php'><span>Bookings</span></a>
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

$dbc = mysqli_connect('127.0.0.1', 'root', 'pass', 'userinfo')
or die('<span id="message">Error connecting to MySQL server.</span>');
$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
$day = $_POST['day'];
$month = $_POST["month"];
$year = $_POST["year"];
$username = mysqli_real_escape_string($dbc, trim($_POST['Username']));
$password = mysqli_real_escape_string($dbc, trim($_POST['Password']));
$dob = "$day" . '/' . "$month" . '/' . "$year";
$query = "INSERT INTO userinfo(name,Email,DOB,Uname,Pword)" .
"VALUES ('$name', '$email', '$dob', '$username', SHA('$password')) " ;
$result = mysqli_query($dbc, $query)
or die('<span id="message">Error querying database.</span>');
$dbi = mysqli_connect('127.0.0.1', 'root', 'pass', 'bookinginfo')
or die('<span id="message">Your account has already been created.Please go back to home</span>');
$sql = "CREATE TABLE $username (
id int(11) NOT NULL auto_increment,
N_Rooms varchar(10),
N_Adults varchar(10),
N_Children varchar(10),
R_Type varchar(30),
I_Date varchar(20),
NOD varchar(3),
PRIMARY KEY(id)
) ";
$queryResult = mysqli_query($dbi,$sql)
or die('<span id="message">Error creating Table.</span>');
if($queryResult)
{
echo('<span id="message">Account Successfully Created</span>');
?>
<div id="login">
<table>
<tr><td>Name : </td><td><?php echo("$name"); ?></td></tr>
<tr><td>Email : </td><td><?php echo("$email"); ?></td></tr>
<tr><td>Date of Birth : </td><td><?php echo("$dob"); ?></td></tr>
<tr><td>Username : </td><td><?php echo("$username"); ?></td></tr>
</table>
<a href = "MLogin.php">Click Here to Login</a>
</div>
<?php
}
mysqli_close($dbi);
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
</body>
</html>