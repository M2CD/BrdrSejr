<?php include 'includes/top_inc.php'; ?>
	<title>Brdr. Sejr Motorcykler ApS</title>
	<?php include 'includes/css_inc.php'; ?>
	<link href="plugins/bxslider/css/jquery.bxslider.css" rel="stylesheet">

<?php include 'includes/header_inc.php'; ?>

    <section class="main">
    
    <nav class="webshopmenu">
        <h2>Varesortiment</h2>
    <ul class="sidemenu">
        <li class="sidemenuheader head">Beklædning
            <ul class="sidesubmenu">
                <li><a href="jackets.php" class="active">Jakker</a></li>
                <li><a href="#">Bukser</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Støvler</a></li>
            </ul>
		</li>
        <li class="sidemenuheader">MC udstyr
            <ul class="sidesubmenu">
                <li><a href="#">Sidespejle</a></li>
                <li><a href="#">Udstødning</a></li>
                <li><a href="#">Lys</a></li>
                <li><a href="#">Fælge</a></li>
            </ul>
		</li>
        <li class="sidemenuheader">MC reservedele
            <ul class="sidesubmenu">
                <li><a href="#">Hjul</a></li>
                <li><a href="#">Bremser</a></li>
                <li><a href="#">Motor</a></li>
            </ul>
		</li>
    </ul>
    </nav>
    <section class="productbox">
    
    <h2>MC beklædning - Jakker</h2>
        
        <section class="shopcheckbox">
    <form class="shopcheckbox">
        <h2>Mærke</h2>
        <input type="checkbox" name="Brand" value="All" checked><strong>Alle</strong>
        <br>
        <input type="checkbox" name="Brand" value="Born 46">Honda
        <br>
        <input type="checkbox" name="Brand" value="Brandon">Brandon
        <br>
        <input type="checkbox" name="Brand" value="CARLA">CARLA
        <br>
        <input type="checkbox" name="Brand" value="COSMO II">COSMO II
        <br>
        <input type="checkbox" name="Brand" value="Dainese">Dainese
    </form>   
    <form class="shopcheckbox">
        <h2>Pris</h2>
        <input type="checkbox" name="Brand" value="All" checked><strong>Alle</strong>
        <br>
        <input type="checkbox" name="Brand" value="Honda">0-500 kr. 
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">500-1.000 kr.
        <br>
        <input type="checkbox" name="Brand" value="Honda">1.000-5.000 kr. 
        <br>
        <input type="checkbox" name="Brand" value="Suzuki">5.000 kr.+
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
	</section><!-- close main -->

<?php include 'includes/footer_inc.php'; ?>
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>