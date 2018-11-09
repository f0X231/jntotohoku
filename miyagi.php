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

	<title><?php echo $language["MIYAGI_META_TITLE"]; ?></title>

	<meta name="description" content="<?php echo $language["MIYAGI_META_DESCRIPTION"]; ?>">
	<meta name="keywords" content="<?php echo $language["MIYAGI_META_KEYWORD"]; ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $language["MIYAGI_META_TITLE"]; ?>" />
	<meta property="og:description" content="<?php echo $language["MIYAGI_META_DESCRIPTION"]; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="/MIYAGI" />
	<meta property="og:site_name" content="<?php echo $language["MIYAGI_META_SITENAME"]; ?>" />
	<meta property="og:image" content="<?php echo $language["MIYAGI_META_IMAGE"]; ?>" />
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">
	<meta name="twitter:title" content="<?php echo $language["MIYAGI_META_TITLE"]; ?>">
	<meta name="twitter:description" content="<?php echo $language["MIYAGI_META_DESCRIPTION"]; ?>">
	<meta name="twitter:image" content="<?php echo $language["MIYAGI_META_IMAGE"]; ?>">

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
	<link rel="stylesheet" type="text/css" href="src/css/lightslider.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/theme.css?v=@VERSION">
</head>

<body>
	<section id="herobanner" class="container is-widescreen">
		<div class="herobanner-bar width100 allClear">
			<div class="is-pulled-left width-175">
				<img src="src/images/icon_banner_logo2.png" />
			</div>
			<div class="is-pulled-left width175 has-text-right">
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
				</dl>
			</div>
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item"><a href=""><img src="src/images/banner/hero_banner_miyagi.jpg" alt=""></a></div>
		</div>
		<br /><br />
	</section>

	<section id="info-miyagi" class="container is-widescreen">
		<h1 class="is-size-3 has-text-weight-bold"><?php echo $language["MIYAGI_INFO_TITLE"]; ?></h1>
		<br />
		<p class="is-size-4"><?php echo $language["MIYAGI_INFO_DETAIL"]; ?></p>
		<br />
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width15 has-text-centered"><img src="src/images/icon_website.png" /></div>
			<div class="is-pulled-left width85">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_WEBSITE"]; ?></label>
				<p class="breakSentence"><?php echo $language["MIYAGI_WEBSITE_LINK"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width15 has-text-centered"><img src="src/images/icon_info.png"></div>
			<div class="is-pulled-left width85">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_WAY"]; ?></label>
				<p class="breakSentence"><?php echo $language["MIYAGI_WAY_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width15 has-text-centered"><img src="src/images/icon_addr.png" /></div>
			<div class="is-pulled-left width85">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_ADDR"]; ?></label>
				<p class="breakSentence"><?php echo $language["MIYAGI_ADDR_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width15 has-text-centered"><img src="src/images/icon_gps.png" /></div>
			<div class="is-pulled-left width85">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_GPS"]; ?></label>
				<p class="breakSentence"><?php echo $language["MIYAGI_GPS_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>
	<section id="gallery" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["HEADER_GALLERY"]; ?></h1>
		<p class="is-size-4 has-text-centered"><?php echo $language["MIYAGI_GALLERY_INFO"]; ?></p>
		<br />
		<div>
			<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
				<li data-thumb="src/images/gallery/miyagi1.jpg"> 
					<img src="src/images/gallery/miyagi1.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/miyagi2.jpg"> 
					<img src="src/images/gallery/miyagi2.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/miyagi3.jpg"> 
					<img src="src/images/gallery/miyagi3.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/miyagi4.jpg"> 
					<img src="src/images/gallery/miyagi4.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/miyagi5.jpg"> 
					<img src="src/images/gallery/miyagi5.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/miyagi6.jpg"> 
					<img src="src/images/gallery/miyagi6.jpg" class="is-fullwidth" />
				</li>
			</ul>
		</div>
		<br />
		<br />
	</section>
	<section id="googleMaps" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["HEADER_LOCATION"]; ?></h1>
		<br />
		<div id="gmap"></div>
		<br />
		<br />
	</section>
	<section id="location" class="container is-widescreen bgInsprise">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["MIYAGI_LOCATION_TITLE"]; ?></h1>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<p class="is-size-4 has-text-centered"><?php echo $language["MIYAGI_LOCATION_DETAIL"]; ?></p>
		<br />
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="aomori.php" target="_blank"><img src="src/images/local_towada_lake.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href="akita.php" target="_blank"><img src="src/images/local_gozanoishi_shrine.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="iwate.php" target="_blank"><img src="src/images/local_appi_kogen.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href="yamagata.php" target="_blank"><img src="src/images/local_ginzan_onsen.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="fukushima.php" target="_blank"><img src="src/images/local_tadami_line.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one">&nbsp;</div>
		</div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>
	<section id="tips" class="container is-widescreen">
		<div><a href="media-inner.php" target="_blank"><img src="src/images/tips3.jpg" /></a></div>
		<div><a href="bag.html" target="_blank"><img src="src/images/tips2.jpg" /></a></div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>

	<section id="gobackhome" class="container is-widescreen">
		<br />
		<div class="is-size-3 has-text-weight-bold has-text-centered">
			<a href="tohoku.php"><u class="has-text-black">Go To Tohoku Page</u></a>
		</div>
		<br />
	</section>

	<footer id="footer" class="container is-widescreen">
		<br />
		<div class="is-size-6 has-text-centered">🄫Miyagi Inbound DMO Association<br />🄫JNTO</div>
		<br />
		<div class="columns is-mobile">
			<div class="column has-text-right"><a href="http://www.jnto.or.th/" target="_blank"><img src="src/images/footer_logo1.png" id="logo1"></a></div>
			<div class="column is-three-quarters"><a href="http://www.jnto.or.th/" target="_blank"><img src="src/images/footer_logo2.png" id="logo2"></a></div>
		</div>
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
	<script src="src/js/lightslider.min.js?v=@VERSION"></script>
	<script src="src/js/gotoTop.js?v=@VERSION"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
	
</body>

</html>