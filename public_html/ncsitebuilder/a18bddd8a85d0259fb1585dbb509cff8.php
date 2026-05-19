<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "DREEMCORP — Creative Studio & Venture Lab · George Dreemer"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "DREEMCORP is George Dreemer's creative studio and venture lab — the seat behind DataSafari, CryptoPandemic, and SkipSchoolMakeMoney. Clients include Amira Tahri, Najib Amhali, and Immersive Studios."); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "dreemcorp,george dreemer dreemcorp,george dreemer creative studio,george dreemer venture lab,george dreemer portfolio,amira tahri,najib amhali,immersive studios,berracuts,tajoela,92minerals,alistair overeem,dutch performante,numidia,coolsools,social media agency,video editing portfolio,personal branding,content creation,george dreemer founder"); ?>" />
				<meta property="og:site_name" content="George Dreemer — Data Scientist, Developer & Entrepreneur">
	
	<!-- Facebook Open Graph -->
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "DREEMCORP is George Dreemer's creative studio and venture lab — the seat behind DataSafari, CryptoPandemic, and SkipSchoolMakeMoney. Clients include Amira Tahri, Najib Amhali, and Immersive Studios."); ?>" />
					<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260519171032" type="text/javascript"></script>
	<script src="js/a18bddd8a85d0259fb1585dbb509cff8-bundle.js?ts=20260519171032" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260519171032" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a18bddd8a85d0259fb1585dbb509cff8-bundle.css?ts=20260519171032" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
<meta name="twitter:data2" content="Europe → Dubai"><link rel="shortcut icon" href="gallery/favicons/favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	window.useTrailingSlashes = false;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
	<!-- [ DREEMCORP ] -->
<link rel="canonical" href="https://georgedreemer.com/dreemcorp">
<meta property="og:url" content="https://georgedreemer.com/dreemcorp">
<meta property="og:title" content="DREEMCORP — Creative Studio & Venture Lab · George Dreemer">
<meta property="og:description"
    content="DREEMCORP is George Dreemer's creative studio and venture lab — the seat behind DataSafari, CryptoPandemic, and SkipSchoolMakeMoney. Clients include Amira Tahri, Najib Amhali, and Immersive Studios.">
<meta property="og:image" content="https://dreemcorp.com/images/landing/og-image.png">
<meta name="twitter:title" content="DREEMCORP — Creative Studio & Venture Lab · George Dreemer">
<meta name="twitter:description"
    content="DREEMCORP is George Dreemer's creative studio and venture lab — the seat behind DataSafari, CryptoPandemic, and SkipSchoolMakeMoney. Clients include Amira Tahri, Najib Amhali, and Immersive Studios.">
