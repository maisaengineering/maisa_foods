<?php
$id=$_GET['id'];
if($id=="") $id=4; ?>


<!doctype html>
<html lang="en">
		<head>
		<title>Maisa Foods</title>
		<?php include ('analyticstracking.php'); ?>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
	</head>
	<body>
		<div class="container">
		<?php include 'header.php'; ?>
		<div id="center_block">
			<div class="order_nowc">
				 <div class="call_for_order">Order now @ 040-40177227</div>
				 <div class="home_delivery">contact@maisa.co.in</div>
				 <div class="home_delivery">Free Home Delivery available for bulk orders.</div>
			</div> 
		</div>
        <div class="clear"></div>
		<?php include 'footer.php'; ?>
		</div>
	</body>
	</html>	