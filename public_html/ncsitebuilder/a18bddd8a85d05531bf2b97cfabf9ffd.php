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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "thoughtbubble — Knowledge-First Social Network · George Dreemer"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
					
	<!-- Facebook Open Graph -->
						<!-- Facebook Open Graph end -->

			<?php if (empty($wbWhitelabel)): ?>	<meta name="generator" content="Site.pro Builder" />
	<?php else: ?>	<meta name="generator" content="Website Builder" />
	<?php endif; ?>			<link href="css/common-bundle.css?ts=20261125225030" rel="preload" type="text/css" as="style" onload="this.onload=null;this.rel=&#039;stylesheet&#039;" />
	<link href="css/a18bddd8a85d05531bf2b97cfabf9ffd-bundle.css?ts=20261125225030" rel="preload" type="text/css" id="wb-page-stylesheet" as="style" onload="this.onload=null;this.rel=&#039;stylesheet&#039;" />
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
	<!-- Core document setup -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

<!-- SEO -->
<title>thoughtbubble — Knowledge-First Social Network · George Dreemer</title>
<meta name="description" content="thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, built from scratch and launched to around 900 registered users across the US and Europe.">
<meta name="keywords" content="thoughtbubble, George Dreemer, Nikolay Stanchev, social network, knowledge-first platform, startup, full-stack development, PHP, MySQL, self-taught developer">
<link rel="canonical" href="https://georgedreemer.com/work/thoughtbubble">
<link rel="alternate" type="text/markdown" href="https://georgedreemer.com/work/thoughtbubble.md">
<link rel="describedby" href="https://georgedreemer.com/llms.txt">

<!-- Social sharing -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://georgedreemer.com/work/thoughtbubble">
<meta property="og:title" content="thoughtbubble — Knowledge-First Social Network · George Dreemer">
<meta property="og:description" content="thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, built from scratch and launched to around 900 registered users across the US and Europe.">
<meta property="og:image" content="https://georgedreemer.com/public_img/general/ogimages/thoughtbubble-v1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Showcase of thoughtbubble branding and logo, made by George Dreemer">
<meta name="twitter:image:alt" content="Showcase of thoughtbubble branding and logo, made by George Dreemer">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="thoughtbubble — Knowledge-First Social Network · George Dreemer">
<meta name="twitter:description" content="thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, built from scratch and launched to around 900 registered users across the US and Europe.">
<meta name="twitter:image" content="https://georgedreemer.com/public_img/general/ogimages/thoughtbubble-v1.png">

<!-- Structured data -->
<script data-custom-script="true" type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://georgedreemer.com/work/thoughtbubble#webpage",
      "url": "https://georgedreemer.com/work/thoughtbubble",
      "name": "thoughtbubble — Knowledge-First Social Network",
      "description": "thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, built from scratch and launched to around 900 registered users across the US and Europe.",
      "isPartOf": {
        "@id": "https://georgedreemer.com/#website"
      },
      "about": {
        "@id": "https://georgedreemer.com/work/thoughtbubble#project"
      },
      "mainEntity": {
        "@id": "https://georgedreemer.com/work/thoughtbubble#project"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://georgedreemer.com/public_img/general/ogimages/thoughtbubble-v1.png",
        "width": 1200,
        "height": 630
      },
      "inLanguage": "en",
      "breadcrumb": {
        "@id": "https://georgedreemer.com/work/thoughtbubble#breadcrumb"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://georgedreemer.com/work/thoughtbubble#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "George Dreemer",
          "item": "https://georgedreemer.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Work",
          "item": "https://georgedreemer.com/#work"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "thoughtbubble",
          "item": "https://georgedreemer.com/work/thoughtbubble"
        }
      ]
    },
    {
      "@type": "CreativeWork",
      "@id": "https://georgedreemer.com/work/thoughtbubble#project",
      "name": "thoughtbubble",
      "alternateName": "thoughtbubble social network",
      "url": "https://georgedreemer.com/work/thoughtbubble",
      "description": "A knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, designed and built from scratch and grew to around 900 registered users across the US and Europe.",
      "image": {
        "@type": "ImageObject",
        "url": "https://georgedreemer.com/public_img/general/ogimages/thoughtbubble-v1.png",
        "width": 1200,
        "height": 630
      },
      "genre": [
        "Social network",
        "Knowledge-sharing platform",
        "Portfolio project",
        "Startup project"
      ],
      "keywords": [
        "thoughtbubble",
        "knowledge-first social network",
        "George Dreemer",
        "Nikolay Stanchev",
        "startup",
        "full-stack development",
        "social platform"
      ],
      "creator": [
        {
          "@type": "Person",
          "@id": "https://georgedreemer.com/#person",
          "name": "George Dreemer",
          "url": "https://georgedreemer.com"
        },
        {
          "@type": "Person",
          "name": "Nikolay Stanchev"
        }
      ],
      "author": {
        "@type": "Person",
        "@id": "https://georgedreemer.com/#person",
        "name": "George Dreemer",
        "url": "https://georgedreemer.com"
      }
    }
  ]
}
</script>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

