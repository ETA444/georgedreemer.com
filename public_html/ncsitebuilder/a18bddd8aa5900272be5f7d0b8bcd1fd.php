<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
	window._spDefer = {
		queue: [],
		ready: false,
		add: function(fn) {
			if (this.ready) { fn(); }
			else { this.queue.push(fn); }
		},
		done: function() {
			this.ready = true;
			var fns = this.queue;
			this.queue = [];
			for (var i = 0; i < fns.length; i++) { fns[i](); }
		}
	};
	</script>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom 404 page"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Custom 404 page"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Custom 404 page"); ?>" />
			<meta name="robots" content="noindex" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom 404 page"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Custom 404 page"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="__wb_curr_url__" />
		<!-- Facebook Open Graph end -->

			<?php if (empty($wbWhitelabel)): ?>	<meta name="generator" content="Site.pro Builder" />
	<?php else: ?>	<meta name="generator" content="Website Builder" />
	<?php endif; ?>			<link href="css/common-bundle.css?ts=20261125022239" rel="preload" type="text/css" as="style" onload="this.onload=null;this.rel=&#039;stylesheet&#039;" />
	<link href="css/a18bddd8aa5900272be5f7d0b8bcd1fd-bundle.css?ts=20261125022239" rel="preload" type="text/css" id="wb-page-stylesheet" as="style" onload="this.onload=null;this.rel=&#039;stylesheet&#039;" />
	<ga-code/><!-- Global: identity & crawling -->
<meta name="author" content="George Dreemer">
<meta name="robots" content="max-image-preview:large, max-snippet:-1">

<!-- Global: appearance -->
<meta name="color-scheme" content="dark light">
<meta name="theme-color" content="#000000" media="(prefers-color-scheme: dark)">
<meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
<meta name="format-detection" content="telephone=no">

<!-- Global: social -->
<meta property="og:site_name" content="George Dreemer">
<meta property="og:locale" content="en_US">
<meta name="twitter:site" content="@444eta">
<meta name="twitter:creator" content="@444eta">
<meta name="twitter:label1" content="Role">
<meta name="twitter:data1" content="Data Scientist &amp; Developer">
<meta name="twitter:label2" content="Open to">
<meta name="twitter:data2" content="Data, ML &amp; AI roles · Dubai, UAE">

<!-- Global: icons -->
<link rel="icon" type="image/png" href="/favicon/favicon-96x96.png?v=20261124" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg?v=20261124" />
<link rel="shortcut icon" href="/favicon/favicon.ico?v=20261124" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png?v=20261124" />
<meta name="apple-mobile-web-app-title" content="ETA!" />
<link rel="manifest" href="/favicon/site.webmanifest?v=20261124" />
	<script type="text/javascript">
	window.useTrailingSlashes = false;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		window._spDefer.add(function() {
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18bddd8aa5900272be5f7d0b8bcd1fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a18bddd8aa5900272be5f7d0b8bcd1fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_footer_a18bddd8aa5900272be5f7d0b8bcd1fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script>window._spDefer.add(function() {
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			});</script></div></div></div></div><script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/common-bundle.js?ts=20261125022239" type="text/javascript" defer></script>{{hr_out}}<script>
    document.addEventListener('DOMContentLoaded', function () {
        window._spDefer.done();
    });
</script>
</body>
</html>
