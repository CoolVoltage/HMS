<?php
$result = session_id();
if(empty($result))
session_start();
if(empty($_SESSION['uname']))
{ 	
	echo('<span id="top"><a href="../LAS/MLogin.php">Log In</a>&nbsp&nbsp&nbsp&nbsp<a href="../LAS/Registration.php">Sign Up</a></span>');
}
else
{	//$name=$_SESSION['name'];
	
	echo('<span id="top">Welcome ' .
	$_SESSION['name'] .
	'&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../LAS/Logout.php">Log Out</a></span>');
}
?>