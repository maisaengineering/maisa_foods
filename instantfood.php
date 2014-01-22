<?php
$id=$_GET['id'];
if($id=="") $id=3; ?>
<!doctype html>
<html lang="en">
    <head>
    <title>maisa foods</title>
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
  <div style="background-color:#CE212D;padding:10px"><h1 style="color:#ffffff;margin:10px;">Instant Foods</h1></div>
<div class="left">
      <div class="links">
        <ul>
                 <li class="linkleft1">
                  <a href="if1.php" title="Chicken Nuggets">
                <div class="products_sprite nuggets">
                  <em>Chicken Nuggets</em>
                  <span><b>Maisa Chicken Nuggets</b> </span></a>
                </div>
                 </li>
             </ul>
             
            </div>
    </div>
    <div class="right">
        <div class="links">
          <ul>
                 <li class="linkleft1">
                  <a href="#">
                  <img src="images/new_product.jpg" width="178" height="267">
                  <em>Chicken Crackers</em>
                  <span><b>Maisa Chicken Crackers</span></a>
                 </li>
             </ul>      
            </div>
       </div> 
    <div class="clear"></div> 
</div>
<?php include 'footer.php'; ?>
    </div>
  </body>
  </html> 