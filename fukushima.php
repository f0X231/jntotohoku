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

	<title><?php echo $language["FUKUSHIMA_META_TITLE"]; ?></title>

	<meta name="description" content="<?php echo $language["FUKUSHIMA_META_DESCRIPTION"]; ?>">
	<meta name="keywords" content="<?php echo $language["FUKUSHIMA_META_KEYWORD"]; ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $language["FUKUSHIMA_META_TITLE"]; ?>" />
	<meta property="og:description" content="<?php echo $language["FUKUSHIMA_META_DESCRIPTION"]; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="/AKITA" />
	<meta property="og:site_name" content="<?php echo $language["FUKUSHIMA_META_SITENAME"]; ?>" />
	<meta property="og:image" content="<?php echo $language["FUKUSHIMA_META_IMAGE"]; ?>" />
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">
	<meta name="twitter:title" content="<?php echo $language["FUKUSHIMA_META_TITLE"]; ?>">
	<meta name="twitter:description" content="<?php echo $language["FUKUSHIMA_META_DESCRIPTION"]; ?>">
	<meta name="twitter:image" content="<?php echo $language["FUKUSHIMA_META_IMAGE"]; ?>">

	<link rel="stylesheet" type="text/css" href="src/css/owl.carousel.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/owl.theme.default.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/lightslider.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/theme.css?v=@VERSION">
</head>

<body>
	<section id="herobanner" class="container is-widescreen">
		<div class="herobanner-bar width100 allClear">
			<div class="is-pulled-left width200 has-text-centered bg-dark-gray">
				<img src="src/images/icon_banner_logo.png" />
			</div>
			<div class="is-pulled-left width-200 has-text-right bg-gray">
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
					<dt class="is-inline-block" target="_blank">
						<a href="#">
							<img src="src/images/icon_banner_youtube.png" class="vMiddle" />
						</a>
					</dt>
				</dl>
			</div>
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item"><a href=""><img src="src/images/banner/hero_banner_fukushima.jpg" alt=""></a></div>
		</div>
		<br /><br />
	</section>

	<section id="info-fukushima" class="container is-widescreen">
		<h1 class="is-size-3 has-text-weight-bold"><?php echo $language["FUKUSHIMA_INFO_TITLE"]; ?></h1>
		<br />
		<p class="is-size-4"><?php echo $language["FUKUSHIMA_INFO_DETAIL"]; ?></p>
		<br />
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_website.png" /></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_WEBSITE"]; ?></label>
				<p><?php echo $language["FUKUSHIMA_WEBSITE_LINK"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_addr.png" /></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_ADDR"]; ?></label>
				<p><?php echo $language["FUKUSHIMA_ADDR_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<div class="info-table is-size-4 allClear">
			<div class="is-pulled-left width10"><img src="src/images/icon_gps.png" /></div>
			<div class="is-pulled-left width90">
				<label class="has-text-weight-bold"><?php echo $language["HEADER_GPS"]; ?></label>
				<p><?php echo $language["FUKUSHIMA_GPS_DETAIL"]; ?></p>
			</div>
		</div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>
	<section id="gallery" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["HEADER_GALLERY"]; ?></h1>
		<p class="is-size-4 has-text-centered"><?php echo $language["FUKUSHIMA_GALLERY_INFO"]; ?></p>
		<br />
		<div>
			<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
				<li data-thumb="src/images/gallery/fukushima1.jpg"> 
					<img src="src/images/gallery/fukushima1.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/fukushima2.jpg"> 
					<img src="src/images/gallery/fukushima2.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/fukushima3.jpg"> 
					<img src="src/images/gallery/fukushima3.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/fukushima4.jpg"> 
					<img src="src/images/gallery/fukushima4.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/fukushima5.jpg"> 
					<img src="src/images/gallery/fukushima5.jpg" class="is-fullwidth" />
				</li>
				<li data-thumb="src/images/gallery/fukushima6.jpg"> 
					<img src="src/images/gallery/fukushima6.jpg" class="is-fullwidth" />
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
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["FUKUSHIMA_LOCATION_TITLE"]; ?></h1>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<p class="is-size-4 has-text-centered"><?php echo $language["FUKUSHIMA_LOCATION_DETAIL"]; ?></p>
		<br />
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href=""><img src="src/images/local_towada_lake.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href=""><img src="src/images/local_gozanoishi_shrine.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href=""><img src="src/images/local_appi_kogen.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href=""><img src="src/images/local_snow_monster.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href=""><img src="src/images/local_ginzan_onsen.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one">&nbsp;</div>
		</div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>
	<section id="tips" class="container is-widescreen">
		<div><a href=""><img src="src/images/tips1.jpg" /></a></div>
		<div><a href=""><img src="src/images/tips2.jpg" /></a></div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>

	<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22"></script>
	<script src="node_modules/jquery/dist/jquery.min.js?v=@VERSION"></script>
	<script src="node_modules/maplace-js/dist/maplace.min.js?v=@VERSION"></script>
	<script src="src/js/owl.carousel.min.js?v=@VERSION"></script>
	<script src="src/js/lightslider.min.js?v=@VERSION"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
	
</body>

</html>