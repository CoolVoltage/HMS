
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Home</title>
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
   <li class='active '><a class='change' href='../Home/Home.php'><span>Home</span></a></li>
   <li><a class='change' href='../Booking/BookingT.php'><span>Bookings</span></a>
      
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
<div id="hotel">
<p>
<img src="../Common CSS/hotel.jpg" alt="hotel" />
</p>
</div>
<div id="para">
<p>
       Chennai, once a fishing village is now a sprawling metropolis and the capital of the State Tamil Nadu.
Though comparatively young, the state has chequered the history dating back to 1639 when Francis Day and 
Andrew Cogan, Agents of the East India Company acquired a strip of land granted on lease by the Vijayanagar
Emperor. Here was built the Fort St George for setting up a factory as a nucleus around which arose the
British settlements. Gradually but steadily the old tiny villages like Triplicane, Egmore, Purasawalkam 
and Chetpet were clubbed with the new agglomeration of the fast growing Chennapatnam, as it was known then.
</p>
<p>
Chennai widely known as Madras till 1996 has rich tradition and civilisation and it is a blend of the old 
and the new, vibrating ceaselessly to keep pace with the rest of India as the buoyant metropolis of the 
third most industrialised state. Situated at the entrance of South India, Chennai sprawling over two 
hundred kilometres on the shores of Bay of Bengal, is not only the Gateway of South but also the 
"Queen of Coramandel", People in Chennai are deep rooted in the cultural moorings and traditions even 
though modernity has its own impact. Chennai is airy spacious with verdant green patches and beaches. 
With a population of over six million, Chennai is the fourth largest city in the country. Chennai has 
regained its pride of place in the Automobile Industry as "Detroit of South". Chennai is also being
recognised as one of the important destination for Software Technological Knowhow. The real India in
her pristine culture wrap and beauty and detailed in history still lives in Chennai. A visit to Chennai 
to see the graceful people of glorious land will surely help visitors to carry home this imprint of 
Indian Heritage
</p>
<p>
Le Royal Meridien, Chennai  has been awarded "Best Business Hotel in Asia Pacific " by PATWA 2002, at ITB Berlin. Also won the best  " Innovative HR Practices 2003 " by Deccan Herald Avenue.
</p>
<p>
Location is a benevolent factor to aid the hotel in its success. The property is easily accessible by road from any point in the city and is free from the traffic snarls of the ever-bustling Chennai. Its position on being midway between the airport and the city gives it a clean edge over the other hotels.It is also very near to the Chennai Trade Centre, which happens to be the most preferred venue for the major Conventions and Exhibitions, and is also close to city's Industrial conurbation.
</p>
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
</body>
</html>