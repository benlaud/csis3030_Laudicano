<?php
  include("global.php");
  include("header.php");

  $id = $_GET["product_id"];
  $result = mysqli_query($connection,"select * from products where id=$id");
?>

<div class="row">

<?php while ($row = mysqli_fetch_assoc($result)): ?>

  <div class="small-12 columns">
      <?php echo $row["product_name"] ?>
  </div>

  <div class="small-12 large-6 columns">
    <div class="frame">
      <img src="img/<?php echo $row["image"] ?>"/>
    </div>
  </div>

  <div class="small-12 large-6 columns">
    <p><?php echo $row["description"] ?></p>

    <form action="cart_process.php" method="POST">
      <input type="text" name="product_<?php echo $row["id"] ?>" size="3">
      <input type="submit" value="Add To Cart" name="submit" class="button">
    </form>

  </div>

<?php endwhile; ?>

</div>




<?php include("footer.php"); ?>