<!-- Styles -->
<!-- Global -->
<link rel="stylesheet" href="../css/tokens.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/layout.css">
<link rel="stylesheet" href="../css/sitebuilder-overrides.css?v=19">

<!-- Components -->
<link rel="stylesheet" href="../css/components/fade-in.css">
<link rel="stylesheet" href="../css/components/section-label.css">
<link rel="stylesheet" href="../css/components/site-shell.css?v=6">

<link rel="stylesheet" href="../css/components/context-block.css">
<link rel="stylesheet" href="../css/components/sc.css">
<link rel="stylesheet" href="../css/components/stat-counter.css">
<link rel="stylesheet" href="../css/components/stack-badge.css">
<link rel="stylesheet" href="../css/components/ability-card-exp.css">
<link rel="stylesheet" href="../css/components/works-card-exp.css">
<link rel="stylesheet" href="../css/components/indepth-accordion.css">

<!-- Third-party scripts -->
<script data-custom-script="true" src="https://unpkg.com/lucide@1.72.0/dist/umd/lucide.js" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Page behavior -->
<script data-custom-script="true" type="module" src="../js/pages/work/thoughtbubble.js?v=10"></script>	
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><main class="main-content" role="main" data-page="thoughtbubble">

<h1 class="screenreader-only">
  thoughtbubble — Knowledge-First Social Network
</h1>

<!-- ============================================================
    ELEMENT 1 — CONTEXT BLOCK
============================================================ -->
<section id="intro" data-nav="Intro" aria-label="Intro: Context" class="fade-in">
  <div class="context-block">
    <p>A knowledge-first social network, built from scratch by two self-taught developers. Just a love for web
      development, zero budget, launched in the USA and expanded to reach 900+ users
      across the world.</p>
    <p>thoughtbubble was designed to shift social media away from entertainment toward sharing ideas, insights, and
      self-improvement content.</p>
    <p>We built it to alpha in under a year, hand-coding every layer ourselves custom authentication, MySQL
      architecture, real-time notifications, and the full social product without a framework, CMS, or boilerplate.
    </p>
  </div>
</section>

<!-- ============================================================
    ELEMENT 2 — SNAPSHOT CARD
