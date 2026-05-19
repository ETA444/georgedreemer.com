<?php
	if (version_compare(PHP_VERSION, '5.3.3') < 0) {
		echo "Your PHP version is outdated for this website. Please update PHP version to 5.6 or higher.";
		exit();
	}
	if (function_exists('apc_clear_cache')) apc_clear_cache();
	if((isset($_COOKIE['WB_SITE_DEBUG_MODE']) && $_COOKIE['WB_SITE_DEBUG_MODE']) || (isset($_SERVER['HTTP_X_DBG_LOG_ALL_ERRORS']) && $_SERVER['HTTP_X_DBG_LOG_ALL_ERRORS'])) { error_reporting(E_ALL); @ini_set('display_errors', true); }
	if (!@session_id()) @session_start();
	$tz = @date_default_timezone_get(); @date_default_timezone_set($tz ? $tz : 'UTC');
	require_once dirname(__FILE__).'/polyfill.php';
	$pages = array(
		array(
			'id' => 'a18bddd8a85d00f1870d4bc44fd15f7b',
			'alias' => '',
			'file' => 'a18bddd8a85d00f1870d4bc44fd15f7b.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a18bddd8a85d011b0a2fe2a90c538c8d',
			'alias' => 'skipschoolmakemoney',
			'file' => 'a18bddd8a85d011b0a2fe2a90c538c8d.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a18bddd8a85d0259fb1585dbb509cff8',
			'alias' => 'dreemcorp',
			'file' => 'a18bddd8a85d0259fb1585dbb509cff8.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a18bddd8a85d031c03b1af770b1fc6b6',
			'alias' => 'hobbies',
			'file' => 'a18bddd8a85d031c03b1af770b1fc6b6.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a18bddd8a85d05531bf2b97cfabf9ffd',
			'alias' => 'thoughtbubble',
			'file' => 'a18bddd8a85d05531bf2b97cfabf9ffd.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a18bddd8a85d044c01bbabaae5d84e6b',
			'alias' => 'stack',
			'file' => 'a18bddd8a85d044c01bbabaae5d84e6b.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a19104b295bb0096958c9d452e84c121',
			'alias' => 'blog',
			'file' => 'a19104b295bb0096958c9d452e84c121.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a19104d04f1200a1171ff5a1dd1fd06a',
			'alias' => 'blog/datasafari/introduction',
			'file' => 'a19104d04f1200a1171ff5a1dd1fd06a.php',
			'controllers' => array(),
			'type' => 0
		)
	);
	$forms = array(
		'a18bddd8a85d00f1870d4bc44fd15f7b' => array(
			'0961c975' => array(
				'email' => 'georgedreemer@dreemcorp.com; georgedreemer@proton.me; g.r.dreemer@gmail.com',
				'emailFrom' => 'no-reply@georgedreemer.com',
				'subject' => '[ ! ] GeorgeDreemer.com Message',
				'sentMessage' => 'Thank you for your message! We will be in touch as soon as possible.',
				'object' => '',
				'objectRenderer' => '',
				'loggingHandler' => '',
				'smtpEnable' => false,
				'smtpHost' => null,
				'smtpPort' => null,
				'smtpEncryption' => null,
				'smtpUsername' => null,
				'smtpPassword' => null,
				'recVersion' => 'v2',
				'recSiteKey' => '6LeUbBQjAAAAAHLKy2ykDPfp_kjCj0eHf_-Xrxf2',
				'recSecretKey' => '6LeUbBQjAAAAAFmiJ6ZBeFZWRuikFngHIE4uxMJu',
				'useGclidCapture' => false,
				'maxFileSizeTotal' => 2,
				'postUrl' => '',
				'redirectUrl' => null,
				'webhookUrl' => null,
				'brandId' => '87101',
				'fields' => array(
					array(
						'fidx' => '0',
						'name' => 'Name',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '1',
						'name' => 'E-mail',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '2',
						'name' => 'Message',
						'default' => '',
						'type' => 'textarea',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'textareaRow' => 4
						)
					)
				),
				'telegramApiToken' => '',
				'telegramChatId' => '',
				'formSendType' => 'email'
			)
		)
	);
	$langs = null;
	$def_lang = null;
	$base_lang = 'en';
	$site_id = '94f1f8f7';
	${'sitemapUrls'} = array(
		'https://georgedreemer.com/',
		'https://georgedreemer.com/skipschoolmakemoney',
		'https://georgedreemer.com/dreemcorp',
		'https://georgedreemer.com/hobbies',
		'https://georgedreemer.com/thoughtbubble',
		'https://georgedreemer.com/stack',
		'https://georgedreemer.com/blog',
		'https://georgedreemer.com/blog/datasafari/introduction'
	);
	${'redirectItems'} = array();
	$websiteUID = 'a6bf24d62389c5c29a904041a1dc6f8f9524fe4cc2e47b79f80bba06ae154069cfd05c7cbb53bf4c';
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'georgedreemer.com';
	$pretty_domain = 'georgedreemer.com';
	$home_page = 'a18bddd8a85d00f1870d4bc44fd15f7b';
	$mod_rewrite = true;
	$show_comments = false;
	$ga_code = (is_file($ga_code_file = dirname(__FILE__).'/ga_code') ? file_get_contents($ga_code_file) : null);
	require_once dirname(__FILE__).'/src/forms/FormNavigation.php';
	require_once dirname(__FILE__).'/src/forms/FormModuleInquiries.php';
	require_once dirname(__FILE__).'/src/forms/FormModuleInquiriesField.php';
	require_once dirname(__FILE__).'/src/forms/FormModule.php';
	require_once dirname(__FILE__).'/src/forms/FormInquiriesApi.php';
	require_once dirname(__FILE__).'/src/SiteInfo.php';
	require_once dirname(__FILE__).'/src/SiteModule.php';
	require_once dirname(__FILE__).'/functions.inc.php';
	$siteInfo = SiteInfo::build(array('siteId' => $site_id, 'websiteUID' => $websiteUID, 'domain' => $user_domain, 'prettyDomain' => $pretty_domain, 'homePageId' => $home_page, 'baseDir' => $base_dir, 'baseUrl' => $base_url, 'defLang' => $def_lang, 'baseLang' => $base_lang, 'langs' => $langs, 'pages' => $pages, 'forms' => $forms, 'modRewrite' => $mod_rewrite, 'gaCode' => $ga_code, 'gaAnonymizeIp' => false, 'port' => null, 'pathPrefix' => null, 'useTrailingSlashes' => false, 'disableFormSending' => false,));
	$requestInfo = SiteRequestInfo::build(array('requestUri' => getRequestUri($siteInfo->baseUrl),));
	FormModule::init(array(), $siteInfo);
	SiteModule::init(null, $siteInfo);
	checkSiteRedirects($siteInfo, $requestInfo, ${'redirectItems'});
	list($page_id, $lang, $urlArgs, $route) = parse_uri($siteInfo, $requestInfo);
	$page404 = $pageMaint = null;
	foreach ($pages as $k => $p) {
		if ($p['type'] === 2) $page404 = $p;
		if ($p['type'] === 3) $pageMaint = $p;
	}
	$preview = false;
	$requestInfo->{'page'} = (isset($pages[$page_id]) ? $pages[$page_id] : null);
	$requestInfo->{'lang'} = $lang;
	$requestInfo->{'urlArgs'} = $urlArgs;
	$requestInfo->{'route'} = $route;
	handleTrailingSlashRedirect($siteInfo, $requestInfo, ["css","dat","fonts","gallery","gallery_gen","js","phpmailer","phpseclib","src"]);
	SiteModule::setLang($requestInfo->{'lang'}, $base_lang);
	SiteModule::initTranslations(array(
		'-' => array(
			'There was a problem submitting your form. This can happen when you leave a page open for a long time. Please refresh and try again.' => 'There was a problem submitting your form. This can happen when you leave a page open for a long time. Please refresh and try again.',
			'Form sending failed' => 'Form sending failed',
			'Form was not sent, are you a robot?' => 'Form was not sent, are you a robot?',
			'Please accept cookie consent to submit the form' => 'Please accept cookie consent to submit the form',
			'File %s is too big' => 'File %s is too big',
			'File %s could not be uploaded for sending' => 'File %s could not be uploaded for sending',
			'Total size of attachments must not exceed %s MB' => 'Total size of attachments must not exceed %s MB',
			'Field %s is not present' => 'Field %s is not present',
			'Failed to create a directory for attachments' => 'Failed to create a directory for attachments',
			'Attachments inode on the server is not a directory' => 'Attachments inode on the server is not a directory',
			'Failed to move uploaded file to attachments directory' => 'Failed to move uploaded file to attachments directory',
			'Receiver not specified' => 'Receiver not specified',
			'Form sending from preview is not available' => 'Form sending from preview is not available',
			'Max file size (Mb): %s' => 'Max file size (Mb): %s',
			'Max number of files: 1' => 'Max number of files: 1',
			'You exceed number of files' => 'You exceeded number of files',
			'I\'m not a robot' => 'I\'m not a robot',
			'Captcha is not available in preview' => 'Captcha is not available in preview',
			'Submit' => 'Submit',
			'Edit Website' => 'Edit Website',
			'Not found' => 'Not found',
			'This plugin requires upgrade' => 'This plugin requires upgrade'
		)
	));
	if (!isHttps() && !headers_sent()) {
		header('Status: 301 Moved Permanently');
		header('Location: '.getCurrUrl(false, 'https'), true, 301);
		exit();
	}


