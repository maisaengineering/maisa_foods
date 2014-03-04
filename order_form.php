<!doctype html>
<html lang="en">
    <head>
    <title>Maisa&#8482; Foods</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <?php include ('analyticstracking.php'); ?>
    <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-1.7.1.js"></script>
        <script src="./js/popup.js"></script>
        <script src="js/validation.js"></script>   
  </head>
  <body>
    <div class="container">
    <?php include 'header.php'; ?>
    <div id="center_block" style="height:1200px">
  <div class="order_now" >
    <div>
     <form action="cont_form.php" method="post" name="cont1" id="cont1" onsubmit="return cont_validate1();">
          <label>Name:</label><br>
          <input name="name" type="text" class="conf1" id="name" /><br><br>
          <label>Phone Number:</label><br>
          <input name="phone" type="text" class="conf1" id="name" /><br><br>
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
              <td><input type="checkbox" name="p1">Chicken Masala</td>
              <td id ="10gm">10g</td>
              <td>
                <input name="10gmprice" type="text" placeholder="10g" id ="10gmquantity" OnFocusOut = "get_price(this.id)" >
              </td>
              <td><input name="price" type="text" id="10gmprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p1">Chicken Masala</td>
              <td id ="25gm">25g</td>
              <td>
                <input name="25gmprice" type="text" placeholder="25g" id ="25gmquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p1">Chicken Masala</td>
              <td id ="50gm">50g</td>
              <td>
                <input name="50gmprice" type="text" placeholder="50g" id ="50gmquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmprice"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="p2">Chicken 65/Kabab Masala</td>
              <td id ="25gmck">25g</td>
              <td>
                <input name="25gmckprice" type="text" placeholder="25g" id ="25gmckquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmckprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p2">Chicken 65/Kabab Masala</td>
              <td id ="50gmck">50g</td>
              <td>
                <input name="50gmckprice" type="text" placeholder="50g" id ="50gmckquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmckprice"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="p3">Instant Chicken Masala</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p3">Instant Chicken Masala</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>


           <tr>
              <td><input type="checkbox" name="p4">Chicken Curry/Fry Powder</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p4">Chicken Curry/Fry Powder</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="p5">Mutton Masala</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p5">Mutton Masala</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>


            <tr>
              <td><input type="checkbox" name="p6">Biryani Masala</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p6">Biryani Masala</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="p7">Garam Masala</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p7">Garam Masala</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="p8">Sambar Powder</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p8">Sambar Powder</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="p9">Rasam Powder</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p9">Rasam Powder</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>

            <tr>
              <td><input type="checkbox" name="p9">Ginger & Garlic Paste</td>
              <td id ="25gmci">25g</td>
              <td>
                <input name="25gmciprice" type="text" placeholder="25g" id ="25gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="25gmciprice"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="p9">Ginger & Garlic Paste</td>
              <td id ="50gmci">50g</td>
              <td>
                <input name="50gmciprice" type="text" placeholder="50g" id ="50gmciquantity" OnFocusOut = "get_price(this.id)">
              </td>
              <td><input name="price" type="text" id="50gmciprice"></td>
            </tr>
          </table><br>

          <label>Delivery Address:</label><br>
          <textarea name="delivery_address"></textarea>

          <input type="image" src="images/submit.jpg" name="submit" value="Submit" /><input type="hidden" id="spam_code" name="spam_code" value="Captcha Code Here"  />

      </form>
    </div>
  </div> 
</div>
  
        <div class="clear"></div>
    <?php include 'footer.php'; ?>
    </div>
  </body>
  <script type="text/javascript">
  function get_price(item_selected){
    if (item_selected == "10gmquantity")
    {
      var x = document.getElementById('10gm')
      x.value = "10"
      var quantity = document.getElementById("10gmquantity").value
      document.getElementById("10gmprice").value = x.value * quantity;
    }
    else if(item_selected == "25gmquantity")
    {
      var x = document.getElementById('25gm')
      x.value = "30"
      var quantity = document.getElementById("25gmquantity").value
      document.getElementById("25gmprice").value = x.value * quantity;
    }
    else if(item_selected == "50gmquantity")
    {
      var x = document.getElementById('50gm')
      x.value = "50"
      var quantity = document.getElementById("50gmquantity").value
      document.getElementById("50gmprice").value = x.value * quantity;
    }
    else if(item_selected == "25gmckquantity")
    {
      var x = document.getElementById('25gmck')
      x.value = "80"
      var quantity = document.getElementById("25gmckquantity").value
      document.getElementById("25gmckprice").value = x.value * quantity;
    }
    else if(item_selected == "50gmckquantity")
    {
      var x = document.getElementById('50gmck')
      x.value = "100"
      var quantity = document.getElementById("50gmckquantity").value
      document.getElementById("50gmckprice").value = x.value * quantity;
    }
    else if(item_selected == "25gmciquantity")
    {
      var x = document.getElementById('25gmci')
      x.value = "80"
      var quantity = document.getElementById("25gmciquantity").value
      document.getElementById("25gmciprice").value = x.value * quantity;
    }
    else if(item_selected == "50gmciquantity")
    {
      var x = document.getElementById('50gmci')
      x.value = "100"
      var quantity = document.getElementById("50gmciquantity").value
      document.getElementById("50gmciprice").value = x.value * quantity;
    }
  }
  </script>
  </html>  