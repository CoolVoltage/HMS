<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <?php
 $result = session_id();
if(empty($result))
session_start();
$name = $_SESSION['name'];
$uname = $_SESSION['uname'];
?>
 <title><?php echo("$name"); ?></title>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <link href="../Common CSS/cssmenu2/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
</head>
<body onload="resize();">
<br />
<div id='header'>
<center><img id="img" src="../Common CSS/header.gif " alt="header"/></center>
</div>
<div id='cssmenu'>
<ul>
   <li class=' '><a href='Home.php'><span>Home</span></a></li>
   <li class='has-sub '><a href='Home.php'><span>Bookings</span></a>
      <ul>
         <li><a href='../Booking/BookingT.php'><span>Tourist</span></a></li>
         <li><a href='../LAS/LoginB.html'><span>Business</span></a></li>
      </ul>
   </li>
   <li><a href='../Location/location.php'><span>About Chennai</span></a></li>
   <li><a href='#'><span>Room Tours</span></a></li>
   <li><a href='#'><span>Facilities</span></a></li>
   <li class='has-sub '><a href='#'><span>Travel Reservations</span></a>
   <ul>
         <li><a href='#'><span>Air Tickets</span></a></li>
         <li><a href='#'><span>Train Tickets</span></a></li>
         <li><a href='#'><span>Bus Tickets</span></a></li>
         <li><a href='#'><span>Car Service</span></a></li>
    </ul>
	</li>
</ul>
</div>
<br />
<br />
<br />
<br />
<div id='cssmenu2'>
<ul>
	<li class='active'><a href='../Common CSS/myaccount.php'><span>Profile</span></a></li>
   <li ><a href='#'><span>Edit your profile</span></a></li>
   <li><a href='#'><span>Booked History</span></a></li>
   <li><a href='#'><span>Cancel Reservation</span></a></li>
   <li><a href='../LAS/Logout.php'><span>Log Out</span></a></li>
</ul>
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
</body>
</html>