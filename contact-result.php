<?php include 'includes/top_inc.php'; ?>
	<title>Kontakt | Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<?php include 'includes/header_inc.php'; ?>
	<main>
		<article class="contact">
			<h2>Kontakt os</h2>
<?php 
if(isset($_POST['submit'])){
    $to = "gunnyarts@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $Message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    //mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
echo "Besked: " . $_POST['subject'] . " " . $_POST['message'];
?>
	</main>
<?php include 'includes/footer_inc.php'; ?>
	<script src="js/script.js" type="text/javascript" type="text/javascript"></script>
</body>
</html>