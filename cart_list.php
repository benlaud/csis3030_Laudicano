<?php include ("global.php");
      include("header.php");

      $sql = "select * from products,cart where (cart.session_id='$session_id') and (cart.product_id = products.id)";

      $result = mysqli_query($connection,$sql);
?>

<div class="row">

    <form class="small-12 columns" method="POST" action="cart_process.php">

      <?php while ($row = mysqli_fetch_assoc($result)): ?>

        <h3><?php echo $row["product_name"] ?></h3>
        <p>Quantitiy</p>
        <input type="text" name="product_<?php echo $row["product_id"] ?>" size="3" value="<?php echo $row["quantity"] ?>">

      <?php endwhile; ?>

      <input type="submit" class="button" name="update_cart" value="Update Cart">

      <input type="submit" class="button" name="checkout" value="Checkout">

    </form>

</div>

<?php include("footer.php"); ?>
