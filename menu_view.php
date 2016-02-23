<?php
include("global.php");
include("header.php");

$id = $_GET["id"];
$result = mysqli_query($connection,"select * from products where category_id=$id");
$category_name = mysqli_query($connection,"select * from categories where (id = $id)");
?>
<div class="row fullwidth">

	<div class="menu-view small-12 medium-8 large-10 columns">

		<div class="row" style="padding:30px;" data-equalizer data-options="equalize_on_stack: true">

			<?php while ($row = mysqli_fetch_assoc($result)): ?>

		  <div class="small-12 medium-4 columns menu-item">

				<div class="menu-content" data-equalizer-watch>

				<div class="frame">
					<img src="img/<?php echo $row["image"] ?>"/>
			  </div>

				<h5>
						<a href="product_detail.php?product_id=<?php echo $row["id"] ?>">
							<?php echo $row["product_name"] ?>
						</a>
				</h5>

		    <p><?php echo $row["price"] ?></p>

				<small class="view_more">	<a href="product_detail.php?product_id=<?php echo $row["id"] ?>">Read More</a></small>

			</div>

		  </div>

			<?php endwhile; ?>


	</div>

	</div>

</div>

<?php include ("footer.php") ?>
