<?php
  include("global.php");
  include("header.php");

  $id = $_GET["product_id"];
  $result = mysqli_query($connection,"select * from products where id=$id");
?>

<div class="row">

<?php while ($row = mysqli_fetch_assoc($result)): ?>

  <div class="small-12 large-6 columns">
    <div class="frame">
      <img src="img/<?php echo $row["image"] ?>"/>
    </div>
  </div>

  <div class="small-12 large-6 columns">
    <h2><?php echo $row["product_name"] ?></h2>
    <p><?php echo $row["description"] ?></p>

    <form class="input-group" action="cart_process.php" method="POST">
      <input placeholder="Quantity" type="number" class="input-group-field" name="product_<?php echo $row["id"] ?>" size="3">
      <div class="input-group-button">
      <input type="submit" value="Add To Cart" name="submit" class="button">
    </div>
    </form>

  </div>

<?php endwhile; ?>

</div>




<?php include("footer.php"); ?>
