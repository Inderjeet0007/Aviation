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
  <br><p class="container b"><a href="homepage.php">Home</a>><a href="aircraft.php">Aircrafts</a>><a href="boeing.php">Boeing Aircrafts</a>><a href="#">Boeing 767</a></p>
  <br>
  <div>
    <p class="container b"><strong>Boeing 767 Family</strong></p>
    <p class="container ">The Boeing 767 was developed as a long-range, wide-body series of airliners capable of carrying from 181 to 315 passengers over a distance of 9,000 to 12,000 km. Created as a replacement for the aging Boeing 707, the 767 were the first next-generation passenger jets, far surpassing all other airliners of the time (1960s-70s) in terms of efficiency and taking advantage of the latest technology on the market. The 767 was developed in parallel to the smaller Boeing 757, and as a result both jets share many design features.</p>
    <p class="container ">In all, the Boeing 767 series was produced in three series. The original series was the 767-200; the plane's fuselage was later elongated to produce the 767-300 series, and then elongated even further to give the 767-400 series. Originally the Boeing Corporation also considered making a shorter, 180-passenger version of the plane, the 767-100, but dropped the idea because the plane would have been too similar to the Boeing 757 line and thus redundant.</p>
    <p class="container ">The first Boeing 767-200 came into service in 1982 with United Airlines, flying intra-continental routes within the United States. In 1984, El Al became the first airline company to use the modified 767-200ER (Extended Range), which was capable of farther flights and could traverse the Atlantic Ocean from Europe to the US without needing to refuel.</p>
    <p class="container ">In 1986, the first Boeing 767-300 began service with Japan Airlines. The plane had a longer fuselage and was able to fit more passengers than the previous model. It was produced alongside two variants: the Boeing 767-300ER (Extended Range), first purchased by American Airlines, and the Boeing 767-300F (Freighter).</p>
    <p class="container ">The Boeing 767-400 was specifically designed for the companies Delta Air Lines and Continental Airlines, who were both looking to replace their fleets of Lockheed L-1011s and Douglas DC-10s. The -400 series featured an even longer fuselage than the -300 and had a larger wingspan. The first 767-400ER began making commercial runs in the year 2000. Unlike its predecessors and indeed most other Boeing families, this latest series includes only the ER version of the plane; there is no base 767-400 model.</p>
    <div align="center"><p class="container b">B767-200</p><img class="img" src="img/b767-2.jpg"></img></div>
    <div align="center"><p class="container b">B767-300</p><img class="img" src="img/b767-3.jpg"></img></div>
    <div align="center"><p class="container b">B767-400</p><img class="img" src="img/b767-4.jpg"></img></div>
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