<meta name="twitter:image" content="https://dreemcorp.com/images/landing/og-image.png">	
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18bddd8a85d0259fb1585dbb509cff8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e41008b9f2b2135191fe2b8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a190ffc65f050099dde2a549cd23275c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a190ffc65f120088a7db44ab9902c25d" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/cc312fb075b5939bdd6009ed9a947c47_502x176_fit.png?ts=1779199837"></a></div></div></div><div id="a190ffc65f2a00ae90455118243745c2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a190ffc65f350085077a2dd8f2f5d6c8" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/05e486d9ea9d35f61ede8fdf94b705e3_560x294_fit.png?ts=1779199837"></a></div></div></div></div></div><div id="a19127dc957200cf4b59e37dbc6db4c5" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
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
					'class' => 'wb_this_page_menu_item active',
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
)); ?><div class="clearfix"></div></div></div></div><div id="a18bddd77e41011a36c87f4c78fe86c7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e41023aa5feaee335f02928" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4103c49bf902bb39b00279" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#ffffff;"><strong>YBI MEDIA+DREEMCORP</strong></span></h1>
</div></div></div></div></div><div id="a18bddd77e4104c7533e77d5ab204e8b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-4x_compressed-ts1661540570.png?ts=1779199837"></div></div></div></div></div></div></div><div id="wb_main_a18bddd8a85d0259fb1585dbb509cff8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4106a6da01016ade60bba6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e41071c7164cf5eee4b366e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e41081b51a68641f3044389" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(0,0,0,1);">EXPERIENCE </span></strong><span style="color:rgba(0,0,0,1);">AT A GLANCE</span></h1>
</div><div id="a18bddd77e41093c473602946aeaed71" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e410a37d55b4dab5e51d01b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e410bb87438c085d7298ef4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e410c260572ffd9eed63832" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e410e230eb5f9c8f374834e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:rgba(0,0,0,1);">Service</span></h2>
</div></div></div><div id="a18bddd77e410f4d22f93b9338cad3a8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" style="text-align: center;"><span style="color:rgba(0,0,0,1);">Working with the talented Younes Belguebli, I was able to create and curate social media content for incredible people and companies, such as Dennis Toppin, Amira Tahri, Najib Amhali, CoolSouls, TaJoela and many more. I had the privelege and pleasure to edit videos and photos, as well as create visuals for many amazing clients.</span></p>
</div></div></div><div id="a18bddd77e4110cf70e008fffcf62d1a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4111423313b28c01cb858e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e41138cff50c732c3a608e6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:rgba(255,255,255,1);">Video &amp; Graphics</span></h2>
</div></div></div><div id="a18bddd77e41144bc0654eefd0756ec6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Due to the diverse nature of content, I was able to innovate in my approach of video transitions and long form editing. Often getting footage that is hours long with the goal to scout the best moments into a cohesive story, with exciting custom-made transitions and fitting color correction. Most of all I am proud of the custom transitions I created.</span></p>
</div></div></div><div id="a18bddd77e411575380e36a3e8902bcc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4116d7ef49b16e816c7276" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e41183d846abbde3d808102" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2">Personal Branding</h2>
</div></div></div><div id="a18bddd77e4119d0a9730e032725e899" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" style="text-align: center;">In certain cases I was tasked with creating a consistent branding image of a client, such as with the creation of, The Wonder Girl, aka Amira Tahri's YouTube channel! Exciting projects like this motivated me to push the limits of my capabilities to create captivating outros, logo's, covers, which all have a familiar pattern to them for a cohesive online persona. </p>
</div></div></div></div></div></div></div><div id="a18bddd77e411a0a54f4cf6b4a06d721" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e411b7d69e1ef48460c5de8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e411cf447cd8cd76ac80c65" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e411e4840947832f40c079a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:rgba(0,0,0,1);">Service</span></h2>
</div></div></div><div id="a18bddd77e411f525759c1137660873b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" style="text-align: center;"><span style="color:rgba(0,0,0,1);">Working with the talented Younes Belguebli, I was able to create and curate social media content for incredible people and companies, such as Dennis Toppin, Amira Tahri, Najib Amhali, CoolSouls, TaJoela and many more. I had the privelege and pleasure to edit videos and photos, as well as create visuals for many amazing clients.</span></p>
</div></div></div><div id="a18bddd77e41209bf140015cac68168c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e41217c95c600705452e4eb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4123c732593d0c2093d5d1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:rgba(255,255,255,1);">Video</span></h2>
</div></div></div><div id="a18bddd77e4124c284039dbccd9e3cba" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Due to the diverse nature of content, I was able to innovate in my approach of video transitions and long form editing. Often getting footage that is hours long with the goal to scout the best moments into a cohesive story, with exciting custom-made transitions and fitting color correction. Most of all I am proud of the custom transitions I created.</span></p>
</div></div></div><div id="a18bddd77e4125382459b99c2b7d09f0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e412628319d963157e36e83" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4128f35727b9477701dcd3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2">Persona Branding</h2>
</div></div></div><div id="a18bddd77e4129a3d8efdbac947d5cac" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" style="text-align: center;">In certain cases I was tasked with creating a consistent branding image of a client, such as with the creation of, The Wonder Girl, aka Amira Tahri's YouTube channel! Exciting projects like this motivated me to push the limits of my capabilities to create captivating outros, logo's, covers, which all have a familiar pattern to them for a cohesive online persona. </p>
</div></div></div></div></div><div id="a18bddd77e412aa5abe3ac4cf611c3c2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(0,0,0,1);">ABILITIES </span></strong><span style="color:rgba(0,0,0,1);">AT A GLANCE</span></h1>
</div><div id="a18bddd77e412b48d19c50103ee4cd56" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e412c7319c0f817bd8dfcd1" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/b313435b82b6c85dbc96f0322aca03d2_1580x322_fit.png?ts=1779199838"></div></div></div></div></div><div id="a18bddd77e412defd545388db97487af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e412e400e001469e07037ac" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(0,0,0,1);">VISUAL PORTFOLIO</span></strong></h1>
</div></div></div><div id="a18bddd77e412fad7e3a21317b233d2d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e41304713c9b4a943518508" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong><span style="color:rgba(0,0,0,1);">Amira Tahri</span></strong></h2>
</div><div id="a18bddd77e41316b3fde718f33719128" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">YouTube Branding Pack: Profile Picture, Cover &amp; Outro</h3>
</div><div id="a18bddd77e4200f1ad4082e5ff0ff6f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e4201cbd2fc8a72c84db740" class="wb_element wb_element_picture wb-prevent-layout-click" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/613b45efa1b796c22d9b594032f9e554_fit.png?ts=1779199838"><script type="text/javascript">
					$("#a18bddd77e4201cbd2fc8a72c84db740").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								var lightBox = new window.PhotoSwipeLightbox({
									appendToEl: $('.wb_pswp').get(0),
									bgOpacity: 1,
									dataSource: [{
										src: this.src,
										width: this.width,
										height: this.height,
										msrc: this.src
									}],
									pswpModule: window.PhotoSwipe,
									index: 0,
								});
								lightBox.init();
								lightBox.loadAndOpen(0);
								$("#a18bddd77e4201cbd2fc8a72c84db740").data("clicked", false);
							};
							img.src = "gallery\/at-pfp-alt-showcase-ts1662224568.png";
						}
					});
				</script></div></div></div><div id="a18bddd77e42022b604e6de2659ddc4f" class="wb_element wb_element_picture wb-prevent-layout-click" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/376fea7faf8578a921b97aaa21b20c54_1580x888_fit.png?ts=1779199840"><script type="text/javascript">
					$("#a18bddd77e42022b604e6de2659ddc4f").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								var lightBox = new window.PhotoSwipeLightbox({
									appendToEl: $('.wb_pswp').get(0),
									bgOpacity: 1,
									dataSource: [{
										src: this.src,
										width: this.width,
										height: this.height,
										msrc: this.src
									}],
									pswpModule: window.PhotoSwipe,
									index: 0,
								});
								lightBox.init();
								lightBox.loadAndOpen(0);
								$("#a18bddd77e42022b604e6de2659ddc4f").data("clicked", false);
							};
							img.src = "gallery\/at-cover1shadow+socialmedia-min (1)-ts1662224566.png";
						}
					});
				</script></div></div></div></div></div><div id="a18bddd77e42033decdbede8510b3e79" class="wb_element wb_element_picture wb-prevent-layout-click" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/6a3b76c160d80c7d5c8c4b43a4c7fa6f_fit.png?ts=1779199840"><script type="text/javascript">
					$("#a18bddd77e42033decdbede8510b3e79").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								var lightBox = new window.PhotoSwipeLightbox({
									appendToEl: $('.wb_pswp').get(0),
									bgOpacity: 1,
									dataSource: [{
										src: this.src,
										width: this.width,
										height: this.height,
										msrc: this.src
									}],
									pswpModule: window.PhotoSwipe,
									index: 0,
								});
								lightBox.init();
								lightBox.loadAndOpen(0);
								$("#a18bddd77e42033decdbede8510b3e79").data("clicked", false);
							};
							img.src = "gallery\/dxyz-ybisc-at-bpw-min-ts1662224964.png";
						}
					});
				</script></div></div></div><div id="a18bddd77e42049e9ebff3ec1db49c46" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/GBXdeckga3Y?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42053921f5ae59d860747d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">YouTube (Long form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e420653af8d680f1756fe00" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e42077155f8c084d9d0a181" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Amira Tahri x Najib Amhali</h4>
