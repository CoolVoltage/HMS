<?php
$log = [];
$log = split("\,",$_GET['log']);
$type = $_GET['type'];
$times = $_GET['times'];
$dbc = mysqli_connect('127.0.0.1', 'root', 'pass', 'bookinginfo')
or die('<span id="message">Error connecting to MySQL server.</span>');

while($times) {
$i=0;
while($logger=$log[$i]) {
$query = "INSERT INTO datelog(roomid,roomtype)" .
			"VALUES ('$logger','$type')";
$result = mysqli_query($dbc,$query);
$i = $i+1;
}
$times = $times -1;
}
?>