class MenuElement {
	static function setMax($value) {
		self::$maxItems = $value;
	}

	static function render($tree) {
		self::renderItems($tree->{'items'}, 0, $tree->{'type'}, $tree->{'dir'});
	}

	static function renderItems($items, $level, $type, $dir) {
		if (empty($items))
			return;
		self::renderTag("ul", array(
			"class" => $level ? null : $type,
			"dir" => $level ? null : $dir,
		));
		foreach ($items as $item) {
			$liAttrs = array(
				"class" => isset($item->{'class'}) ? $item->{'class'} : null,
				"data-anchor" => isset($item->{'anchor'}) ? $item->{'anchor'} : null,
				"title" => isset($item->{'title'}) ? htmlspecialchars($item->{'title'}) : null,
				"data-wb-anim-entry-time" => isset($item->{'animTime'}) ? $item->{'animTime'} : null,
				"data-wb-anim-entry-delay" => isset($item->{'animDelay'}) ? $item->{'animDelay'} : null,
			);
			$aAttrs = array(
				"href" => isset($item->{'href'}) ? $item->{'href'} : null,
				"target" => isset($item->{'target'}) ? $item->{'target'} : null,
				"data-popup" => isset($item->{'popup'}) ? $item->{'popup'} : null,
			);
			$exceeded = self::$maxItems && isset($item->{'id'}) && $item->{'id'} > self::$maxItems;
			if ($exceeded) {
				$liAttrs["class"] = trim($liAttrs["class"] . " wb-menu-item-exceeded");
				$aAttrs["href"] = 'javascript:void(0)';
				$aAttrs["target"] = null;
				$aAttrs["data-popup"] = null;
				$item->{'icon'} = "star";
				$item->{'iconAlign'} = "left";
				$liAttrs["data-plugin"] = "Menu Items";
			}
			self::renderTag("li", $liAttrs);
			self::renderTag("a", $aAttrs);
			if (isset($item->{'icon'}) && $item->{'iconAlign'} === "left") {
				self::renderIcon($item->{'icon'});
				echo '&nbsp;';
			}
			if ($exceeded) echo '<span>';
			echo $item->{'name'};
			if ($exceeded) echo '</span>';
			if (isset($item->{'icon'}) && $item->{'iconAlign'} === "right") {
				echo '&nbsp;';
				self::renderIcon($item->{'icon'});
			}
			echo '</a>';
			if (isset($item->{'children'}))
				self::renderItems($item->{'children'}, $level + 1, $type, $dir);
			echo '</li>';
		}
		echo '</ul>';
	}

