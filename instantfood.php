
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
      <img src="images/slider2.jpg" width="970" title="">
</div>
<div class="products">
  <div style="background-color:#C52128;padding:10px"><h1 style="color:#ffffff;margin:10px;">Instant Foods</h1></div>
  <div class="clear"></div>
    <p>&nbsp;</p>
    <div>
      <div class="box1 float">
        <img src="images/chickennuggets.jpg" width="220px">
             <div class="weight_rs">
          <table width="220px" style="background:#ffffff;">
            <tr>
              <td>Weight</td><td>200g</td>
            </tr>
            <tr>
               <td>Price</td><td>Rs.99</td>
            </tr>
            <tr>
              <table class="button_view">
                <tr>
              <td class="button_view"><a href="if1.php" title="Nuggets">View Details</a></td><td class="button_view1"><a href="order_form.php">Order Now</div></a></td>
                </tr>
              </table>
            </tr>
          </table>
        </div>
      </div>
      <div class="box1 float">
        <img src="images/chickencrackersbox.jpg" width="220px">
         <div class="weight_rs">
          <table width="220px" style="background:#ffffff;">
            <tr>
              <td>Weight</td><td>50g</td><td>100g</td>
            </tr>
            <tr>
              <td>Price</td><td>Rs.35</td><td>Rs.65</td>
            </tr>
            <tr>
              <table class="button_view">
                <tr>
              <td class="button_view"><a href="#" title="crackers">View Details</a></td><td class="button_view1"><a href="order_form.php">Order Now</div></a></td>
                </tr>
              </table>
            </tr>
          </table>
        </div>
      </div>
      <div class="clear"></div>
    <p>&nbsp;</p>
     <p>&nbsp;</p>
  <!--     <div class="box2 floatr"><img src="images/masala5.jpg" width="220px"><a href="product3.php" title="Rasam Powder"><div class="button_view">View More</div></a></div> -->
    </div>
    <div class="clear"></div>
</div>
<?php include 'footer.php'; ?>
    </div>
  </body>
  </html> 