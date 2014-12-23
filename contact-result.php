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
		<section class="contact-form result">
			<h3>Tak <?php echo $_POST['name'] ?>. Din besked er blevet sendt</h3>
			<p>Følgende besked er blevet sendt til Brdr. Sejr:</p>
			<article class="contact-message">
				<?php 
				if(isset($_POST['submit'])){
					$to = "brdrsejr@brdrsejr.dk"; // this is your Email address
					$from = $_POST['email']; // this is the sender's Email address
					$name = $_POST['name'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];

					$headers = "Fra: " . $name . " (" . $from . ")";
					//mail($to,$subject,$message,$headers); // email message to $to
					}
				// Showing message so user can read what they have sent
				echo "<h4>" . $subject . "</h4>";
				echo "<p>" . $message . "</p>";
				?>
			</article>
		</section><!-- close contactform results -->
	</section><!-- close main -->
<?php include 'includes/footer_inc.php'; ?>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>