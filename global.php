<?php

session_start();
$connection = mysqli_connect("localhost","root","","ecommerce");

//Make the variable easier to use
$session_id = session_id();
?>
