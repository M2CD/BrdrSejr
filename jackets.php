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
                <li><a href="#"><strong>Jakker</strong></a></li>
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
    <section class="productbox">
    
    <h1>MC beklædning - Jakker</h1>
        
        <section class="shopcheckbox">
    <form class="shopcheckbox">
        <h2>Mærke</h2>
        <input type="checkbox" name="Brand" value="All" checked><strong>Alle</strong>
        <br>
        <input type="checkbox" name="Brand" value="Honda">Honda
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">Suzuki
    </form>
    <form class="shopcheckbox">
        <h2>Farve</h2>
        <input type="checkbox" name="Brand" value="All" checked><strong>Alle</strong>
        <br>
        <input type="checkbox" name="Brand" value="Honda">Sort
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">Hvid
        <br>
        <input type="checkbox" name="Brand" value="Honda">Rød
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">Blå
        <br>
        <input type="checkbox" name="Brand" value="Honda">Gul
    </form>   
    <form class="shopcheckbox">
        <h2>Hestekræfter</h2>
        <input type="checkbox" name="Brand" value="All" checked><strong>Alle</strong>
        <br>
        <input type="checkbox" name="Brand" value="Honda">0-50 hk
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">50-100 hk
        <br>
        <input type="checkbox" name="Brand" value="Honda">100-150 hk
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">150-200 hk
    </form>   
    <form class="shopcheckbox">
        <h2>Pris</h2>
        <input type="checkbox" name="Brand" value="All" checked><strong>Alle</strong>
        <br>
        <input type="checkbox" name="Brand" value="Honda">0-50.000 kr. 
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">50.000-100.000 kr.
        <br>
        <input type="checkbox" name="Brand" value="Honda">100.000-200.000 kr. 
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">200.000-400.000 kr.
    </form>   
    </section>
        
        <a href="born46Jacket.php">
            <img src="img/mcwebshop/jakke1.png" alt="Born 46 jacket">
            Born 46
            <p>Retro læderjakke</p>
            <p>S, M, L, XL, XXL</p>
            <p class="price"><strong>2.100 kr,-</strong></p>
        </a>
        <a href="#">
                     <img src="img/mcwebshop/jakke2.jpg" alt="Brandon jacket">
            Brandon
            <p>Klassisk læderjakke</p>
            <p>M, L, XL, XXL</p>
            <p class="price"><strong>2.300 kr,-</strong></p>
        </a>
        <a href="#">
                       <img src="img/mcwebshop/jakke3.jpg" alt="CARLA jacket">
            CARLA
            <p>Dame læderjakke</p>
            <p>XS, S, M, L, XL</p>
            <p class="price"><strong>1.600 kr,-</strong></p>
        </a>
        <a href="#">
            
            <img src="img/mcwebshop/jakke4.jpg" alt="COSMO II jacket">
            COSMO II
            <p>Kort læderjakke med TFL</p>
            <p>M, L, XL, XXL, XXXL</p>
            <p class="price"><strong>1.750 kr,-</strong></p>
        </a>

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