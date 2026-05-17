<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "George Dreemer’s Blog: Stories Behind the Motion"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Welcome to George Dreemer's blog! Read an engaging showcase of various projects and activities that he has been up to recently."); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "George Dreemer,entrepreneur blog,tech innovations,creative projects,professional portfolio,interactive CV,web development insights,data science analysis,marketing strategies,multimedia editing techniques,entrepreneurship insights,technology blog"); ?>" />
				<meta property="og:site_name" content="George Dreemer — Data Scientist, Developer & Entrepreneur">
	
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "George Dreemer’s Blog: Stories Behind the Motion"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Welcome to George Dreemer's blog! Read an engaging showcase of various projects and activities that he has been up to recently."); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : "{{base_url}}gallery_gen/f119e2be82f43b8529124ed91dddcd0e_fit.png"); ?>" />
				<meta property="og:url" content="__wb_curr_url__" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260517200729" type="text/javascript"></script>
	<script src="js/a19104b295bb0096958c9d452e84c121-bundle.js?ts=20260517200729" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260517200729" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a19104b295bb0096958c9d452e84c121-bundle.css?ts=20260517200729" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     SECTION 1 — GLOBAL
     Settings → Meta Tags (site-wide, always present)
     ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<meta name="author" content="George Dreemer">
<meta name="robots" content="index, follow">
<meta name="subject" content="Personal portfolio and brand hub of George Dreemer">
<meta name="classification" content="Portfolio">
<meta name="category" content="Technology, Data Science, Entrepreneurship">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta name="language" content="English">
<meta name="theme-color" content="#000000">
<meta name="color-scheme" content="dark light">
<meta name="format-detection" content="telephone=no">
<meta property="og:type" content="profile">
<meta property="og:site_name" content="George Dreemer">
<meta property="og:locale" content="en_US">
<meta property="profile:first_name" content="George">
<meta property="profile:last_name" content="Dreemer">
<meta property="profile:username" content="georgedreemer">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@444eta">
<meta name="twitter:creator" content="@444eta">
<meta name="twitter:label1" content="Ventures">
<meta name="twitter:data1" content="DataSafari · CryptoPandemic · DREEMCORP">
<meta name="twitter:label2" content="Based in">
<meta name="twitter:data2" content="Europe → Dubai"><link rel="shortcut icon" href="gallery/favicons/favicon.ico" type="image/x-icon"><meta name="google-site-verification" content="" /><script type="text/javascript">
  (function (f, b) { if (!b.__SV) { var e, g, i, h; window.mixpanel = b; b._i = []; b.init = function (e, f, c) { function g(a, d) { var b = d.split("."); 2 == b.length && ((a = a[b[0]]), (d = b[1])); a[d] = function () { a.push([d].concat(Array.prototype.slice.call(arguments, 0))); }; } var a = b; "undefined" !== typeof c ? (a = b[c] = []) : (c = "mixpanel"); a.people = a.people || []; a.toString = function (a) { var d = "mixpanel"; "mixpanel" !== c && (d += "." + c); a || (d += " (stub)"); return d; }; a.people.toString = function () { return a.toString(1) + ".people (stub)"; }; i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split( " "); for (h = 0; h < i.length; h++) g(a, i[h]); var j = "set set_once union unset remove delete".split(" "); a.get_group = function () { function b(c) { d[c] = function () { call2_args = arguments; call2 = [c].concat(Array.prototype.slice.call(call2_args, 0)); a.push([e, call2]); }; } for ( var d = {}, e = ["get_group"].concat( Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]); return d; }; b._i.push([e, f, c]); }; b.__SV = 1.2; e = f.createElement("script"); e.type = "text/javascript"; e.async = !0; e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"; g = f.getElementsByTagName("script")[0]; g.parentNode.insertBefore(e, g); } })(document, window.mixpanel || []);
 
// Near entry of your product, init Mixpanel
mixpanel.init("", {
  api_host: "https://api-eu.mixpanel.com",
  debug: true,
  track_pageview: true,
  persistence: "localStorage",
  record_sessions_percent: 100, //records 100% of all sessions
  record_heatmap_data: true,
});
</script>
	<script type="text/javascript">
	window.useTrailingSlashes = false;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a19104b295bb0096958c9d452e84c121" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104b297f900cfb56a18a542a39a07" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104b297fb00f099e2b20322236084" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104b297fb013ebeec25a5fc6d0d38" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/cc312fb075b5939bdd6009ed9a947c47_502x176_fit.png?ts=1779037653"></a></div></div></div><div id="a19104b297fc05c7503b1531936ef786" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104b297fb02611e7f82618ef0ab6b" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/05e486d9ea9d35f61ede8fdf94b705e3_560x294_fit.png?ts=1779037653"></a></div></div></div></div></div><div id="a19127dc957501172ca5b5acb76d0e61" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 1,
			'href' => '{{base_url}}',
			'name' => 'Home',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => null,
			'name' => 'Work',
			'class' => '',
			'children' => array(
				(object) array(
					'id' => 4,
					'href' => 'https://www.datasafari.co',
					'target' => '_blank',
					'name' => 'DataSafari',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => 5,
					'href' => 'skipschoolmakemoney',
					'name' => 'SSMM',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => 6,
					'href' => 'thoughtbubble',
					'name' => 'thoughtbubble',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => 7,
					'href' => 'dreemcorp',
					'name' => 'DREEMCORP',
					'class' => '',
					'children' => array()
				)
			)
		),
		(object) array(
			'id' => null,
			'name' => 'Education',
			'class' => '',
			'children' => array(
				(object) array(
					'id' => 8,
					'href' => 'stack',
					'name' => 'Academic Portfolio',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => null,
					'name' => 'Recognitions',
					'class' => '',
					'children' => array()
				)
			)
		),
		(object) array(
			'id' => 2,
			'href' => 'blog',
			'name' => 'Blog',
			'class' => 'wb_this_page_menu_item active',
			'children' => array()
		),
		(object) array(
			'id' => 3,
			'href' => '#contacts',
			'name' => 'Contact',
			'class' => '',
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div></div></div><div id="a19104b297fb045c162416e4f478d746" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104b297f901a71a995e3f350db093" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a19104b297fc07bdcf309e0864388204" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-4x_compressed-ts1661540570.png?ts=1779037653"></div></div></div></div></div></div></div><div id="wb_main_a19104b295bb0096958c9d452e84c121" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104b297f90363b4cd601e1b565b6a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104b297f904892dab545f57437828" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104b297f9050f25c8f41d046b04e2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(0,0,0,1);">STORIES </span></strong><span style="color:rgba(0,0,0,1);">BEHIND THE MOTION</span></h1>
</div><div id="a19104b297fb05dc68183c7c5d8727d7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:#000000;">Welcome to the blog! Read an engaging showcase of various projects and activities that I have been up to recently. I have set up a comment section under each article, I would love to hear your thoughts and feedback!</span></p>
</div><div id="a19104b297fc086e9e543fe925ead9dd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a19104b48f810001bdd7baa0a856ad31" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104b48f860005ad978b00eb5db909" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104b48f860005ad978b00eb5db909");
					var lib = new GalleryLib({"id":"a19104b48f860005ad978b00eb5db909","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104b48f8e00585d647b6b69f4a09c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104b48f920073bceb993213b77787" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104b48f9700e185820b9ccf4955d7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104b48f9d0088513c4ad0e14ce3e3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104b48fa3000fe5af23bce5bb9988" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div><div id="a19104ba977d001901553a1a29773f1a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104ba977f002ad981241a4411c128" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104ba977f002ad981241a4411c128");
					var lib = new GalleryLib({"id":"a19104ba977f002ad981241a4411c128","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104ba978400e0773dce9e5eaa9d07" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104ba978700e15a2c4742f022a848" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104ba978b00d2ad5f31badaf8e32b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104ba978e0024c3086e09aa911d4c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104ba979200ae7315c5277a12af00" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div><div id="a19104bb32b1000dfdf69202552d18a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104bb32b400d06aa67ecbd27c06f2" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104bb32b400d06aa67ecbd27c06f2");
					var lib = new GalleryLib({"id":"a19104bb32b400d06aa67ecbd27c06f2","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104bb32b8005c2b247dd4a1f48ded" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104bb32bb00fbcf6987b56d34bc92" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104bb32bf007d6fd5b01d97d24f77" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104bb32c300ff0449a2127a82b7d1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104bb32c600251cd4bb1e46ec01b7" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div><div id="a19104bb4bee006940c597d054828a8d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104bb4bf100f13ff07ebd7813609e" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104bb4bf100f13ff07ebd7813609e");
					var lib = new GalleryLib({"id":"a19104bb4bf100f13ff07ebd7813609e","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104bb4bf500aaab269cbc9b50f653" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104bb4bf900559122b750c7dd0cc4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104bb4c0100295d3c5a8419f625b5" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104bb4c0500fd97e90a63f260a0a8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104bb4c0900bd65822eec882abaab" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div><div id="a19104bc8f8b00575db540f39fe34453" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104bc8f8d005841373af64a256e09" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104bc8f8d005841373af64a256e09");
					var lib = new GalleryLib({"id":"a19104bc8f8d005841373af64a256e09","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104bc8f9300c76f68bcb9acf1866d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104bc8f9600f158eb744e7f3392a3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104bc8f9c00f0b83e643cb5b6e874" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104bc8fa000165979bc6dd9f42008" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104bc8fa500afc2a1e0f0da200088" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div><div id="a19104bca8c00062027e5fc87f9659fa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104bca8c400fd343211bc6efbd046" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104bca8c400fd343211bc6efbd046");
					var lib = new GalleryLib({"id":"a19104bca8c400fd343211bc6efbd046","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779037654","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104bca8c80041164c53ad62248bbb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104bca8cb00eaaf930ece653aa5fd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104bca8d00009abf409d72047e00a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104bca8d3002b6a2df2613f4a3533" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104bca8d8005ef6ab04998e6c421e" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div></div></div></div></div><div id="a19104b297fc0477f19b8fa3c8b661c0" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-wb-4x-min-ts1662049006.png?ts=1779037654"></div></div></div></div></div><div id="wb_footer_a19104b295bb0096958c9d452e84c121" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a28f644d700467a092774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e4a29482ca99ceaa3d4d1bc" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a18bddd77e4a2abb12b0e1f6fa5cbe90" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a2bcd8ea946907bd71b2d" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 9,
			'href' => '{{base_url}}',
			'name' => 'Home',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => null,
			'name' => 'Education',
			'class' => '',
			'children' => array(
				(object) array(
					'id' => 12,
					'href' => 'stack',
					'name' => 'Academic Portfolio',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => null,
					'name' => 'Recognitions',
					'class' => '',
					'children' => array()
				)
			)
		),
		(object) array(
			'id' => null,
			'name' => 'Work',
			'class' => '',
			'children' => array(
				(object) array(
					'id' => 13,
					'href' => 'https://www.datasafari.dev',
					'target' => '_blank',
					'name' => 'DataSafari',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => 14,
					'href' => 'skipschoolmakemoney',
					'name' => 'SSMM',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => 15,
					'href' => 'thoughtbubble',
					'name' => 'thoughtbubble',
					'class' => '',
					'children' => array()
				),
				(object) array(
					'id' => 16,
					'href' => 'dreemcorp',
					'name' => 'DREEMCORP',
					'class' => '',
					'children' => array()
				)
			)
		),
		(object) array(
			'id' => 10,
			'href' => 'blog',
			'name' => 'Blog',
			'class' => 'wb_this_page_menu_item active',
			'children' => array()
		),
		(object) array(
			'id' => 11,
			'href' => '#contacts',
			'name' => 'Contact',
			'class' => '',
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div></div></div><div id="a18bddd77e4a2c6aeed0be64266481ff" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a2d6f09a042a1d1d71e54" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a18bddd77e4a2e5b543facb3feeac864" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a2fe57f7708250a5f3d45" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;">Thank you for taking the time to check out my portfolio.<br>
- George</p>
</div><div id="a19128c48c8900fe1aac133c014f46be" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;">Thank you for taking the time to check out my portfolio.<br>
- George</p>
</div><div id="a19128c168ff0056a1c5065f830e628f" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a18bddd77e4a31423e1d18279dd263c7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">Related Domains:</p>

<p class="wb-stl-footer" style="text-align: center;"><a href="https://www.dreemer.xyz">dreemer.xyz</a></p>

<p class="wb-stl-footer" style="text-align: center;"><a href="https://www.georgedreemer.com">georgedreemer.com</a></p>

<p class="wb-stl-footer" style="text-align: center;"><a href="https://www.dreemcorp.com">dreemcorp.com</a></p>

<p class="wb-stl-footer" style="text-align: center;"><a href="https://www.skipschoolmakemoney.com">skipschoolmakemoney.com</a></p>

<p class="wb-stl-footer" style="text-align: center;"><a data-_="Link" href="https://www.datasafari.dev" target="_blank" title="DataSafari Official Website">datasafari.dev</a></p>

<p class="wb-stl-footer" style="text-align: center;"><a data-_="Link" href="https://www.cryptopandemic.com" target="_blank" title="CryptoPandemic Official Website">cryptopandemic.com</a></p>

<p class="wb-stl-footer" style="text-align: center;"><a data-_="Link" href="anabolickmusick.com" target="_blank" title="anabolic musick's official website">anabolickmusick.com</a></p>
</div><div id="a18bddd77e4a320a360cd08aa5891d23" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;"><span style="color:rgba(255,255,255,1);">© 2024 <a href="https://www.georgedreemer.com">G</a><a href="https://www.dreemer.xyz">eorge Dreemer</a></span></p>
</div></div></div><div id="a18bddd77e4b00f630a15cb11ea05cad" class="wb_element wb_element_picture" data-plugin="Picture" title="George Dreemer's Official Website"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="George Dreemer's Official Website" src="gallery_gen/6742db93b980c975748be6c57a3e7e48_66x70_fit.png?ts=1779037654"></a></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div><style>
.image-height-mod {
height: 100%;
}
</style>
<div class="wb_pswp" tabindex="-1" role="dialog" aria-hidden="true">
</div>
</div>{{hr_out}}</body>
</html>
