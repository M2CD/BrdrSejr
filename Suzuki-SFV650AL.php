<?php include 'includes/top_inc.php'; ?>
	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>

	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
    <link href="plugins/lightbox/css/lightbox.css" rel="stylesheet">

<?php include 'includes/header_inc.php'; ?>

    <main>
    
            <section class="mc_img">

       <a href="img/nyemotorcykler/mcinfo/suzukiimg1.jpg" data-lightbox="Honda SX 104" data-title="Suzuki SFV650AL"><img src="img/nyemotorcykler/mcinfo/suzukiimg1.jpg" alt="Honda mc"></a>
            
        <a href="img/nyemotorcykler/mcinfo/suzukiimg2.jpg" data-lightbox="Honda SX 104" data-title="Suzuki SFV650AL"><img src="img/nyemotorcykler/mcinfo/suzukiimg2.jpg" class="mcimg" alt="Honda mc"></a>
            
        <a href="img/nyemotorcykler/mcinfo/suzukiimg3.jpg" data-lightbox="Honda SX 104" data-title="Suzuki SFV650AL"><img src="img/nyemotorcykler/mcinfo/suzukiimg3.jpg" class="mcimg" alt="Honda mc"></a>
            
        <a href="img/nyemotorcykler/mcinfo/suzukiimg4.jpg" data-lightbox="Honda SX 104" data-title="Suzuki SFV650AL"><img src="img/nyemotorcykler/mcinfo/suzukiimg4.jpg" class="mcimg" alt="Honda mc"></a>
            
        </section>
            
        <section class="mcInfo">
        <h1>Suzuki SFV650AL</h1>
        <h2>Suzuki / 500-749 ccm.</h2>
        <ul>
            <li><strong>Mærke og model:</strong> Suzuki SFV650AL</li>  
            <li><strong>Farve:</strong> Hvid og blå</li>    
            <li><strong>Årgang:</strong> 2014</li>
            <li><strong>Km. stand:</strong> 0</li>
            <li><strong>Antal gear:</strong> 6</li>
            <li><strong>Vægt:</strong> 206 kg.</li>
            <li><strong>Antal cylindrer:</strong> 4</li>
            <li><strong>Motor størrelse (ccm):</strong> 599 ccm</li>
            <li><strong>Hestekræfter:</strong> 102 Hk</li>
            <li><strong>Tilgængelighed:</strong> På lager</li>
        </ul>
        <h3>Yderligere information:</h3>

<p>Honda CBR600F er en moderne klassiker som altid har været yderst populær i Danmark, og savnet i den korte periode hvor den ikke var på programmet. Den helt nye udgave byder som noget helt nyt også på et kombineret ABS bremsesystem, så denne motorcykel både er sikker og sjov.<br>

Vi tilbyder i samarbejde med Honda på en attraktiv finansiering samt forsikringsordning med ekstra fordele for dig. Ring og hør nærmere.</p>          
    <a href="contact.php" class="button">Kontakt for køb</a>
    <a href="motorcycles.php" class="previous"><img src="img/arrowleft.png" alt="link to previous page"</a>        
        </section>
        
    
	</main>

<?php include 'includes/footer_inc.php'; ?>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=30274178883&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
	</script>
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
    <script src="plugins/lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="plugins/lightbox/js/lightbox.min.js"></script>
</body>
</html>