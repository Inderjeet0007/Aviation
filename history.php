<!DOCTYPE html>

<html lang="en-us">
<head>
	<title>Aviation.com</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="icon" type="image/png" href="img/images.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajaxchimp.js"></script>
	<script type="text/javascript" src="js/scrollTo.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<script type="text/javascript" src="js/nicescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<script>
	$(document).ready(function(){
	$(".flip").click(function(){
	$(".panel").toggle(1000);
	});
	});
</script>
<style>

.active{
	padding: 5px 10px;
	color: #43b779;
	font-family:"open_regular", Helvetica, Arial, sans-serif;
	font-size: 36px;
	text-align: center;
}

.nav a:hover {
  color: #ddd;
  color: black;
}

.nav {
  overflow: hidden;
  }

.nav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.nav .icon {
display: none;
}

@media screen and (max-width: 600px) {
  .nav a:not(:first-child) {display: none;}
  .nav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .nav.responsive {position: relative;}
  .nav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
}
  .nav.responsive a {
    float: none;
    display: block;
	background-color: grey;
    text-align: left;
  }
	.img{max-width: 100%}
	.b{
	font: italic 20px/30px Allan, serif;

	}
	.ba{
	font: italic bold 30px/30px Palatino, serif;
	}

div.panel
{
line-height: 30px;
margin:auto;
font-size:16px;
padding:5px;
text-align:center;
background:#556b2f;
border:solid 1px #666;
color:#ffffff;
border-radius:3px;
user-select:none
}
p.flip
{
line-height: 30px;
margin:auto;
font-size:16px;
padding:5px;
text-align:center;
background:black;
border:solid 1px #666;
color:#ffffff;
border-radius:3px;
user-select:none
}
div.panel
{
height:450px;
display:none;
}
p.flip
{
cursor:pointer;
}

</style>
<body>

	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo pull-left animated fadeInLeft">
				<img src="img/Logo.jpg" height="80px" alt="WS LOGO" title="LOGO FOR AVIATION.COM">
			</div>
			<br><br>
			<div class="nav pull-left" id="AviationNav">
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".0s" href="homepage.php">Home</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".0s" href="aircraft.php">Aircrafts</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="used_inst.php">Instruments</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="history.php"><strong>History</strong></a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".2s" href="air_acci.php">Accidents Occured</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay="0s" href="AboutUs.php">About Us</a>
					<a href="javascript:void(0);" style="font-size:30px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>

