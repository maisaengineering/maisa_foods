<div class="header">
  <a href="index.php"><img src="images/logo.png" class="logo"></a>
      <div id="menu" class="globalfont">
          <ul class="menu">
            <li id="Index" class="arrow current" style="border-radius:10px;">
              <a href="index.php"><span>Home</span></a>
            </li>
            <li id="AboutUs" style="border-radius:10px;">
              <a href="aboutus.php"><span>About Us</span></a>
            </li>
            <li id="Products" style="border-radius:10px;">
              <a href="products.php" class="parent"><span>Products</span></a>
              <div>
                <ul>
                  <li id="Spices">
                    <a href="productssub.php"><span>Spices</span></a>
                  </li>
                  <li id="Instant">
                    <a href="instantfood.php"><span>Instant Foods</span></a>
                  </li>
                </ul>
              </div>
            </li>
         
          <li id="Order" class="last" style="border-radius:10px;">
            <a href="order.php"><span>Order Now</span></a>
          </li>
          <li id="ContactUs" class="last" style="border-radius:10px;">
            <a href="contactus.php"><span>Contact Us</span></a>
          </li>
     </ul></div></div>


     <script type="text/javascript">
        var menu_type = document.URL.split('/');
		if(menu_type[4] != undefined){
	        var menu = menu_type[4].split('.');
	        if (menu[0] == "ProductsSub" || menu[0] == "Product1" || menu[0] == "Product2" || menu[0] == "Product3" || menu[0] == "Product4" || menu[0] == "Product5" || menu[0] == "Product6" || menu[0] == "Product7" || menu[0] == "Product8" || menu[0] == "InstantFood" || menu[0] == "If1")
	        {
	          document.getElementById('Products').style.backgroundColor="#EBB035";
	        }
	        else
	        {
	          document.getElementById(menu[0]).style.backgroundColor="#EBB035";
	        }
		}
      </script>
     