
<?php
$id=$_GET['id'];
if($id=="") $id=3; ?>


<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Maisa&#8482; Foods</title>
    <meta name="language" content="EN" />
      <meta name="description" content="Maisa Garam Masala is made from selected spices and is prepared under most hygienic conditions.Maisa Garam Masala makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.Add Maisa Garam Masala just before you finish cooking to ensure that its subtle flavour and aroma are retained.spices instantFoods blendedSpices spices maisamasalas garam masala vegetarian masala non-vegetarian masala chicken masala mutton masala sambar powder rasam powder chicken 65 masala chicken kabab masala "/>
      <meta name="keywords" content="spices,instantfoods,blendedSpices,spices,maisamasalas,chicken nuggets,chicken crackers,garam masala,vegetarian masala,non-vegetarian masala,chicken masala,mutton masala,sambar powder,rasam powder,chicken 65 masala,chicken kabab masala,biryani masala,instant chicken masala,ginger and garlic paste" />
      <meta name="author" content="maisafoods.com"/>
      <meta name="robots" content="index, follow"/>
    <?php include ('analyticstracking.php'); ?>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="./js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="./js/jquery-1.7.1.js"></script>
        <script type="text/javascript" src="./js/popup.js"></script>
  </head>
  <body>
    <div class="container">
    <?php include ('header.php'); ?>
    <div class="center_block">
  <?php include 'spices_masalas_slider.php'; ?>
</div>
<div class="products" style="margin-top: 26px;">
<div class="left" style="border:2px solid #C52128;border-radius:10px">
      <div class="links">
        <ul>
            <li class="linkleft1">
              <a href="masalas_spices_products.php">
              <img src="images/allprd.jpg" style="width:178px;height:220px;margin:10px;">
              <em>Blended Spices</em>
              <span><b>Maisa Masalas</b> is made from selected spices and is prepared under most hygienic conditions.<b>Maisa Masalas</b> makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.<p style="color:#C52128">see more...</p></span></a>
            </li>
        </ul>
      </div>
</div>
<div class="right" style="border:2px solid #C52128;border-radius:10px">
      <div class="links">
          <ul>
             <li class="linkleft1">
              <a href="maisa_instantfood.php" title="">
                <img src="images/instfood.jpg" style="width:178px;height:220px;margin:10px;">
              <em>Instant Foods</em>
              <span><b>Maisa&#8482; Foods</b> are High in Fiber and Low in Fat and is prepared under most hygienic conditions.<p style="color:#C52128">see more...</p></span></a>

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