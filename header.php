<div class="header">
  <a href="index"><img src="images/logo.png" class="logo"></a>
      <div id="menu" class="globalfont">
          <ul class="menu">
            <li id="index" class="arrow current" style="border-radius:10px;">
              <a href="index.php"><span>Home</span></a>
            </li>
            <li id="aboutus" style="border-radius:10px;">
              <a href="aboutus.php"><span>About Us</span></a>
            </li>
            <li id="products" style="border-radius:10px;">
              <a href="products.php" class="parent"><span>Products</span></a>
              <div>
                <ul>
                  <li id="spices">
                    <a href="productssub.php"><span>Spices</span></a>
                  </li>
                  <li id="Instant">
                    <a href="instantfood.php"><span>Instant Foods</span></a>
                  </li>
                </ul>
              </div>
            </li>
         
          <li id="order" class="last" style="border-radius:10px;">
            <a href="order.php"><span>Order Now</span></a>
          </li>
          <li id="contactus" class="last" style="border-radius:10px;">
            <a href="contactus.php"><span>Contact Us</span></a>
          </li>
     </ul></div></div>


     <script type="text/javascript">
        var menu_type = document.URL.split('/');
        var menu = menu_type[4].split('.');
        if (menu[0] == "productssub" || menu[0] == "product1" || menu[0] == "product2" || menu[0] == "product3" || menu[0] == "product4" || menu[0] == "product5" || menu[0] == "product6" || menu[0] == "product7" || menu[0] == "product8" || menu[0] == "instantfood" || menu[0] == "if1")
        {
          document.getElementById('products').style.backgroundColor="#EBB035";
        }
        else
        {
          document.getElementById(menu[0]).style.backgroundColor="#EBB035";
        }
      </script>
     