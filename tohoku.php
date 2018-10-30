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
	<title><?php echo $language["TOHOKU_META_TITLE"]; ?></title>

	<meta name="description" content="<?php echo $language["TOHOKU_META_DESCRIPTION"]; ?>">
	<meta name="keywords" content="<?php echo $language["TOHOKU_META_KEYWORD"]; ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $language["TOHOKU_META_TITLE"]; ?>" />
	<meta property="og:description" content="<?php echo $language["TOHOKU_META_DESCRIPTION"]; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="/TOHOKU" />
	<meta property="og:site_name" content="<?php echo $language["TOHOKU_META_SITENAME"]; ?>" />
	<meta property="og:image" content="<?php echo $language["TOHOKU_META_IMAGE"]; ?>" />
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">
	<meta name="twitter:title" content="<?php echo $language["TOHOKU_META_TITLE"]; ?>">
	<meta name="twitter:description" content="<?php echo $language["TOHOKU_META_DESCRIPTION"]; ?>">
	<meta name="twitter:image" content="<?php echo $language["TOHOKU_META_IMAGE"]; ?>">

	<link rel="stylesheet" type="text/css" href="src/css/owl.carousel.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/owl.theme.default.css?v=@VERSION">
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
			<div class="item"><a href="tohoku.php"><img src="src/images/banner/banner_tohoku_landing.jpg" alt=""></a></div>
			<div class="item"><a href="akita.php"><img src="src/images/banner/hero_banner_akita.jpg" alt=""></a></div>
			<div class="item"><a href="aomori.php"><img src="src/images/banner/hero_banner_aomori.jpg" alt=""></a></div>
			<div class="item"><a href="fukushima.php"><img src="src/images/banner/hero_banner_fukushima.jpg" alt=""></a></div>
			<div class="item"><a href="iwate.php"><img src="src/images/banner/hero_banner_iwate.jpg" alt=""></a></div>
			<div class="item"><a href="miyagi.php"><img src="src/images/banner/hero_banner_miyagi.jpg" alt=""></a></div>
			<div class="item"><a href="yamagata.php"><img src="src/images/banner/hero_banner_yamagata.jpg" alt=""></a></div>
		</div>
		<br /><br />
	</section>

	<section id="info-tohoku" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold"><?php echo $language["TOHOKU_TITLE"]; ?></h1>
		<br />
		<p class="is-size-4"><?php echo $language["TOHOKU_INFO"]; ?></p>
	</section>
	<section id="info-danpattie" class="container is-widescreen">
		<p class="is-size-4"><?php echo $language["TOHOKU_DETAIL"]; ?></p>
		<br /><br /><br />
	</section>

	<section id="location" class="container is-widescreen bgInsprise">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered"><?php echo $language["TOHOKU_LOCATION_TITLE"]; ?></h1>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<p class="is-size-4 has-text-centered"><?php echo $language["TOHOKU_LOCATION_DETAIL"]; ?></p>
		<br />
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="aomori.php" target="_blank"><img src="src/images/local_towada_lake.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href="akita.php" target="_blank"><img src="src/images/local_gozanoishi_shrine.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="iwate.php" target="_blank"><img src="src/images/local_appi_kogen.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href="miyagi.php" target="_blank"><img src="src/images/local_snow_monster.png" width="100%" /></a></div>
		</div>
		<div class="columns marpad-bottom-one">
			<div class="column marpad-bottom-one"><a href="yamagata.php" target="_blank"><img src="src/images/local_ginzan_onsen.png" width="100%" /></a></div>
			<div class="column marpad-bottom-one"><a href="fukushima.php" target="_blank"><img src="src/images/local_tadami_line.png" width="100%" /></a></div>
		</div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>

	<section id="artist-vdo" class="container is-widescreen bgsnow">
		<h2 class="is-size-4 has-text-weight-bold has-text-centered"><?php echo $language["TOHOKU_YOUTUBE"]; ?></h2>
		<p class="is-size-5 has-text-centered"><?php echo $language["TOHOKU_YOUTUBE_INFO"]; ?></p>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<br />
		<div class="video-container">
			<iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
		</div>
		<br />
	</section>

	<section id="tips" class="container is-widescreen">
		<div><a href="" target="_blank"><img src="src/images/tips1.jpg" /></a></div>
		<div><a href="" target="_blank"><img src="src/images/tips2.jpg" /></a></div>
		<br />
		<hr class="has-text-grey-lighter" />
		<br />
	</section>
	

	<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22"></script>
	<script src="node_modules/jquery/dist/jquery.min.js?v=@VERSION"></script>
	<script src="src/js/owl.carousel.min.js?v=@VERSION"></script>
	<script src="src/js/gotoTop.js?v=@VERSION"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
</body>

</html>