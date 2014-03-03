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
   <img src="images/p1.jpg" width="970px">
	<br>
	<div class="products">
	<div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Garam Masala">
     		          <div class="icons_sprite desp">
      		        <em style="margin-left:110px">Description</em>
      		        <span><b>Maisa Garam Masala</b> is made from selected spices and is prepared under most hygienic conditions.<b>Maisa Garam Masala</b> makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.Add <b>Maisa Garam Masala</b> just before you finish cooking to ensure that its subtle flavour and aroma are retained.</span>
                  </div>
                </a>
                 </li>
             </ul>
            </div>
    </div> 
    <div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Garam Masala">
     		        <div class="icons_sprite masala">
      		        <em style="margin-left:110px">Ingredients</em>
      		        <span style="margin-left:125px">
      		        	<ul style="list-style-type: disc;">
      		        		<li>Black Pepper</li>
      		        		<li>Cinnamon</li>
                      <li>Coriander</li>
                      <li>Cardamom</li>
                      <li>Cloves</li>
                      <li>Cumin</li>
      		        		<li>Fennel Seeds</li>
      		        		<li>Nutmeg & Salt (In Powder)</li>
                      <li>Red Chillies</li>
      		        		<li>Star Anise</li>
                      <li>Turmeric</li>	
      		        	</ul>
      		        </span>
                </div>
                </a>
                 
                 </li>
             </ul>
            </div>
    </div> 
    <div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Garam Masala">
     		        <div class="icons_sprite cooking-image">
      		        <em style="margin-left:110px">How To Prepare</em>
      		        <span><b>Maisa Garam Masala</b> just before you finish cooking to ensure that its subtle flavour and aroma are retained.</span></a>
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