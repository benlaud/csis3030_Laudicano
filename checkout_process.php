<?php include ("global.php");

//clean input
$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

$sql = "select * from products,cart where (cart.session_id='$session_id') and (cart.product_id = products.id)";
$result = mysqli_query($connection,$sql);

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

?>

<?php include ("header.php"); ?>

<div class="row">

  <h5><?php echo $firstname ?>, thank you for ordering!</h5>
  <div class="small-12 medium-4 columns">
    <div class="callout">
    <p>Your order will be delivered to:</p>
    <p>
      <?php echo $address ?>
      <br />
      <?php echo $city ?>
      <br />
      <?php echo $zip ?>
    </p>
  </div>
</div>
<div class="small-12 medium-8 columns callout secondary">
  <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <h4><?php echo $row["product_name"] ?> <small>Quantity: <?php echo $row["quantity"] ?></h4>
    <?php $remaining = intval($row["quantity_remaining"]) - intval($row["quantity"]);
          $id = $row["product_id"];
          $sqll = "update products set quantity_remaining = '$remaining' where id = $id";
          mysqli_query($connection,$sqll);

          //Put items into an easy to read string
          $cart_contents = $cart_contents . "\r\n" . $row["product_name"] . ". Quantity: " . $row["quantity"];
    ?>
  <?php endwhile; ?>
</div>



<?php
//email shenanigins
include("jwu_mail.php");
jwu_mail(
    'blaudicano01@wildcats.jwu.edu',
    'Your Daiquiri Order',
    $firstname . ', thank you for choosing Daiquiri. Here is your order summary: ' . $cart_contents
);

?>
</div>

<?php include ("footer.php"); ?>
