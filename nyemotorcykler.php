<?php include 'includes/top_inc.php'; ?>
	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">

<?php include 'includes/header_inc.php'; ?>

    <section class="main">
	<section class="slider showroom">
		<ul class="bxslider">
            <li><img src="img/nyemotorcykler/DSC_4073.JPG"></li>
			<li><img src="img/nyemotorcykler/DSC_4098.JPG"></li>
			<li><img src="img/nyemotorcykler/DSC_4166.JPG"></li>
		</ul>
	</section>
    <section class="mc_products">
        <a href="mcInfo.php">
            Suzuki SFV650AL
            <img src="img/nyemotorcykler/mcinfo/suzukiimg1.jpg" class="mc" alt="Honda mc">
            <p class="price">56.000 kr.</p>
            <p>500-749 ccm...</p>
        </a>
        <a href="#">
            Suzuki SV650SAK8
            <img src="img/nyemotorcykler/mc2.jpg" class="mc" alt="Honda mc">
            <p class="price">62.000 kr.</p>
            <p>500-749 ccm</p>
        </a>
        <a href="#">
            Honda GSX1300
            <img src="img/nyemotorcykler/mc3.jpg" class="mc" alt="Honda mc">
            <p class="price">96.000 kr.</p>
            <p>s500-749 ccm</p>
        </a>
        <a href="#">
            Suzuki DL1000
            <img src="img/nyemotorcykler/mc4.jpg" class="mc" alt="Honda mc">
            <p class="price">41.000 kr.</p>
            <p>500-749 ccm</p>
        </a>
        <a href="#">
            Honda GSR750
   <img src="img/nyemotorcykler/mc5.jpg" class="mc" alt="Honda mc">
            <p class="price">98.000 kr.</p>
            <p>500-749 ccm</p>
        </a>
        <a href="#">
            Suzuki VZR1800
   <img src="img/nyemotorcykler/mc6.jpg" class="mc" alt="Honda mc">
            <p class="price">104.000 kr.</p>
            <p>500-749 ccm</p>
        </a>
        <a href="#">
            Honda VZ800L0
   <img src="img/nyemotorcykler/mc7.jpg" class="mc" alt="Honda mc">
            <p class="price">132.000 kr.</p>
            <p>500-749 ccm</p>
        </a>
        <a href="#">
            Suzuki VL800K9
   <img src="img/nyemotorcykler/mc8.jpg" class="mc" alt="Honda mc">
            <p class="price">97.000 kr.</p>
            <p>500-749 ccm</p>
        </a>
    </section>
	</section><!-- close main -->

<?php include 'includes/footer_inc.php'; ?>

	<script src="plugins/bxslider/js/jquery.bxslider.js" type="text/javascript"></script>
	<script src="plugins/bxslider/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="plugins/bxslider/js/jquery.fitvids.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script>
		//Run slider plugin
		$(document).ready(function(){
		  $('.slider .bxslider').bxSlider({
			  video: true,
			  auto: true
		  });
		});
	</script>
</body>
</html>