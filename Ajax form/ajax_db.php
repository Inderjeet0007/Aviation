<!DOCTYPE html>
<html>
<head>
	<style>
	
		#container,#txtHint{
			margin : auto;
			text-align:center;
			width:890px;
			border radius: 2px;
			padding-bottom:50px;
		    background-color:#dcdcdc;
		
		}
	
	</style>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div id="container">
<h2>ADMIN SIDE (User Details)</h2>
<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select user </option>
  <option value="1">Inderjeet Saluja</option>
  <option value="2">Radhika Karwa</option>		
  <option value="3">Om Uparkar</option>
  <option value="4">Nisha K</option>
  </select>
</form>
<br>
<div id="txtHint"><b>User information will be displayed here ........</b></div>
</div>
</body>
</html>