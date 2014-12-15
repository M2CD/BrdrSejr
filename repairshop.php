<?php include 'includes/top_inc.php'; ?>
	<title>Værksted | Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<?php include 'includes/header_inc.php'; ?>
	<section class="main">
		<section class="slider showroom">
			<ul class="bxslider">
				<li><img src="http://coolwallpaperz.info/user-content/uploads/wall/o/27/honda-motorcycle-273535.jpg"</li>
				<li><img src="http://nebula.wsimg.com/0cc2ce9b46a7c58b7b39a3ac23860091?AccessKeyId=E734EF3B005739B2C1A6&disposition=0&alloworigin=1"></li>
				<li><img src="http://i.ytimg.com/vi/AMBSLVuuDbM/maxresdefault.jpg"</li>
			</ul>
		</section>
		<article>
			<h2>Vores værksted</h2>
			<p>På værkstedet får du den bedste service af vores dygtige mekanikere, der har mange års erfaring!</p>
			<h3>Værkstedets åbningstider</h3>
			<p>Mandag - fredag: 9:00 til 17:00</p>
			<h3>Kontakt værkstedet</h3>
			<p>Du kan kontakte værkstedet på <a href="tel:86163766" class="phone">8616 3766</a> eller <a href="tel:86163396" class="phone">8616 3396</a></p>
		</article>
		<?php include 'includes/social_inc.php'; ?>
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