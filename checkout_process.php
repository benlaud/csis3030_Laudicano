<?php include ("global.php");

//clean input
$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

if ($firstname == "") {
  $errormessage = $errormessage . "First name must be more than one character";
}



   echo "order placed.";


?>
