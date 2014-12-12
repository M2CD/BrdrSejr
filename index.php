<?php include 'includes/top_inc.php'; ?>
	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<?php include 'includes/header_inc.php'; ?>
	<section class="slider theater">
		<ul class="bxslider">
			<li><iframe width="1920" height="1080" src="//www.youtube.com/embed/3B_tk5cmvEE?rel=0&amp;controls=1&amp;showinfo=0" allowfullscreen></iframe></li>
			<li><img src="img/index/slider01.jpg"></li>
		</ul>
	</section>
	<main>
		<nav class="circles">
			<a href="nyemotorcykler.php" title="Se vores store udvalg af motorcykler" class="mc">Motorcykler</a>
			<a href="repairshop.php" title="Se info omkring vores værksted" class="rep">Værksted</a>
			<a href="#" title="Køb dit udstyr her" class="acc">Udstyr-shop</a>
		</nav>
		<article class="welcome">
			<h2>Velkommen til Brdr. Sejr</h2>
			<p>Vi står klar til at fortælle meget mere om dit næste køretøj, kom forbi og sæt dig til rette i netop din favorit-model og få en prøvetur.</p>
			<p>Kom ind og se vore store udvalg SUZUKI og HONDA motercykler samt PGO scootere</p>
			<p><strong>Hjælpen er lige om hjørnet</strong></p>
			
			<?php include 'includes/social_inc.php'; ?>	
		</article>
		<article class="brands">
			<h2>Vi forhandler</h2>
			<nav class="menu-brands">
				<a href="nyemotorcykler.php"><img src="img/brands/suzuki.png" alt="Suzuki"></a>
				<a href="nyemotorcykler.php"><img src="img/brands/honda.png" alt="Honda"></a>
				<a href="nyemotorcykler.php"><img src="img/brands/pgo.png" alt="PGO"></a>
				<a href="nyemotorcykler.php"><img src="img/brands/kymco.png" alt="Kymco"></a>
			</nav>
		</article>
		<blockquote class="reviews">
			<h2>Hvad siger kunderne?</h2>
			<ul class="bxslider">
				<li><p><q>Virkelig et sted jeg kan anbefale til andre, både køb af tøj og mc. De har også et kanon værksted der har meget at se til, men de holder deres aftaler! Og er gode til at rådgive og billige forhold til mange andre. Engang sejer, altid sejer:)</q><br><strong>- Marius Jensen Lyseggen</strong></p></li>
				<li><p><q>FOR SATAN DA BOBBY!! der har meget at se til, men de holder deres aftaler! Og er gode til at rådgive og billige forhold til mange andre. Engang sejer, altid sejer:)</q><br><strong>- Marius Jensen Lyseggen</strong></p></li>      
			</ul>
			
		</blockquote>
	</main>
<?php include 'includes/footer_inc.php'; ?>
	<script src="plugins/bxslider/js/jquery.bxslider.js" type="text/javascript"></script>
	<script src="plugins/bxslider/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="plugins/bxslider/js/jquery.fitvids.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript" type="text/javascript"></script>
	<script>
		//Run slider plugin
		$(document).ready(function(){
		  $('.slider .bxslider').bxSlider({
			  video: true,
			  auto: true
		  });
		  $('.reviews .bxslider').bxSlider({
			  auto: true,
			  randomStart: true,
			  controls:false,
			  pause:10000,
			  speed:1000
			  
			  
		  });
		});
	</script>
</body>
</html>