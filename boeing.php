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
	<br><p class="container b"><a href="homepage.php">Home</a>><a href="aircraft.php">Aircrafts</a>><a href="#">Boeing Aircrafts</a></p>
	<br>
	<div class="columns ">
	  <div class="column main-column ">
		<article class="article ">
		  <figure class="article-image is-4by3">
        <img src="img/B747.jpg" alt="">
      </figure>
		  <h2 class="article-title"><a href="boeing747.php">Boeing 747 Series</a></h2>
		<p class="article-content">
          The Boeing 747 is an American wide-body commercial jet airliner and cargo aircraft, often referred to by its original nickname, "Jumbo Jet".
        <br><br>The First Class and Business Class sections of the 747-8 enable airlines to offer passengers the most private and premium accommodations in the sky. So it's no surprise that on high-volume routes the 747-8 offers premium revenue potential. And with more than 400 seats available, this new 747 creates a unique opportunity to maximize the bottom-line potential of any high-volume route. It's premium value, delivered, for operators and passengers. That's a better way to fly.</a></p>
		</article>

		<article class="article">
		  <figure class="article-image is-4by3">
				<img src="img/B777X.jpg" alt="Boeing 777X">
			</figure>
			 <h2 class="article-title"><a href="boeing777.php">Boeing 777 Series</a></h2>
		  <p class="article-content">
		 777X will be the largest and most efficient twin-engine jet in the world, unmatched in every aspect of performance. But performance is just part of the story. The cabin interior of the 777X is inspired by the comforts and conveniences of the 787 Dreamliner, with larger windows, a wider cabin, new lighting and enhanced architecture — all of which will be custom-tailored for a unique 777X experience. The all-new 777X. That's a better way to fly.</p>
		</article>
	  </div>
	  <div class="column">
		<article class="article">
		  <figure class="article-image is-3by2">
				<img src="img/B737.jpg" alt="Boeing 737">
			</figure>
			 <h2 class="article-title"><a href="boeing737.php">Boeing 737 Series</a></h2>
		  <p class="article-content">
		 The 737 delivers the superior reliability, fuel efficiency and high-value returns operators require in today's competitive market. Its exceptional versatility and lower maintenance and operating costs provide a competitive edge regardless of business model or market. A competitive edge that enables profitable growth. All this plus the newest passenger cabin design in its class to ensure a flying experience that exceeds expectations. That's a better way to fly.</p>
		</article>
		<article class="article">
		  <figure class="article-image is-3by2">
				<img src="img/bbjets.jpg" alt="Boeing Business Jets">
			</figure>
			 <h2 class="article-title"><a href="boeing_buss_jet.php">Boeing Business Jets</a></h2>
		  <figure >
				<img src="img/bbj.png" alt="Boeing Business">
			</figure>
		  <p class="article-content">
		 Boeing Business Jets brings the best of commercial aviation into the realm of private air travel, offering customers a wide range of Boeing products that can be uniquely customized for the private, business or governmental sectors. The robust characteristics of these airplanes also provide an excellent value proposition when outfitted for the private market; offering larger, more personalized space, unmatched reliability and worldwide support.</p>

		</article>
		<article class="article">
			<figure class="article-image is-3by2">
				<img src="img/B787.jpg" alt="Boeing 787">
			</figure>
			 <h2 class="article-title"><a href="boeing787.php">Boeing 787</a></h2>
			<p class="article-content">
				The industry-leading technology of the 787 Dreamliner is creating remarkable opportunities for airlines around the world and dramatically improving the air travel experience. We call it the Dreamliner effect. The 787’s unparalleled fuel efficiency and range flexibility enables carriers to profitably open new routes as well as optimize fleet and network performance. And for their passengers, an experience like none other in the air, with more comfort and less fatigue. The Dreamliner effect. That’s a better way to fly.</p>
		</article>
		<article class="article">
			<figure class="article-image is-3by2">
				<img src="img/B767.jpg" alt="Boeing 767">
			</figure>
			 <h2 class="article-title"><a href="boeing787.php">Boeing 767 Freighter</a></h2>
			<p class="article-content">
				Cargo operators around the world keep the global 767 Freighter fleet busy, using each airplane an average of 10 hours a day. The 100 freighters delivered so far have accumulated more than 2 million flight hours combined since the introduction of the model.</p>
		</article>
	 </div>
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
