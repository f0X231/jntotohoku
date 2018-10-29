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
						<a href="#">
							<img src="src/images/icon_banner_facebook.png" class="vMiddle" />
						</a>
					</dt>
					<dt class="is-inline-block">
						<a href="#">
							<img src="src/images/icon_banner_tweet.png" class="vMiddle" />
						</a>
					</dt>
					<dt class="is-inline-block">
						<a href="#">
							<img src="src/images/icon_banner_youtube.png" class="vMiddle" />
						</a>
					</dt>
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
		<p class="is-size-4 has-text-centered"><?php echo $language["TOHOKUART_INFO"]; ?></p>
		<br />
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<br />
    </section>

	<section id="artist" class="container is-widescreen bgMainDanPattie">
		<div class="has-text-centered">
			<img src="src/images/pic-dan-pat.png" />
		</div>
		<h1 class="is-size-2 has-text-centered has-text-weight-bold">Dan Worrawech x Pattie ungsumalynn</h1>
		<p class="is-size-4 has-text-centered has-text-weight-bold">วรเวช ดานุวงศ์ และ อังศุมาลิน สิรภัทรศักดิ์เมธา<br />ชื่อเล่น : แดน และ แพทตี้</p>
		<div class="columns">
			<div class="column is-two-fifths has-text-right is-flex-mobile">
				<img src="src/images/icon_ig_black.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="src/images/vertical-line.png" />
			</div>
			<div class="column is-size-4">
				<p>นักร้อง, นัแแสดงม</p>
				<p>บล็อกเกอร์ที่มีชื่อเสียงคนหนึ่งของประเทศไทย</p>
			</div>
		</div>
		<p class="is-size-4 has-text-centered">
			ธีมของการท่องเที่ยวโทโฮคุ<br />
			แดนและแพ็ตตี้ เยียมชมโทโฮคุ และได้สัมผัสกับเสน่ห์ของโทโฮคุอย่างแท้จริง<br />
			แดนเป็นผู้สรุปสถานที่น่าสนใจของโทโฮคุ เป็นคลิปวีดีโอ 6 ตอนต่อไปนี้<br />
			อาหาร ศิลปะ การขนส่งผู้โดยสารหลายรูปแบบ SIT (Special Interest Tour) น้ำพุร้อน ธรรมชาติ
		</p>
		<br /><br />
	</section>

	<section id="artist-vdo" class="container is-widescreen bgsnow">
		<h2 class="is-size-4 has-text-weight-bold has-text-centered">คลิปการเดินทางท่องเที่ยว โทโฮคุ ของแดนและแพ็ตตี้</h2>
		<p class="is-size-5 has-text-centered">จะทำให้คุณรู้สึกราวกับว่ากำลังเดินทางอยู่ที่โทโฮคุ</p>
		<br />
		<div class="video-container">
			<iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
		</div>
		<br />
		<br />
	</section>

	<section id="googleMaps" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered">เส้นทางของการเดินทางของแดนและแพ็ตตี้</h1>
		<div class="has-text-centered"><img src="src/images/tips-head-line.png" /></div>
		<br />
		<div id="gmap" style="width: 100%;"></div>
		<br />
		<br />
	</section>

	<section id="location" class="container is-widescreen">
		<p class="is-size-4 has-text-centered">แดนและแพ็ตตี้ ได้รวบรวมเสน่ห์ต่าง ๆ ที่ได้สัมผัสจริงในโทโฮคุ<br />
			(อาโอโมริ อะคิตะ อิวาเตะ) เป็น 6 คลิปต่อไปนี้<br />
			ขอเชิญชมและแชร์คลิปวิดีโอเหล่านี้กับเพื่อนของคุณ
		</p>
		<div class="is-fullwidth location-vdo" style="height:220px; background-image:url('src/images/local_art_of_aomori.jpg');">
			<div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="is-fullwidth location-vdo" style="height:220px; background-image:url('src/images/local_food_of_aomori.jpg');">
			<div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="is-fullwidth location-vdo" style="height:220px; background-image:url('src/images/local_railway_of_akita.jpg');">
			<div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="is-fullwidth location-vdo" style="height:220px; background-image:url('src/images/local_culture_of_akita.jpg');">
			<div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="is-fullwidth location-vdo" style="height:220px; background-image:url('src/images/local_nature_of_iwate.jpg');">
			<div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="is-fullwidth location-vdo" style="height:220px; background-image:url('src/images/local_cultural_of_iwate.jpg');">
			<div class="vdo-youtube">
				<iframe width="280" height="180" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<br />
	</section>
	
	<section id="gallery" class="container is-widescreen">
		<h1 class="is-size-2 has-text-weight-bold has-text-centered">แกลเลอรี่ของแดนและแพ็ตตี้</h1>
		<p class="is-size-4 has-text-centered">ชมภาพถ่ายเบื้องหลังระหว่างการเดินทางอันเพลิดเพลินของ แดนและแพ็ตตี้</p>
		<br />
		<div class="columns">
			<div class="column">
				<a href="src/images/gallery/main1.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/main1.jpg" class="is-fullwidth" />
				</a>
			</div>
			<div class="column">
				<a href="src/images/gallery/main1.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/main1.jpg" class="is-fullwidth" />
				</a>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<a href="src/images/gallery/main1.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/main1.jpg" class="is-fullwidth" />
				</a>
			</div>
			<div class="column">
				<a href="src/images/gallery/main1.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="src/images/gallery/main1.jpg" class="is-fullwidth" />
				</a>
			</div>
		</div>
		<br />
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
	<script src="node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
	<script src="src/js/scripts.js?v=@VERSION"></script>
	
</body>

</html>