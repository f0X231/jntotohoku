<?php
	// include language configuration file based on selected language
	$lang = "th";
	if(isset($_GET['lang'])){ 
		$lang = $_GET['lang']; 
	} 
	require_once("src/lang/" . $lang . ".php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php echo $language["TOHOKURAIN_META_TITLE"]; ?></title>

	<meta name="description" content="<?php echo $language["TOHOKURAIN_META_DESCRIPTION"]; ?>">
	<meta name="keywords" content="<?php echo $language["TOHOKURAIN_META_KEYWORD"]; ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $language["TOHOKURAIN_META_TITLE"]; ?>" />
	<meta property="og:description" content="<?php echo $language["TOHOKURAIN_META_DESCRIPTION"]; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="/AKITA" />
	<meta property="og:site_name" content="<?php echo $language["TOHOKURAIN_META_SITENAME"]; ?>" />
	<meta property="og:image" content="<?php echo $language["TOHOKURAIN_META_IMAGE"]; ?>" />
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">
	<meta name="twitter:title" content="<?php echo $language["TOHOKURAIN_META_TITLE"]; ?>">
	<meta name="twitter:description" content="<?php echo $language["TOHOKURAIN_META_DESCRIPTION"]; ?>">
	<meta name="twitter:image" content="<?php echo $language["TOHOKURAIN_META_IMAGE"]; ?>">

	<link rel="apple-touch-icon" sizes="57x57" href="src/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="src/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="src/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="src/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="src/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="src/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="src/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="src/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="src/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="src/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="src/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="src/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="src/images/favicon-16x16.png">

	<link rel="stylesheet" type="text/css" href="src/css/owl.carousel.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/owl.theme.default.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/theme.css?v=@VERSION">
</head>

<body>
	<section id="herobanner" class="container is-widescreen">
		<div class="herobanner-bar width100 allClear">
			<div class="is-pulled-left width150 has-text-centered bg-dark-gray">
				<img src="src/images/icon_tohoku.png" />
			</div>
			<div class="is-pulled-left width-370 has-text-right bg-gray">
				<dl class="herobanner-bar-social">
					<dt class="is-inline-block">
						<a href="https://www.facebook.com/visitjapanth/" target="_blank">
							<img src="src/images/icon_banner_facebook.png" class="vMiddle" />
						</a>
					</dt>
					<dt class="is-inline-block">
						<a href="https://www.instagram.com/visitjapanth/" target="_blank">
							<img src="src/images/icon_banner_ig.png" class="vMiddle" />
						</a>
					</dt>
					<!--dt class="is-inline-block">
						<a href="#" target="_blank">
							<img src="src/images/icon_banner_youtube.png" class="vMiddle" />
						</a>
					</dt-->
				</dl>
			</div>
			<div class="is-pulled-left width120 has-text-centered bg-black-gray">
				<img src="src/images/icon_banner_logo.png" />
			</div>
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item"><a href=""><img src="src/images/banner/hero_banner_tohoku_railway.jpg" alt=""></a></div>
		</div>
		<br />
		<h1 class="is-size-4 has-text-weight-bold has-text-centered"><?php echo $language["TOHOKURAINWAY_INFO_HEADER"]; ?></h1>
		<p class="is-size-4 has-text-centered"><?php echo $language["TOHOKURAINWAY_INFO"]; ?></p>
		<br />
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<br />
    </section>
    
    <section id="railway-vdo" class="container is-widescreen bgsnow">
		<h2 class="is-size-4 has-text-weight-bold has-text-centered"><?php echo $language["TOHOKURAINWAY_YOUTUBE"]; ?></h2>
		<br />
		<div class="video-container">
			<iframe width="853" height="480" src="https://www.youtube.com/embed/BDGODDP-pd4" frameborder="0" allowfullscreen></iframe>
		</div>
		<br />
	</section>


	<section id="railway-location-1" class="container is-widescreen">
        <h2 class="is-size-3 has-text-weight-bold has-text-centered"><?php echo $language["TOHOKURAINWAY_LOCATION"]; ?></h2>
		<p class="is-size-4 has-text-centered"><?php echo $language["TOHOKURAINWAY_LOCATION_NAME"]; ?></p>
		<br />
		<img src="src/images/theme/themeRainway1.jpg" width="100%" />
		<br />
        <p class="is-size-4 lineheight1-5"><?php echo $language["TOHOKURAINWAY_LOCATION_TXT1"]; ?></p>
		<br /><br />
    </section>
    
    <section id="location-temple" class="container is-widescreen">
        <h2 class="is-size-4 has-text-weight-bold has-text-centered"><?php echo $language["TOHOKURAINWAY_LOCATION_NAME2"]; ?></h2>
        <br />
		<img src="src/images/theme/themeRainway2.jpg" width="100%" />
		<br />
        <p class="is-size-4 lineheight1-5"><?php echo $language["TOHOKURAINWAY_LOCATION_TXT2"]; ?></p>
        <br /><br />
    </section>

	<section id="googleMaps" class="container is-widescreen">
        <h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["HEADER_MAP"]; ?></h1>
        <div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
        <br />
        <div id="gmap"></div>
        <br />
        <br />
    </section>

	<section id="tips" class="container is-widescreen">
		<div><a href="tohoku.php" target="_blank"><img src="src/images/tips1.jpg" /></a></div>
		<div><a href="bag.html" target="_blank"><img src="src/images/tips2.jpg" /></a></div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>

	<section id="gobackhome" class="container is-widescreen">
		<br />
		<div class="is-size-3 has-text-weight-bold has-text-centered">
			<a href="media-inner.php"><u class="has-text-black">Go To Tohoku Trip Page</u></a>
		</div>
		<br />
	</section>

	<footer id="footer" class="container is-widescreen">
		<br />
		<div class="is-size-6 has-text-centered">© JNTO</div>
		<br />
		<p id="copyright" class="has-text-centered is-size-5">Copyright © Japan National Tourism Organization All Rights Reserved.</p>
	</section>
	
	<img height="1" width="1" style="display:none;" src="https://www.facebook.com/tr?id=1856422301142184&ev=PageView&noscript=1"/>
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-788681111"></script> 
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-788681111'); </script> 

	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $language["GMAPKPI"]; ?>&amp;v=3.22&amp;sensor=false"></script>
    <script src="node_modules/jquery/dist/jquery.min.js?v=@VERSION"></script>
    <script src="node_modules/maplace-js/dist/maplace.min.js?v=@VERSION"></script>
	<script src="src/js/owl.carousel.min.js?v=@VERSION"></script>
	<script src="src/js/gotoTop.js?v=@VERSION"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
	
</body>

</html>