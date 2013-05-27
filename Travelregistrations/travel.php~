<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Travelling Registrations</title>
 <script type="text/javascript" src="../Common CSS/jquery.js"></script>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
 <script type=" text/javascript"  src="../Common CSS/Form_validate.js"></script>
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
$id = $_GET['id'];
if(isset($_SESSION['uname'])&&isset($id))
{ 
?>
<div id="BookT">
<form name="travel" method="POST" action='http://127.0.0.1/Travelregistrations/travelled.php'>
<?php
if($id=="1")
{
?>
<center><span id="intro">Air Ticket Registrations</span></center>
<p><label>From          : </label><input type="text" name="from" id="from" onblur="validate(this,document.getElementById('help_from'),'Please enter Departing City',/^.+$/,1);"/>
		<span id="help_from" class="help"></span></p>
<p><label>To          : </label><input type="text" name="to" id="to" onblur="validate(this,document.getElementById('help_to'),'Please enter Destination City',/^.+$/,2);"/>
		<span id="help_to" class="help"></span></p>
<p><label>Date : </label><select name="day" id="day"></select><select name="month" id="month"></select><select name="year"><option>2013</option><option>2014</option></select>
</p>
<p><label>Class :</label>
<select id="class" name="Class" >
	<option value ="Business">Business</option>
	<option value ="Economy">Economy</option>
</select>
	</p>
<p><label>Number of passengers :</label><input type="number" name="quantity" min="1" max="5" value="1"></p>
<p><label>Time of day :</label>
<input type="radio" name="time" value="Morning" checked = "checked"/>Morning<br>
<input type="radio" name="time" value="Noon" />Noon<br>
<input type="radio" name="time" value="Evening" />Evening<br>
<input type="radio" name="time" value="Night" />Night
<p><input type="button" value="submit!!" onclick="submit1(this.form);"/></p>
<?php
	}
else if($id=="2")
{
?>
<center><span id="intro">Train Ticket Registrations</span></center>
<p><label>From          : </label><input type="text" name="from" id="from" onblur="validate(this,document.getElementById('help_from'),'Please enter Departing City',/^.+$/,1);"/>
		<span id="help_from" class="help"></span></p>
<p><label>To          : </label><input type="text" name="to" id="to" onblur="validate(this,document.getElementById('help_to'),'Please enter Destination City',/^.+$/,2);"/>
		<span id="help_to" class="help"></span></p>
<p><label>Date : </label><select name="day" id="day"></select><select name="month" id="month"></select><select name="year"><option>2013</option><option>2014</option></select>
s</p>
<p><label>Class :</label>
<select id="class" name="Class" >
	<option value ="1st Class">1st Class A.C</option>
	<option value ="2nd Class">2nd Class A.C</option>
	<option value ="2nd Class">3rd Class A.C</option>
	<option value ="1st Class">1st Class</option>
	<option value ="2nd Class">2nd Class</option>
	<option value ="2nd Class">3rd Class</option>
</select>
	</p>
<p><label>Number of passengers :</label><input type="number" name="quantity" min="1" max="10" value="1"></p>
<p><label>Time of day :</label>
<input type="radio" name="time" value="Morning" checked = "checked"/>Morning<br>
<input type="radio" name="time" value="Noon" />Noon<br>
<input type="radio" name="time" value="Evening" />Evening<br>
<input type="radio" name="time" value="Night" />Night
<p><input type="button" value="submit!!" onclick="submit1(this.form);"/></p>
<?php
	}
else if($id=="3")
{
?>
<center><span id="intro">Bus Ticket Registrations</span></center>
<p><label>From          : </label><input type="text" name="from" id="from" onblur="validate(this,document.getElementById('help_from'),'Please enter Departing City',/^.+$/,1);"/>
		<span id="help_from" class="help"></span></p>
<p><label>To          : </label><input type="text" name="to" id="to" onblur="validate(this,document.getElementById('help_to'),'Please enter Destination City',/^.+$/,2);"/>
		<span id="help_to" class="help"></span></p>
<p><label>Date : </label><select name="day" id="day"></select><select name="month" id="month"></select><select name="year"><option>2013</option><option>2014</option></select>
</p>
<p><label>Class :</label>
<select id="class" name="Class" >
	<option value ="Deluxe A.C">Deluxe A.C</option>
	<option value ="Deluxe">Deluxe</option>
	<option value ="Economy">Economy</option>
</select>
	</p>
<p><label>Number of passengers :</label><input type="number" name="quantity" min="1" max="5" value="1"></p>
<p><label>Time of day :</label>
<input type="radio" name="time" value="Morning" checked = "checked"/>Morning<br>
<input type="radio" name="time" value="Noon" />Noon<br>
<input type="radio" name="time" value="Evening" />Evening<br>
<input type="radio" name="time" value="Night" />Night
<p><input type="button" value="submit!!" onclick="submit1(this.form);"/></p>
<?php
	}
else
{
?>
<center><span id="intro">Car Service</span></center>
<p><label>Number of passengers :</label><select name="quantity"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select></p>
<p><label>Date of pickup :</label><select name="day" id="day"></select><select name="month" id="month"></select><select name="year"><option>2013</option><option>2014</option></select>
</p>
<p><label>Time of pickup(24hrs format) :</label><select name="time"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select><select name="ampm"><option>am</option><option>pm</option></select></p>
<p><label>Time of travel :</label><select name="time2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></p>
<p><input type="submit" value="submit!!"/></p>
	<input type="hidden" name="id" value="4" />
		<?php
	}
	
	

?>
</form>
</div>
<?php
}


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