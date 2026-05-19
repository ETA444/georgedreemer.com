<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom Maintenance page"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Data scientist, developer, and entrepreneur. Creator of DataSafari, founder of CryptoPandemic. MSc in Marketing Analytics & Data Science, University of Groningen. - Custom Maintenance page"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "george dreemer,data scientist,python developer,entrepreneur,web3 marketer,solana analytics,datasafari,cryptopandemic,dreemcorp,open source python,machine learning engineer,data engineer,marketing analytics,university of groningen,msc data science,dubai data scientist,data science portfolio,ml portfolio,georgedreemer,Custom Maintenance page"); ?>" />
			<meta name="robots" content="noindex" />
			<meta property="og:site_name" content="George Dreemer — Data Scientist, Developer & Entrepreneur">
	
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom Maintenance page"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Data scientist, developer, and entrepreneur. Creator of DataSafari, founder of CryptoPandemic. MSc in Marketing Analytics & Data Science, University of Groningen. - Custom Maintenance page"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : "{{base_url}}gallery_gen/f119e2be82f43b8529124ed91dddcd0e_fit.png"); ?>" />
				<meta property="og:url" content="__wb_curr_url__" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260519171032" type="text/javascript"></script>
	<script src="js/a18bddd8aa6701458d7b22ab910322e9-bundle.js?ts=20260519171032" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260519171032" rel="stylesheet" type="text/css" />
	<link href="css/a18bddd8aa6701458d7b22ab910322e9-bundle.css?ts=20260519171032" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?> wb-maintenance-page="true"><h1 id="default_empty_maintenance_h1" style="display: none;">This website is currently down for maintenance.</h1><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_main_a18bddd8aa6701458d7b22ab910322e9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
</style></div>{{hr_out}}</body>
</html>
