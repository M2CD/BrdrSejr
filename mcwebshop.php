<?php include 'includes/top_inc.php'; ?>
	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">

<?php include 'includes/header_inc.php'; ?>

    <main>
	<img src="img/mcwebshop/sale.jpg" class="mcwebshop" alt="Christmas sale">
    
    <section class="webshopmenu">
        <h2>Varesortiment</h2>
    <ul class="sidemenu">
        <li class="sidemenuheader head">Beklædning</li>
            <ul class="sidesubmenu">
                <li><a href="jackets.php">Jakker</a></li>
                <li><a href="#">Bukser</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Støvler</a></li>
            </ul>
        <li class="sidemenuheader">MC udstyr</li>
            <ul class="sidesubmenu">
                <li><a href="#">Sidespejle</a></li>
                <li><a href="#">Udstødning</a></li>
                <li><a href="#">Lys</a></li>
                <li><a href="#">Fælge</a></li>
            </ul>
        <li class="sidemenuheader">MC tilbehør</li>
            <ul class="sidesubmenu">
                <li><a href="#">Låse</a></li>
                <li><a href="#">Headphones</a></li>
                <li><a href="#">GPS</a></li>
                <li><a href="#">Diverse</a></li>
            </ul>
    </ul>
    </section>
    <section class="webshopbox">
        <h1>Velkommen til vores webshop</h1>
        <p>
Vi stræber efter at blive en af nettets absolut største online forhandlere af alt inden for MC beklædning, udstyr og reservedele. Når du handler her hos os, er du dermed altid sikret et stort og velassorteret udvalg både med hensyn til mærker og forskellige modeller. Vi udvælger nøje alle produkter til vores webshop, så du som kunde er sikret en høj grad af kvalitet og sikkerhed. Alle vore valg baseres på en stor passion og ekspertise inden for MC.</p>
        <p>
        Når det drejer sig om MC beklædning her hos Brdr. Sejr, har du altid flere forskellige valgmuligheder. Vi forhandler både MC læderbeklædning og MC tekstil beklædning fra anerkendte mærker, hvor der er stor fokus på god pasform, kvalitet og sikkerhed i deres udvalget af de forskellige former for MC beklædning. Skal du for eksempel bruge en ny MC jakke eller et par bukser med en god pasform, finder du dem helt sikkert i udvalget her hos os.</p>
        <p>
        Her hos Brdr. Sejr kan vi også præsentere dig for et varieret udvalg af MC udstyr. Står du og mangler praktisk og funktionelt udstyr til din MC, er du kommet til det rette sted. Vores sortiment byder på alt fra låse til bluetooth head-sets og meget mere.</p>
        <p>
        Udover det store udvalg af MC beklædning og udstyr, har vi også et stort udvalg af MC reservedele. Står du og mangler nogle dele til din MC, kan vi helt sikkert hjælpe dig. Vores udvalg er stort, og vi garanterer den bedste service</p>
        <p><strong>
        Se dig omkring her på webshoppen, og kan du ikke finde det du søger, kan du altid kontakte os, og så finder vi ud af det sammen. God fornøjelse!</strong></p>
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
</body>
</html>