============================================================ -->
<section aria-label="Intro: Experience Snapshot" class="fade-in">

  <h2 class="screenreader-only">Experience Snapshot</h2>

  <div class="snapshot-card" data-domain="engineering">

    <div class="snapshot-card__tab">
      <span class="snapshot-card__tab-logo" data-gd-identity-logo="thoughtbubble" aria-hidden="true"></span>
      <span class="snapshot-card__tab-text">
        <span class="snapshot-card__tab-name">thoughtbubble</span>
      </span>
    </div>

    <dl class="snapshot-card__meta">
      <div class="snapshot-item snapshot-item--prominent">
        <dt class="snapshot-item__key">Role</dt>
        <dd class="snapshot-item__value">Co-Founder &amp; Full-Stack Developer</dd>
      </div>
      <div class="snapshot-item snapshot-item--prominent">
        <dt class="snapshot-item__key">Type</dt>
        <dd class="snapshot-item__value">Social Network Startup</dd>
      </div>
      <div class="snapshot-item">
        <dt class="snapshot-item__key">Location</dt>
        <dd class="snapshot-item__value">Amherst, MA, United States</dd>
      </div>
    </dl>

    <div class="snapshot-card__divider"></div>

    <h3 class="snapshot-card__highlights-label">Highlights</h3>

    <ul class="snapshot-card__chips">
      <li class="achievement-chip" data-domain="engineering">
        <span class="achievement-chip__dot"></span>Built full back-end in PHP + MySQL — database, API, and
        server-side logic
      </li>
      <li class="achievement-chip" data-domain="engineering">
        <span class="achievement-chip__dot"></span>Co-built front-end in HTML, CSS, and Javascript — AJAX
        interactions, dynamic content, and responsive design
      </li>
      <li class="achievement-chip" data-domain="engineering">
        <span class="achievement-chip__dot"></span>Built all social features — feed, posts, comments, likes, pins,
        notifications, and profiles
      </li>
      <li class="achievement-chip" data-domain="engineering">
        <span class="achievement-chip__dot"></span>Built registration, login, and account management system
      </li>
      <li class="achievement-chip" data-domain="data">
        <span class="achievement-chip__dot"></span>Collected and analyzed user data to improve engagement and
        retention
      </li>
      <li class="achievement-chip" data-domain="product">
        <span class="achievement-chip__dot"></span>Co-designed UX — feed, profiles, and post system
      </li>
      <li class="achievement-chip" data-domain="product">
        <span class="achievement-chip__dot"></span>Iterated on UI based on direct user feedback
      </li>
      <li class="achievement-chip" data-domain="growth">
        <span class="achievement-chip__dot"></span>Presented product to investors and potential partners at local
        startup events
      </li>
      <li class="achievement-chip" data-domain="growth">
        <span class="achievement-chip__dot"></span>Grew to 900+ registered users with zero ad spend
      </li>
      <li class="achievement-chip" data-domain="growth">
        <span class="achievement-chip__dot"></span>Secured copyright for the platform and managed legal procedures
      </li>
    </ul>

  </div>
</section>

<!-- ============================================================
    ELEMENT 3 — IN NUMBERS / STAT COUNTER
============================================================ -->
<section aria-label="Intro: Experience In Numbers" class="stat-counter-section fade-in">

  <h2 class="screenreader-only">In Numbers</h2>

  <dl class="stat-counter">
    <div class="stat-counter__item" data-target="76" data-suffix="+" data-domain="engineering">
      <dt class="stat-counter__number" aria-live="polite">76+</dt>
      <dd class="stat-counter__label">Major updates shipped</dd>
    </div>
    <div class="stat-counter__item" data-target="900" data-prefix="~" data-domain="growth">
      <dt class="stat-counter__number" aria-live="polite">~900</dt>
      <dd class="stat-counter__label">Registered users</dd>
    </div>
    <div class="stat-counter__item" data-target="7" data-domain="product">
      <dt class="stat-counter__number" aria-live="polite">7</dt>
      <dd class="stat-counter__label">Back-end systems built</dd>
    </div>
    <div class="stat-counter__item" data-target="7" data-domain="data">
      <dt class="stat-counter__number" aria-live="polite">7</dt>
      <dd class="stat-counter__label">Relational DBs managed</dd>
    </div>
  </dl>

</section>

<!-- ============================================================
    ELEMENT 4 — STACK BADGE GRID
