<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Room Tours</title>
 <script type="text/javascript" src="../Common CSS/jquery.js"></script>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <link href="../Common CSS/cssmenu2/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
<script type="text/javascript" src="animation.js"></script>
<script type="text/javascript" src="../Common CSS/rotate.js"></script>
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
   <li class=''><a class='change' href='../Home/Home.php'><span>Home</span></a></li>
   <li class='has-sub '><a class='change' href='../Booking/BookingT.php'><span>Bookings</span></a>
      <ul>
         
         
      </ul>
   </li>
   <li><a class='change' href='../Location/location.php'><span>About Chennai</span></a></li>
   <li class='active '><a class='change ' href='../Toom Tours/tour.php'><span>Room Tours</span></a></li>
   <li><a class='change' href='../Hotel Entertainment/hotel.php'><span>Facilities</span></a></li>
   <li class='has-sub '><a class='change' href=''><span>Travel Reservations</span></a>
   <ul>
         <li><a  href='#'><span>Air Tickets</span></a></li>
         <li><a href='#'><span>Train Tickets</span></a></li>
         <li><a  href='#'><span>Bus Tickets</span></a></li>
         <li><a  href='#'><span>Car Service</span></a></li>
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
	<br/>
	<br/>
	
<div id="tour">

<span id="1" class="bar">Standard Room<img src="../Common CSS/arrow.png" /></span><br />
<div class="info text" id="a">
<img class="right" src="../Common CSS/Standard Room(2).jpg">
Beautifully furnished to offer optimum comfort and style, Standard Rooms are decorated in cool pastel greens with lightly shaded solid wood furniture.

All rooms provide the finest of beds including a choice of king or twin-size, each topped off with an assortment of exceptionally plump pillows and soft duvets. Interconnecting rooms are available upon request.

Marble bathrooms with branded Le Meriden amenities compound the feeling of luxury whist extras such as complimentary fruit and other amenities are designed to make guests feel welcomed.
</div>
<span id="2" class="bar">Deluxe Suite<img src="../Common CSS/arrow.png" /></span><br />
<div class="info text" id="b">
<img class="right" src="../Common CSS/Deluxe Suite(3).jpg">
With stunning views over the turquoise Arabian Gulf, Deluxe Suite are designed to instill a feeling of tranquility. Once inside, guests find a haven of relaxation where they can unwind amongst the soft sumptuous furnishing, rendering any daily stress to the past.

Ideal for leisure or business travelers, the rooms are elegant, decorated in neutral tones which lend a feeling of warmth and understated luxury. All deluxe suites, whether with a king size or double bed, are sea facing and include a 24 hour on-call butler service on hand to cater to any request.

Complimentary airport transfers from Dubai International Airpot, Free high-speed internet access, individual climate control and other selected amenities are available for the added benefit and comfort of guests.
</div>
<span id="3" class="bar">Executive Suite<img src="../Common CSS/arrow.png" /></span><br />
<div class="info text" id="c">
<img class="right" src="../Common CSS/Executive Suite(4).jpg">
Combining splendor and luxury the 74 square meter Executive Suites are a truly magical experience.

All suites are furnished with lightly shaded wood furniture to compliment the beautiful neutral decor. Heavenly luxurious pillows and lavish duvets adorn the bed inciting guests in to a peaceful slumber.

Room amenities include a 42" LCD TV, and DVD-CD player amongst other goods and services. Some of our Suites also come with gorgeous views of the pristine Arabian Gulf.
</div>

<span id="4" class="bar">Presidential Suite<img src="../Common CSS/arrow.png" /></span><br />
<div class="info text" id="d">
<img class="right" src="../Common CSS/Presidential Suite(5).jpg">
Designed to envelop guests in a cocoon of understated luxury, the Presidential Suites are the ideal sanctuary for daily stress relief.

Soft feathery duvets and pillows ensure that you will leave pampered and rejuvenated. A 24 hour butler service is also on-hand to cater to all your requirements.

Guests are encouraged to lay back and indulge in a tranquil and relaxing bath using the complimentary Cinqmondef toiletries stocked vanity counters, polished off with a nightcap whilst gazing out at the perfect view of the sea.

The Presidential Suites are exquisite opulence to provide you with a memorable stay.
</div>

<span id="5" class="bar">Tamilnadu Suite<img src="../Common CSS/arrow.png" /></span><br />
<div class="info text" id="e">
<img class="right" src="../Common CSS/Tamilnadu Suite(6).jpg">
Situated on the 9th and 10th floors are incredibly impressive Tamilnadu Suites. State of the art entertainment including a 55 inch LCD TV surrounded by an expansive black marble TV frame completes the lounge area, whilst a small kitchenette can be used for catering purposes.
</div>
<span id="6" class="bar">Royal Club Suite Room<img src="../Common CSS/arrow.png" /></span><br />
<div class="info text" id="f">
<img class="right" src="../Common CSS/Royal Club Suite Room(8).jpg">
With over 35 square meters of luxury at their disposal our Club Rooms offer guests the ultimate in space, comfort and style. The Club Rooms boast classically inspired furnishings finished in warm red and gold tones to make you feel instantly at home.

Plasma televisions and DVD players blend effortlessly into the room setting, whilst elaborately pleated draperies-in rich shades of burgundy frame the spectacular views of the hotel grounds.

All rooms feature opulent marble bathrooms boasting Cinqmondef amenities, enhancing the sophistication of the Club room experience.
</div>
<img class="left" src="../Common CSS/lobby.jpg" />
<div id = "intro">
	Le Meridien offers a truly unique experience in every one of its stylish guest rooms and suites. 
	Warm earth tones in addition to the luxurious sitting and work areas create an inviting ambiance for you to experience and enjoy.
	</div>
</div>

	

<br/>
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
