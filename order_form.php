<!doctype html>
<html lang="en">
    <head>
    <title>Maisa&#8482; Foods</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
        <script src="./js/popup.js"></script>
        <script src="js/validation.js"></script>   
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
    <div id="center_block" style="height:772px">
  <div class="order_now" >
    <div>
     <form action="cont_form.php" method="post" name="cont1" id="cont1" onsubmit="return cont_validate1();">
      <lable>Name</lable><br>
          <input name="name" type="text" class="conf1" id="name" /><br><br>

          <lable>Phone Number</lable><br> 
          <input name="phone" type="text" class="conf1" id="phone" onkeypress="return isNumberKey(event)" /><br><br>

          <lable>Item Details</lable><br>
          <textarea name="items" ></textarea><br><br>

          <lable>Delivery Address</lable><br>
          <textarea name="delivery_address"></textarea><br> <br>         
<input type="image" src="images/submit.jpg" name="submit" id="submit" value="Submit" /><input type="hidden" id="spam_code" name="spam_code" value="Captcha Code Here"  />
      </form>
    </div>
  </div> 
</div>
  
        <div class="clear"></div>
    <?php include 'footer.php'; ?>
    </div>
  </body>
  </html>  