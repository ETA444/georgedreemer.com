<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Introducing DataSafari! | George Dreemer's Blog"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "blog/datasafari/introduction"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "George Dreemer,entrepreneur blog,tech innovations,creative projects,professional portfolio,interactive CV,web development insights,data science analysis,marketing strategies,multimedia editing techniques,entrepreneurship insights,technology blog"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Introducing DataSafari! | George Dreemer's Blog"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "blog/datasafari/introduction"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="__wb_curr_url__" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260517162254" type="text/javascript"></script>
	<script src="js/a19104d04f1200a1171ff5a1dd1fd06a-bundle.js?ts=20260517162254" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260517162254" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a19104d04f1200a1171ff5a1dd1fd06a-bundle.css?ts=20260517162254" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="shortcut icon" href="gallery/favicons/favicon.ico" type="image/x-icon"><meta name="google-site-verification" content="" /><script type="text/javascript">
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
	<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>	
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a19104d04f1200a1171ff5a1dd1fd06a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d0512400ff2dc6e92923af87bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d051240571975ecc966ea8443b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d0512500288e3c4edf77a96677" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/cc312fb075b5939bdd6009ed9a947c47_502x176_fit.png?ts=1779024185"></a></div></div></div><div id="a19104d05126040a670b38a8c5284d27" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d05125014ed45f334c8ea6c1d6" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/05e486d9ea9d35f61ede8fdf94b705e3_560x294_fit.png?ts=1779024185"></a></div></div></div></div></div><div id="a19127dc957600a4376ed4997f7da465" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
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
					'href' => 'academic-portfolio',
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
			'class' => '',
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
)); ?><div class="clearfix"></div></div></div></div><div id="a19104d05126018b3228ecfcd9cd526f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d0512401c0bfbbfad71c87d06f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a19104d05127055d1222525eecdd963b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-4x_compressed-ts1661540570.png?ts=1779024186"></div></div></div></div></div></div></div><div id="wb_main_a19104d04f1200a1171ff5a1dd1fd06a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d78d3b0097963211a262779bd2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d78d3f002e695a03ab8a298068" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d78d43007ed9b4ff82d4a4e885" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d78d460027a7f567fcc04c10da" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19104d78d4a001c177b828023f81622" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d78d4c0046c51c4d77196cb42c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom25" style="text-align: left;"><span style="color:rgba(0,0,0,1);">Diamonds are a girl's best friends</span></h2>
</div><div id="a19104d78d5000dd1332c0a4e7f18bf4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom24">Add the main advantages of your business that make it unique and the best. Add text why customers have to choose your products or services and what benefits they will get after the product is purchased. Write your own text, style it and press Done.</p>

<p class="wb-stl-custom24"> </p>

<p class="wb-stl-custom24">Insert a long beautiful story about your business and how it has started. Tell about your team members and write an article about the Founder of this business. Insert your own photos, so customers can learn about you more and trust you.</p>

<p class="wb-stl-custom24"> </p>

<p class="wb-stl-custom24">Insert a long beautiful story about your business and how it has started. Tell about your team members and write an article about the Founder of this business. Insert your own photos, so customers can learn about you more and trust you.</p>

<p class="wb-stl-custom24"> </p>

<p class="wb-stl-custom24">Insert a long beautiful story about your business and how it has started. Tell about your team members and write an article about the Founder of this business. Insert your own photos, so customers can learn about you more and trust you.</p>

<p class="wb-stl-custom24"> </p>

<p class="wb-stl-custom24">Insert a long beautiful story about your business and how it has started. Tell about your team members and write an article about the Founder of this business. Insert your own photos, so customers can learn about you more and trust you.</p>

<p class="wb-stl-custom24"> </p>

<p class="wb-stl-custom24">Add the main advantages of your business that make it unique and the best. Add text why customers have to choose your products or services and what benefits they will get after the product is purchased. Write your own text, style it and press Done.</p>
</div></div></div><div id="a19104d78d5700dd759bc5aa5722a204" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d78d5e00d257d32f0fe73c55ab" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d78d600042a0c5aa03b13d22f2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom24">Follow us</p>
</div><div id="a19104d78d66008942f6aed00c990fd7" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19104d78d6b00982c5da0b4fafbe4e3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d78d6e00998781be17d69aba55" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a19104d78d72005860eec18833feb29a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/logo_twitter%2017.50.23-ts1699948790.svg?ts=1779024186"></div></div></div><div id="a19104d78d770072e347e91135903f39" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div></div></div><div id="a19104d78d9600cb4653200776581fb9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a19104d78d9900a812ba100d3ade6cfd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom25">Another One</h2>
</div><div id="a19104d78d9d00724a03d22bf44d1472" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19104d78da0004830380390bb21190d" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a19104d78da0004830380390bb21190d");
					var lib = new GalleryLib({"id":"a19104d78da0004830380390bb21190d","height":240,"type":"slideshow","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/9c27828c53a20bed562a45c5c042e510_711x474_fill.jpg","src":"gallery_gen\/e1bc8df28f5622092dc2a9c07a0cfdb2_fit.jpg?ts=1779024186","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c9781615f0cce00421f313240692cb6a_711x474_fill.jpg","src":"gallery_gen\/85f3625711da223c42bb82834be9fae7_fit.jpg?ts=1779024186","width":1200,"height":800,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/9a360d3f58d67e4ac5cc5745ae34f04c_711x474_fill.jpg","src":"gallery_gen\/7b6a3abd10d0cd87dcab02e15d0a2655_fit.jpg?ts=1779024186","width":1200,"height":800,"title":"","link":null,"description":"","address":""}],"border":{"border":"0px none #000000"},"padding":0,"thumbWidth":290,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":true,"controlsArrow":"circles","controlsArrowSize":17,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"none","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a19104d78da400c7c1d754054e08d55b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19104d78da800da86ce6cd8cb1fa1ef" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20"><strong>DataSafari</strong></p>
</div><div id="a19104d78dac009c9d33c16ce440cb91" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom21">Introducing DataSafari!</h2>
</div><div id="a19104d78db10037c7b66f518e64d43f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22">Replace this text with information about you and your business or add information that will be useful for your customers.</p>
</div><div id="a19104d78db60070ac53bea9cd6c5294" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Read more</span></a></div></div></div></div></div></div></div></div></div><div id="a19104d78dcb00da56f5da9215a03a4a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-wb-4x-min-ts1662049006.png?ts=1779024186"></div></div></div></div></div></div></div><div id="wb_footer_a19104d04f1200a1171ff5a1dd1fd06a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a28f644d700467a092774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e4a29482ca99ceaa3d4d1bc" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a18bddd77e4a2abb12b0e1f6fa5cbe90" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a2bcd8ea946907bd71b2d" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
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
					'href' => 'academic-portfolio',
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
			'class' => '',
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
</div></div></div><div id="a18bddd77e4b00f630a15cb11ea05cad" class="wb_element wb_element_picture" data-plugin="Picture" title="George Dreemer's Official Website"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="George Dreemer's Official Website" src="gallery_gen/6742db93b980c975748be6c57a3e7e48_66x70_fit.png?ts=1779024186"></a></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
