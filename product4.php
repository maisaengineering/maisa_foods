
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
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
	<img src="images/p4.jpg" width="970px">
	<br>
	<div class="products">
	<div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Sambar Powder">
                  <div class="icons_sprite desp">
      		        <em style="margin-left:110px">Description</em>
      		        <span><b>Maisa Sambar Powder</b> is made from selected spices and is prepared under most hygienic conditions. <b>Maisa Sambar Powder</b> makes your sambar tastes special with its rich aroma and flavour. Sambar is common dish in every southindian house hold and it can be had with rice, idli, vada, dosa etc. </span></a>
                  </div>
                 </li>
             </ul>
            </div>
    </div> 
    <div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Sambar Powder">
                <div class="icons_sprite masala">
      		        <em style="margin-left:110px">Ingredients</em>
      		        <span style="margin-left:125px">
      		        	<ul style="list-style-type: disc;">
      		        		<li>Black Pepper</li>
                      <li>Begal Gram</li>
                      <li>Cassia</li>
                      <li>Coriander</li>
                      <li>Cumin</li>
                      <li>Dry Ginger</li>
                      <li>Fenugreek Seeds
                      <li>Red Chillies</li>
                      <li>Mustard</li>
                      <li>Salt</li>
                      <li>Toor Dal</li>
                      <li>Turmeric</li> 
      		        	</ul>
      		        </span></a>
                  </div>
                 </li>
             </ul>
            </div>
    </div> 
    <div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Sambar Powder">
                <div class="icons_sprite cooking-image">
      		        <em style="margin-left:110px">How To Prepare</em>
      		        <span>Cook 500gm of vegetables of your choice and keep aside. Cook 100gm (5 tbsp) of toor dal in 750ml of water with 1 tsp of oil and a pinch of turmeric. Mix Cooked vegetables, Tamarind pulp, salt to cooked dal and boil for 10min. Add 2tbsp of <b>Maisa Sambar Powder</b> while sambar is being cooked. Season with mustard, cumin, curry leaves and Dry red chillies.</span></a>
                  </div>
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