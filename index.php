<?php
session_start();
?>
<!doctype html>
<html lang="en">
		<head>
		<title>maisa foods</title>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
        <script src="./js/popup.js"></script>
	</head>
	<body>
		<?php //include ('popup.php'); ?>
		<div class="container">
		<?php include ('header.php'); ?>
		<div id="center_block">
	<?php include 'slider.php'; ?>
</div>
<br>

<div style="margin-left: 6px;">	
<div class="block_one">
	<br>
	<div class="icons_sprite about-maisa"></div>
	<br>
	    <div style="margin:10px;color:#000">
	    	<ul>
	    		<li>Dedicated and Motivated Team</li>
	   
			    <li>Loyal customers</li>
		      
		        <li>Continuous market analysis and Survey of customer needs</li>
		     
		        <li>Strong resources & Marketing Network</li>
		       
		        <li>Excellent Quality products</li>
		      
		        <li>Standardization & upgradation of products as per international standards</li>
		       
		        <li>Adherence to International business standard ethics</li>
		      
		        <li>Targetting the market of all walks of life</li>
		      
		        <li>Excellent Brand Recall</li>
            </ul>
            <a href="aboutus.php"><span style="color:#CE212D;float:right">See More..</span></a>
        </div>
</div>	
<div class="block_two">
	<br>
	<div class="icons_sprite new_products"></div>
	<br>
	<div style="margin:10px;color:#000">
	    	<ul>
	    		Introducing Chicken Crackers
	    		<li></li>
            </ul>
           
        </div>
</div>	
<!-- lightbox -->
<div class="block_three">
	<br>
	<div class="icons_sprite coupons"></div>
	<br>
	<br>
    <script src="js/lightbox.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
    <a href="images/c1.jpg" rel="lightbox" title="Print This Coupon"><img src="images/c1.jpg" width="300" height="90"></a>
</div>
<br>
</div>

<div class="clear"></div>
		<?php include 'footer.php'; ?>
	    </div>
        
        
 <!--------------------------------------------------popup----------------------------------->
 <?php 
	if(!isset($_SESSION['jquery_popup']))  { 
	$_SESSION['jquery_popup'] = 1;
	?>
<script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
<div id="boxes">
          <div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
    <div align="right" style="font-weight:bold; margin:5px 3px 0 0;"><a href="javascript:void()" class="close"><img src="images/close.png" width="16" style="border:none; cursor:pointer;" /></a></div>
    <div align="center" style="margin:5px 0 5px 0;">
             
            <div><a href="Order"><img src="images/popup.jpg"width="910"></a></div> 
             
            </div>
   
  </div>
          
          <!-- Mask to cover the whole screen -->
          <div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
        </div>
<?php }
	//if((isset($_SESSION['jquery_popup'])))  { unset($_SESSION['jquery_popup']); } //uncomment for testing
	?>       
	</body>
</html>