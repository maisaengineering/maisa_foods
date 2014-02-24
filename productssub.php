
<?php
$id=$_GET['id'];
if($id=="") $id=3; ?>


<!doctype html>
<html lang="en">
    <head>
    <title>Maisa&#8482; Foods</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
        <script src="./js/popup.js"></script>    
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
<div id="center_block">
      <img src="images/slide_three.jpg" width="970" title="">
</div>
<div class="products">
		<div style="background-color:#F6212D;padding:10px"><h1 style="color:#ffffff;margin:10px;">Spices</h1></div>
    <div class="clear"></div>
    <p>&nbsp;</p>
    <div>
      <div class="box1 float"><img src="images/masala7.jpg" width="220px"><br><a href="product1.php" title="Garam Masala"><div class="button_view">View More</div></a></div>
      <div class="box1 float boxmargin"><img src="images/masala6.jpg" width="220px"><br><a href="product4.php" title="Sambar Powder"><div class="button_view">View More</div></a></div>
      <div class="box2 floatr"><img src="images/masala5.jpg" width="220px"><a href="product3.php" title="Rasam Powder"><div class="button_view">View More</div></a></div>
    </div> 
    <div class="clear"></div>
    <p>&nbsp;</p>
    <div>
      <div class="box1 float"><img src="images/masala8.jpg" width="220px"><a href="product5.php" title="Biryani Masala"><div class="button_view">View More</div></a></div>
      <div class="box1 float boxmargin"><img src="images/masala1.jpg" width="220px"><a href="product8.php" title="Instant Chicken Masala"><div class="button_view">View More</div></a></div>
      <div class="box2 floatr"><img src="images/masala2.jpg" width="220px"><a href="product6.php" title="Chicken Masala"><div class="button_view">View More</div></a></div>
    </div>
    <div class="clear"></div>
    <p>&nbsp;</p>
    <div>
      <div class="box1 float"><img src="images/masala3.jpg" width="220px"><a href="product7.php" title="Mutton Masala"><div class="button_view">View More</div></a></div>
      <div class="box1 float boxmargin"><img src="images/masala4.jpg" width="220px"><a href="product2.php" title="Kabab & Chicken 65 Masala"><div class="button_view">View More</div></a></div>
      <div class="box2 floatr"></div>
    </div>

    <div class="clear"></div>
	</div>	
  <?php include 'footer.php'; ?>
    </div>
  </body>
  </html> 