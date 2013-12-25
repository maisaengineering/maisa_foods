<link rel="stylesheet" href="./css/bjqs.css">	   
<link rel="stylesheet" href="./css/slider.css">
<script src="./js/bjqs-1.3.min.js"></script>
<script src="./js/popup.js"></script>
<div id="banner-slide">
    <ul class="bjqs">
      <li><img src="images/slide_one.jpg" title=""></li>
      <li><img src="images/slide_three.jpg" title=""></li>
      <li><img src="images/slide_five.jpg" title=""></li>

    </ul>
  <script>
    jQuery(document).ready(function($) {
      
      $('#banner-slide').bjqs({
        animtype      : 'slide',
        height        : 420,
        width         : 970,
        responsive    : true,
        randomstart   : true
      });
      
    });
  </script>
</div>