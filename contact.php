<?php include 'includes/top_inc.php'; ?>
	<title>Kontakt | Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<?php include 'includes/header_inc.php'; ?>
	<section class="main">
		<article class="contact">
			<h2>Kontakt os</h2>
			<p>Drejer det sig om en hastesag bedes du kontakte os pr. telefon på <a href="tel:86163766" class="phone">8616 3766</a> eller <a href="tel:86163396" class="phone">8616 3396</a> eller komme ned i butikken på: <a href="http://maps.apple.com/?q=Brdr+Sejr+Aarhus" target="_blank" class="address">Randersvej 36, 8200 Aarhus N</a></p>
			<h3>Butikkens åbningstider</h3>
			<h4>1. Oktober til 1. Marts:</h4>
			<ul>
				<li>Mandag - fredag: 10:00 til 17:00</li>
				<li>Lørdag: 10:00 til 12:00</li>
			</ul>
			<h3>Værkstedets åbningstider</h3>
			<ul>
				<li>Mandag - fredag: 9:00 til 17:00</li>
			</ul>
		</article>
			<section class="contact-form">
				<h3>Du kan også kontakte os via e-mail her:</h3>
				<form name="contactform" method="POST" action="contact-result.php">
					<label for="name">Dit navn:</label>
					<input name="name" id="name" type="text"><br>
					<label for="email">Din email:</label>
					<input name="email" id="email" type="text"><br>
					<label for="subject">Emne:</label>
					<input name="subject" id="subject" type="text"><br>
					<label for="message" class="msg-label">Din besked:</label><br>
					<textarea name="message" id="message"></textarea><br>
					<input type="submit" name="submit" value="Send besked" class="form-submit">
				</form>
			</section><!-- close contactform -->
	</section><!-- close main -->
<?php include 'includes/footer_inc.php'; ?>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>