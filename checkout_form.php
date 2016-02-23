<?php include ("global.php");
      include("header.php");

      $sql = "";
?>

<form class="row" action="checkout_process.php" method="POST"; >

<p style="color:#965251;"><?php echo $errormessage ?></p>

<p>Just one more step! Enter yor contact information below.</p>

<input type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="first name" >
<input type="text" name="address" value="<?php echo $address ?>" placeholder="address" >
<input type="text" name="city" value="<?php echo $city ?>" placeholder="city" >
<input type="text" name="zip" value="<?php echo $zip ?>" placeholder="zip" >

<input type="submit" name="submit" value="submit" class="button">

</form>




    <?php include("footer.php"); ?>
