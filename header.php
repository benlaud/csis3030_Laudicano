<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <!-- Small Navigation -->
<div class="title-bar" data-responsive-toggle="nav-menu" data-hide-for="medium">
  <a class="logo-small show-for-small-only" href="#"><img src="http://placehold.it/50x50?text=LOGO" /></a>
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<!-- Medium-Up Navigation -->
<nav class="top-bar" id="nav-menu">

  <div class="logo-wrapper hide-for-small-only">
    <div class="logo">
      <a href="index.php"><img src="http://placehold.it/350x150?text=LOGO"></a>
    </div>
  </div>

  <!-- Left Nav Section -->
  <div class="top-bar-left">
    <ul class="vertical medium-horizontal menu">
      <?php include("category_list.php"); ?>
    </ul>
  </div>

  <!-- Right Nav Section -->
  <div class="top-bar-right">
    <ul class="vertical medium-horizontal menu">
      <li class=""><a href="cart_list.php">View Cart</a></li>
      <li class=""><a href="#">About</a></li>
    </ul>
  </div>

</nav>
