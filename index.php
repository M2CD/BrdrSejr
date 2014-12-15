<?php include 'includes/top_inc.php'; ?>
	<!-- Facebook sharing optimization -->
	<!-- for Google -->
	<meta name="description" content="Køb din nye motorcykel hos Brdr. Sejr! Vi står klar med det største udvalg til de bedste priser." />
	<meta name="keywords" content="motorcykler, bikes, motorcycles, cykler, aarhus, århus, danmark, denmark, brdr, sejr, brødrene, bror, sejer scooter, moped, knallert, pgo, honda, suzuki, kymco, værksted, butik" />

	<meta property="og:title" content="Brdr. Sejr Motorcykler ApS" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://gunnyarts.com/brdrsejr/img/image-fb.png" />
	<meta property="og:url" content="http://gunnyarts.com/brdrsejr" />
	<meta property="og:description" content="Køb din nye motorcykel hos Brdr. Sejr! Vi står klar med det største udvalg til de bedste priser." />

	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<?php include 'includes/header_inc.php'; ?>
	<section class="slider theater">
		<ul class="bxslider">
			<li><iframe width="1920" height="1080" src="//www.youtube.com/embed/ZO8PvISNUbA?rel=0&amp;controls=1&amp;showinfo=0" allowfullscreen></iframe></li>
			<li><img src="img/index/slider01.jpg" alt="temporary slider image"></li>
		</ul>
	</section>
	<section class="main">
		<nav class="circles">
			<a href="motorcycles.php" title="Se vores store udvalg af motorcykler" class="mc">Motorcykler</a>
			<a href="repairshop.php" title="Se info omkring vores værksted" class="rep">Værksted</a>
			<a href="mcwebshop.php" title="Køb dit udstyr her" class="acc">Udstyr-shop</a>
		</nav>
		<article class="welcome">
			<h2>Velkommen til Brdr. Sejr</h2>
			<p>Vi står klar til at hjælpe dig, med at finde dit nye køretøj!</p>
			<p>Kom ind og se vores store udvalg af SUZUKI og HONDA motorcykler, 
				samt KYMCO og PGO scootere.</p>
			<p>Sæt dig til rette på netop din favorit model
				og få en prøvetur.</p>
			<p><strong class="help">Hjælpen er lige om hjørnet</strong></p>
			
			<?php include 'includes/social_inc.php'; ?>	
		</article>
		<article class="brands">
			<h2>Vi forhandler</h2>
			<nav class="menu-brands">
				<a href="motorcycles.php"><img src="img/brands/suzuki.png" alt="Suzuki"></a>
				<a href="motorcycles.php"><img src="img/brands/honda.png" alt="Honda"></a>
				<a href="motorcycles.php"><img src="img/brands/pgo.png" alt="PGO"></a>
				<a href="motorcycles.php"><img src="img/brands/kymco.png" alt="Kymco"></a>
			</nav>
		</article>
		<blockquote class="reviews">
			<h2>Hvad siger kunderne?</h2>
			<ul class="bxslider">
				<li><p><q>Virkelig et sted jeg kan anbefale til andre, både køb af tøj og mc. De har også et kanon værksted der har meget at se til, men de holder deres aftaler! Og er gode til at rådgive og billige forhold til mange andre. Engang sejer, altid sejer:)</q><br><strong>- Marius Jensen Lyseggen</strong></p></li>
				<li><p><q>Har handlet hos Brdr Sejr i omkring 35 år og har alle år købt reservedele og beklædning hos dem, Jeg har for det meste selv stået for reparationer og vedligeholdelse. De har altid været meget hjælpsomme med gode råd og vejledning, når jeg har været kørt i stykker. Med den behandling jeg har modtaget, får man en følelse af at være en del af "familien". Jeg kan kun anbefale dem på det varmeste.</q><br><strong>- Poul Grønhøj Andersen</strong></p></li>      
			</ul>
			
		</blockquote>
	</section><!-- close main -->
<?php include 'includes/footer_inc.php'; ?>
	<script src="plugins/bxslider/js/jquery.bxslider.js" type="text/javascript"></script>
	<script src="plugins/bxslider/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="plugins/bxslider/js/jquery.fitvids.js" type="text/javascript"></script>
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
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>