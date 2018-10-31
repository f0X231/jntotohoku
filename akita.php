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

	<title><?php echo $language["AKITA_META_TITLE"]; ?></title>

	<meta name="description" content="<?php echo $language["AKITA_META_DESCRIPTION"]; ?>">
	<meta name="keywords" content="<?php echo $language["AKITA_META_KEYWORD"]; ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $language["AKITA_META_TITLE"]; ?>" />
	<meta property="og:description" content="<?php echo $language["AKITA_META_DESCRIPTION"]; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="/AKITA" />
	<meta property="og:site_name" content="<?php echo $language["AKITA_META_SITENAME"]; ?>" />
	<meta property="og:image" content="<?php echo $language["AKITA_META_IMAGE"]; ?>" />
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">
	<meta name="twitter:title" content="<?php echo $language["AKITA_META_TITLE"]; ?>">
	<meta name="twitter:description" content="<?php echo $language["AKITA_META_DESCRIPTION"]; ?>">
	<meta name="twitter:image" content="<?php echo $language["AKITA_META_IMAGE"]; ?>">

	<link rel="stylesheet" type="text/css" href="src/css/owl.carousel.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/owl.theme.default.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/lightslider.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/theme.css?v=@VERSION">
</head>

<body>
	
	<section id="herobanner" class="container is-widescreen">
		<div class="herobanner-bar width100 allClear">
			<div class="is-pulled-left width20 has-text-centered bg-dark-gray">
				<img src="src/images/icon_banner_logo.png" />
			</div>
			<div class="is-pulled-left width80 has-text-right bg-gray">
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
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item"><a href=""><img src="src/images/banner/hero_banner_akita.jpg" alt=""></a></div>
		</div>
		<br /><br />
	</section>

	<section id="info-akita" class="container is-widescreen">
		<h1 class="is-size-3 has-text-weight-bold"><?php echo $language["AKITA_INFO_TITLE"]; ?></h1>
		<br />
		<p class="is-size-4"><?php echo $language["AKITA_INFO_DETAIL"]; ?></p>
		<br />
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_website.png" /></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_WEBSITE"]; ?></label>
				<p><?php echo $language["AKITA_WEBSITE_LINK"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_info.png"></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_WAY"]; ?></label>
				<p><?php echo $language["AKITA_WAY_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_addr.png" /></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_ADDR"]; ?></label>
				<p><?php echo $language["AKITA_ADDR_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_gps.png" /></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_GPS"]; ?></label>
				<p><?php echo $language["AKITA_GPS_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>
	<section id="gallery" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["HEADER_GALLERY"]; ?></h1>
		<p class="is-size-4 has-text-centered"><?php echo $language["AKITA_GALLERY_INFO"]; ?></p>
		<br />
		<div>
			<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
				<li data-thumb="src/images/gallery/akita1.jpg"> 
					<img src="src/images/gallery/akita1.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/akita2.jpg"> 
					<img src="src/images/gallery/akita2.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/akita3.jpg"> 
					<img src="src/images/gallery/akita3.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/akita4.jpg"> 
					<img src="src/images/gallery/akita4.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/akita5.jpg"> 
					<img src="src/images/gallery/akita5.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/akita6.jpg"> 
					<img src="src/images/gallery/akita6.jpg" class="is-fullwidth" />
				</li>
			</ul>
		</div>
		<br />
		<br />
	</section>
	<section id="googleMaps" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["HEADER_LOCATION"]; ?></h1>
		<br />
		<div id="gmap" style="width: 100%;"></div>
		<br />
		<br />
	</section>
	<section id="location" class="container is-widescreen bgInsprise">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["AKITA_LOCATION_TITLE"]; ?></h1>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<p class="is-size-4 has-text-centered"><?php echo $language["AKITA_LOCATION_DETAIL"]; ?>แต่ละแห่งเพิ่มเติม</p>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="aomori.php" target="_blank"><img src="src/images/local_towada_lake.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href="iwate.php" target="_blank"><img src="src/images/local_appi_kogen.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="miyagi.php" target="_blank"><img src="src/images/local_snow_monster.png" width="100%" /></a></div>
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
		<div><a href="media-inner.php" target="_blank"><img src="src/images/tips1.jpg" /></a></div>
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
	
	<img height="1" width="1" style="display:none;" src="https://www.facebook.com/tr?id=1856422301142184&ev=PageView&noscript=1"/>
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-788681111"></script> 
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-788681111'); </script> 

	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $language["GMAPKPI"]; ?>&amp;v=3.22&amp;sensor=false"></script>
	<script src="node_modules/jquery/dist/jquery.min.js?v=@VERSION"></script>
	<script src="node_modules/maplace-js/dist/maplace.min.js?v=@VERSION"></script>
	<script src="src/js/slippry.min.js?v=@VERSION"></script>
	<script src="src/js/owl.carousel.min.js?v=@VERSION"></script>
	<script src="src/js/lightslider.min.js?v=@VERSION"></script>
	<script src="src/js/gotoTop.js?v=@VERSION"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
	
</body>

</html>