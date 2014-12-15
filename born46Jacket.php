<?php include 'includes/top_inc.php'; ?>
	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">
<link href="plugins/lightbox/css/lightbox.css" rel="stylesheet">

<?php include 'includes/header_inc.php'; ?>

    <main>
	<img src="img/mcwebshop/sale.jpg" class="mcwebshop" alt="Christmas sale">
    
    <nav class="webshopmenu">
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
        <li class="sidemenuheader">MC reservedele</li>
            <ul class="sidesubmenu">
                <li><a href="#">Hjul</a></li>
                <li><a href="#">Bremser</a></li>
                <li><a href="#">Motor</a></li>
            </ul>
    </ul>
    </nav>
    <section class="born46box">
    
    <h1>Born46 jacket</h1>
        
        <article class="productimg">

        <a href="img/mcwebshop/jakke1.png" data-lightbox="Born46 jacket" data-title="Born46 jacket front"><img src="img/mcwebshop/jakke1.png" class="main" alt="Born46 jacket front"></a>
        <a href="img/mcwebshop/jakke1.1.png" data-lightbox="Born46 jacket" data-title="Born46 jacket back"><img src="img/mcwebshop/jakke1.1.png" class="sub" alt="Born46 jacket back"></a>    
        </article>
        
        <article class="productinformation">
            <h2>Beskrivelse</h2>        
            <ul class="description">
                <li>Ydremateriale:</li>
                    <ul>
                        <li>Blødt okseskind</li>
                    </ul>
                <li>Indenfor:</li>
                    <ul>
                        <li>100% polyester</li>
                    </ul>
                <li>Egenskaber:</li>
                    <ul>
                        <li>Justeringsmulighed</li>
                        <li>2 ydrelommer</li>
                        <li>3 inderlommer</li>
                        <li>Stone washed</li>
                        <li>Skuldre- og albuebeskyttere</li>
                        <li>Rygbeskytter</li>
                    </ul>
                <li>Størrelser:</li>
                    <ul>
                        <li>S, M, L, XL, XXL</li>
                    </ul>
                <li>Farver:</li>
                    <ul>
                        <li>Sort</li>
                    </ul>
            </ul>
            </article>
            
            <section class="buy">
            <p>2.100,-</p>
            <select id="variantType" class="variantType">
                <option value>Vælg størrelse</option>
                <option value="9">XSmall</option>
                <option value="8">Small</option>
                <option value="4">Medium</option>
            </select>
            <form class="amount">
                <input type="number" name="amount" class="amount" value="1">
            </form>
            <a href="#" class="button buy">Læg i indkøbskurv</a>
       
            
            </section>
            <a href="mcwebshop.php" class="previous"><img src="img/arrowleft.png" alt="link to previous page"</a>        
            
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