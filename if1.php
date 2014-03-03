
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
        <script src="./js/popup.js"></script>
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
	<div>
		<img src="images/IF1.jpg" width="970px">
	</div>
	<br>
	<div class="products">
	<div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Chicken Nuggets">
     		         <div class="icons_sprite desp">
      		        <em style="margin-left:110px">Description</em>
      		        <span><b>Maisa Chicken Nuggets</b> </span></a>
                 </div>
                 </li>
             </ul>
            </div>
    </div> 
    <div class="left_sub">
      <div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Chicken Nuggets">
     		          <div class="icons_sprite masala">
      		        <em style="margin-left:110px">Ingredients</em>
      		        <span style="margin-left:125px; float:left">
      		        	<ul style="list-style-type: disc;">
      		        		<li>Chicken</li>
      		        		<li>Lodized Salt</li>
                      <li>Polyphosphate</li>
                      <li>Sodium Nitrite</li>
                      <li>Binder/Extenders</li>
                      <li>Condiments</li>
                      <li>Spices</li>	
      		        	</ul>
      		        </span></div></a>

                 </li>
             </ul>
      </div>
      <div class="clear"></div>
    </div> 
    <div class="left_sub">
	<div class="links">
             <ul>
                 <li class="linkleft1">
     	            <a href="#" title="Chicken Nuggets">
     		        <div class="icons_sprite cooking-image">
      		        <em style="margin-left:110px">How To Prepare</em>
      		        <span>
                    <b>In Oil:</b> Fry with little oil for 5 minutes.
                    <br>
                    <b>In Microwave:</b> Heat at high temperature for 90 seconds.</span></div></a>
                  
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