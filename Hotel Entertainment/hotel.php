<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Facilities</title>
 <script type="text/javascript" src="../Common CSS/jquery.js"></script>
 <link href="../Common CSS/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <link href="../Common CSS/cssmenu2/cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../Common CSS/alignment.js"></script>
<script type="text/javascript" src="../Room Tours/animation.js"></script>
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
   <li><a class='change' href='../Room Tours/tour.php'><span>Room Tours</span></a></li>
   <li class='active '><a class='change ' href='../Hotel Entertainment/hotel.php'><span>Facilities</span></a></li>
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
         
         <li><a  href='../LAS/Logout.php'><span>Log Out</span></a></li>
    </ul>
	</li>
	
	<?php
	}
	?>
	</ul>
	</div>
	<br/>
	<div>
	<span id="e1" class="box"><br/><br/>LOBBY</span>
	<div id="ea" class="yo text"><img class="right" src="../Common CSS/hlobby.jpg" />A lobby is a room in a building which is used for entry from the outside. Sometimes referred to as a foyer or an entrance hall.
Many office buildings, hotels and skyscrapers go to great lengths to decorate their lobbies to create the right impression and convey an image, or "power lobby".
Since the mid 1980s there has been a growing trend to think of lobbies as more than just ways to get from the door to the elevator, but instead as social spaces and places of commerce. Some research has even been done to develop scales to measure lobby atmosphere in order to improve hotel lobby design</div>
	<br/><span id="e2" class="box"><br/><br/>POOL</span>
	<div id="eb" class="yo text"><img class="right" src="../Common CSS/pool.jpg" />Swimming pools come in all shapes and sizes but from the backyard pool to large commercials swimming pools, they all basically work in the same manner - they all use a combination of filtration and chemical treatment to continually clean a large volume of water.The basic idea is to pump water in a continual cycle, from the pool through the filtering and chemical treatment systems and back to the pool again. In this way, the pumping system keeps the water in the pool relatively free of dirt, debris and bacteria. Some pools also include heaters in the mix, in order to keep the water at a certain temperature.</div>
	<br/><span id="e3" class="box"><br/>MAS<br/>SAGE</span>
	<div id="ec" class="yo text"><img class="right" src="../Common CSS/massage.jpg" />Massage is the manipulating of superficial and deeper layers of muscle and connective tissue using various techniques, to enhance function, aid in the healing process, decrease muscle reflex activity,
Massage involves working and acting on the body with pressure structured, motion, or vibration, done manually or with mechanical aids. Target tissues may include muscles, tendons, ligaments, fascia, skin, joints, or other connective tissue, as well as lymphatic vessels, or organs of the gastrointestinal system. Massage can be applied with the hands, fingers, elbows, knees, forearm, and feet. There are over eighty different recognized massage modalities. The most cited reasons for introducing massage as therapy have been client demand and perceived clinical effectiveness.</div>
	<br/><span id="e4" class="box"><br/><br/>S<br/>PA</span>
	<div id="ed" class="yo text"><img class="right" src="../Common CSS/spa.jpg" />Spa treatment is the most talked about beauty treatment now days. Customers come to Bath Spa to enjoy the restorative effects of bathing. The Bubbles Spa is pleased to offer bath spa in Chennai. We are one of the few Spa salon centre in this beauty fashion conscious city of Chennai.

The soothing tranquility of the Bubbles spa can be discovered by entering the bath house reception area. The warm and inviting reception displaying the range of bespoke bath house products leads to an area for relaxing in between treatments.</div>
	<br/><span id="e5" class="box">GYMNAS<br/>I<br/>UM</span>
	<div id="ee" class="yo text"><img class="right" src="../Common CSS/gym.jpeg" />Gym started in Venice California in 1965, and soon became the hotbed for the development of training techniques, equipment and nutritional concepts that formed the foundation for the modern fitness revolution. In 1975, Gold Gym received international attention when it was featured in the major motion picture, Pumping Iron. It was thus effectively established as the Mecca of Bodybuilding.

Today, Gold Gym has over 700 facilities. It is the largest international gym chain in the world recognized for its passion, unique heritage, and experience as the final authority in fitness and lifestyle.</div>
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