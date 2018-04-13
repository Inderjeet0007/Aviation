<?php
session_start();

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: login_admin.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login_admin.php");
}
?>
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
	<?php if (isset($_SESSION['username'])) : ?>
  	<div align="right" class="some">
      <p >Welcome, <strong><?php echo $_SESSION['username']; ?></strong> &nbsp
    <a href="login_admin.php?logout='1'" style="color: red;">Admin Logout</a> </p></div>
  <?php endif ?>
<div id="container">
<h2>ADMIN (Contact Us Details)</h2>
<p><strong>Users who have filled the contact us form will appear below.</strong></p>
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
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="http://localhost/Aviation/admin/admin.php">Back To DashBoard</a>
</body>
</html>
