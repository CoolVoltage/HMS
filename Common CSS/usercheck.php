<?php
$uname = $_GET['uname'];
$dbc = mysqli_connect('127.0.0.1', 'root', 'pass', 'userinfo')
or die('<span id="message">Error connecting to MySQL server.</span>');
$query = "SELECT * FROM userinfo WHERE Uname='$uname'";
$result = mysqli_query($dbc,$query)
or die('<span id="message">Error2 connecting to MySQL server.</span>');
if((mysqli_num_rows($result))!=0)
{

$i = 'false';
}
else {
$i='true';

}
echo $i;
?>