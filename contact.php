<?php include 'includes/top_inc.php'; ?>
	<title>Kontakt | Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<?php include 'includes/header_inc.php'; ?>
	<main>
		<article class="contact">
			<h2>Kontakt os</h2>
			<p>Drejer det sig om en hastesag bedes du kontakte os pr. telefon på <a href="tel:86163766" class="phone">8616 3766</a> eller <a href="tel:86163396" class="phone">8616 3396</a>.</p>
			<p>Du kan også kontakte os via e-mail her:</p>
			<form name="contactform" method="POST" action="contact-result.php">
				<label for="name">Dit navn:</label>
				<input name="name" type="text"><br>
				<label for="email">Din email:</label>
				<input name="email" type="text"><br>
				<label for="subject">Emne:</label>
				<input name="subject" type="text"><br>
				<label for="message">Din besked:</label><br>
				<textarea name="message" type="text"></textarea><br>
				<input type="submit" name="submit" value="Send besked">
			</form>
		</article>
		<?php include 'includes/social_inc.php'; ?>
	</main>
<?php include 'includes/footer_inc.php'; ?>
	<script src="js/script.js" type="text/javascript" type="text/javascript"></script>
</body>
</html>