<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0">
<title>Accidents</title>
<style>
.header1{
	background-color: #FC5454;
	text-align: center;
	font-size: 36px;
	opacity: 0.75;
	 position: relative;
    -webkit-animation: header 3s;  /* Safari*/
    -webkit-animation-fill-mode: forwards; /* Safari*/
    animation: header 3s;
    animation-fill-mode: forwards;
	z-index: 1;

}

/* Safari */
@-webkit-keyframes header {
    from {top: 0px;}
    to {top: 20px;}
}

@keyframes header {
    from {top: 0px;}
    to {top: 20px;}
	}
.container{
	background-image : url("img/00.jpg");
	width : 100% ;
	align: center;
	text-align:center;
	z-index: 1;
	cursor: pointer;
	}
.color-div1{
		background-color: white;
		opacity: 0.75;
		width: 50% ;
		border-radius: 2% ;
		height:10%;
		overflow: hidden;
		border: 1px solid #000000;
		-webkit-transition: width 2s;
		transition: width 2s;
		cursor: pointer;
		position: relative;
		-webkit-animation: color-div1 3s;  /* Safari */
		-webkit-animation-fill-mode: forwards; /* Safari*/
		animation: color-div1 3s;
		animation-fill-mode: forwards;
		box-shadow: 5px 5px 8px 5px #A9A9A9;
}

/* Safari*/
@-webkit-keyframes color-div1 {
    from {top: 0px;}
    to {top: 20px;}
}

@keyframes color-div1 {
    from {right: 0%;}
    to {right: 20%;}
	}

.color-div3{
		background-color: white;
		opacity: 0.75;
		width: 50% ;
		border-radius: 2% ;
		height:10%;
		overflow: hidden;
		border: 1px solid #000000;
		margin-top: 9%;
		position: relative;
		-webkit-animation: color-div3 3s;  /* Safari */
		-webkit-animation-fill-mode: forwards; /* Safari */
		animation: color-div3 3s;
		animation-fill-mode: forwards;
		z-index: 1;
		box-shadow: 5px 5px 8px 5px #888888;
}

/* Safari */
@-webkit-keyframes color-div3 {
    from {top: 0px;}
    to {top: 20px;}
}

@keyframes color-div3 {
    from {right: 0%;}
    to {right: 20%;}
	}

.color-div2{
		background-color: white;
		opacity: 0.75;
		width: 50%;
		border-radius: 2% ;
		height:10%;
		overflow: hidden;
		border: 1px solid #000000;
		z-index: 1;
		cursor: pointer;
		position: relative;
		-webkit-animation: color-div2 3s;  /* Safari */
		-webkit-animation-fill-mode: forwards; /* Safari */
		animation: color-div2 3s;
		animation-fill-mode: forwards;
		box-shadow: 5px 5px 8px 5px #A9A9A9;
}

/* Safari  */
@-webkit-keyframes color-div2 {
    from {top: 0px;}
    to {top: 20px;}
}

@keyframes color-div2 {
    from {left: 0%;}
    to {left: 20%;}
	}

.color-div1:hover{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		background-color: #45B4F5;
	}

.color-div2:hover{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		background-color: #FF66B2;
	}
.color-div3:hover{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		background-color: #45B4F5;
	}
.h3{
	color: Blue;
	}
.img{
		border: 1px solid #ddd;
		border-radius: 4%;
		padding: 1%;
		width: 60%;
		align: center;
		z-index: 1;
	}
.img2{
	width: 30%;
	height:30%;
	float: right;
	-webkit-animation: img2 3s;  /* Safari*/
    -webkit-animation-fill-mode: forwards; /* Safari*/
    animation: img2 3s;
    animation-fill-mode: forwards;
	z-index: 1;

}
.b{
font: italic 20px/30px Allan, serif;
}
/* Safari  */
@-webkit-keyframes img2 {
    from {top: 0px;}
    to {top: 200px;}
}

@keyframes img2 {
    from {top: 0px;}
    to {top: 200px;}
	}
.footer{
	text-align:right;
	color: black;
	font-size: 100%;
	padding-right: 5%;
}
</style>
</head>

<body>
		<?php echo file_get_contents('http://localhost/Aviation/header.html'); ?>
<br><p class=" b" style="padding-left: 150px"><a href="homepage.php">Home</a>&nbsp><a href="air_acci.php">Accidents</a>
<div class="container">
<div class="header1">
	<div align="center" >
			<h1>Major Accidents <img class="img2" src="img/17.png" ></h1>
	</div>
</div>
<div align="center">

	<div class="color-div3">
<h1 >Lauda Air Flight 004 - 223 dead: </h1>
  <img class="mySlides img" src="img/1.jpg" style="width:50%">
<p><br><b>On 26 May 1991 flight 004 from Bangkok to Vienna broke up in the air near the Burma-Thailand border after the thrust reverser on the left wing fired. Reports indicate that it’s subsequent dive could have exceeded mach 1 (the sound barrier). There were no survivors...<a href="A1.php">Read More</a></b></p>
</div>


<div class="color-div2">
<h1>China Airlines Flight 611 - 225 dead:</h1>
  <img class="mySlides img" src="img/4.jpg" style="width:50%">
<p> <br><b>On 25 May 2002 flight 611 from Taiwan to Hong Kong disintegrated mid flight due to faulty repairs 22 years earlier....<a href="A2.php">Read More</a></b></p>
</div>


<div class="color-div1">
<h1>Korean Air Flight 801 - 228 dead: </h1>
  <img class="mySlides img" src="img/6.png" style="width:50%">
<p> <br><p><b> Despite protests from the flight engineer that the captain was not detecting the correct signal for landing, he pressed on and guided flight 801 from Seoul, South Korea directly into the Guam mountainside leaving only 26 survivors...<a href="A3.php">Read More</a></b></p>
</div>


<div class="color-div2">
<h2>Air France Flight 447 - 228 dead:</h2>
  <img class="mySlides img" src="img/9.jpg" style="width:50%">
<p> <br><b> 1 June 2009 flight 447 disappeared on its way to Paris from Rio de Janeiro. Although the wreckage was found after 5 days the black box was recovered 2 years later. The cause was found to be an inappropriate pilot response to faulty air speed indicators due to bad weather conditions and ice....<a href="A4.php">Read More</a></b></p>
</div>


<div class="color-div1">
<h1>Swissair Flight 111 - 229 dead:</h1>
  <img class="mySlides img" src="img/10.jpg" style="width:50%">
<p> <br><b>On 2 September 1998 Swissair flight 111 from New York to Geneva crashed into the ocean just off of Nova Scotia due to a rapidly spreading cockpit fire...<a href="A6.php">Read More</a></b></p>
</div>
<div class="footer">

</div>
</div>

</div>
<?php echo file_get_contents('http://localhost/Aviation/footer2.html'); ?>
</body>
</html>
