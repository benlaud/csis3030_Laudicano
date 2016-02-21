<?php
$sql = "select * from categories order by category_name";
$result = mysqli_query($connection,$sql);
?>

<ul class="vertical medium-horizontal menu">
  <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <li><a href="menu_view.php?id=<?php echo $row["id"] ?>"><?php echo $row["category_name"] ?></a></li>
  <?php endwhile; ?>
</ul>
