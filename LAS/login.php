<?php
$result = session_id();
if(empty($result))
session_start();
$error="";
$action = "http://127.0.0.1" . $_SERVER["PHP_SELF"];
if(isset($_GET['id']))
$action = $action . "?id=" . $_GET['id'];

if(empty($_SESSION['uname']))
{
	if(isset($_POST['submit']))
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
	{
		$data = mysqli_fetch_array($result);
		$_SESSION['name']=$data['name'];
		$_SESSION['uname']=$username;
		
		goto a;
	}
	}
	else
		{ 
			$error='<span class="help">Please Enter Username and Password.Or <a href="../LAS/Registration.php">Sign Up</a></span><br /><br />';
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
a:
?>