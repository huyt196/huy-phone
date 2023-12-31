<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery.countdown.min.js"></script>
<!-- fit video  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/Hoverparallax.min.js"></script>
<!-- jquery.countTo js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery.countTo.js"></script>
<!-- imagesloaded js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/isotope.min.js"></script>
<!-- jquery.appear js  -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery.appear.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery.parallax-scroll.js"></script>
<!-- jquery.dd.min js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/jquery.elevatezoom.js"></script>
<!-- Google Map Js -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
<!-- scripts js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/scripts.js"></script>
<!-- slick js -->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/slick.min.js"></script>
<!-- ACTIVE MENU-->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/mscript.js"></script>
<!-- ACTIVE CART-->
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/cart.js"></script>
<!-- CUSTOM JS-->
<?php
if (isset($this->_jsFile)) {
    echo '<script src="' . TEMPLATE_URL . 'phone/main/assets/js/' . $this->_jsFile . '"></script>';
}
?>