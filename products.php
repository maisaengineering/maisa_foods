
<?php
$id=$_GET['id'];
if($id=="") $id=3; ?>


<!doctype html>
<html lang="en">
    <head>
    <title>Maisa&#8482; Foods</title>
    <?php include ('analyticstracking.php'); ?>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
        <script src="./js/popup.js"></script>
  </head>
  <body>
    <div class="container">
    <?php include ('header.php'); ?>
    <div id="center_block">
  <?php include 'slider.php'; ?>
</div>
<div class="products">
<div class="left" style="border:2px solid #F6212D;border-radius:10px">
      <div class="links">
        <ul>
            <li class="linkleft1">
              <a href="productssub.php">
              <img src="images/allprd.jpg" style="width:178px;height:220px;margin:10px;">
              <em>Blended Spices</em>
              <span><b>Maisa Masalas</b> is made from selected spices and is prepared under most hygienic conditions.<b>Maisa Masalas</b> makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.<p style="color:#f6212d">see more...</p></span></a>
            </li>
        </ul>
      </div>
</div>
<div class="right" style="border:2px solid #F6212D;border-radius:10px">
      <div class="links">
          <ul>
             <li class="linkleft1">
              <a href="instantfood.php" title="">
                <img src="images/instfood.jpg" style="width:178px;height:220px;margin:10px;">
              <em>Instant Foods</em>
              <span><b>Maisa&#8482; Foods</b> are High in Fiber and Low in Fat and is prepared under most hygienic conditions.<p style="color:#f6212d">see more...</p></span></a>

             </li>
          </ul>
             
      </div>
</div>  
  <div class="clear">
  </div>

</div>
    
    <div class="clear"></div>
    <?php include 'footer.php'; ?>
    </div>
  </body>
  </html> 