<script>
function myFunction() {
    var x = document.getElementById("AviationNav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}
</script>
			<div class="social pull-right">
				<ul class="list-unstyled">
					<li class="animated wow fadeInRight" data-wow-delay=".2s"><a href="https://www.facebook.com/aviationbloq/?ref=br_rs"><img src="img/facebook.png" alt="fb link" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".1s"><a href="#"><img src="img/twitter.png" alt="twitter link" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay="0s"><a href="#"><img src="img/google.png" alt="g link" title=""></a></li>

				</ul>
			</div>


		</div>
	</header>
	<!--  End Header Section  -->

	<!-- History Section -->
	<br><p class="container b"><a href="homepage.php">Home</a>&nbsp><a href="history.php">History</a>
	<div align="center" >
		<img class="img" style="border:2px solid blue" src="img/history.jpg"></img><br><br>
		<p class="b" style="border:2px solid green">The history of aviation has extended over more than two thousand years, from the earliest forms of aviation, kites and attempts at tower jumping, to supersonic, and hypersonic flight by powered, heavier-than-air jets.<br>
			The term aviation, noun of action from stem of Latin avis "bird" with suffix -ation meaning action or progress, was coined in 1863 by French pioneer Guillaume Joseph Gabriel de La Landelle (1812–1886) in <strong>Aviation ou Navigation aérienne sans ballons</strong>.<br>Experiments with gliders provided the groundwork for heavier-than-air craft, and by the early-20th century, advances in engine technology and aerodynamics made controlled, powered flight possible for the first time. The modern aeroplane with its characteristic tail was established by 1909 and from then on the history of the aeroplane became tied to the development of more and more powerful engines.</p>

   	<p class="flip">Hydrogen Ballon</p>
	  <div class="panel">
			<img class="img" src="img/balloon.jpg"></img>
		 <p>In December 1783, Jacques Alexander Cesar Charles, member of the French Academy of Sciences, made a flight in a balloon filled with hydrogen, which is one fourteenth the weight of air.</p>
		 <p>In aeronautics, a balloon is an unpowered aerostat, which remains aloft or floats due to its buoyancy. A balloon may be free, moving with the wind, or tethered to a fixed point. It is distinct from an airship, which is a powered aerostat that can propel itself through the air in a controlled manner.</p>
	  </div>
		<p class="flip">Wright 1905 Flyer</p>
	  <div class="panel">
			<img class="img" height="250px" src="img/img2.jpg"></img>
		 <p>Not as well known as the first airplane, the 1903 Flyer, the Wright 1905 Flyer was the world’s first practical airplane. The 1903 and 1904 machines were purely experimental, laying the groundwork for three-axis control—in yaw, pitch, and roll. The 1903 Flyer had interconnected roll and yaw (wing warping and rudder). The 1905 Flyer, on the other hand, was the first airplane to have independent three-axis control.</p>
		 <p>Though it still used a catapult for launch and it still had the instability of all early Wright biplanes, the 1905 Flyer differed significantly from them. It had upright seating for its pilot and a passenger, twice the power of its predecessors, 50 percent greater speed, and much greater endurance, capable of flying for more than half an hour. In modern parlance, the 1905 Wright Flyer constituted a pre-production prototype for subsequent Wright production designs—and a template for the world’s aircraft that followed. Fittingly, visitors to the Wright Hall at Carillon Park in Dayton, Ohio, can see this remarkable airplane, magnificently restored, with the assistance of Orville Wright himself.</p>
	  </div>
		<p class="flip">Early Gliders</p>
	  <div class="panel">
			<img class="img" height="250px"src="img/img1.webp"></img>
		 <p>A glider is a heavier-than-air aircraft that is supported in flight by the dynamic reaction of the air against its lifting surfaces, and whose free flight does not depend on an engine. Most gliders do not have an engine, although motor-gliders have small engines for extending their flight when necessary with some being powerful enough to take off.</p>
		 <p>There is a wide variety of types differing in the construction of their wings, aerodynamic efficiency, location of the pilot, controls and intended purpose. Most exploit meteorological phenomena to maintain or gain height. Gliders are principally used for the air sports of gliding, hang gliding and paragliding. However some spacecraft have been designed to descend as gliders and in the past military gliders have been used in warfare. Some simple and familiar types of glider are toys such as the paper plane and balsa wood glider.</p>
	  </div>
		<p class="flip">Wright Flyer</p>
	  <div class="panel">
			<img class="img" height="250px" src="img/img4.jpg"></img>
		 <p>In December 1783, Jacques Alexander Cesar Charles, member of the French Academy of Sciences, made a flight in a balloon filled with hydrogen, which is one fourteenth the weight of air.</p>
		 <p>In aeronautics, a balloon is an unpowered aerostat, which remains aloft or floats due to its buoyancy. A balloon may be free, moving with the wind, or tethered to a fixed point. It is distinct from an airship, which is a powered aerostat that can propel itself through the air in a controlled manner.</p>
	  </div>
		<p class="flip">First Jets</p>
	  <div class="panel">
			<img class="img" height="250px" src="img/img3.webp"></img>
		 <p>A jet aircraft (or simply jet) is an aircraft (nearly always a fixed-wing aircraft) propelled by jet engines (jet propulsion).Whereas the engines in propeller-powered aircraft generally achieve their maximum efficiency at much lower speeds and altitudes, jet engines and aircraft achieve maximum efficiency (see specific impulse) at speeds close to or even well above the speed of sound. Jet aircraft generally cruise at faster than about Mach 0.8 (609 mph, 981 km/h or 273 m/s) at altitudes around 10,000–15,000 metres (33,000–49,000 ft) or more.</p>
		 <p>Frank Whittle, an English inventor and RAF officer, developed the concept of the jet engine in 1928,[1] and Hans von Ohain in Germany developed the concept independently in the early 1930s. He wrote in February 1936 to Ernst Heinkel, who led the construction of the world's first turbojet aircraft and jet plane Heinkel He 178. However, it can be argued that the English engineer A. A. Griffith, who published a paper in July 1926 on compressors and turbines, also deserves credit.</p>
	  </div>

	</div>

	<!-- End History Section -->

	<!--  Footer Section  -->
	<footer>
		<p class="cta_text animated wow fadeInDown">For your easy accessibility Our Site is supported on many platforms so that your experience is not interrupted!!</p>
		<ul class="list-unstyled list-inline app_platform">
			<li class="animated wow fadeInDown" data-wow-delay="0s">
				<a href=""><img src="img/android_icon.png" alt="" title="ANDROID OPTIMZED"></a>
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".1s">
				<a href=""><img src="img/ios_icon.png" alt="" title="iOS OPTIMZED"></a>
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".2s">
				<a href=""><img src="img/windows_icon.png" alt="" title="WINDOWS OPTIMZED"></a>
			</li>
		</ul>

		<p class="cta_text animated wow fadeInDown">This site is best viewed in <strong>Google Chrome, Mozilla Firefox, Microsoft Edge</strong></p>
		<p class="copyright animated wow fadeIn" data-wow-duration="2s">© 2018 <a href="" target="_blank"><strong>Aviation.com</strong></a>. All Rights Reserved</p>
		<p class="copyright animated wow fadeIn" data-wow-duration="2s" >Created by Inderjeet and Nidhi</p>
	</footer>
	<!--  End Footer Section  -->


</body>
</html>
