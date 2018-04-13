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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mailing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php if (isset($_SESSION['username'])) : ?>
      <div align="right" class="some">
        <p >Welcome, <strong><?php echo $_SESSION['username']; ?></strong> &nbsp
      <a href="login_admin.php?logout='1'" style="color: red;">Admin Logout</a> </p></div>
    <?php endif ?>

    <h2 align="center">Send a Mail </h2>
    <form class="send_mail" action="next2.php" method="post">
      Name : <input type="text" name="name" placeholder="Enter the Name"><br><br>
      Phone : <input type="number" name="phone" placeholder="Enter Phone Number"><br><br>
      Email : <input type="email" name="email" placeholder="Email Address"><br><br>
      Message : <br>
      <textarea name="textarea" rows="8" cols="55" placeholder="Body of the E-Mail"></textarea><br><br>
      <button type="submit" name="button">SEND MAIL</button><br>
    </form>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="admin.php">Back To DashBoard</a>
  </body>
</html>
