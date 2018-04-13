<!DOCTYPE html>

<html lang="en-us">
<head>
	<title>Boeing Aircrafts</title>

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
<style>

	.border{
		border:1px solid black;
		font-family: Arial, Helvetica, sans-serif;
	}
	.b{
	font: italic 20px/30px Allan, serif;

	}
	.ba{
	font: italic bold 20px/30px Georgia, serif;
	}
	.d{
		color: white;
		background-color: grey;
	}
	.img {max-width:100%}

	.columns {

	}
	@media screen and (min-width: 1000px) {
	  .columns,
	  .column {
		display: flex;
	  }
	}
	.column {
	  background: #eee;
	  flex: 1;
	  padding: 20px;
	  flex-direction: column; /* Makes the articles stacked vertically */
	}
	.article {
	  background: white;
	  color: #666;
	  display: flex;
	  flex: 1;
	  flex-direction: column;
	  flex-basis: auto;
	  margin: 10px;
	}

	.article-image {
	  background: #eee;
	  display: block;
	  padding-top: 75%;
	  position: relative;
	  width: 100%;
	}

	.article-image img {
	  display: block;
	  height: 100%;
	  left: 0;
	  position: absolute;
	  top: 0;
	  width: 100%;
	}

	.article-image.is-3by2 {
	  padding-top: 66.6666%;
	}

	.article-image.is-16by9 {
	  padding-top: 56.25%;
	}

	.article-body {
	  display: flex;
	  flex: 1;
	  flex-direction: column;
	  padding: 20px;
	}

	.article-title {
	  color: #333;
	  flex-shrink: 0;
	  font-size: 1.4em;
	  font-weight: bold;
	  font-weight: 700;
	  line-height: 1.2;
	}

	.article-content {
	  flex: 1;
	  margin-top: 5px;
	}

	.article-info {
	  display: flex;
	  font-size: 0.85em;
	  justify-content: space-between;
	  margin-top: 10px;
	}
	.first-article {
	  flex-direction: row;
	}
	 .first-article .article-body {
		flex: 1;
	  }

	  .first-article .article-image {
		height: 300px;
		order: 2;
		padding-top: 0;
		width: 400px;
	  }

	  .main-column {
		flex: 3;
	  }

	  .nested-column {
		flex: 2;
	  }
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
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".0s" href="aircraft.php"><strong>Aircrafts</strong></a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="used_inst.php">Instruments</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="history.php">History</a>
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
  <br><p class="container b"><a href="homepage.php">Home</a>><a href="aircraft.php">Aircrafts</a>><a href="boeing.php">Boeing Aircrafts</a>><a href="#">Boeing 747</a></p>
  <br>
  <div>
    <p class="container b"><strong>Boeing 747 Family</strong></p>
    <p class="container ">The Boeing 747 was developed in the late 1960s, when it became evident that the older Boeing 707, the world's main long-range jet, was inadequate to cope with the rapidly growing demand of air travel. The 747 featured two passenger decks and was the world's first wide-body aircraft, holding the title of largest passenger jet for an impressive 35 years until the appearance of the Airbus A380. Its immense size earned it the nickname Jumbo Jet. Production of the 747 began in 1969 and continues to this day, with over 1,500 planes manufactured in several different versions.</p>
    <p class="container ">The <strong>Boeing 747-100</strong>, the first plane in the series, made its maiden flight in February of 1969, and completed its first commercial flight less than a year later, for Pan American Airlines. Aside from the base model, the Boeing 747-100 was produced in two additional variants: the Boeing 747-100SR (Short Range; featuring more compact fuel tanks but an extended passenger space) and the Boeing 747-100SP (Special Performance; with a shorter fuselage but capable of farther travel, intended for long-distance flights with smaller passenger loads).</p>
    <p class="container ">1971 saw the introduction of the <strong>Boeing 747-200</strong>, outfitted with more powerful engines and capable of airlifting greater payloads across larger distances. This made it a formidable freighter, and two specialized versions, the Boeing 747-200C and -200F, were optimized for hauling cargo over long distances.</p>
    <p class="container ">In 1983 the Boeing Corporation began production of the third generation of 747, the <strong>Boeing 747-300</strong>. The new series' primary distinction from previous jets was an extended upper deck, which allowed it to fit up to 580 passengers (in a one-class configuration). Like its predecessors, the 747-300 was produced in three modifications: the standard 747-300, the 747-300M (which included more freight space) and the 747-300SR (short-range version).</p>
    <p class="container ">The most popular model of the family turned out to be the <strong>Boeing 747-400</strong> series, which was introduced in 1989. The newer jet was upgraded with better engines, improved electronics and additional fuel tanks mounted on the tail-end, as well as a revised wing design featuring winglets. The Boeing 747-400 series is still in production in several different variations, including the 747-400D (Domestic) with increased passenger capacity of up to 660 people, the 747-400ER (Extended Range) with a maximum range of 14,000 km, the 747-400M, a combined passenger/freight version, the 747-400F (Freighter) and the 747-400ERF (Extended Range Freighter).</p>
    <p class="container ">The Boeing Corporation is currently producing the latest version of the 747, the <strong>Boeing 747-8</strong> Intercontinental. This passenger jet have a longer fuselage, a revised wing design and new and improved engines and avionics systems which allow it to be quieter and more efficient than any of its predecessors. It is capable of airlifting up to 467 passengers over a distance of 14,800 km. The freighter version of the 747-8, which is developed in parallel with the passenger version, made its maiden flight in February 2010.</p>
    <div align="center"><p class="container b">B747-100</p><img class="img" src="img/b747-1.jpg"></img></div>
    <div align="center"><p class="container b">B747-SP</p><img class="img" src="img/b747SP.jpg"></img></div>
    <div align="center"><p class="container b">B747-200</p><img class="img" src="img/b747-2.jpg"></img></div>
    <div align="center"><p class="container b">B747-300</p><img class="img" src="img/b747-3.jpg"></img></div>
    <div align="center"><p class="container b">B747-400</p><img class="img" src="img/b747-4.jpg"></img></div>
  </div>
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
