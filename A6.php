<!doctype html>
<html>
<head>
<title>Swiss Air Flight 111</title>
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
    -webkit-animation: header 3s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
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
    -webkit-animation: content 3s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
    animation: content 3s;
    animation-fill-mode: forwards;
	z-index: 1;

}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes content {
    from {top: 0px;}
    to {top: 20px;}
}
.b{
font: italic 20px/30px Allan, serif;
}
</style>
</head>
<body>
	<?php echo file_get_contents('http://localhost/Aviation/header.html'); ?>
<br><p class=" b" style="padding-left: 150px"><a href="homepage.php">Home</a>&nbsp><a href="air_acci.php">Accidents</a>&nbsp><a href="A6.php">Swiss Air Flight 111</a>
<div class="header"><h1 >Swiss Air Flight 111 - 229 dead </h1></div>
<div class="forimg">
  <img class="img3" src="img/111.jpg" align="center" >
   <img class="img3" src="img/222.jpg" align="center" >

</div>
<div class="container">

<div class="content">
<p>Swissair flight 111, flight of a passenger airliner that crashed on September 2, 1998, off the coast of Nova Scotia, Canada, killing all 229 on board. The subsequent investigation determined that faulty wires caused the plane’s flammable insulation to catch fire.</p>
After all, even the official report published by the Thai aviation authorities reads that the cause for the deployed thrust reverser could not be determined. </p>
<p>Swissair flight 111 was a regularly scheduled flight from New York City to Geneva. It was known as the United Nations airbus because many passengers were UN workers returning to the organization’s headquarters. At approximately 8:17 PM (Eastern Daylight Time; 9:17 PM Atlantic Daylight Time [ADT]) the plane, a three-engine MD-11, took off from John F. Kennedy International Airport. On board were 14 crew members and 215 passengers. Less than an hour later, a strange smell was detected in the cockpit, and four minutes later smoke appeared but then disappeared. The pilots sent out a Pan Pan Pan, signaling that the aircraft was experiencing a problem, but there was no immediate danger. At the time, they believed there was an issue with the air conditioning system and were unaware of the rapidly intensifying fire in the ceiling. After consulting air traffic controllers, it was decided that the airplane would land in Halifax, some 56 miles (104 km) away. At about 10:21 PM (ADT), the pilots altered course in order to dump fuel. Three minutes later, they declared an emergency as various systems on the plane began to fail and the cockpit began to fill with smoke. Shortly thereafter air traffic controllers lost contact. The aircraft hit the water at about 10:31 PM, reportedly almost upside down, and broke apart on impact
</p>
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
