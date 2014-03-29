<?php include ('analyticstracking.php'); ?>
<link rel="stylesheet" href="./css/bjqs.css">	   
<link rel="stylesheet" href="./css/slider.css">
<script type="text/javascript" src="./js/bjqs-1.3.min.js"></script>
<script type="text/javascript" src="./js/popup.js"></script>
<div id="banner-slide">
    <ul class="bjqs">
      <li><img src="images/slider1.jpg" title=""></li>
      <li><img src="images/slider2.jpg" title=""></li>
      <li><img src="images/slider3.jpg" title=""></li>

    </ul>
  <script>
    jQuery(document).ready(function($) {
      
      $('#banner-slide').bjqs({
        animtype      : 'slide',
        height        : 400,
        width         : 970,
        responsive    : true,
        randomstart   : false
      });
      
    });
  </script>
</div>