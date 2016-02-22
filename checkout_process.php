<?php include ("global.php");

//clean input
$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

if ($firstname == "") {
    $errormessage =  $errormessage . "First Name was blank <br />";
}

if ($address == "") {
    $errormessage =  $errormessage . "Address was blank <br />";
}

if ($city == "") {
    $errormessage =  $errormessage . "City was blank <br />";
}

if ($zip == "") {
    $errormessage =  $errormessage . "Zip was blank <br />";
}

if ($errormessage != "") {
    include("checkout_form.php");
    die();
}

   echo "order placed.";


?>
