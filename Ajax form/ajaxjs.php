<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];
$contact2 = $_POST['contact1'];
$connection = mysqli_connect("localhost", "root", "","mydba"); // Establishing Connection with Server..
if (isset($_POST['name1'])) {
$query = mysqli_query($connection,"insert into form_element values ('$name2', '$email2', '$password2','$contact2')"); //Insert Query

echo "Form Submitted succesfully";
}
mysqli_close($connection); // Connection Closed
?>