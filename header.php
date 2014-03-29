<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=316678975140564";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="header">
  <div style="width: 100%;
float: right;
text-align: right;
margin: 10px 10px 0 0;">
      <div class="fb-like" data-href="https://www.facebook.com/chickenhousepoultry" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"
      ></div>
  </div>
  <a href="index.php"><img src="images/logo.png" class="logo"></a>
      <div id="menu" class="globalfont">
          <ul class="menu">
            <li id="index" class="arrow current" style="border-radius:10px;">
              <a href="index.php" <?php if($id==1) echo 'class="active"'; ?>><span>Home</span></a>
            </li>
            <li id="aboutus" style="border-radius:10px;">
              <a href="maisa_about_us.php" <?php if($id==2) echo 'class="active"'; ?>><span>About Us</span></a>
            </li>
            <li id="products" style="border-radius:10px;">
              <a href="spices_instantfood_products.php" <?php if($id==3) echo 'class="active parent"'; ?>><span>Products</span></a>
              <div>
                <ul>
                  <li id="spices">
                    <a href="masalas_spices_products.php"><span>Spices</span></a>
                  </li>
                  <li id="Instant">
                    <a href="maisa_instantfood.php"><span>Instant Foods</span></a>
                  </li>
                </ul>
              </div>
            </li>
         
          <li id="order" class="last" style="border-radius:10px;">

            <a href="maisa_order_form.php" <?php if($id==4) echo 'class="active"'; ?>><span>Order Now</span></a>
          </li>
          <li id="contactus" class="last" style="border-radius:10px;">
            <a href="maisa_contact_us.php" <?php if($id==5) echo 'class="active"'; ?>><span>Contact Us</span></a>
          </li>
     </ul></div></div>