	static $maxItems = 0;

	static function renderIcon($icon) {
		if (empty($icon))
			return;
		if (strpos($icon, "<") !== false)
			echo $icon;
		else {
			self::renderTag('i', array("class" => "fa fa-{$icon}"));
			echo '</i>';
		}
	}

	static function renderTag($tagName, $attributes) {
		echo '<' . $tagName;
		foreach ($attributes as $k => $v)
			if ($v !== null && ($k !== "class" || $v !== ""))
				echo ' ' . $k . '="' . htmlspecialchars($v) . '"';
		echo '>';
	}
}	$requestHandledByModule = false;
	$hr_out = '';
	if (is_callable('FormModule::parseRequest')) { list($m_out, $requestHandled) = call_user_func('FormModule::parseRequest', $requestInfo); $hr_out .= $m_out; $requestHandledByModule = $requestHandledByModule || $requestHandled; }
	$page = $requestInfo->{'page'};
	if (!$requestHandledByModule && !empty($urlArgs)) $page = null;
	if (!$page) {
		if (isSitemapUrl($requestInfo)) genSitemap();
		if ($page404) $page = $page404;
		elseif ($pageMaint) $page = $pageMaint;
	} elseif ($pageMaint) $page = $pageMaint;
	if (!is_null($page)) {
		handleComments($page['id'], $siteInfo);
		if (isset($_POST["wb_form_id"])) handleForms($page['id'], $siteInfo);
	}
	ob_start();
	if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		$flp = dirname(__FILE__).'/pd.json';
		if (is_file($fl) && is_file($flp)) {
			${'seoTitle'} = $requestInfo->{'title'};
			${'seoDescription'} = $requestInfo->{'description'};
			${'seoKeywords'} = $requestInfo->{'keywords'};
			${'seoImage'} = $requestInfo->{'image'};
			if (isset($_GET['wbPopupMode']) && $_GET['wbPopupMode'] == 1) { $wbPopupMode = true; }
			$pd = @json_decode(@file_get_contents($flp));
			if (!is_object($pd)) die('Data is corrupted');
			$expectedCrc = $pd->{'e'};
			unset($pd->{'e'});
			$crc = sha1('sfh02a35gyhz0a33498g048qt3p048' . json_encode($pd));
			if ($expectedCrc !== $crc) die('Data is corrupted');
			MenuElement::setMax($pd->{'f'});
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				replaceLangAlternates($siteInfo, $out, $langs, $page['id']);
			}
			if (is_file($ga_tpl = dirname(__FILE__).'/ga.php')) {
				ob_start(); include $ga_tpl; $ga_out = ob_get_clean();
			}
			$currUrl = getCurrUrl();
			$out = str_replace('<ga-code/>', $ga_out, $out);
			$out = str_replace('{{base_url}}', getBaseUrl(), $out);
			$out = str_replace('{{curr_url}}', $currUrl, $out);
			$out = str_replace('__wb_curr_url__', htmlspecialchars($currUrl), $out);
			$out = str_replace('{{hr_out}}', $hr_out, $out);
			if (!empty($pd->a)) {
			    $smallPlugins = array (
  'Line' => 0,
  'Button' => 1,
  'Menu' => 2,
  'Languages' => 3,
  'StoreCart' => 4,
  'BookmarksShare' => 5,
  'FacebookLike' => 6,
  '2checkout' => 7,
  '7_connect' => 8,
  'alipay' => 9,
  'assist' => 10,
  'bank_transfer' => 11,
  'baokim' => 12,
  'bepaid' => 13,
  'braintree' => 14,
  'BuyNow' => 15,
  'cash_on_delivery' => 16,
  'click' => 17,
  'coinpayments' => 18,
  'dragonpay' => 19,
  'easypay' => 20,
  'effect' => 21,
  'epaybg' => 22,
  'epayco' => 23,
  'epsilon' => 24,
  'expresspay' => 25,
  'gestpay' => 26,
  'getbutton' => 27,
  'gplus_badge' => 28,
  'gplus_like' => 29,
  'hipay' => 30,
  'yandex_kassa' => 31,
  'ideal_payment' => 32,
  'iyzico' => 33,
  'klama' => 34,
  'libelula' => 35,
  'linepay' => 36,
  'liqpay' => 37,
  'mellat' => 38,
  'mercado' => 39,
  'mobilpay' => 40,
  'mollie' => 41,
  'mpesa' => 42,
  'odnoklassniki_share' => 43,
  'olark' => 44,
  'pagseguro' => 45,
  'payfast' => 46,
  'paytr' => 47,
  'paytrail' => 48,
  'payu' => 49,
  'payumoney' => 50,
  'platron' => 51,
  'qiwi' => 52,
  'qiwi_kz' => 53,
  'redsys' => 54,
  'robokassa' => 55,
  'skrill' => 56,
  'smartarget' => 57,
  'stripe' => 58,
  'tawkto' => 59,
  'vkontakte_comment' => 60,
  'vkontakte_like' => 61,
  'webmoney_button' => 62,
  'webmoney_widget' => 63,
  'webpay' => 64,
  'wp' => 65,
  'zopim' => 66,
  'pinterest' => 67,
  'pagopar' => 68,
  'cmi' => 69,
  'artpay' => 70,
);
				$preg_clb = function($m) use($pd, $smallPlugins) {
			        if (
			            (empty($pd->{'a'}) || (isset($pd->{'a'}->{$m[1]}) && $pd->{'a'}->{$m[1]}))
			            && (empty($pd->{'b'}) || !isset($pd->{'b'}->{$m[1]}) || !$pd->{'b'}->{$m[1]})
					) return $m[0];
					$featureName = $pluginId = $m[1];
					$isMenuItem = $featureName === 'Menu Items'; if ($isMenuItem) $pluginId = 'Menu';
					$r = substr($m[0], 0, -1);
					$outside = isset($smallPlugins[$pluginId]);
					$parentCss = $outside ? 'overflow:visible;' : '';
					$linkCss = $outside ? 'right:-3px;top:-3px;transform:translate(0,-100%);' : 'right:0;top:0;';
					$linkCss .= 'font: normal 14px &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;';
					$link = empty($pd->{'d'}) ? '' : (' href="' . htmlspecialchars($pd->{'d'}) . '" target="_blank" onclick="event.stopPropagation();event.returnValue=true;return true;"');
					$minPlan = isset($pd->{'c'}->{$pluginId}[0]) ? $pd->{'c'}->{$pluginId}[0] : 'Business';
					$link = str_replace('__MIN_PLAN__', rawurlencode($minPlan), $link);
					$link = str_replace('__PLAN_FEATURE__', rawurlencode(isset($pd->{'c'}->{$featureName}[1]) ? $pd->{'c'}->{$featureName}[1] : $featureName), $link);
					$link = str_replace('__UTM_CAMPAIGN__', rawurlencode('plugin-' . strtolower(str_replace('_', '-', $pluginId))), $link);
					$link = str_replace('__UTM_CONTENT__', rawurlencode($_SERVER['HTTP_HOST']), $link);
					$r .= ' style="outline: 3px solid #ff7600;'.$parentCss.'" >';
					$linkText = ($isMenuItem ? '' : '<i class="fa fa-star"></i>&nbsp;') . htmlspecialchars(\SiteModule::__('This plugin requires upgrade'));
					$r .= '<a'.$link.' style="position:absolute;'.$linkCss.'z-index:1;border:1px solid #FFF;background:#ff7600;color:#FFF;padding:4px;text-decoration:none;">'.$linkText.'</a>';
					$r .= '<a'.$link.' style="position:absolute;left:0;top:0;right:0;bottom:0;z-index:1;display:block;"></a>';
					return $r;
				};
				$prev_out = $out;
				$out = preg_replace_callback('#<[^>]+data-plugin="([^"]+)"[^>]*>#isu', $preg_clb, $prev_out);
				if ($out === null && in_array(preg_last_error(), array(PREG_BAD_UTF8_ERROR, PREG_BAD_UTF8_OFFSET_ERROR))) {
					$out = preg_replace_callback('#<[^>]+data-plugin="([^"]+)"[^>]*>#is', $preg_clb, $prev_out);
				}
				$prev_out = null;
		    	if (
			        !((empty($pd->{'a'}) || (isset($pd->{'a'}->{'Form'}) && $pd->{'a'}->{'Form'}))
			        && (empty($pd->{'b'}) || !isset($pd->{'b'}->{'Form'}) || !$pd->{'b'}->{'Form'}))
			    ) $out = preg_replace('/<input type="hidden" name="wb_form_(id|uuid)"[^>]*>/isuU', '', $out);
			}
			header('Content-type: text/html; charset=utf-8', true, $page['type'] === 2 ? 404 : ($page['type'] === 3 ? 503 : 0) );
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/../../error_docs/not_found.html')) {
			include dirname(__FILE__).'/../../error_docs/not_found.html';
		} else if (is_file(dirname(__FILE__).'/404.html')) {
			include dirname(__FILE__).'/404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 \SiteModule::__('Not found')</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 \SiteModule::__('Not found')\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>