<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Login</title>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Common CSS/js_cookie.js"></script>
<script type="text/javascript" src="../Common CSS/alignment.js"></script>
 </head>
<body>
<div id='matter'>
<p>
<center><img id="img" src="../Common CSS/header.gif " alt="header"/></center>
<div id='cssmenu'>
<ul>
   <li><a href="../Home/Home.php"><span>Home</span></a></li>
   <li class='has-sub'><a href='../Booking/BookingT.php'><span>Bookings</span></a>
      <ul>
         <li class='active'><a href='../Booking/BookingT.php'><span>Tourist</span></a></li>
         <li><a href='#'><span>Business</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>About Chennai</span></a></li>
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
</p>
<?php
$result = session_id();
if(empty($result))
session_start();
$error="";
$action ='..' . $_SERVER["PHP_SELF"];
if(empty($_SESSION['uname']))
{if(isset($_POST['submit']))
	{	
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username)&&!empty($password))
		{	
		$dbc = mysqli_connect('127.0.0.1', 'root', 'pass', 'userinfo')
		or die('<span id="message">Error connecting to MySQL server.</span>');
		$query = "SELECT Uname,name FROM userinfo WHERE Uname='$username' AND Pword= SHA('$password')";
		$result = mysqli_query($dbc,$query);
		
		if(mysqli_num_rows($result)!= 1)
		{ $error='<span class="help">Error in Log In Information,Please enter again.Or <a href="../LAS/Registration.php">Sign Up</a></span><br /><br />';
		}
		else
	{	$_SESSION['uname']=$username;
		$data = mysqli_fetch_array($result);
		$_SESSION['name']=$data['name'];
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Home/Home.php">';   
		
		exit;   
	}
	}
	else
		{ 	
			$error='<span class="help">Please Enter Username and Password.Or <a href="../LAS/Register.html">Sign Up</a></span><br /><br />';
		}
	}
echo("<form method='post' action=$action>");
echo('<fieldset>');
echo('<legend>Log In</legend>');
echo('<center><label for="username">Username:</label>');
echo('<input type="text" id="username" name="username" /><br /><br />');
echo('<label for="password">Password:</label>');
echo('<input type="password" id="password" name="password" /><br /><br />');
if($error)
echo($error);
echo('<input type="submit" value="Log In" name="submit" /></center>');
echo('</fieldset>');
echo('</form>');
}
else
{echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Home/Home.php">';   
	
		exit;}

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