</div><div id="a18bddd77e4208c456d404adc0fe5db5" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/CwlsSpUbkAY?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e420982b3fdeefb370d6001" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Amira Tahri x Numidia</h4>
</div><div id="a18bddd77e420ac3e46af3836b7d1e54" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/eMF4sVCBfhI?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e420b24b55b7fa8db747a35" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Amira Tahri x DutchPerformante</h4>
</div><div id="a18bddd77e420cb7cc4c56c0b3502b31" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/OX_D6qf0a_I?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e420d559c54c17e823ce50e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">TikTok/IG Reels (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e420e53c2bfb501158336ca" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e420f8d28ad25b24c897b13" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><div align="center">
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/CLw5XlfJbhQ/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/CLw5XlfJbhQ/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewbox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/CLw5XlfJbhQ/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by AMIRA TAHRI🇳🇱🇲🇦 (@amiratahriofficial)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
</div></div></div><div id="a18bddd77e4210ba77f5b3c2a54e97b4" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/Uzs-dfv_Tps?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e421101445337a2a3517ece" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/_B-E_FRqaU0?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e4212e6a4001d7e6497d408" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Amira Tahri x DutchPerformante</h4>
</div><div id="a18bddd77e4213de4691d27718931dfa" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/6HkURhlXpQc?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42148933fb780cb69f24a3" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/mVRCOktSokY?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42153cf86ce7ba84bcb2e9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong><span style="color:rgba(0,0,0,1);">Immersive Studios</span></strong></h2>
</div><div id="a18bddd77e4216439cd2c42b441f216a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">Instagram (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e4217e8f6f285e970929a99" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e4218b6e2c3778148613a22" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Immersive Studios x Ta Joela</h4>
</div><div id="a18bddd77e421921d674599a2f70af7d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Fun Fact: George's first time implementing handmade transitions!<br>
<br>
Such as the EQUALITE logo in one frame into another.</span></h1>
</div><div id="a18bddd77e421a25e41e09835ebc88fc" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><div align="center">
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/COfy4XHBOa0/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/COfy4XHBOa0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewbox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/COfy4XHBOa0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Immersive Studio’s (@immersive.studios)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
</div></div></div><div id="a18bddd77e421b2b30c823df7ae31977" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Immersive Studios Booty Class AD</h4>
</div><div id="a18bddd77e421cf09e37deb7f6dd740e" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><div align="center">
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CPJfbcdh2ad/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CPJfbcdh2ad/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewbox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CPJfbcdh2ad/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Immersive Studio’s (@immersive.studios)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
</div></div></div><div id="a18bddd77e421d59763d26639ab57ef0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#000000">CoolSouls</font></h2>
</div><div id="a18bddd77e421e0d9113c77732fc800b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">TikTok (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e421f169b9b720813a54367" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by George Dreemer of DREEMCORP.</span></h1>
</div><div id="a18bddd77e4220a2e6ea59ea2ebfb9dd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Photoshoot BTS</h4>
</div><div id="a18bddd77e42213c6ec47e16bcbbb241" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/A5b2Tu-CbDU?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42225fa076c9c953c4b251" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/Xp_beKsBz_g?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42239d65e83d75a34cd5fb" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/rB6t9efuKr8?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e4224f756dcf93f8566d412" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/A9TuOx51EK8?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e4225cda2263f0a75b6d326" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/DQESdVCpVnA?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e4226160f016b3947fd0ac4" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/olmoByPT39w?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42272f64cca50c2ad86837" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#000000">92Minerals</font></h2>
</div><div id="a18bddd77e4228ddc2faf10672c6aa9c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">Instagram (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e4229b759194396ed58fb7c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e422a961750fbe8da8ace8b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">92Minerals x Ertugrul Bayrak<br>
"Ramadan Special" AD</h4>
</div><div id="a18bddd77e422bf38361bb6fd27f0bb6" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><div align="center">

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CNmFkKVlOY5/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CNmFkKVlOY5/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewbox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CNmFkKVlOY5/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Sea Moss, Chaga (SUPERFOOD) (@92.minerals)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</div></div></div><div id="a18bddd77e422f535693ea770e629b87" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#000000">Nabil Haryouli</font></h2>
</div><div id="a18bddd77e4230081969b9051e02b8c1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">IG Reels (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e42319196836f78c5a80dae" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e4232a05917b4fecc72f7c2" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/eayZttGY4E0?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e4233c42a7b0f3df831d0ba" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/toM1KkRnVyI?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42343866caea4cf9d9f7c6" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/uP59xbGe4Pw?controls=1" frameborder="0"></iframe></div><div id="a18bddd77e42353080a1ddf697d4ab20" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#000000">BerraCuts Barbershop</font></h2>
</div><div id="a18bddd77e42363ab32f98b2b0a63c55" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">Instagram (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e42376f2cb732d2a54f3571" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e4238f1f5d988f2532bf02a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">Video AD</h4>
</div><div id="a18bddd77e42391bf0a819b2bfc6bd81" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><div align="center">

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/COpu2ygDhkx/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/COpu2ygDhkx/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewbox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/COpu2ygDhkx/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by ʙᴇʀʀᴀᴄᴜᴛs ʙᴀʀʙᴇʀsʜᴏᴘ 📍 (@berracuts.barbershop)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</div></div></div><div id="a18bddd77e423aa03da5923412b3933b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#000000">FitnessFloors.nl</font></h2>
</div><div id="a18bddd77e423b5408b4db7a608e9234" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">Instagram (Short form):<br>
Cutting, Editing, Color Correction &amp; SFX.</h3>
</div><div id="a18bddd77e423cebf51dac4ad7265121" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom11" style="text-align: center;"><span style="color:rgba(71,71,71,1);">Shot by Younes Belguebli of YBI MEDIA.</span></h1>
</div><div id="a18bddd77e4300f9289db9dcb4986772" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom10" style="text-align: center;">FitnessFloors.nl x SinCity Gym<br>
Video AD</h4>
</div><div id="a18bddd77e4301c2bf371b199fdf9628" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><div align="center">

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CPpvicZllW0/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CPpvicZllW0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewbox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CPpvicZllW0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Fitnessfloor.nl (@fitnessfloor.nl)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</div></div></div></div></div><div id="a18bddd77e4302540cbd295033e47fcd" class="wb_element" data-plugin="CustomHtml" style=" overflow: hidden;"><div style="width: 100%; height: 100%; overflow-y: auto;"><style>
html, body {
   max-width: 100%;
   overflow-x: hidden;
}
</style>
</div></div></div></div></div></div><div id="a18bddd77e43032e7a30f27773715fc7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-wb-4x-min-ts1662049006.png?ts=1779199840"></div></div></div></div></div><div id="wb_footer_a18bddd8a85d0259fb1585dbb509cff8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a28f644d700467a092774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e4a29482ca99ceaa3d4d1bc" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a18bddd77e4a2abb12b0e1f6fa5cbe90" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a2bcd8ea946907bd71b2d" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
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
					'class' => 'wb_this_page_menu_item active',
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
</div></div></div><div id="a18bddd77e4b00f630a15cb11ea05cad" class="wb_element wb_element_picture" data-plugin="Picture" title="George Dreemer's Official Website"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="George Dreemer's Official Website" src="gallery_gen/6742db93b980c975748be6c57a3e7e48_66x70_fit.png?ts=1779199840"></a></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
