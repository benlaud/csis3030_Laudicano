<?php include ("global.php");
      include("header.php");

      $sql = "select * from products,cart where (cart.session_id='$session_id') and (cart.product_id = products.id)";

      $result = mysqli_query($connection,$sql);
?>

<div class="row cart">

    <form style="margin-bottom:50px;" class="small-12 columns" method="POST" action="cart_process.php">

      <?php while ($row = mysqli_fetch_assoc($result)): ?>

        <div class="row">
          <div class="small-12 medium-4 columns">
            <div class="frame">
              <img src="img/<?php echo $row["image"] ?>"/>
            </div>
          </div>
          <div class="small-12 medium-8 columns">
            <h3><?php echo $row["product_name"] ?></h3>
            <p>Quantity</p>
            <input type="number" name="product_<?php echo $row["product_id"] ?>" size="3" value="<?php echo $row["quantity"] ?>">
          </div>
        </div>

      <?php endwhile; ?>

      <input type="submit" class="button" name="update_cart" value="Update Cart">

      <input type="submit" class="button" name="checkout" value="Checkout">

    </form>

</div>

<?php include("footer.php"); ?>
