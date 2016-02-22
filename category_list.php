<?php
$sql = "select * from categories order by category_name";
$nav_result = mysqli_query($connection,$sql);
?>


  <?php while ($row = mysqli_fetch_assoc($nav_result)): ?>
    <li><a href="menu_view.php?id=<?php echo $row["id"] ?>"><?php echo $row["category_name"] ?></a></li>
  <?php endwhile; ?>
