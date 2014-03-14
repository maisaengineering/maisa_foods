<?php
  session_start();
?>

<?php
  $id=$_GET['id'];
  if($id=="") $id=1; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
		<head>
		<title>Maisa&#8482; Foods Maisa Garam Masala is made from selected spices and is prepared under most hygienic conditions.</title>
		<meta name="language" content="EN" />
			<meta name="description" content="Maisa Garam Masala is made from selected spices and is prepared under most hygienic conditions.Maisa Garam Masala makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.Add Maisa Garam Masala just before you finish cooking to ensure that its subtle flavour and aroma are retained.spices instantFoods blendedSpices spices maisamasalas garam masala vegetarian masala non-vegetarian masala chicken masala mutton masala sambar powder rasam powder chicken 65 masala chicken kabab masala "/>
			<meta name="keywords" content="spices,instantfoods,blendedSpices,spices,maisamasalas,chicken nuggets,chicken crackers,garam masala,vegetarian masala,non-vegetarian masala,chicken masala,mutton masala,sambar powder,rasam powder,chicken 65 masala,chicken kabab masala,biryani masala,instant chicken masala,ginger and garlic paste" />
			<meta name="author" content="maisafoods.com">
			<meta name="robots" content="index, follow">
		<?php include ('analyticstracking.php'); ?>
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

<div style="width: 970px;
float: left;
margin-bottom: 16px;">	
<div class="block_one">
	<br>
	<img src="images/about_maisa.jpg">
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
            <a href="aboutus.php"><span style="color:#C52128;float:right">See More...</span></a>
        </div>
</div>	
<div class="block_two">
	<br>
	<img src="images/products.jpg">
		<br>
		<div class="new_prod_c_c">
		</div>
		<div><img id="new1" src="images/new_product1.jpg" alt="chicken crackers" title="chicken crackers" style="position: relative;margin-left: 50px;
margin-top: -24px;" border="0"></div>
	 <script type="text/javascript">
             $(document).ready(function(e) {
             $('#new1').delay(1000).fadeOut('slow');
             });

        </script>
		<marquee style="position: relative;margin-top:-50px;" behavior="scroll" align="center" direction="up" scrollamount="2" scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()" height="330"><br>

		 <center><a href="instantfood.php" target="_blank"><img src="images/new_product1.jpg" alt="chicken crackers" title="chicken crackers" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/chickenmasala.jpg" alt="chicken masala" title="chicken masala" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/muttonmasala.jpg" alt="mutton masala" title="mutton masala" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/chicken65kababmasala.jpg" alt="chicken 65 and kabab masala" title="chicken 65 and kabab masala" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/rasampowder.jpg" alt="rasam powder" title="rasam powder" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/sambarpowder.jpg" alt="sambar powder" title="sambar powder" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/garammasala.jpg" alt="garam masala" title="garam masala" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/biryanimasala.jpg" alt="biryani masala" title="biryani masala" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="productssub.php" target="_blank"><img src="images/instantchickenmasala.jpg" alt="instant chicken masala" title="instant chicken masala" style="position: relative;" border="0"></a><br></center>
		 <br>
		 <center><a href="instantfood.php" target="_blank"><img src="images/nuggets.jpg" alt="chicken nuggets" title="chicken nuggets" style="position: relative;" border="0"></a><br></center>
        </marquee>
	<br>
	<div style="margin:10px;color:#000">
	    	<!-- <ul>
	    		Introducing Chicken Crackers
	    		<li></li>
            </ul> -->
           
        </div>
</div>
<!-- lightbox -->
<div class="block_three">
	<br>
	<img src="images/coupons.jpg">
	<br>
	<br>
    <script src="js/lightbox.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
    <a href="images/5off.png" rel="lightbox" width="500px" height="300px" title="Print This Coupon"><img src="images/5off.png" width="240" style="margin:32px;"></a>
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
             
            <div><a href="order_form.php"><img src="images/popup.jpg"width="910"></a></div> 
             
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

