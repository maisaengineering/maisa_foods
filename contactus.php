
<?php
$id=$_GET['id'];
if($id=="") $id=5; ?>


<!doctype html>
<html lang="en">
		<head>
		<title>Maisa&#8482; Foods</title>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
	</head>
	<body>
		<div class="container">
		<?php include 'header.php'; ?>
		<div id="center_block">
			<img src="images/contact.jpg" width="970" style="margin-top:30px;">
			<table>
				<td>
					<div class="location_header">Address:</div>
					<table class="locations">
					<td class="location_1">
						<div class="location_2_details">
							Plot No. 26<br/>
							New vasavishiva nagar<br/>
							Kushaiguda, Ecil<br/>
							Hyderabad-500062<br/>
						</div>
					</td>
				    </table>
		        </td>
		        <td>
				    <div class="location_header">Customer Service:</div>
					<table class="locations">
					<td class="location_1">
						<div class="location_2_details">
							Call Us<br/>
							(+91) 8008 344 449<br/>
							<br/>
							<br/>
						</div>
				    </td>
			        </table>
		        </td>
		    </table>
		</div>
        <div class="clear"></div>
		<?php include 'footer.php'; ?>
		</div>
	</body>
	</html>	