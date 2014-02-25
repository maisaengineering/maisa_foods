
<?php
$id=$_GET['id'];
if($id=="") $id=3; ?>

<!doctype html>
<html lang="en">
    <head>
    <title>Maisa&#8482; Foods</title>
    <?php include ('analyticstracking.php'); ?>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="../js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
<div id="center_block">
      <img src="images/slide_one.jpg" width="970" title="">
</div>
<div class="products">
  <div style="background-color:#F6212D;padding:10px"><h1 style="color:#ffffff;margin:10px;">Instant Foods</h1></div>
  <div class="clear"></div>
    <p>&nbsp;</p>
    <div>
      <div class="box1 float"><img src="images/nuggets.jpg" width="220px"><br><a href="if1.php" title="Garam Masala"><div class="button_view">View More</div></a></div>
      <div class="box1 float"><img src="images/new_product.jpg" width="220px" height="330px"><br><a href="#" title="Sambar Powder"><div class="button_view">View More</div></a></div>
  <!--     <div class="box2 floatr"><img src="images/masala5.jpg" width="220px"><a href="product3.php" title="Rasam Powder"><div class="button_view">View More</div></a></div> -->
    </div> 
    <div class="clear"></div> 
</div>
<?php include 'footer.php'; ?>
    </div>
  </body>
  </html> 