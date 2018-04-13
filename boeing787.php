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
  <br><p class="container b"><a href="homepage.php">Home</a>><a href="aircraft.php">Aircrafts</a>><a href="boeing.php">Boeing Aircrafts</a>><a href="#">Boeing 787</a></p>
  <br>
  <div>
    <p class="container b"><strong>Boeing 787 Dreamliner</strong></p>
    <p class="container ">The <strong>Boeing 787</strong> is an American long-haul, mid-size widebody, twin-engine jet airliner made by Boeing Commercial Airplanes. Its variants seat 242 to 335 passengers in typical three-class seating configurations. It is the first airliner with an airframe constructed primarily of composite materials. The 787 was designed to be 20% more fuel efficient than the Boeing 767, which it was intended to replace. The 787 Dreamliner's distinguishing features include mostly electrical flight systems, raked wingtips, and noise-reducing chevrons on its engine nacelles. It shares a common type rating with the larger Boeing 777 to allow qualified pilots to operate both models.</p>

        <div align="center"><p class="container b">B787 Specs</p><img class="img" src="img/info787.png"></img></div>
    <div align="center"><p class="container b">B787</p><img class="img" src="img/b787-8.jpg"></img></div>

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
