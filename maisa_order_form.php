<?php
$id=$_GET['id'];
if($id=="") $id=4; ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Maisa&#8482; Foods</title>
    <meta name="language" content="EN" />
      <meta name="description" content="Maisa Garam Masala is made from selected spices and is prepared under most hygienic conditions.Maisa Garam Masala makes very dish tastes special with its rich aroma and flavour.It is a perfect blend of spices so as you can use it in all types of curries.Add Maisa Garam Masala just before you finish cooking to ensure that its subtle flavour and aroma are retained.spices instantFoods blendedSpices spices maisamasalas garam masala vegetarian masala non-vegetarian masala chicken masala mutton masala sambar powder rasam powder chicken 65 masala chicken kabab masala "/>
      <meta name="keywords" content="spices,instantfoods,blendedSpices,spices,maisamasalas,chicken nuggets,chicken crackers,garam masala,vegetarian masala,non-vegetarian masala,chicken masala,mutton masala,sambar powder,rasam powder,chicken 65 masala,chicken kabab masala,biryani masala,instant chicken masala,ginger and garlic paste" />
      <meta name="author" content="maisafoods.com"/>
      <meta name="robots" content="index, follow"/>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <?php include ('analyticstracking.php'); ?>
    <script src="./js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="./js/jquery-1.7.1.js"></script>
        <script type="text/javascript" src="./js/popup.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>  
        <script type="text/javascript" src="js/price_list.js"></script> 
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
    <div class="center_block" style="height:1260px">
      <marquee>Maisa Foods A Healthy Choice...! Order Now</marquee>
  <div class="order_now" >
    <h2>Order Now</h2><br><br>
    <div>
     <form action="maisa_contact_form" method="post" name="cont1" id="cont1" onsubmit="return cont_validate1();">
          <label>Name:</label><br>
          <input name="name" type="text" class="order_now_input" placeholder="Enter Your Name" id="name" required><br><br>
          <label>Phone Number:</label><br>
          <input name="phone" type="text" class="order_now_input" placeholder="Enter Your Number" id="name" required><br><br>
          <label>Products:</label><br>
          <table width="668px">
            <tr>
              <tr>
                 <th>Products</th>
                 <th>Weight</th>
                 <th>Quantity</th>
                 <th>Price</th>
              </tr>
            </tr>


            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="chicken masala 10g" id = "check1" class="checkbox_order">Chicken Masala</td>
              <td id ="10gm">10g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="10gmquantity"  onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)" >
              </td>
              <td><input name="price_group_1[]" type="text" id="price1" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="chicken masala 25g" id = "check2" class="checkbox_order">Chicken Masala</td>
              <td id ="25gm">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price2" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="chicken masala 50g" id = "check3" class="checkbox_order">Chicken Masala</td>
              <td id ="50gm">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price3" readonly= "true"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Chicken 65/Kabab Masala 25g" id = "check4" class="checkbox_order">Chicken 65/Kabab Masala</td>
              <td id ="25gmck">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmckquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price4" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Chicken 65/Kabab Masala 50g" id = "check5" class="checkbox_order">Chicken 65/Kabab Masala</td>
              <td id ="50gmck">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmckquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price5" readonly= "true"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Instant Chicken Masala 50g" id = "check6" class="checkbox_order">Instant Chicken Masala</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmciquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price6" readonly= "true"></td>
            </tr>


           <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Chicken Curry/Fry Powder 25g" id = "check7" class="checkbox_order">Chicken Curry/Fry Powder</td>
              <td id ="25gmccf">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmccfquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price7" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Chicken Curry/Fry Powder 25g" id = "check8" class="checkbox_order">Chicken Curry/Fry Powder</td>
              <td id ="50gmccf">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmccfquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price8" readonly= "true"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Mutton Masala 25g" id = "check9" class="checkbox_order">Mutton Masala</td>
              <td id ="25gmmm">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmmmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price9" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Mutton Masala 25g" id = "check10" class="checkbox_order">Mutton Masala</td>
              <td id ="50gmmm">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmmmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price10" readonly= "true"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Biryani Masala 50g" id = "check11" class="checkbox_order">Biryani Masala</td>
              <td id ="50gmbm">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmbmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price11" readonly= "true"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Garam Masala 25g" id = "check12" class="checkbox_order">Garam Masala</td>
              <td id ="25gmgm">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmgmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price12" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Garam Masala 50g" id = "check13" class="checkbox_order">Garam Masala</td>
              <td id ="50gmgm">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmgmquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price13" readonly= "true"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Sambar Powder 25g" id = "check14" class="checkbox_order">Sambar Powder</td>
              <td id ="25gmsp">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmspquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price14" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Sambar Powder 50g" id = "check15" class="checkbox_order">Sambar Powder</td>
              <td id ="50gmsp">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmspquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price15" readonly= "true"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Rasam Powder 25g" id = "check16" class="checkbox_order">Rasam Powder</td>
              <td id ="25gmrp">25g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="25gmrpquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price16" readonly= "true"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Rasam Powder 50g" id = "check17" class="checkbox_order">Rasam Powder</td>
              <td id ="50gmrp">50g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="50gmrpquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price17" readonly= "true"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="product_group_1[]" value="Ginger & Garlic Paste 250g" id = "check18" class="checkbox_order">Ginger & Garlic Paste</td>
              <td id ="250ggp">250g</td>
              <td>
                <input name="quantity_group_1[]" type="text" placeholder="Enter Quantity" id ="250gmggpquantity" onkeypress =" return isNumberKey(event)" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price_group_1[]" type="text" id="price18" readonly= "true"></td>
            </tr>


            <tr>
              <td colspan="2"></td>
              <td>Total</td>
              <td><input name="totalprice" type="text" id="totalprice"></td>
            </tr>
          </table><br>

          <label>Email:</label><br>
          <input name="email" type="text" class="order_now_input" placeholder="Enter Your Email ID" id="email" required><br><br>

          <label>Delivery Address:</label><br>
          <textarea name="delivery_address" placeholder="Enter Your Address" required></textarea><br><br>

          <input type="submit" name="submit" value="Submit"  class="button_submit"/><input type="hidden" id="spam_code" name="spam_code" value="Captcha Code Here"  />

      </form>
    </div>
  </div> 
</div>
  <div class="clear"></div>
    <?php include 'footer.php'; ?>
    </div>
  </body>
  </html>  