<div class="header">
  <a href="index.php"><img src="images/logo.png" class="logo"></a>
      <div id="menu" class="globalfont">
          <ul class="menu">
            <li id="index" class="arrow current" style="border-radius:10px;">
              <a href="index.php" <?php if($id==1) echo 'class="active"'; ?>><span>Home</span></a>
            </li>
            <li id="aboutus" style="border-radius:10px;">
              <a href="aboutus.php" <?php if($id==2) echo 'class="active"'; ?>><span>About Us</span></a>
            </li>
            <li id="products" style="border-radius:10px;">
              <a href="products.php" <?php if($id==3) echo 'class="active parent"'; ?>><span>Products</span></a>
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

            <a href="order.php" <?php if($id==4) echo 'class="active"'; ?>><span>Order Now</span></a>
          </li>
          <li id="contactus" class="last" style="border-radius:10px;">
            <a href="contactus.php" <?php if($id==5) echo 'class="active"'; ?>><span>Contact Us</span></a>
          </li>
     </ul></div></div>
