<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Register</title>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type=" text/javascript" src="../Common CSS/js_cookie.js"></script>
 <script type=" text/javascript"  src="../Common CSS/Form_validate.js"></script>
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
 </head>
<body onload="dropbox();">
<div id="matter">
<?php
$result = session_id();
if(empty($result))
session_start();
require_once('../Common CSS/top.php');
if((isset($_SESSION['uname'])))
{
?>
<script>
var element = document.getElementById("#cssmenu");
var tag = element.getElementsByTagName("a");
tag.style.width = 128 +"px";
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
   <li ><a class='change' href='../Home/Home.php'><span>Home</span></a></li>
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
         
         <li><a  href='..?LAS/Logout.php'><span>Log Out</span></a></li>
    </ul>
	</li>
	<?php
	}
	?>
	
</ul>
</div>
<br/>
<br/>
<div id='register'>
<form name="Rinfo" action="http://127.0.0.1/LAS/register.php" method="POST">
        <p><label>Name          : </label><input type="text" name="name" id="name" onblur="validate(this,document.getElementById('help_name'),'Please enter your name',/^\w+$/,1);"/>
		<span id="help_name" class="help"></span></p>
		<p><label>Email         : </label><input type="text" name="email" id="email" onblur="validate(this,document.getElementById('help_email'),'Please enter a valid email address',/^[\w\.-_\+]+@[\w-]+(\.\w{2,4})+$/,2);"/>
		<span id="help_email" class="help"></span></p>
		<p><label>Date Of Birth : </label><select name="day" id="day"></select><select name="month" id="month"></select><select name="year" id="year"></select>
        <p><label>Username      : </label><input type="text" name="Username" id="Username" onblur="validate(this,document.getElementById('help_username'),'Username should be of 4-8 characters',/^\w{4,8}$/,3);"/>
		<span id="help_username" class="help"></span></p>
		<p><label>Password      : </label><input type="password" name="Password" id="Password" onblur="validate(this,document.getElementById('help_password'),'Password should be of 4-8 characters',/^\w{4,8}$/,4);"/>
		<span id="help_password" class="help"></span></p>
		<p><input type="button" value="Register" onclick="submit1(this.form);"/></p>
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