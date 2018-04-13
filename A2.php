<!doctype html>
<html>
<head>
<title>China Airlines Flight 611</title>
<style>
.header{
	background-color: red;
	text-align: center;
	font-size: 36px;
	opacity: 0.5;
	 position: relative;
	 width: 100% ;
	 align: center;
	 text-align: center;
	 padding-top: 2%;
	 padding-bottom: 2%;
	 position: relative;
    -webkit-animation: header 3s;  /* Safari  */
    -webkit-animation-fill-mode: forwards; /* Safari */
    animation: header 3s;
    animation-fill-mode: forwards;
	z-index: 1;

}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes header {
    from {top: 0px;}
    to {top: 20px;}
}

@keyframes header {
    from {top: 0px;}
    to {top: 20px;}
	}
.img3{
		border: 1px solid #ddd;
		border-radius: 4%;
		align: center;
		display : none;
		width: 90%;
		height: 20%;

}
.forimg{
		align: center;
		width: 90%;
		height: 20%;
		text-align: center;
		padding-left: 10%;
}
.container{
	background-color: #2a6592;
	align: center;
		width: 90%;
		height: 20%;
		text-align: center;
		padding-left: 10%;
}

.content{
	-webkit-column-count: 2;
	column-count:2;
	column-rule-color: black;
	background-color: white;
	font-size: 30px;
	opacity: 0.75;
	 position: relative;
		border: 1px solid #ddd;
		border-radius: 4%;
		align: center;
		width: 90%;
		height: 20%;
		padding:1%;
	 position: relative;
    -webkit-animation: content 3s;  /* Safari */
    -webkit-animation-fill-mode: forwards; /* Safari*/
    animation: content 3s;
    animation-fill-mode: forwards;
	z-index: 1;

}
.b{
font: italic 20px/30px Allan, serif;
}
/* Safari 4.0 - 8.0 */
@-webkit-keyframes content {
    from {top: 0px;}
    to {top: 20px;}
}

@keyframes content {
    from {top: 0px;}
    to {top: 20px;}
	}

</style>
</head>
<body>
	<?php echo file_get_contents('http://localhost/Aviation/header.html'); ?>
<br><p class=" b" style="padding-left: 150px"><a href="homepage.php">Home</a>&nbsp><a href="air_acci.php">Accidents</a>&nbsp><a href="A2.php">China Airlines Flight 611</a>
<div class="header"><h1 >China Airlines Flight 611 - 225 dead </h1></div>
<div class="forimg">
  <img class="img3" src="img/4.jpg" align="center" >
   <img class="img3" src="img/5.jpg" align="center" >

</div>
<div class="container">

<div class="content">
<p>With 223 fatalities, the crash of "Mozart" on May 26th 1991 is until now Austria’s most fatal catastrophe in its aviation history.
<p> Now, 24 years later, there is a TV documentary on this crash available, although due to the lack of research it shouldn’t be called this way.
<p>Investigators point out maintenance shortcomings at Lauda Air Even though legally the charges against Niki Lauda and his (actually not very successful – see the links below) airline were dropped, this does whitewash the former Formula-1 World Champion.</p>
After all, even the official report published by the Thai aviation authorities reads that the cause for the deployed thrust reverser could not be determined. </p>
<p>It was noted by the investigators that maintenance work performed at Lauda Air was not always in accordance with the regulations of the manufacturer Boeing.
<p>Obviously, in the months leading up to the crash, there was always the same error message in the computers of "Mozart", without anyone of Lauda Airs technicians informing Boeing about this – even though there was a Boeing representative stationed at Vienna Airport.</p>
Severe accusations in a report locked up for 24 years & as if this wouldn’t be enough, in 1994 the Austrian expert Prof.</p>
<p> DDipl-Ing. Dr. Ernst Zeibig published an explicit report, stating that "urgently needed documentation was handed over by Lauda Air only after the help of court, with the threats of executing a search warrant".</p>
<p>But also with the official Thai investigation, important files were left unattended at Lauda Air for ten days, until they could be confiscated.</p>
<p> The German aviation journalist Tim van Beveren qouted Johann Rausch, former president of the civil aviation authority (Bundesamt für Zivilluftfahrt): "It is international standard that documents are immediately recovered and secured. The fact that it took then days in this case is left uncommented from my side." Guenther Raicher, head of the air crash investigation authorities told the Austrian weekly newspaper "profil" (issue 48/1992, page 24): "I had the intention of getting the papers, but hadn’t had any legal right to do so.</p>
<p>We were told at Lauda Air that they are only obliged to (and would) hand over documentation to the international commission."</p>
</div>
</div>
<?php echo file_get_contents('http://localhost/Aviation/footer2.html'); ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("img3");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
