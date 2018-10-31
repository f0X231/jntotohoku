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
	<title><?php echo $language["MAIN_META_TITLE"]; ?></title>

	<meta name="description" content="<?php echo $language["MAIN_META_DESCRIPTION"]; ?>">
	<meta name="keywords" content="<?php echo $language["MAIN_META_KEYWORD"]; ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $language["MAIN_META_TITLE"]; ?>" />
	<meta property="og:description" content="<?php echo $language["MAIN_META_DESCRIPTION"]; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="/AKITA" />
	<meta property="og:site_name" content="<?php echo $language["MAIN_META_SITENAME"]; ?>" />
	<meta property="og:image" content="<?php echo $language["MAIN_META_IMAGE"]; ?>" />
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">
	<meta name="twitter:title" content="<?php echo $language["MAIN_META_TITLE"]; ?>">
	<meta name="twitter:description" content="<?php echo $language["MAIN_META_DESCRIPTION"]; ?>">
	<meta name="twitter:image" content="<?php echo $language["MAIN_META_IMAGE"]; ?>">

	<link rel="stylesheet" type="text/css" href="src/css/owl.carousel.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="src/css/owl.theme.default.css?v=@VERSION">
	<link rel="stylesheet" type="text/css" href="node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css?v=@VERSION">
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
			<div class="item"><a href=""><img src="src/images/banner/hero_banner_main.jpg" alt=""></a></div>
		</div>
		<br />
		<!--p class="is-size-4 has-text-centered"><?php //echo $language["TOHOKUART_INFO"]; ?></p-->
    </section>

	<section id="artist" class="container is-widescreen bgMainDanPattie" style="margin-top:-25px;">
		<div class="has-text-centered">
			<img src="src/images/pic-dan-pat.png" />
		</div>
		<h1 class="is-size-2 has-text-centered has-text-weight-bold">Dan Worrawech x Pattie ungsumalynn</h1>
		<p class="is-size-4 has-text-centered has-text-weight-bold">วรเวช ดานุวงศ์ และ อังศุมาลิน สิรภัทรศักดิ์เมธา<br />ชื่อเล่น : แดน และ แพทตี้</p>
		<div class="columns is-mobile">
			<div class="column is-two-fifths has-text-right is-flex-mobile">
				<div class="is-fullwidth has-text-right">
					<img src="src/images/icon_ig_black.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="src/images/vertical-line.png" />
				</div>
			</div>
			<div class="column is-size-4">
				<p>นักร้อง, นักแสดง</p>
				<p>บล็อกเกอร์ที่มีชื่อเสียงคนหนึ่งของประเทศไทย</p>
			</div>
		</div>
		<p class="is-size-4 has-text-centered">
			"แดน วรเวช" และ "แพทตี้ อังศุมาลิน" เดินทางเที่ยวภูมิภาค โทโฮคุ ญี่ปุ่น (Tohoku)<br class="is-hidden-mobile" />
			พวกเขาได้สัมผัสกับเสน่ห์หลากหลายของที่นี่<br class="is-hidden-mobile" />
			โดย "แดน" เป็นผู้สรุปสถานที่รวมทั้งกิจกรรมที่น่าสนใจของโทโฮคุเป็นคลิปวีดีโอ 6 หัวข้อ ดังต่อไปนี้<br />
			* ฟินกับอาหารทะเลสดๆ *  ดื่มด่ำกับผลงานศิลปะ * สนุกไปกับการเดินทางหลากสไตล์ *  <br />
			ผ่อนคลายกับการแช่น้ำพุร้อน * เพลินกับกิจกรรมต่างๆที่น่าสนใจ * ตื่นตาตื่นใจกับธรรมชาติตระการตา *
		</p>
		<br /><br />
	</section>

	<section id="artist-vdo" class="container is-widescreen bgsnow">
		<h2 class="is-size-4 has-text-weight-bold has-text-centered">คลิปบันทึกการเดินทางเที่ยวภูมิภาคโทโฮคุ ของ "แดน & แพทตี้"</h2>
		<p class="is-size-5 has-text-centered">จะทำให้คุณรู้สึกราวกับว่ากำลังเดินทางอยู่ที่โทโฮคุ</p>
		<br />
		<div class="video-container">
			<iframe width="853" height="480" src="https://www.youtube.com/embed/kM3A_LjRbkE" frameborder="0" allowfullscreen></iframe>
		</div>
		<br />
		<br />
	</section>

	<section id="googleMaps" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered">เส้นทางการเดินทางของ "แดน & แพทตี้"</h1>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<br />
		<div id="gmap" style="width: 100%;"></div>
		<br />
		<br />
	</section>

	<section id="location" class="container is-widescreen">
		<p class="is-size-4 has-text-centered">"แดน & แพทตี้" รวบรวมเสน่ห์ต่าง ๆ ที่เขาและเธอได้สัมผัสจริงจากการเดินทางเที่ยวภูมิภาคโทโฮคุ<br />
			(จังหวัดอาโอโมริ Aomori, จังหวัดอะคิตะ Akita, และจังหวัดอิวาเตะ Iwate)<br />
			เป็นวีดีโอ 6 คลิป 6 หัวข้อ เชิญคลิกดูและแชร์คลิปวิดีโอเหล่านี้กับเพื่อนของคุณ!
		</p>
		<br />
		<div class="is-fullwidth location-vdo">
			<a href="tohoku-food.php" target="_blank"><img src="src/images/local_food_of_aomori.jpg" width="100%;" /></a>
			<!--div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		<div class="is-fullwidth location-vdo">
			<a href="tohoku-arts.php" target="_blank"><img src="src/images/local_art_of_aomori.jpg" width="100%;" /></a>
			<!--div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		<div class="is-fullwidth location-vdo">
			<a href="tohoku-hot-spring.php" target="_blank"><img src="src/images/local_culture_of_akita.jpg" width="100%;" /></a>
			<!--div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		<div class="is-fullwidth location-vdo">
			<a href="tohoku-railway.php" target="_blank"><img src="src/images/local_railway_of_akita.jpg" width="100%;" /></a>
			<!--div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		<div class="is-fullwidth location-vdo">
			<a href="tohoku-special.php" target="_blank"><img src="src/images/local_cultural_of_iwate.jpg" width="100%;" /></a>
			<!--div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		<div class="is-fullwidth location-vdo">
			<a href="tohoku-nature.php" target="_blank"><img src="src/images/local_nature_of_iwate.jpg" width="100%;" /></a>
			<!--div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		<br />
	</section>
	
	<section id="gallery" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered">อัลบั้มภาพต่างๆ ของ "แดน & แพทตี้"</h1>
		<p class="is-size-4 has-text-centered">ชมภาพถ่ายเบื้องหลังระหว่างที่พวกเขาสนุกไปกับการเดินทางเที่ยวภูมิภาคโทโฮคุ ญี่ปุ่น</p>
		<br />
		<div class="columns">
			<div class="column">
				<a href="src/images/gallery/akita2.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/akita2.jpg" class="is-fullwidth" />
				</a>
			</div>
			<div class="column">
				<a href="src/images/gallery/aomori3.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/aomori3.jpg" class="is-fullwidth" />
				</a>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<a href="src/images/gallery/fukushima3.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/fukushima3.jpg" class="is-fullwidth" />
				</a>
			</div>
			<div class="column">
				<a href="src/images/gallery/iwate1.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/iwate1.jpg" class="is-fullwidth" />
				</a>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<a href="src/images/gallery/iwate2.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/iwate2.jpg" class="is-fullwidth" />
				</a>
			</div>
			<div class="column">
				<a href="src/images/gallery/miyagi3.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/miyagi3.jpg" class="is-fullwidth" />
				</a>
			</div>
		</div>
		<br />
		<br />
	</section>
	
	
	<section id="tips" class="container is-widescreen">
		<div><a href="tohoku.php"><img src="src/images/tips1.jpg" /></a></div>
		<div><a href="bag.html"><img src="src/images/tips2.jpg" /></a></div>
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
	<script src="src/js/owl.carousel.min.js?v=@VERSION"></script>
	<script src="node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
	<script src="src/js/gotoTop.js?v=@VERSION"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
	
</body>

</html>