============================================================ -->
<section id="stack" data-nav="Stack" aria-label="Stack" class="fade-in">
  <div class="section-label">
    <h2 class="section-label__text">Stack</h2>
    <span class="section-label__line" aria-hidden="true"></span>
  </div>

  <div class="stack-grid">

    <div class="stack-group">
      <h3 class="stack-group__label">Code</h3>
      <ul class="stack-group__items">
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/php/777bb4" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">PHP</span>
        </li>
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/javascript" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">JavaScript</span>
        </li>
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/html5/e34f26" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">HTML</span>
        </li>
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/css/1572b6" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">CSS</span>
        </li>
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/mysql/4479a1" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">SQL</span>
        </li>
      </ul>
    </div>

    <div class="stack-group">
      <h3 class="stack-group__label">Databases</h3>
      <ul class="stack-group__items">
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/mysql/4479a1" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">MySQL</span>
        </li>
      </ul>
    </div>

    <div class="stack-group">
      <h3 class="stack-group__label">Dev Tools</h3>
      <ul class="stack-group__items">
        <li class="stack-badge stack-badge--text">
          <span class="stack-badge__mark" style="background:#470137;" aria-hidden="true">Dw</span>
          <span class="stack-badge__name">Dreamweaver</span>
        </li>
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/cpanel/ff6c2c" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">cPanel</span>
        </li>
        <li class="stack-badge">
          <img src="https://cdn.simpleicons.org/namecheap/de3723" alt="" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">Namecheap</span>
        </li>
      </ul>
    </div>

    <div class="stack-group">
      <h3 class="stack-group__label">Design &amp; Creative</h3>
      <ul class="stack-group__items">
        <li class="stack-badge">
          <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%20240%20234%22%3E%3Crect%20width%3D%22240%22%20height%3D%22234%22%20rx%3D%2242%22%20fill%3D%22%23330000%22/%3E%3Ctext%20x%3D%2252%22%20y%3D%22164%22%20font-size%3D%22104%22%20font-family%3D%22Arial%2C%20sans-serif%22%20fill%3D%22%23FF9A00%22%3EAi%3C/text%3E%3C/svg%3E" alt="Adobe Illustrator" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">Illustrator</span>
        </li>
        <li class="stack-badge">
          <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%20240%20234%22%3E%3Crect%20width%3D%22240%22%20height%3D%22234%22%20rx%3D%2242%22%20fill%3D%22%23001E36%22/%3E%3Ctext%20x%3D%2252%22%20y%3D%22164%22%20font-size%3D%22104%22%20font-family%3D%22Arial%2C%20sans-serif%22%20fill%3D%22%2331A8FF%22%3EPs%3C/text%3E%3C/svg%3E" alt="Adobe Photoshop" width="18" height="18" loading="lazy">
          <span class="stack-badge__name">Photoshop</span>
        </li>
      </ul>
    </div>

  </div>
</section>

<!-- ============================================================
    ELEMENT 5 — ABILITY CARD GRID
