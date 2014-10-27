<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maisa&#8482; Foods Maisa Garam Masala is made from selected spices and is prepared under most hygienic conditions.</title>
<meta name="language" content="EN" />
<meta name="description" content="Maisa Garam Masala is made from selected spices and is prepared under most hygienic conditions.Maisa Garam Masala makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.Add Maisa Garam Masala just before you finish cooking to ensure that its subtle flavour and aroma are retained.spices instantFoods blendedSpices spices maisamasalas garam masala vegetarian masala non-vegetarian masala chicken masala mutton masala sambar powder rasam powder chicken 65 masala chicken kabab masala "/>
<meta name="keywords" content="spices,instantfoods,blendedSpices,spices,maisamasalas,chicken nuggets,chicken crackers,garam masala,vegetarian masala,non-vegetarian masala,chicken masala,mutton masala,sambar powder,rasam powder,chicken 65 masala,chicken kabab masala,biryani masala,instant chicken masala,ginger and garlic paste" />
<meta name="author" content="maisafoods.com"/>
<meta name="robots" content="index, follow"/>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="images/fav.png" rel="icon" type="image/gif" />

<script src="js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="js/script.js"></script>
</head>

<body>
	<div class="menu_wrapper menu_header">
        <div class="wrapper">
            <div class="logo"><a href="index.html"><img src="images/logo.png" width="200px"></a></div>
                  <ul class="menu" id="menu">
            
                <li><a href="index.html" class="menulink">Home</a></li>
                <li class="devider"><img src="images/spacer.gif" /></li>
                <li><a href="aboutus.html" class="menulink">About Us</a></li>
                <li class="devider"><img src="images/spacer.gif" /></li>
                <li><a href="products.html" class="menulink">Products</a>
                </li>
                <li class="devider"><img src="images/spacer.gif" /></li>
                <li><a href="News.html" class="menulink">News & Events</a></li>
                <li class="devider"><img src="images/spacer.gif" /></li>
                <li class="menu_active"><a href="contact.php" class="menulink">Contact Us</a></li>
                
            </ul>
            <script type="text/javascript">
                var menu=new menu.dd("menu");
                menu.init("menu","menuhover");
            </script>
        </div>
        </div>
<div class="content_wrapper">
    <div class="content_wrapper_left">
        <div class="fsslCode"><img src="images/fssl_code.png" border="0" /></div>
        <div class="productslist">
        	<div style="position:absolute; margin:25px 0 0 35px;"><a href="biryani.html"><img src="images/products/1_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:25px 0 0 140px;"><a href="garam_masala.html"><img src="images/products/2_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:150px 0 0 35px;"><a href="sambar_powder.html"><img src="images/products/3_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:150px 0 0 140px;"><a href="rasam.html"><img src="images/products/4_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:270px 0 0 35px;"><a href="mutton.html"><img src="images/products/5_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:270px 0 0 140px;"><a href="instant_chicken.html"><img src="images/products/6_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:390px 0 0 35px;"><a href="chicken_masala.html"><img src="images/products/7_small.png" border="0"/></a></div>
        	<div style="position:absolute; margin:390px 0 0 140px;"><a href="kabab.html"><img src="images/products/8_small.png" border="0"/></a></div>
        </div>
    </div>
    <div class="content_wrapper_right">
        <div class="banner"><img src="images/banners/inner_banner1.png" border="0" /></div>
        <div class="content-area">
		<h2>Address</h2>
		 <img src="images/contact.png" style="float:right; width: 50%; margin-top: -20px;" />
		    <p>
			   <strong style="font-size:14px;">Maisa Foods</strong><br/>
			   Plot No. 26, New vasavishiva nagar <br/>
			   Kushaiguda, Ecil,Hyderabad-500062<br/>
			   Phone No: 040-40177227, <br/>
			   Customer Service No: 1800 3010 0609<br/>
			   Email: maisafoods@gmail.com 
			 </p>
			 <h2>Contact Form</h2>
		
        	<form action="contact.php" method="post">
							<table width="400" border="0" cellspacing="2" cellpadding="0">
							<tr>
							<td width="40%" class="bodytext">Your name:</td>
							<td width="60%"><input name="name" type="text" id="name" size="32"></td>
							</tr>
							<tr>
							<td  width="50%"class="bodytext">Email address:</td>
							<td width="50%"><input name="email" type="text" id="email" size="32"></td>
							</tr>
							<tr>
							<td width="40%" class="bodytext">Message: </td>
							<td width="60%"><textarea name="msg" cols="35" rows="3" id="msg" class="bodytext"></textarea></td>
							</tr>
							<tr>
							<td class="bodytext"> </td>
							<td align="left" valign="top"><input type="submit" name="Submit" value="Send"></td>
							</tr>
							</table>
						</form>
						
						<?php 
	$emailTo = 'maisafoods@gmail.com';
	if($subject!=""){
	$subject =$_REQUEST['subject'];
	}else{
	$subject = 'Contacting for Masala Powders';
	}
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$msg=$_REQUEST['comment'];
	
	$body = "Name: $name \n\nEmail: $email \n\nMessage: $msg";
	$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
	
	mail($emailTo, $subject, $body, $headers);
?>
        </div>
    </div>
    <div class="cls"></div>
</div>
<div class="footer">
	<div class="footer-wrapper">
    	<div class="left">&copy; 2014 Maisa&#8482; Foods. All rights reserved.</div>
    	<div id="fb-root"></div>
        <div class="fb-like" data-href="https://www.facebook.com/MaisaFoods" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <div class="cls"></div>
    </div>
</div>
</body>
</html>
