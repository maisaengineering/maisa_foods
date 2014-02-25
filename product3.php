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
	<div class="products_sprite p3">
  </div>
	<br>
	<div class="products">
	<div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Rasam Powder">
                  <div class="icons_sprite desp">
      		        <em style="margin-left:110px">Description</em>
      		        <span><b>Maisa Rasam Powder</b> is made from selected spices and is prepared under most hygienic conditions. <b>Maisa Rasam Powder</b> makes your rasam tastes special with its rich aroma and flavour. Rasam is common dish in every southindian house hold and it can be had with rice or drunk as a flavoursome soup.</span></a>
                  </div>
                 </li>
             </ul>
            </div>
    </div> 
    <div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Rasam Powder">
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
     	            <a href="#" title="Rasam Powder">
                <div class="icons_sprite cooking-image">
      		        <em style="margin-left:110px">How To Prepare</em>
      		        <span>Cook 50g of Toor Dal in 1Ltr. of water with 1tsp Oil and a pinch of turmeric powder. Churn the coocked Dal. Add Tamarind juice, Chopped Tomato pieces, Jaggery and salt to taste, boil for 5 minutes. Add 2tbsp of <b>Maisa Rasam Powder</b> and boil for another 5 minutes. Add 1 tsp. of Mustard seeds seasoned in ghee. </span></a>
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