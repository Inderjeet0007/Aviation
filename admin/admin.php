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
<style>

button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>


<!DOCTYPE html>
<html>
<head>
  <title>Admin DashBoard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php if (isset($_SESSION['username'])) : ?>
  	<div align="right" class="some">
      <p >Welcome, <strong><?php echo $_SESSION['username']; ?></strong> &nbsp
    <a href="login_admin.php?logout='1'" style="color: red;">Admin Logout</a> </p></div>
  <?php endif ?>
<br>
Welcome to <strong>Admin Portal</strong> !<br><br> Select any one fuctionality from below:<br><br>
<button onclick="document.location.href='Ajax form/ajax_db.php'">
Contact Us Records
</button>
<button onclick="document.location.href='mail.php'">
SEND A MAIL
</button>


</body>
</html>