============================================================ -->
<section id="abilities" data-nav="Abilities" aria-label="Abilities" class="fade-in">

  <div class="section-label">
    <h2 class="section-label__text">Abilities</h2>
    <span class="section-label__line" aria-hidden="true"></span>
  </div>

  <!-- Legend -->
  <p class="screenreader-only">Ability Domains</p>
  <ul class="ability-legend" aria-label="Ability domains">
    <li class="ability-legend__item ability-legend__item--engineering">
      <span class="ability-legend__dot"></span>Engineering
    </li>
    <li class="ability-legend__item ability-legend__item--product">
      <span class="ability-legend__dot"></span>Product
    </li>
    <li class="ability-legend__item ability-legend__item--growth">
      <span class="ability-legend__dot"></span>Growth
    </li>
    <li class="ability-legend__item ability-legend__item--data">
      <span class="ability-legend__dot"></span>Data
    </li>
  </ul>

  <ul class="ability-grid" id="e5-ability-grid" role="list">

    <li class="ability-card fade-in" data-domain="engineering">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <polyline points="16 18 22 12 16 6"></polyline>
          <polyline points="8 6 2 12 8 18"></polyline>
        </svg>
      </div>
      <h3 class="ability-card__title">Full-Stack Web Development</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Designed and built every layer of the platform without a framework — routing,
        session handling, database schema, AJAX interactions, and all front-end rendering.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Back-End Architecture</li>
        <li class="ability-tag">Front-End Engineering</li>
        <li class="ability-tag">Database-Driven Development</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="engineering">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
          <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
        </svg>
      </div>
      <h3 class="ability-card__title">Auth &amp; Security Systems</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Built custom user authentication from scratch, including the registration,
        native &amp; Facebook login, session management, password hashing, and access control.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Authentication Engineering</li>
        <li class="ability-tag">Session Management</li>
        <li class="ability-tag">Access Control</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="engineering">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <path d="M18 20V10"></path>
          <path d="M12 20V4"></path>
          <path d="M6 20v-6"></path>
        </svg>
      </div>
      <h3 class="ability-card__title">Real-Time Notifications</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Engineered a live notification system using AJAX polling — likes, comments,
        follows, and system alerts delivered without a page reload.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Asynchronous UX Flows</li>
        <li class="ability-tag">Event-Driven Logic</li>
        <li class="ability-tag">Notification Systems</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="product">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <path d="M12 20h9"></path>
          <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
        </svg>
      </div>
      <h3 class="ability-card__title">Product Design &amp; UX</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Owned the full UX, from information architecture to pixel-level UI. Designed the
        feed, post types, user profiles, settings flows, and iteratively improved them based on user feedback from
        our early adopter community.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">UX Design</li>
        <li class="ability-tag">Interface Architecture</li>
        <li class="ability-tag">Feedback-Driven Iteration</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="product">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="2" y1="12" x2="22" y2="12"></line>
          <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
        </svg>
      </div>
      <h3 class="ability-card__title">Product Vision &amp; Positioning</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Identified a clear gap in the market and built a product positioned around it —
        a curated, knowledge-first social feed before mainstream platforms pivoted toward that format.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Product Strategy</li>
        <li class="ability-tag">Market Positioning</li>
        <li class="ability-tag">Category Insight</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="growth">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
          <circle cx="9" cy="7" r="4"></circle>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
        </svg>
      </div>
      <h3 class="ability-card__title">Organic User Acquisition</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Grew the platform to ~900 registered users through word-of-mouth and direct
        outreach, with zero paid advertising. Learned early that product quality and community seeding beat any ad
        budget.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Community Seeding</li>
        <li class="ability-tag">Organic Growth Strategy</li>
        <li class="ability-tag">Creator Outreach</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="data">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <line x1="18" y1="20" x2="18" y2="10"></line>
          <line x1="12" y1="20" x2="12" y2="4"></line>
          <line x1="6" y1="20" x2="6" y2="14"></line>
        </svg>
      </div>
      <h3 class="ability-card__title">Metrics &amp; Behaviour Tracking</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Instrumented the platform to track user sign-ups, engagement rates, post
        frequency — the first time I built a product loop from data to decision.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Product Analytics</li>
        <li class="ability-tag">Behavior Tracking</li>
        <li class="ability-tag">Retention Strategy</li>
      </ul>
    </li>

    <li class="ability-card fade-in" data-domain="engineering">
      <div class="ability-card__icon">
        <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
          <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
          <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
          <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
        </svg>
      </div>
      <h3 class="ability-card__title">Database Architecture</h3>

      <p class="screenreader-only">
        Ability description:
      </p>
      <p class="ability-card__desc">Designed a relational MySQL schema capable of supporting users, posts, comments,
        likes, pins, notifications, hashtags, and categories simultaneously.</p>

      <p class="screenreader-only">
        Skills developed through this ability:
      </p>
      <ul class="ability-card__tags">
        <li class="ability-tag">Relational Schema Design</li>
        <li class="ability-tag">Data Modeling</li>
        <li class="ability-tag">Scalable Content Structures</li>
      </ul>
    </li>

  </ul>
</section>

<!-- ============================================================
    ELEMENT 6 — WORKS CARD GRID
