<?php
$id=$_GET['id'];
if($id=="") $id=4; ?>

<!doctype html>
<html lang="en">
		<head>
		<title>maisa foods</title>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
	</head>
	<body>
		<div class="container">
		<?php include 'header.php'; ?>
		<div id="center_block">
			<div class="order_nowc">
				 <div class="call_for_order">Order now @ 8008344449</div>
				 <div class="home_delivery">Free Home Delivery available for bulk orders.</div>
			</div> 
			<div class="location_header">Locations:</div>
			<table class="locations">
				<td class="location_1">
					<div class="location_1_details">
						Sriram Nagar Colony<br/>
						Kapra, Saketh road<br/>
						Hyderabad-500062<br/>
						<b>Phone:</b> 8008 344 449
					</div>
				</td>
				<td class="location_2">
					<div class="location_2_details">
						New vasavishiva nagar<br/>
						Kushaiguda, Ecil<br/>
						Hyderabad-500062<br/>
						<b>Phone:</b> 8008 344 449
					</div>
				</td>
	        </table>
		</div>
        <div class="clear"></div>
		<?php include 'footer.php'; ?>
		</div>
	</body>
	</html>	