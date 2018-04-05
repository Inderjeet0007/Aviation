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

div.panel,p.flip
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
div.panel
{
height:120px;
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
	   <p>Because time is valuable, we deliver quick and easy learning.</p>
	   <p>At W3Schools, you can study everything you need to learn, in an accessible and handy format.</p>
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