============================================================ -->
<section id="works" data-nav="Works" aria-label="Works" class="fade-in">
  <div class="section-label">
    <h2 class="section-label__text">Works</h2>
    <span class="section-label__line" aria-hidden="true"></span>
  </div>

  <ul class="evidence-grid">

    <!-- Card 1: Social Systems (slideshow, 2 images) -->
    <li class="evidence-card" data-domain="engineering">
      <div class="evidence-card__slides">
        <div class="evidence-card__slides-track">
          <div class="evidence-card__slide is-active">
            <img src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-feed1_alpha-min.png" alt="thoughtbubble feed with expanded side menu showing followers, settings, bug report, and log out" width="600" height="338" loading="lazy">
          </div>
          <div class="evidence-card__slide">
            <img src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-feed2_alpha-min.png" alt="thoughtbubble feed in default view without menu expanded" width="600" height="338" loading="lazy">
          </div>
        </div>
        <div class="evidence-card__slide-dots">
          <button class="evidence-card__slide-dot is-active" aria-label="Show slide 1"></button>
          <button class="evidence-card__slide-dot" aria-label="Show slide 2"></button>
        </div>
      </div>
      <div class="evidence-card__body">
        <span class="evidence-card__domain-tag"><span class="evidence-card__domain-tag-dot"></span>Engineering</span>
        <h3 class="evidence-card__title">Social Systems</h3>
        <ul class="evidence-card__bullets">
          <li>Built all social systems — posts, likes, comments, pins</li>
          <li>Developed a hashtag system &amp; search for content curation &amp; discovery</li>
          <li>Implemented real-time feed &amp; notification system for social interactions</li>
          <li>Designed &amp; built user profiles with various customizations</li>
        </ul>
      </div>
    </li>

    <!-- Card 2: User Account Systems & Controls -->
    <li class="evidence-card" data-domain="engineering">
      <div class="evidence-card__thumb">
        <img src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-login_alpha-min.png" alt="thoughtbubble login screen with email login and Facebook login option" width="600" height="338" loading="lazy">
      </div>
      <div class="evidence-card__body">
        <span class="evidence-card__domain-tag"><span class="evidence-card__domain-tag-dot"></span>Engineering</span>
        <h3 class="evidence-card__title">User Account Systems &amp; Controls</h3>
        <ul class="evidence-card__bullets">
          <li>Built native registration and login system</li>
          <li>Integrated Facebook OAuth login alongside native accounts</li>
          <li>Developed various user control systems — settings, bug reporting, &amp; account controls</li>
          <li>Implemented a secure session management system with hashed passwords and access control</li>
        </ul>
      </div>
    </li>

    <!-- Card 3: User Feedback Analysis -->
    <li class="evidence-card" data-domain="data">
      <div class="evidence-card__video">
        <video autoplay muted loop playsinline>
          <source src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-iterations-loop.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </source></video>
        <button class="evidence-card__sound-btn" data-sound-toggle aria-label="Toggle sound">
          <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
            <line x1="23" y1="9" x2="17" y2="15" class="mute-line"></line>
            <line x1="17" y1="9" x2="23" y2="15" class="mute-line"></line>
          </svg>
        </button>
      </div>
      <div class="evidence-card__body">
        <span class="evidence-card__domain-tag"><span class="evidence-card__domain-tag-dot"></span>Data</span>
        <h3 class="evidence-card__title">User Feedback Analysis</h3>
        <ul class="evidence-card__bullets">
          <li>Tracked user engagement, sign-ups, and feature usage directly via MySQL queries</li>
          <li>Collected and reviewed user feedback to identify recurring pain points and requests</li>
          <li>Used engagement patterns to prioritize which features to build or cut</li>
          <li>Shipped 76+ major updates, largely guided by this feedback loop</li>
        </ul>
      </div>
    </li>

    <!-- Card 4: Pitching & Networking -->
    <li class="evidence-card" data-domain="growth">
      <div class="evidence-card__thumb">
        <img src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-lawyerdesk-min.png" alt="Thoughtbubble copyright paperwork scatted on the desk" width="600" height="338" loading="lazy">
      </div>
      <div class="evidence-card__body">
        <span class="evidence-card__domain-tag"><span class="evidence-card__domain-tag-dot"></span>Growth</span>
        <h3 class="evidence-card__title">Pitching, Networking &amp; Legal Coordination</h3>
        <ul class="evidence-card__bullets">
          <li>Presented the platform at local startup events &amp; shark tanks</li>
          <li>Actively networked across regional entrepreneurship communities and mentor programs</li>
          <li>Handled the business-facing side of the company solo while co-building the product</li>
          <li>Coordinated the legal side of the business — secured copyright, registered entity &amp; filed
            necessary paperwork</li>
        </ul>
      </div>
    </li>

  </ul>
</section>

<!-- ============================================================
    ELEMENT 7 — IN DEPTH ACCORDION
============================================================ -->
<section id="in-depth" data-nav="In-depth" aria-label="In-depth" class="fade-in">
  <div class="section-label">
    <h2 class="section-label__text">In Depth</h2>
    <span class="section-label__line" aria-hidden="true"></span>
  </div>

  <ul class="story-accordion" role="list">

    <!-- Item 1: Engineering — open by default -->
    <li class="story-accordion__item" data-domain="engineering" role="listitem">
      <button class="story-accordion__trigger" aria-expanded="true" aria-controls="story-panel-1">
        <span class="story-accordion__trigger-left">
          <span class="story-accordion__domain-tag">
            <span class="story-accordion__domain-dot"></span>Engineering
          </span>
          <h3 class="story-accordion__trigger-label">Built from scratch &amp; self-taught</h3>
        </span>
        <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </button>
      <div class="story-accordion__body" id="story-panel-1" aria-hidden="false">
        <div class="story-accordion__inner">
          <div class="story-accordion__content">
            <p>Nikolay and I built thoughtbubble in PHP, JavaScript, and MySQL. There was no framework, no CMS,
              no boilerplate — we'd hit wall after wall and just keep watching web development videos until it
              clicked.
              I built the full back-end of thoughtbubble and co-developed the front-end, while also designing the
              full
              icon set and logo in Adobe Illustrator.</p>
            <p>I built the back-end systems below, and co-developed the front-end and social feed logic with
              Nikolay:</p>
            <ul>
              <li>Authentication and session management</li>
              <li>News feed with custom sorting logic</li>
              <li>Post types — text, photo, video</li>
              <li>Likes, pins, and comments</li>
              <li>Hashtags and categories</li>
              <li>Notifications</li>
              <li>Profile customisation and account settings</li>
              <li>A user feedback pipeline</li>
            </ul>
            <p></p>
            <p>We shipped 76 major updates between the closed alpha and public launch.</p>
            <p>The infrastructure ran on shared hosting with a manually configured MySQL database. There was no
              version control
              beyond file backups, no CI, no staging environment. It was scrappy by any standard, but it worked.</p>
            <p>We scaled to nearly a thousand users, and every line of it was ours. Every feature or bug fix was a
              new learning experience and a sleepless night.</p>
          </div>
        </div>
      </div>
    </li>

    <!-- Item 2: Product -->
    <li class="story-accordion__item" data-domain="product" role="listitem">
      <button class="story-accordion__trigger" aria-expanded="false" aria-controls="story-panel-2">
        <span class="story-accordion__trigger-left">
          <span class="story-accordion__domain-tag">
            <span class="story-accordion__domain-dot"></span>Product
          </span>
          <h3 class="story-accordion__trigger-label">The idea that was early</h3>
        </span>
        <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </button>
      <div class="story-accordion__body" id="story-panel-2" aria-hidden="true">
        <div class="story-accordion__inner">
          <div class="story-accordion__content">
            <p>The pitch was simple: a social network where your feed only teaches you things. No vacation photos,
              no cat
              videos — just insights from books, actionable quotes, and self-improvement content. We built it
              inspired by the rise of Gary Vaynerchuk and Tai Lopez and the audiences forming around them. People
              were already sharing nuggets from books, videos, and articles — but existing platforms weren't built
              to hold that kind of content well. We saw a clear gap: entertainment-first platforms simply weren't
              built to support information-rich content.</p>
            <p>So we set out to build something different. We envisioned posts where the UI would include things
              like book titles, author, and reference material. A category system built around four pillars of
              self-improvement: health, wealth, relationships, and fulfillment. The user profile would read more
              like a personal development journal — with pinned posts, categorized content, and a space for
              reflection.</p>
            <p>What we were describing — a curated, knowledge-first feed with social mechanics — is close to what
              Twitter's long-form threads, Substack, and LinkedIn's creator-focused pivot eventually became. We were
              two self-taught devs with no funding and no network, so the timing didn't matter in the end. But the
              product instinct was right.</p>
            <p>Looking at how much that space has grown, there's real satisfaction in knowing two founders with no
              prior experience, no funding, and no network saw it coming early. I sometimes wonder what we could
              have built with even a fraction of the resources those platforms eventually had — but that experience
              taught me that the desired outcome isn't always the best outcome. There's a deeper plan at work, and
              life had other things in store beyond scaling thoughtbubble to its full potential.</p>
          </div>
        </div>
      </div>
    </li>

    <!-- Item 3: Growth -->
    <li class="story-accordion__item" data-domain="growth" role="listitem">
      <button class="story-accordion__trigger" aria-expanded="false" aria-controls="story-panel-3">
        <span class="story-accordion__trigger-left">
          <span class="story-accordion__domain-tag">
            <span class="story-accordion__domain-dot"></span>Growth
          </span>
          <h3 class="story-accordion__trigger-label">How we got 900 users without spending a dollar</h3>
        </span>
        <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </button>
      <div class="story-accordion__body" id="story-panel-3" aria-hidden="true">
        <div class="story-accordion__inner">
          <div class="story-accordion__content">
            <p>We didn't run ads. We didn't have a budget. The growth strategy was entirely manual: reach out
              directly to people who were already creating self-improvement content on YouTube or Instagram, show
              them the platform, and get them to seed it with their content. We identified early that a
              knowledge-first feed is only as good as the content in it — if the first 50 users post junk, the
              product is dead on arrival.</p>
            <p>We tracked registrations, session counts, and engagement metrics in MySQL and used those numbers to
              prioritise what to build next. The most-used features got more polish. The least-used ones got cut or
              rethought. We didn't call it a data-driven product loop at the time, but that's exactly what it was.
            </p>
          </div>
        </div>
      </div>
    </li>

    <!-- Item 4: Legal -->
    <li class="story-accordion__item" data-domain="growth" role="listitem">
      <button class="story-accordion__trigger" aria-expanded="false" aria-controls="story-panel-4">
        <span class="story-accordion__trigger-left">
          <span class="story-accordion__domain-tag">
            <span class="story-accordion__domain-dot"></span>Growth
          </span>
          <h3 class="story-accordion__trigger-label">We got ripped off by a lawyer - got the copyright
            anyway</h3>
        </span>
        <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </button>
      <div class="story-accordion__body" id="story-panel-4" aria-hidden="true">
        <div class="story-accordion__inner">
          <div class="story-accordion__content">
            <p>At some point, two first-time founders decided their app needed real legal protection — because
              apparently "two guys with a login page" doesn't hold up as a legal entity on its own. So we hired a
              copyright lawyer, nodded confidently at documents we barely understood, and paid real money to learn
              what a retainer is the hard way. He did the bare minimum, billed like he'd written us a constitution,
              and left us wondering if we'd just been the world's greenest, most polite scam victims.</p>
            <p>Classic story. We pushed through it anyway, filed everything properly ourselves where we could, and
              got the copyright registered. It cost more than it should have and took longer than it should have —
              but it's ours, on paper, forever, which is more than I can say for the money we spent on that lawyer.
            </p>
            <p>In hindsight, it was my first real lesson in the unglamorous side of building something — the admin,
              the fine print, the people who see inexperience as an opportunity rather than something to protect.
              Nobody warns you that "founding a startup" sometimes means arguing about an invoice with a man in a
              blazer. I'd handle it very differently now. But we got the copyright — and honestly, that's a better
              ending than most first-lawyer stories get.</p>
          </div>
        </div>
      </div>
    </li>

  </ul>
</section>

</main><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18bddd8a85d05531bf2b97cfabf9ffd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a18bddd8a85d05531bf2b97cfabf9ffd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_footer_a18bddd8a85d05531bf2b97cfabf9ffd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script>window._spDefer.add(function() {
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
	<script src="js/common-bundle.js?ts=20261125225030" type="text/javascript" defer></script>{{hr_out}}<script>
    document.addEventListener('DOMContentLoaded', function () {
        window._spDefer.done();
    });
</script>
</body>
</html>
