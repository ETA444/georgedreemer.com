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
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev — designed, built, and launched from scratch in high school, growing to around 900 users."); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "thoughtbubble,george dreemer thoughtbubble,george dreemer social network,thoughtbubble social network,george dreemer startup founder,george dreemer co-founder,nikolay stanchev,thoughtbubble knowledge network,what is thoughtbubble,who made thoughtbubble,what was thoughtbubble,george dreemer portfolio,social network startup,knowledge sharing platform"); ?>" />
				<meta property="og:site_name" content="George Dreemer — Data Scientist, Developer & Entrepreneur">
	
	<!-- Facebook Open Graph -->
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev — designed, built, and launched from scratch in high school, growing to around 900 users."); ?>" />
					<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<link href="css/common-bundle.css?ts=20260813152319" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a18bddd8a85d05531bf2b97cfabf9ffd-bundle.css?ts=20260813152319" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
	<title>thoughtbubble — Knowledge-First Social Network · George Dreemer</title>

<!-- SEO Meta Data (source: seo/meta.html) -->
<meta name="description"
    content="How George Dreemer and Nikolay Stanchev built thoughtbubble, a knowledge-first social network designed, coded, and launched from scratch in high school — growing to around 900 registered users with no framework, funding, or team.">
<meta name="keywords"
    content="thoughtbubble, George Dreemer, Nikolay Stanchev, social network, knowledge-first platform, startup, full-stack development, PHP, MySQL, self-taught developer">
<link rel="canonical" href="https://georgedreemer.com/thoughtbubble">
<meta property="og:type" content="website">
<meta property="og:url" content="https://georgedreemer.com/thoughtbubble">
<meta property="og:title" content="thoughtbubble — Knowledge-First Social Network · George Dreemer">
<meta property="og:description"
    content="thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev — designed, built, and launched from scratch in high school, growing to around 900 users.">
<meta property="og:image" content="https://georgedreemer.com/ncsitebuilder/gallery/dxyz-thoughtbubble-thumb.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="thoughtbubble — Knowledge-First Social Network · George Dreemer">
<meta name="twitter:description"
    content="thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev — designed, built, and launched from scratch in high school, growing to around 900 users.">
<meta name="twitter:image" content="https://georgedreemer.com/ncsitebuilder/gallery/dxyz-thoughtbubble-thumb.png">

<!-- SEO Schema JSON -->
<script data-custom-script="true" type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://georgedreemer.com/thoughtbubble#webpage",
      "url": "https://georgedreemer.com/thoughtbubble",
      "name": "thoughtbubble — Knowledge-First Social Network",
      "description": "thoughtbubble was a knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, built from scratch in high school and launched to around 900 registered users.",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://georgedreemer.com/#website",
        "url": "https://georgedreemer.com",
        "name": "George Dreemer"
      },
      "about": {
        "@id": "https://georgedreemer.com/thoughtbubble#project"
      },
      "mainEntity": {
        "@id": "https://georgedreemer.com/thoughtbubble#project"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://georgedreemer.com/ncsitebuilder/gallery/dxyz-thoughtbubble-thumb.png",
        "width": 1200,
        "height": 630
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "CreativeWork",
      "@id": "https://georgedreemer.com/thoughtbubble#project",
      "name": "thoughtbubble",
      "alternateName": "thoughtbubble social network",
      "url": "https://georgedreemer.com/thoughtbubble",
      "description": "A knowledge-first social network co-founded by George Dreemer and Nikolay Stanchev, designed and built from scratch in high school.",
      "image": {
        "@type": "ImageObject",
        "url": "https://georgedreemer.com/ncsitebuilder/gallery/dxyz-thoughtbubble-thumb.png",
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
      },
      "dateModified": "2026-07-14",
      "inLanguage": "en-US"
    }
  ]
}
</script>

<!-- Preconnect to Google Fonts & Pull Nunito, Playfair Display -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

<!-- Pull Lucide icons -->
<script data-custom-script="true" src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>

<!-- Main Styles-->
<style>
:root {
  --font-body: "Nunito", "Helvetica Neue", sans-serif;
  --font-display: "Playfair Display", Georgia, serif;
  --color-bg: #ffffff;
  --color-surface: #f8f7f4;
  --color-surface-2: #f0ede8;
  --color-border: rgba(0, 0, 0, 0.10);
  --color-divider: rgba(0, 0, 0, 0.07);
  --color-text: #1a1814;
  --color-text-muted: #5a5750;
  --color-text-faint: #9a9590;
  --color-primary: #1db3bb; /* primary color is the brand color if applicable default: #01696f */
  --color-domain-engineering: #014a6f;
  --color-domain-data: #00a59a;
  --color-domain-product: #d19900;
  --color-domain-growth: #ca5100;
  --space-1: .25rem;
  --space-2: .5rem;
  --space-3: .75rem;
  --space-4: 1rem;
  --space-5: 1.25rem;
  --space-6: 1.5rem;
  --space-8: 2rem;
  --space-10: 2.5rem;
  --space-12: 3rem;
  --space-16: 4rem;
  --text-xs: clamp(0.75rem, 0.7rem + 0.2vw, 0.875rem);
  --text-sm: clamp(0.875rem, 0.82rem + 0.28vw, 1rem);
  --text-base: clamp(1rem, 0.95rem + 0.22vw, 1.125rem);
  --text-lg: clamp(1.125rem, 1rem + 0.6vw, 1.4rem);
  --text-xl: clamp(1.5rem, 1.2rem + 1.25vw, 2.25rem);
  --text-2xl: clamp(2rem, 1.2rem + 2.5vw, 3.5rem);
  --radius-sm: .25rem;
  --radius-md: .5rem;
  --radius-lg: .875rem;
  --radius-full: 9999px;
  --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.07), 0 1px 2px rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 14px rgba(0, 0, 0, 0.08), 0 2px 6px rgba(0, 0, 0, 0.05);
  --transition: 180ms cubic-bezier(0.16, 1, 0.3, 1);
  --content-default: 860px;
}

*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  -webkit-font-smoothing: antialiased;
  scroll-behavior: smooth;
  scroll-padding-top: 5rem;
}

body {
  font-family: var(--font-body);
  font-size: var(--text-base);
  font-weight: 300;
  color: var(--color-text);
  background: var(--color-bg);
  line-height: 1.65;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

a {
  color: inherit;
  text-decoration: none;
}

button {
  cursor: pointer;
  background: none;
  border: none;
  font: inherit;
}

.preview-page {
  max-width: 860px;
  margin-inline: auto;
  padding: var(--space-10) var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-12);
}

.preview-label {
  font-size: var(--text-xs);
  font-weight: 700;
  letter-spacing: .14em;
  text-transform: uppercase;
  color: var(--color-text-faint);
  margin-bottom: var(--space-4);
}

/* ── NAV ────────────────────────────────────────────────── */
.site-nav {
  position: sticky;
  top: 0;
  z-index: 50;
  background: rgba(255, 255, 255, 0.92);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-bottom: 1px solid var(--color-divider);
}

.site-nav__inner {
  max-width: var(--content-default);
  margin-inline: auto;
  padding: var(--space-3) var(--space-6);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
}

.site-nav__back {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--text-xs);
  font-weight: 600;
  letter-spacing: .08em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  transition: color var(--transition);
}

.site-nav__back:hover {
  color: var(--color-primary);
}

.site-nav__back svg {
  width: 14px;
  height: 14px;
  stroke: currentColor;
  stroke-width: 2;
  transition: transform var(--transition);
}

.site-nav__back:hover svg {
  transform: translateX(-3px);
}

.site-nav__title {
  font-family: var(--font-display);
  font-size: var(--text-sm);
  font-weight: 600;
  color: var(--color-text);
  letter-spacing: .01em;
}

/* ── PAGE LAYOUT ─────────────────────────────────────────── */
.experience-page {
  max-width: var(--content-default);
  margin-inline: auto;
  padding: var(--space-10) var(--space-6) var(--space-16);
  display: flex;
  flex-direction: column;
  gap: var(--space-12);
}

/* ── PAGE HEADER ─────────────────────────────────────────── */
.page-header {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.page-header__eyebrow {
  font-size: var(--text-xs);
  font-weight: 700;
  letter-spacing: .14em;
  text-transform: uppercase;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

.page-header__title {
  font-family: var(--font-display);
  font-size: var(--text-2xl);
  font-weight: 600;
  line-height: 1.15;
  color: var(--color-text);
  margin-bottom: var(--space-4);
  letter-spacing: -0.01em;
}

.page-header__subtitle {
  font-size: var(--text-lg);
  font-weight: 400;
  color: var(--color-text-muted);
  max-width: 56ch;
  line-height: 1.7;
  align-self: center;
  text-align: center;
  padding-top: var(--space-10);
}

/* ── SECTION LABEL ─────────────────────────────────── */
.section-label {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  margin-bottom: var(--space-6);
}

.section-label__text {
  font-size: var(--text-xs);
  font-weight: 700;
  letter-spacing: .16em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  white-space: nowrap;
}

.section-label__line {
  flex: 1;
  height: 1px;
  background: var(--color-divider);
}

/* ── E1: CONTEXT BLOCK ─────────────────────────────────── */
.context-block {
  border-left: none;
  padding-left: 0;
  margin-inline: auto;
  position: relative;
  padding-top: var(--space-10);
}

.context-block::before {
  content: "";
  display: block;
  width: 32px;
  height: 3px;
  background: var(--color-primary);
  margin-bottom: var(--space-5);
}

.context-block p {
  font-size: var(--text-lg);
  font-weight: 300;
  color: var(--color-text);
  line-height: 1.7;
}

.context-block p:first-of-type {
  font-family: var(--font-display);
  font-weight: 500;
  font-size: var(--text-xl);
  color: var(--color-text);
  line-height: 1.4;
}

.context-block p:not(:first-of-type) {
  font-size: var(--text-lg);
  font-weight: 300;
  color: var(--color-text);
  line-height: 1.7;
  max-width: 70ch;
  padding-top: var(--space-4);
}

.context-block p:last-of-type {
  color: var(--color-text-muted);
  padding: 0;
  max-width: 67ch;
}

.context-block p + p {
  margin-top: var(--space-4);
  font-size: var(--text-base);
  color: var(--color-text-muted);
}

/* ── E2: SNAPSHOT CARD ─────────────────────────────────── */
.snapshot-card {
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-top: 2px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-8);
  border-top-color: var(--color-primary);
}

/* Domain top-border — mirrors E5 card system
.snapshot-card[data-domain="engineering"] {
  border-top-color: var(--color-domain-engineering);
}

.snapshot-card[data-domain="data"] {
  border-top-color: var(--color-domain-data);
}

.snapshot-card[data-domain="product"] {
  border-top-color: var(--color-domain-product);
}

.snapshot-card[data-domain="growth"] {
  border-top-color: var(--color-domain-growth);
}
*/

.snapshot-card__meta {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(min(180px, 100%), 1fr));
  gap: var(--space-5) var(--space-8);
  margin-bottom: var(--space-6);
}

.snapshot-card__divider {
  height: 1px;
  background: var(--color-divider);
  margin-bottom: var(--space-6);
}

.snapshot-item__key {
  font-size: var(--text-xs);
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--color-text-faint);
  margin-bottom: var(--space-1);
}

.snapshot-item__value {
  font-size: var(--text-sm);
  font-weight: 400;
  color: var(--color-text);
  line-height: 1.4;
}

/* Prominent fields — Role and Type */
.snapshot-item--prominent .snapshot-item__value {
  font-size: var(--text-base);
  font-weight: 600;
}

/* Links */
.snapshot-item__value a {
  color: var(--color-text);
  border-bottom: 1px solid var(--color-border);
  transition: border-color var(--transition), color var(--transition);
}

.snapshot-item__value a:hover {
  color: var(--color-primary);
  border-bottom-color: var(--color-primary);
}

/* ── Highlights ─────────────────────────────────────────── */
.snapshot-card__highlights-label {
  font-size: var(--text-xs);
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--color-text-faint);
  margin-bottom: var(--space-3);
}

.snapshot-card__chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}

.achievement-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-bg);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4) var(--space-1) var(--space-3);
  font-size: var(--text-xs);
  font-weight: 400;
  color: var(--color-text-muted);
  line-height: 1.4;
}

.achievement-chip__dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  flex-shrink: 0;
  background: var(--color-primary); /* fallback if no domain set */
}

/* Domain-colored dots — same four colors, same system */
.achievement-chip[data-domain="engineering"] .achievement-chip__dot {
  background: var(--color-domain-engineering);
}

.achievement-chip[data-domain="data"] .achievement-chip__dot {
  background: var(--color-domain-data);
}

.achievement-chip[data-domain="product"] .achievement-chip__dot {
  background: var(--color-domain-product);
}

.achievement-chip[data-domain="growth"] .achievement-chip__dot {
  background: var(--color-domain-growth);
}


/* Subtle chip tint matching domain */
.achievement-chip[data-domain="engineering"] {
  border-color: color-mix(in srgb, var(--color-domain-engineering) 20%, transparent);
}

.achievement-chip[data-domain="data"] {
  border-color: color-mix(in srgb, var(--color-domain-data) 20%, transparent);
}

.achievement-chip[data-domain="product"] {
  border-color: color-mix(in srgb, var(--color-domain-product) 20%, transparent);
}

.achievement-chip[data-domain="growth"] {
  border-color: color-mix(in srgb, var(--color-domain-growth) 20%, transparent);
}

/* ── ELEMENT 3 — IN NUMBERS / STAT COUNTER ─────────────────── */
.stat-counter-section {
  padding-block: var(--space-4);
}

.stat-counter {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}

.stat-counter__item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: var(--space-2);
  opacity: 0;
  transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

/* The animated number — domain color threads through here */
.stat-counter__number {
  font-family: var(--font-body);
  font-size: var(--text-2xl);
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
  color: var(--color-text-muted);   /* default fallback */
  transition: color 0.3s ease;
}

/* Domain color on the number */
.stat-counter__item[data-domain="engineering"] .stat-counter__number {
  color: var(--color-domain-engineering);
}

.stat-counter__item[data-domain="data"] .stat-counter__number {
  color: var(--color-domain-data);
}

.stat-counter__item[data-domain="product"] .stat-counter__number {
  color: var(--color-domain-product);
}

.stat-counter__item[data-domain="growth"] .stat-counter__number {
  color: var(--color-domain-growth);
}

.stat-counter__label {
  font-size: var(--text-sm);
  color: var(--color-text-muted);
  line-height: 1.4;
  max-width: 14ch;
}

/* Scroll reveal — fade in as a group, no layout shift */
.stat-counter__item {
  opacity: 0;
  transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.stat-counter__item.is-visible {
  opacity: 1;
}

/* Staggered delay per item */
.stat-counter__item:nth-child(1) { transition-delay: 0ms; }
.stat-counter__item:nth-child(2) { transition-delay: 80ms; }
.stat-counter__item:nth-child(3) { transition-delay: 160ms; }
.stat-counter__item:nth-child(4) { transition-delay: 240ms; }

/* Mobile — 2×2 grid */
@media (max-width: 640px) {
  .stat-counter {
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-8) var(--space-4);
  }
}

/* ── E4: STACK GRID ────────────────────────────────────── */
.stack-grid {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}

.stack-group__label {
  font-size: var(--text-xs);
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--color-text-faint);
  margin-bottom: var(--space-3);
}

.stack-group__items {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}

.stack-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4) var(--space-1) var(--space-2);
  transition: background var(--transition), box-shadow var(--transition);
  cursor: default;
}

.stack-badge:hover {
  background: var(--color-surface-2);
  box-shadow: var(--shadow-sm);
}

.stack-badge img {
  width: 18px;
  height: 18px;
  object-fit: contain;
  opacity: .80;
}

.stack-badge__name {
  font-size: var(--text-xs);
  font-weight: 600;
  color: var(--color-text);
  letter-spacing: .01em;
}

/* text-only badge (human languages, certifications) */
.stack-badge--text {
  padding: var(--space-1) var(--space-4);
}

/* ── Language badge: flag ────────────────────────────────── */
.stack-badge__flag {
  font-size: 1rem;
  line-height: 1;
  flex-shrink: 0;
}

/* ── Language badge: CEFR pill ───────────────────────────── */
.stack-badge__cefr {
  display: inline-flex;
  align-items: center;
  padding: 1px 6px;
  border-radius: 4px;
  font-size: 0.6875rem;
  font-weight: 600;
  letter-spacing: 0.04em;
  line-height: 1.6;
  color: #bf7bff;
  background: rgba(191, 123, 255, 0.10);
  border: 1px solid rgba(191, 123, 255, 0.30);
  flex-shrink: 0;
  margin-left: auto;
}

/* ── Language badge: layout ──────────────────────────────── */
.stack-badge--lang {
  min-width: 11rem;
  gap: 6px;
}

/* ── Text-mark badge (tools with no icon) ────────────────── */
.stack-badge--text {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.stack-badge__mark {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 18px;
  height: 18px;
  border-radius: 4px;
  font-size: 0.5rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  color: #fff;
  flex-shrink: 0;
  line-height: 1;
}

/* ── Credential card grid ────────────────────────────────── */
.stack-group--credentials .stack-group__items,
.stack-group__items--credentials {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 0.75rem;
}

.credential-card {
  display: flex;
  gap: 0.75rem;
  align-items: flex-start;
  background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.07);
  border-radius: 10px;
  padding: 0.9rem 1rem;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
  transition: box-shadow 150ms ease, transform 150ms ease;
}

.credential-card:hover {
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.09);
  transform: translateY(-2px);
}

.credential-card__icon {
  flex-shrink: 0;
  width: 36px;
  height: 36px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  background: #f5f3ee;
}

.credential-card__icon--img {
  background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.07);
}

.credential-card__icon--svg {
  color: var(--color-primary);
}

.credential-card__body {
  flex: 1;
  min-width: 0;
}

.credential-card__title {
  font-size: 0.78rem;
  font-weight: 600;
  color: #1a1a1a;
  line-height: 1.3;
  margin: 0 0 0.2rem;
}

.credential-card__sub {
  font-size: 0.68rem;
  color: #888;
  margin: 0 0 0.4rem;
}

.credential-card__meta {
  display: flex;
  flex-wrap: wrap;
  gap: 0.3rem;
}

.credential-card__context {
  font-size: var(--text-xs);
  color: var(--color-text-muted);
  font-style: italic;
  margin-top: var(--space-1);
  margin-bottom: var(--space-1);
}

/* ── Credential card: org description ───────────────────────── */
.credential-card__org-desc {
  font-size: 0.8rem;
  font-weight: 500;
  color: var(--color-text-faint);
  line-height: 1.5;
  margin: 0.25rem 0 0.35rem;
  max-width: 52ch;
}

/* ── Credential card: bullet learning points ─────────────────── */
.credential-card__bullets {
  list-style: none;
  padding: 0;
  margin: 0.25rem 0 0.45rem;
  display: flex;
  flex-direction: column;
  gap: 0.2rem;
}

.credential-card__bullets li {
  font-size: 0.75rem;
  color: var(--color-text-faint);
  line-height: 1.5;
  padding-left: 0.9rem;
  position: relative;
  max-width: 52ch;
}

.credential-card__bullets li::before {
  content: '·';
  position: absolute;
  left: 0.2rem;
  color: var(--color-text-faint);
  font-weight: 700;
}

.credential-card__link {
  color: inherit;
  text-decoration: none;
  border-bottom: 1px solid var(--color-border);
  transition: border-color var(--transition-interactive),
              color var(--transition-interactive);
}

.credential-card__link:hover {
  color: var(--color-primary);
  border-bottom-color: var(--color-primary);
}

/* ── Credential pills ────────────────────────────────────── */
.credential-pill {
  display: inline-block;
  font-size: 0.6rem;
  padding: 0.15rem 0.5rem;
  border-radius: 9999px;
  font-weight: 600;
  letter-spacing: 0.04em;
  line-height: 1.5;
}

.credential-pill--year {
  background: #f5f3ee;
  color: #888;
  border: 1px solid #e0ddd8;
}

.credential-pill--gpa {
  background: #f0f7f0;
  color: #3a7a3a;
  border: 1px solid #c6e0c6;
}

.credential-pill--score {
  background: #f0f4ff;
  color: #4a6fc4;
  border: 1px solid #c6d4f0;
}

.credential-pill--cert {
  background: rgba(191, 123, 255, 0.10);
  color: #bf7bff;
  border: 1px solid rgba(191, 123, 255, 0.30);
}

.credential-pill--award {
  background: #fdf8ee;
  color: #a07820;
  border: 1px solid #e8d9a8;
}

/* ── E5: ABILITY GRID ──────────────────────────────────── */
.ability-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(min(260px, 100%), 1fr));
  gap: var(--space-4);
}

.ability-card {
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-top: 2px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: var(--space-5);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: box-shadow var(--transition), background var(--transition);
}

.ability-card:hover {
  box-shadow: var(--shadow-md);
  background: var(--color-surface-2);
}

.ability-card__icon {
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.ability-card__icon svg {
  width: 20px;
  height: 20px;
  stroke-width: 1.5;
}

.ability-card__title {
  font-size: var(--text-sm);
  font-weight: 700;
  color: var(--color-text);
  line-height: 1.3;
}

.ability-card__desc {
  font-size: var(--text-xs);
  font-weight: 300;
  color: var(--color-text-muted);
  line-height: 1.6;
  flex: 1;
}

.ability-card__tags {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-1);
  margin-top: auto;
}

.ability-tag {
  display: inline-flex;
  align-items: center;
  font-size: 10px;
  font-weight: 600;
  font-family: var(--font-body, sans-serif);
  color: var(--color-text-muted);
  background: var(--color-surface-2, #f0ede8);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-full);
  padding: 2px 8px;
  letter-spacing: 0.01em;
  white-space: nowrap;
  line-height: 1.5;
}

/* ── Domain accents ───────────────────────────────────── */
.ability-card[data-domain="engineering"] {
  border-top: 2px solid var(--color-domain-engineering);
}

.ability-card[data-domain="engineering"] .ability-card__icon {
  color: var(--color-domain-engineering);
}

.ability-card[data-domain="data"] {
  border-top: 2px solid var(--color-domain-data);
}

.ability-card[data-domain="data"] .ability-card__icon {
  color: var(--color-domain-data);
}

.ability-card[data-domain="product"] {
  border-top: 2px solid var(--color-domain-product);
}

.ability-card[data-domain="product"] .ability-card__icon {
  color: var(--color-domain-product);
}

.ability-card[data-domain="growth"] {
  border-top: 2px solid var(--color-domain-growth);
}

.ability-card[data-domain="growth"] .ability-card__icon {
  color: var(--color-domain-growth);
}

/* ── Legend ───────────────────────────────────────────── */
.ability-legend {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
}

.ability-legend__item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--text-xs);
  font-weight: 500;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  border: 1px solid transparent;
  letter-spacing: 0.02em;
}

.ability-legend__dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  flex-shrink: 0;
}

.ability-legend__item--engineering {
  color: var(--color-domain-engineering);
  background: color-mix(in srgb, var(--color-domain-engineering) 10%, transparent);
  border-color: color-mix(in srgb, var(--color-domain-engineering) 25%, transparent);
}

.ability-legend__item--engineering .ability-legend__dot {
  background: var(--color-domain-engineering);
}

.ability-legend__item--data {
  color: var(--color-domain-data);
  background: color-mix(in srgb, var(--color-domain-data) 10%, transparent);
  border-color: color-mix(in srgb, var(--color-domain-data) 25%, transparent);
}

.ability-legend__item--data .ability-legend__dot {
  background: var(--color-domain-data);
}

.ability-legend__item--product {
  color: var(--color-domain-product);
  background: color-mix(in srgb, var(--color-domain-product) 10%, transparent);
  border-color: color-mix(in srgb, var(--color-domain-product) 25%, transparent);
}

.ability-legend__item--product .ability-legend__dot {
  background: var(--color-domain-product);
}

.ability-legend__item--growth {
  color: var(--color-domain-growth);
  background: color-mix(in srgb, var(--color-domain-growth) 10%, transparent);
  border-color: color-mix(in srgb, var(--color-domain-growth) 25%, transparent);
}

.ability-legend__item--growth .ability-legend__dot {
  background: var(--color-domain-growth);
}

/* ── E6: WORKS GRID / EVIDENCE CARDS ───────────────────────────────── */
.evidence-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(min(300px, 100%), 1fr));
  gap: var(--space-4);
}

/* ── Base card ───────────────────────────────────────────── */
.evidence-card {
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-left: 3px solid var(--color-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: box-shadow var(--transition);
  display: flex;
  flex-direction: column;
}

.evidence-card:hover {
  box-shadow: var(--shadow-md);
}

/* ── Domain left-border threading from E4 ────────────────── */
.evidence-card[data-domain="engineering"] {
  border-left-color: var(--color-domain-engineering);
}

.evidence-card[data-domain="data"] {
  border-left-color: var(--color-domain-data);
}

.evidence-card[data-domain="product"] {
  border-left-color: var(--color-domain-product);
}

.evidence-card[data-domain="growth"] {
  border-left-color: var(--color-domain-growth);
}

/* ── Domain tag pill (above title in body) ───────────────── */
.evidence-card__domain-tag {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  border-radius: var(--radius-full);
  margin-bottom: var(--space-2);
}

.evidence-card__domain-tag-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  flex-shrink: 0;
}

.evidence-card[data-domain="engineering"] .evidence-card__domain-tag {
  color: var(--color-domain-engineering);
}

.evidence-card[data-domain="engineering"] .evidence-card__domain-tag-dot {
  background: var(--color-domain-engineering);
}

.evidence-card[data-domain="data"] .evidence-card__domain-tag {
  color: var(--color-domain-data);
}

.evidence-card[data-domain="data"] .evidence-card__domain-tag-dot {
  background: var(--color-domain-data);
}

.evidence-card[data-domain="product"] .evidence-card__domain-tag {
  color: var(--color-domain-product);
}

.evidence-card[data-domain="product"] .evidence-card__domain-tag-dot {
  background: var(--color-domain-product);
}

.evidence-card[data-domain="growth"] .evidence-card__domain-tag {
  color: var(--color-domain-growth);
}

.evidence-card[data-domain="growth"] .evidence-card__domain-tag-dot {
  background: var(--color-domain-growth);
}

/* ── VARIANT A: Single image ─────────────────────────────── */
.evidence-card__thumb {
  width: 100%;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: var(--color-surface-2);
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.evidence-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 420ms cubic-bezier(0.16, 1, 0.3, 1);
}

.evidence-card__thumb--placeholder {
  font-size: var(--text-xs);
  font-weight: 600;
  letter-spacing: .08em;
  text-transform: uppercase;
  color: var(--color-text-faint);
}

.evidence-card:hover .evidence-card__thumb img { transform: scale(1.03); }

/* ── VARIANT B: Slideshow ────────────────────────────────── */
.evidence-card__slides {
  width: 100%;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: var(--color-surface-2);
  position: relative;
  flex-shrink: 0;
}

.evidence-card__slides-track {
  display: flex;
  width: 100%;
  height: 100%;
}

.evidence-card__slide {
  min-width: 100%;
  height: 100%;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  transition: opacity 600ms cubic-bezier(0.16, 1, 0.3, 1);
  pointer-events: none;
}

.evidence-card__slide.is-active {
  opacity: 1;
  pointer-events: auto;
}

.evidence-card__slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Dot indicators */
.evidence-card__slide-dots {
  position: absolute;
  bottom: var(--space-2);
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 5px;
  z-index: 2;
}

.evidence-card__slide-dot {
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: rgba(255,255,255,0.45);
  transition: background var(--transition), transform var(--transition);
  cursor: pointer;
  border: none;
  padding: 0;
}

.evidence-card__slide-dot.is-active {
  background: #fff;
  transform: scale(1.3);
}

/* Domain-colored active dot */
.evidence-card[data-domain="engineering"] .evidence-card__slide-dot.is-active {
  background: var(--color-domain-engineering);
}

.evidence-card[data-domain="data"] .evidence-card__slide-dot.is-active {
  background: var(--color-domain-data);
}

.evidence-card[data-domain="product"] .evidence-card__slide-dot.is-active {
  background: var(--color-domain-product);
}

.evidence-card[data-domain="growth"] .evidence-card__slide-dot.is-active {
  background: var(--color-domain-growth);
}

/* ── VARIANT C: Video (YouTube iframe or <video> file) ───── */
.evidence-card__video {
  width: 100%;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: #0e0e0e;
  position: relative;
  flex-shrink: 0;
  border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}

.evidence-card__video[data-orientation="portrait"] {
  aspect-ratio: 9/16;
  max-height: 480px;
}

.evidence-card__video iframe,
.evidence-card__video video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border: none;
}

/* Sound toggle button */
.evidence-card__sound-btn {
  position: absolute;
  bottom: var(--space-3);
  right: var(--space-3);
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: rgba(0,0,0,0.55);
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,0.15);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 3;
  transition: background var(--transition);
}

.evidence-card__sound-btn:hover { background: rgba(0,0,0,0.8); }
.evidence-card__sound-btn svg { width: 14px; height: 14px; stroke: #fff; }

/* ── Card body ────────────────────────────────────── */
.evidence-card__body {
  padding: var(--space-4) var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.evidence-card__title {
  font-size: var(--text-sm);
  font-weight: 700;
  color: var(--color-text);
  margin-bottom: var(--space-2);
  line-height: 1.3;
}

.evidence-card__bullets {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-1);
  margin-top: auto;
}

.evidence-card__bullets li {
  font-size: var(--text-xs);
  font-weight: 300;
  color: var(--color-text-muted);
  line-height: 1.5;
  padding-left: var(--space-4);
  position: relative;
}

.evidence-card__bullets li::before {
  content: "";
  position: absolute;
  left: 4px;
  top: 6px;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: var(--color-text-faint);
}

/* ── E7: IN DEPTH ACCORDION ────────────────────────────── */
.story-accordion {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
}

.story-accordion__item + .story-accordion__item {
  border-top: 1px solid var(--color-divider);
}

.story-accordion__trigger {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--space-5) var(--space-6);
  background: var(--color-surface);
  border: none;
  cursor: pointer;
  gap: var(--space-4);
  transition: background var(--transition);
}

.story-accordion__trigger:hover {
  background: var(--color-surface-2);
}

.story-accordion__trigger-left {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  min-width: 0;
}

.story-accordion__trigger-label {
  font-size: var(--text-sm);
  font-weight: 700;
  color: var(--color-text);
  letter-spacing: .02em;
  text-align: left;
}

/* Domain tag on trigger — same dot+label system as E6 */
.story-accordion__domain-tag {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  flex-shrink: 0;
}

.story-accordion__domain-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  flex-shrink: 0;
}

.story-accordion__item[data-domain="engineering"] .story-accordion__domain-tag {
  color: var(--color-domain-engineering);
}

.story-accordion__item[data-domain="engineering"] .story-accordion__domain-dot {
  background: var(--color-domain-engineering);
}

.story-accordion__item[data-domain="data"] .story-accordion__domain-tag {
  color: var(--color-domain-data);
}

.story-accordion__item[data-domain="data"] .story-accordion__domain-dot {
  background: var(--color-domain-data);
}

.story-accordion__item[data-domain="product"] .story-accordion__domain-tag {
  color: var(--color-domain-product);
}

.story-accordion__item[data-domain="product"] .story-accordion__domain-dot {
  background: var(--color-domain-product);
}

.story-accordion__item[data-domain="growth"] .story-accordion__domain-tag {
  color: var(--color-domain-growth);
}

.story-accordion__item[data-domain="growth"] .story-accordion__domain-dot {
  background: var(--color-domain-growth);
}

.story-accordion__chevron {
  width: 18px;
  height: 18px;
  color: var(--color-text-muted);
  transition: transform var(--transition);
  flex-shrink: 0;
}

.story-accordion__trigger[aria-expanded="true"] .story-accordion__chevron {
  transform: rotate(180deg);
}

/* Body — domain left-border threads when open */
.story-accordion__body {
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows 380ms cubic-bezier(0.16, 1, 0.3, 1);
  background: var(--color-bg);
  border-left: 2px solid transparent;
  transition: grid-template-rows 380ms cubic-bezier(0.16, 1, 0.3, 1),
              border-color 380ms cubic-bezier(0.16, 1, 0.3, 1);
}

.story-accordion__body[aria-hidden="false"] {
  grid-template-rows: 1fr;
}

/* Domain left-border on open panel */
.story-accordion__item[data-domain="engineering"] .story-accordion__body[aria-hidden="false"] {
  border-left-color: var(--color-domain-engineering);
}

.story-accordion__item[data-domain="data"] .story-accordion__body[aria-hidden="false"] {
  border-left-color: var(--color-domain-data);
}

.story-accordion__item[data-domain="product"] .story-accordion__body[aria-hidden="false"] {
  border-left-color: var(--color-domain-product);
}

.story-accordion__item[data-domain="growth"] .story-accordion__body[aria-hidden="false"] {
  border-left-color: var(--color-domain-growth);
}

.story-accordion__inner {
  overflow: hidden;
}

.story-accordion__content {
  padding: var(--space-6) var(--space-6) var(--space-8);
  font-size: var(--text-base);
  font-weight: 300;
  color: var(--color-text);
  line-height: 1.8;
  max-width: 66ch;
  margin-inline: auto;
}

.story-accordion__content p + p {
  margin-top: var(--space-4);
}

.story-accordion__content strong {
  font-weight: 600;
  color: var(--color-text);
}

/* Simple list support inside content */
.story-accordion__content ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
  margin-top: var(--space-3);
}

.story-accordion__content ul li {
  padding-left: var(--space-4);
  position: relative;
}

.story-accordion__content ul li::before {
  content: "";
  position: absolute;
  left: 4px;
  top: 8px;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: var(--color-text-faint);
}

.story-accordion__gallery {
  display: flex;
  gap: var(--space-4);
  margin-top: var(--space-4);
  overflow-x: auto;
  scroll-snap-type: x proximity;
}

.story-accordion__gallery img {
  flex: 0 0 auto;
  border-radius: var(--radius-md);
  scroll-snap-align: start;
  object-fit: cover;
}

/* ── SCROLL REVEAL ─────────────────────────────────────── */
@supports(animation-timeline:scroll()) {
  .fade-in {
    opacity: 0;
    animation: reveal-fade linear both;
    animation-timeline: view();
    animation-range: entry 0% entry 80%;
  }
}

@keyframes reveal-fade {
  to {
    opacity: 1;
  }
}

@media(prefers-reduced-motion:reduce) {
  .fade-in {
    opacity: 1;
    animation: none;
  }

  .stat-counter__item {
    opacity: 1;
  }
}

/* ── RESPONSIVE ────────────────────────────────────────── */
@media(max-width:600px) {
  .preview-page {
    padding: var(--space-6) var(--space-4);
    gap: var(--space-8);
  }

  .snapshot-card {
    padding: var(--space-5);
  }

  .ability-grid {
    grid-template-columns: 1fr;
  }

  .page-header__title {
    font-size: clamp(1.75rem, 8vw, 2.5rem);
  }

  .site-nav__title {
    display: none;
  }
}
</style>

<!-- Builder-specific Style Fixes/Overrides -->
<style>
html {
  font-size: 100% !important;
}

body {
  font-size: 16px !important;
}

.experience-page {
  max-width: 1100px !important;
  width: 100% !important;
  margin: 0 auto !important;
  padding: 0 24px 96px !important;
}

.stat-counter {
  grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  gap: 24px !important;
}

.stat-counter__number {
  font-size: clamp(2rem, 5vw, 4rem) !important;
  line-height: 1 !important;
}

.stat-counter__label {
  margin-top: 10px;
}

.evidence-grid {
  grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  gap: 24px !important;
}

@media (max-width: 900px) {
  .stat-counter {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }

  .evidence-grid {
    grid-template-columns: 1fr !important;
  }
}

@media (max-width: 560px) {
  .experience-page {
    padding: 0 16px 72px !important;
  }

  .stat-counter {
    grid-template-columns: 1fr !important;
  }
}
</style>	
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18bddd8a85d05531bf2b97cfabf9ffd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e430a4143ca9337839c74f6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a190ffad0b3e00c9cfe515ee38fb5f8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a190ffad0b4c00b2f9f83b0f0bfac1e1" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/cc312fb075b5939bdd6009ed9a947c47_502x176_fit.png?ts=1786623801"></a></div></div></div><div id="a190ffad0b6300a7ab401fb62000cfae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a190ffad0b6d007e8c311f4f42ffc0a3" class="wb_element wb_element_picture" data-plugin="Picture" title="GeorgeDreemer.com"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="GeorgeDreemer.com" src="gallery_gen/05e486d9ea9d35f61ede8fdf94b705e3_560x294_fit.png?ts=1786623801"></a></div></div></div></div></div><div id="a19127dc957400c0691f8985137b6c6f" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
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
					'class' => 'wb_this_page_menu_item active',
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
)); ?><div class="clearfix"></div></div></div></div><div id="a18bddd77e430b4ce3e980126becfd36" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e430ced1f7965df7ab4bca9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e430d9c3ad526ddc7851ded" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/thoughtbubble-logo%201.svg?ts=1786623801"></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a18bddd8a85d05531bf2b97cfabf9ffd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e430eec23ab9fd8533ca3f7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-4x_compressed-ts1661540570.png?ts=1786623801"></div></div></div><div id="a19f60e67d0200c8d407b5be07be8bdd" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;"><main class="experience-page" role="main">
    
    <!-- ============================================================
        ELEMENT 1 — CONTEXT BLOCK
    ============================================================ -->
    <section aria-label="E1: CONTEXT BLOCK" class="fade-in">
      <div class="context-block">
        <p>A knowledge-first social network, built from scratch by two seniors in high
        school. Just a love for web development, zero budget, launched in the USA and expanded to reach 900+ users
        across the world.</p>
        <p>thoughtbubble was designed to shift social media away from entertainment toward sharing
          ideas, insights, and self-improvement content.</p>
        <p>We built it to alpha in under a year, hand-coding every layer ourselves custom authentication, MySQL architecture,
        real-time notifications, and the full social product without a framework, CMS, or boilerplate.</p>
      </div>
    </section>
    
    <!-- ============================================================
        ELEMENT 2 — SNAPSHOT CARD
    ============================================================ -->
    <section aria-label="E2: SNAPSHOT CARD" class="fade-in">
      <div class="snapshot-card" data-domain="engineering">
        <div class="snapshot-card__meta">
    
          <div class="snapshot-item snapshot-item--prominent">
            <p class="snapshot-item__key">Role</p>
            <p class="snapshot-item__value">Co-Founder &amp; Full-Stack Developer</p>
          </div>
          <div class="snapshot-item snapshot-item--prominent">
            <p class="snapshot-item__key">Type</p>
            <p class="snapshot-item__value">Social Network Startup</p>
          </div>
          <div class="snapshot-item">
            <p class="snapshot-item__key">Timeframe</p>
            <p class="snapshot-item__value">2014 – 2016</p>
          </div>
          <div class="snapshot-item">
            <p class="snapshot-item__key">Location</p>
            <p class="snapshot-item__value">Amherst, MA, United States</p>
          </div>
    
        </div>
        <div class="snapshot-card__divider"></div>
    
        <p class="snapshot-card__highlights-label">Highlights</p>
        <div class="snapshot-card__chips">
          <span class="achievement-chip" data-domain="engineering">
            <span class="achievement-chip__dot"></span>Built full back-end in PHP + MySQL — database, API, and
            server-side logic
          </span>
          <span class="achievement-chip" data-domain="engineering">
            <span class="achievement-chip__dot"></span>Co-built front-end in HTML, CSS, and Javascript — AJAX
            interactions, dynamic content, and responsive design
          </span>
          <span class="achievement-chip" data-domain="engineering">
            <span class="achievement-chip__dot"></span>Built all social features — feed, posts, comments, likes, pins,
            notifications, and profiles
          </span>
          <span class="achievement-chip" data-domain="engineering">
            <span class="achievement-chip__dot"></span>Built registration, login, and account management system
          </span>
          <span class="achievement-chip" data-domain="data">
            <span class="achievement-chip__dot"></span>Collected and analyzed user data to improve engagement and
            retention
          </span>
          <span class="achievement-chip" data-domain="product">
            <span class="achievement-chip__dot"></span>Co-designed UX — feed, profiles, and post system
          </span>
          <span class="achievement-chip" data-domain="product">
            <span class="achievement-chip__dot"></span>Iterated on UI based on direct user feedback
          </span>
          <span class="achievement-chip" data-domain="growth">
            <span class="achievement-chip__dot"></span>Presented product to investors and potential partners at local
            startup events
          </span>
          <span class="achievement-chip" data-domain="growth">
            <span class="achievement-chip__dot"></span>Grew to 900+ registered users with zero ad spend
          </span>
          <span class="achievement-chip" data-domain="growth">
            <span class="achievement-chip__dot"></span>Secured copyright for the platform and managed legal procedures
          </span>
        </div>
      </div>
    </section>
    
    <!-- ============================================================
        ELEMENT 3 — IN NUMBERS / STAT COUNTER
    ============================================================ -->
    <section class="stat-counter-section" aria-label="E3: IN NUMBERS">
      <div class="stat-counter">
    
        <div class="stat-counter__item" data-target="76" data-suffix="+" data-domain="engineering">
          <span class="stat-counter__number" aria-live="polite">0</span>
          <span class="stat-counter__label">Major updates shipped</span>
        </div>
    
        <div class="stat-counter__item" data-target="900" data-prefix="~" data-domain="growth">
          <span class="stat-counter__number" aria-live="polite">0</span>
          <span class="stat-counter__label">Registered users</span>
        </div>
    
        <div class="stat-counter__item" data-target="2" data-domain="product">
          <span class="stat-counter__number" aria-live="polite">0</span>
          <span class="stat-counter__label">Founders, self-taught</span>
        </div>
    
        <div class="stat-counter__item" data-target="2" data-suffix=" yrs" data-domain="data">
          <span class="stat-counter__number" aria-live="polite">0</span>
          <span class="stat-counter__label">Years in operation</span>
        </div>
    
      </div>
    </section>
    
    <!-- ============================================================
        ELEMENT 4 — STACK BADGE GRID
    ============================================================ -->
    <section aria-label="E4: STACK BADGE GRID" class="fade-in">
      <div class="section-label">
        <span class="section-label__text">Stack</span>
        <span class="section-label__line" aria-hidden="true"></span>
      </div>
    
      <div class="stack-grid">
    
        <div class="stack-group">
          <p class="stack-group__label">Languages</p>
          <div class="stack-group__items">
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/php/777bb4" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">PHP</span></span>
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/javascript" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">JavaScript</span></span>
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/html5/e34f26" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">HTML</span></span>
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/css/1572b6" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">CSS</span></span>
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/mysql/4479a1" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">SQL</span></span>
          </div>
        </div>
    
        <div class="stack-group">
          <p class="stack-group__label">Databases</p>
          <div class="stack-group__items">
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/mysql/4479a1" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">MySQL</span></span>
          </div>
        </div>
    
        <div class="stack-group">
          <p class="stack-group__label">Dev Tools</p>
          <div class="stack-group__items">
            <span class="stack-badge stack-badge--text">
              <span class="stack-badge__mark" style="background:#470137;" aria-hidden="true">Dw</span>
              <span class="stack-badge__name">Dreamweaver</span>
            </span>
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/cpanel/ff6c2c" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">cPanel</span></span>
            <span class="stack-badge"><img src="https://cdn.simpleicons.org/namecheap/de3723" alt="" width="18" height="18" loading="lazy"><span class="stack-badge__name">Namecheap</span></span>
          </div>
        </div>
    
        <div class="stack-group">
          <p class="stack-group__label">Design &amp; Creative</p>
          <div class="stack-group__items">
            <span class="stack-badge">
              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%20240%20234%22%3E%3Crect%20width%3D%22240%22%20height%3D%22234%22%20rx%3D%2242%22%20fill%3D%22%23330000%22/%3E%3Ctext%20x%3D%2252%22%20y%3D%22164%22%20font-size%3D%22104%22%20font-family%3D%22Arial%2C%20sans-serif%22%20fill%3D%22%23FF9A00%22%3EAi%3C/text%3E%3C/svg%3E" alt="Adobe Illustrator" width="18" height="18" loading="lazy">
              <span class="stack-badge__name">Illustrator</span>
            </span>
            <span class="stack-badge">
              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%20240%20234%22%3E%3Crect%20width%3D%22240%22%20height%3D%22234%22%20rx%3D%2242%22%20fill%3D%22%23001E36%22/%3E%3Ctext%20x%3D%2252%22%20y%3D%22164%22%20font-size%3D%22104%22%20font-family%3D%22Arial%2C%20sans-serif%22%20fill%3D%22%2331A8FF%22%3EPs%3C/text%3E%3C/svg%3E" alt="Adobe Photoshop" width="18" height="18" loading="lazy">
              <span class="stack-badge__name">Photoshop</span>
            </span>
          </div>
        </div>
    
      </div>
    </section>
    
    <!-- ============================================================
        ELEMENT 5 — ABILITY CARD GRID
    ============================================================ -->
    <section aria-label="E5: ABILITY CARD GRID" class="fade-in">
      <div class="section-label">
        <span class="section-label__text">Abilities</span>
        <span class="section-label__line" aria-hidden="true"></span>
      </div>

      <!-- Legend -->
      <div class="ability-legend">
        <span class="ability-legend__item ability-legend__item--engineering">
          <span class="ability-legend__dot"></span>Engineering
        </span>
        <span class="ability-legend__item ability-legend__item--product">
          <span class="ability-legend__dot"></span>Product
        </span>
        <span class="ability-legend__item ability-legend__item--growth">
          <span class="ability-legend__dot"></span>Growth
        </span>
        <span class="ability-legend__item ability-legend__item--data">
          <span class="ability-legend__dot"></span>Data
        </span>
      </div>

      <div class="ability-grid">

        <div class="ability-card" data-domain="engineering">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <polyline points="16 18 22 12 16 6"></polyline>
              <polyline points="8 6 2 12 8 18"></polyline>
            </svg>
          </div>
          <p class="ability-card__title">Full-Stack Web Development</p>
          <p class="ability-card__desc">Designed and built every layer of the platform without a framework — routing, session handling, database schema, AJAX interactions, and all front-end rendering.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Back-End Architecture</span>
            <span class="ability-tag">Front-End Engineering</span>
            <span class="ability-tag">Database-Driven Development</span>
          </div>
        </div>

        <div class="ability-card" data-domain="engineering">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
          </div>
          <p class="ability-card__title">Auth &amp; Security Systems</p>
          <p class="ability-card__desc">Built custom user authentication from scratch, including the registration, native &amp; Facebook login, session management, password hashing, and access control.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Authentication Engineering</span>
            <span class="ability-tag">Session Management</span>
            <span class="ability-tag">Access Control</span>
          </div>
        </div>

        <div class="ability-card" data-domain="engineering">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <path d="M18 20V10"></path>
              <path d="M12 20V4"></path>
              <path d="M6 20v-6"></path>
            </svg>
          </div>
          <p class="ability-card__title">Real-Time Notifications</p>
          <p class="ability-card__desc">Engineered a live notification system using AJAX polling — likes, comments, follows, and system alerts delivered without a page reload.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Asynchronous UX Flows</span>
            <span class="ability-tag">Event-Driven Logic</span>
            <span class="ability-tag">Notification Systems</span>
          </div>
        </div>

        <div class="ability-card" data-domain="product">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <path d="M12 20h9"></path>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
            </svg>
          </div>
          <p class="ability-card__title">Product Design &amp; UX</p>
          <p class="ability-card__desc">Owned the full UX, from information architecture to pixel-level UI. Designed the feed, post types, user profiles, settings flows, and iteratively improved them based on user feedback from our early adopter community.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">UX Design</span>
            <span class="ability-tag">Interface Architecture</span>
            <span class="ability-tag">Feedback-Driven Iteration</span>
          </div>
        </div>

        <div class="ability-card" data-domain="product">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="2" y1="12" x2="22" y2="12"></line>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
          </div>
          <p class="ability-card__title">Product Vision &amp; Positioning</p>
          <p class="ability-card__desc">Identified a clear gap in the market and built a product positioned around it — a curated,
            knowledge-first social feed three years before mainstream platforms pivoted toward that format.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Product Strategy</span>
            <span class="ability-tag">Market Positioning</span>
            <span class="ability-tag">Category Insight</span>
          </div>
        </div>

        <div class="ability-card" data-domain="growth">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <p class="ability-card__title">Organic User Acquisition</p>
          <p class="ability-card__desc">Grew the platform to ~900 registered users through word-of-mouth and direct
            outreach, with zero paid advertising. Learned early that product quality and community seeding beat any ad
            budget.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Community Seeding</span>
            <span class="ability-tag">Organic Growth Strategy</span>
            <span class="ability-tag">Creator Outreach</span>
          </div>
        </div>

        <div class="ability-card" data-domain="data">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <line x1="18" y1="20" x2="18" y2="10"></line>
              <line x1="12" y1="20" x2="12" y2="4"></line>
              <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
          </div>
          <p class="ability-card__title">Metrics &amp; Behaviour Tracking</p>
          <p class="ability-card__desc">Instrumented the platform to track user sign-ups, engagement rates, post
            frequency — the first time I built a product loop from data to decision.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Product Analytics</span>
            <span class="ability-tag">Behavior Tracking</span>
            <span class="ability-tag">Retention Strategy</span>
          </div>
        </div>

        <div class="ability-card" data-domain="engineering">
          <div class="ability-card__icon">
            <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
              <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
              <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
              <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
            </svg>
          </div>
          <p class="ability-card__title">Database Architecture</p>
          <p class="ability-card__desc">Designed a relational MySQL schema capable of supporting users, posts, comments,
            likes, pins, notifications, hashtags, and categories simultaneously.</p>
          <div class="ability-card__tags">
            <span class="ability-tag">Relational Schema Design</span>
            <span class="ability-tag">Data Modeling</span>
            <span class="ability-tag">Scalable Content Structures</span>
          </div>
        </div>

      </div>
    </section>
    
    <!-- ============================================================
        ELEMENT 6 — WORKS CARD GRID
    ============================================================ -->
    <section aria-label="E6: WORKS CARD GRID" class="fade-in">
      <div class="section-label">
        <span class="section-label__text">Works</span>
        <span class="section-label__line" aria-hidden="true"></span>
      </div>
    
      <div class="evidence-grid">
    
        <!-- Card 1: Social Systems (slideshow, 2 images) -->
        <div class="evidence-card" data-domain="engineering">
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
            <p class="evidence-card__title">Social Systems</p>
            <ul class="evidence-card__bullets">
              <li>Built all social systems — posts, likes, comments, pins</li>
              <li>Developed a hashtag system &amp; search for content curation &amp; discovery</li>
              <li>Implemented real-time feed &amp; notification system for social interactions</li>
              <li>Designed &amp; built user profiles with various customizations</li>
            </ul>
          </div>
        </div>
    
        <!-- Card 2: User Account Systems & Controls -->
        <div class="evidence-card" data-domain="engineering">
          <div class="evidence-card__thumb">
            <img src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-login_alpha-min.png" alt="thoughtbubble login screen with email login and Facebook login option" width="600" height="338" loading="lazy">
          </div>
          <div class="evidence-card__body">
            <span class="evidence-card__domain-tag"><span class="evidence-card__domain-tag-dot"></span>Engineering</span>
            <p class="evidence-card__title">User Account Systems &amp; Controls</p>
            <ul class="evidence-card__bullets">
              <li>Built native registration and login system</li>
              <li>Integrated Facebook OAuth login alongside native accounts</li>
              <li>Developed various user control systems — settings, bug reporting, &amp; account controls</li>
              <li>Implemented a secure session management system with hashed passwords and access control</li>
            </ul>
          </div>
        </div>
    
        <!-- Card 3: User Feedback Analysis -->
        <div class="evidence-card" data-domain="data">
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
            <p class="evidence-card__title">User Feedback Analysis</p>
            <ul class="evidence-card__bullets">
              <li>Tracked user engagement, sign-ups, and feature usage directly via MySQL queries</li>
              <li>Collected and reviewed user feedback to identify recurring pain points and requests</li>
              <li>Used engagement patterns to prioritize which features to build or cut</li>
              <li>Shipped 76+ major updates over 2 years, largely guided by this feedback loop</li>
            </ul>
          </div>
        </div>
    
        <!-- Card 4: Pitching & Networking -->
        <div class="evidence-card" data-domain="growth">
          <div class="evidence-card__thumb">
            <img src="https://georgedreemer.com/public_img/thoughtbubble/thoughtbubble-lawyerdesk-min.png" alt="Thoughtbubble copyright paperwork scatted on the desk" width="600" height="338" loading="lazy">
          </div>
          <div class="evidence-card__body">
            <span class="evidence-card__domain-tag"><span class="evidence-card__domain-tag-dot"></span>Growth</span>
            <p class="evidence-card__title">Pitching, Networking &amp; Legal Coordination</p>
            <ul class="evidence-card__bullets">
              <li>Presented the platform at local startup events &amp; shark tanks</li>
              <li>Actively networked across regional entrepreneurship communities and mentor programs</li>
              <li>Handled the business-facing side of the company solo while co-building the product</li>
              <li>Coordinated the legal side of the business — secured copyright, registered entity &amp; filed necessary paperwork</li>
            </ul>
          </div>
        </div>
    
      </div>
    </section>
    
    <!-- ============================================================
        ELEMENT 7 — IN DEPTH ACCORDION
    ============================================================ -->
    <section aria-label="E7: IN DEPTH ACCORDION" class="fade-in">
      <div class="section-label">
        <span class="section-label__text">In Depth</span>
        <span class="section-label__line" aria-hidden="true"></span>
      </div>
    
      <div class="story-accordion" role="list">
    
        <!-- Item 1: Engineering — open by default -->
        <div class="story-accordion__item" data-domain="engineering" role="listitem">
          <button class="story-accordion__trigger" aria-expanded="true" aria-controls="story-panel-1">
            <span class="story-accordion__trigger-left">
              <span class="story-accordion__domain-tag">
                <span class="story-accordion__domain-dot"></span>Engineering
              </span>
              <span class="story-accordion__trigger-label">Built from scratch in high school</span>
            </span>
            <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="story-accordion__body" id="story-panel-1" aria-hidden="false">
            <div class="story-accordion__inner">
              <div class="story-accordion__content">
                <p>Nikolay and I built thoughtbubble in PHP, JavaScript, and MySQL. There was no framework, no CMS,
                  no boilerplate — we'd hit wall after wall and just keep watching web development videos until it clicked.
                  I built the full back-end of thoughtbubble and co-developed the front-end, while also designing the full
                  icon set and logo in Adobe Illustrator.</p>
                <p>I built the back-end systems below, and co-developed the front-end and social feed logic with Nikolay:</p>
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
                <p>The infrastructure ran on shared hosting with a manually configured MySQL database. There was no version control
                  beyond file backups, no CI, no staging environment. It was scrappy by any standard, but it worked.</p>
                <p>We scaled to nearly a thousand users, and every line of it was ours. Every feature or bug fix was a
                  new learning experience and a sleepless night.</p>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Item 2: Product -->
        <div class="story-accordion__item" data-domain="product" role="listitem">
          <button class="story-accordion__trigger" aria-expanded="false" aria-controls="story-panel-2">
            <span class="story-accordion__trigger-left">
              <span class="story-accordion__domain-tag">
                <span class="story-accordion__domain-dot"></span>Product
              </span>
              <span class="story-accordion__trigger-label">The idea that was three years early</span>
            </span>
            <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="story-accordion__body" id="story-panel-2" aria-hidden="true">
            <div class="story-accordion__inner">
              <div class="story-accordion__content">
                <p>The pitch was simple: a social network where your feed only teaches you things. No vacation photos, no cat
                  videos — just insights from books, actionable quotes, and self-improvement content. We built it in 2014,
                  inspired by the rise of Gary Vaynerchuk and Tai Lopez and the audiences forming around them. People were
                  already sharing nuggets from books, videos, and articles — but existing platforms weren't built to hold that
                  kind of content well. We saw a clear gap: entertainment-first platforms simply weren't built to support
                  information-rich content.</p>
                <p>So we set out to build something different. We envisioned posts where the UI would include things like book
                  titles, author, and reference material. A category system built around four pillars of self-improvement:
                  health, wealth, relationships, and fulfillment. The user profile would read more like a personal development
                  journal — with pinned posts, categorized content, and a space for reflection.</p>
                <p>What we were describing — a curated, knowledge-first feed with social mechanics — is close to what Twitter's
                  long-form threads, Substack, and LinkedIn's creator-focused pivot eventually became, three years after we
                  shipped ours. We were two teenagers with no funding and no network, so the timing didn't matter in the end.
                  But the product instinct was right.</p>
                <p>Looking at how much that space has grown since, there's real satisfaction in knowing two teenagers with no
                   prior experience, no funding, and no network saw it coming three years early. I sometimes wonder what we could
                   have built with even a fraction of the resources those platforms eventually had — but that experience taught
                   me that the desired outcome isn't always the best outcome. There's a deeper plan at work, and life had other
                   things in store beyond scaling thoughtbubble to its full potential.</p>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Item 3: Growth -->
        <div class="story-accordion__item" data-domain="growth" role="listitem">
          <button class="story-accordion__trigger" aria-expanded="false" aria-controls="story-panel-3">
            <span class="story-accordion__trigger-left">
              <span class="story-accordion__domain-tag">
                <span class="story-accordion__domain-dot"></span>Growth
              </span>
              <span class="story-accordion__trigger-label">How we got 900 users without spending a dollar</span>
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
        </div>
    
        <!-- Item 4: Legal -->
        <div class="story-accordion__item" data-domain="growth" role="listitem">
          <button class="story-accordion__trigger" aria-expanded="false" aria-controls="story-panel-4">
            <span class="story-accordion__trigger-left">
              <span class="story-accordion__domain-tag">
                <span class="story-accordion__domain-dot"></span>Growth
              </span>
              <span class="story-accordion__trigger-label">We got ripped off by a lawyer - got the copyright
                anyway</span>
            </span>
            <svg class="story-accordion__chevron" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="story-accordion__body" id="story-panel-4" aria-hidden="true">
            <div class="story-accordion__inner">
              <div class="story-accordion__content">
                <p>At some point, two teenagers decided their app needed real legal protection — because apparently "two guys
                  with a login page" doesn't hold up as a legal entity on its own. So we hired a copyright lawyer, nodded
                  confidently at documents we barely understood, and paid real money to learn what a retainer is the hard way.
                  He did the bare minimum, billed like he'd written us a constitution, and left us wondering if we'd just been
                  the world's youngest, most polite scam victims.</p>
                <p>Classic story. We pushed through it anyway, filed everything properly ourselves where we could, and got the
                  copyright registered. It cost more than it should have and took longer than it should have — but it's ours, on
                  paper, forever, which is more than I can say for the money we spent on that lawyer.</p>
                <p>In hindsight, it was my first real lesson in the unglamorous side of building something — the admin, the fine
                  print, the people who see inexperience as an opportunity rather than something to protect. Nobody warns you
                  that "founding a startup" sometimes means arguing about an invoice with a man in a blazer. I'd handle it very
                  differently now. But we got the copyright — and honestly, that's a better ending than most first-lawyer
                  stories get.</p>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </section>

</main></div></div><div id="a18bddd77e4414ec349812801c161a50" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/dxyz-landing-papertear-wb-4x-min-ts1662049006.png?ts=1786623801"></div></div></div></div></div><div id="wb_footer_a18bddd8a85d05531bf2b97cfabf9ffd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a28f644d700467a092774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18bddd77e4a29482ca99ceaa3d4d1bc" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a18bddd77e4a2abb12b0e1f6fa5cbe90" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18bddd77e4a2bcd8ea946907bd71b2d" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><span class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><?php MenuElement::render((object) array(
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
					'class' => 'wb_this_page_menu_item active',
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
</div></div></div><div id="a18bddd77e4b00f630a15cb11ea05cad" class="wb_element wb_element_picture" data-plugin="Picture" title="George Dreemer's Official Website"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.georgedreemer.com"><img loading="lazy" alt="George Dreemer's Official Website" src="gallery_gen/6742db93b980c975748be6c57a3e7e48_66x70_fit.png?ts=1786623801"></a></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script>window._spDefer.add(function() {
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			});</script></div></div></div><style>
.image-height-mod {
height: 100%;
}
</style><script data-custom-script="true">
// ── Lucide icons ──────────────────────────────────────────────
(function () {
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
    return;
  }

  const lucideScript = document.querySelector('script[src*="lucide"]');
  if (lucideScript) {
    lucideScript.addEventListener('load', () => {
      if (typeof lucide !== 'undefined') lucide.createIcons();
    });
  }
})();

// ── Slideshow ──────────────────────────────────────────────
document.querySelectorAll('.evidence-card__slides').forEach(slider => {
  const slides = slider.querySelectorAll('.evidence-card__slide');
  const dots = slider.querySelectorAll('.evidence-card__slide-dot');
  if (!slides.length || !dots.length) return;

  let current = 0;
  let timer;

  function goTo(n) {
    slides[current].classList.remove('is-active');
    dots[current].classList.remove('is-active');
    current = (n + slides.length) % slides.length;
    slides[current].classList.add('is-active');
    dots[current].classList.add('is-active');
  }

  function start() {
    if (slides.length > 1) timer = setInterval(() => goTo(current + 1), 4000);
  }

  function stop() {
    clearInterval(timer);
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      stop();
      goTo(i);
      start();
    });
  });

  slider.addEventListener('mouseenter', stop);
  slider.addEventListener('mouseleave', start);
  start();
});


// ── Sound toggle (YouTube iframes) ─────────────────────────
document.querySelectorAll('[data-sound-toggle]').forEach(btn => {
  let muted = true;
  const iframe = btn.closest('.evidence-card__video')?.querySelector('iframe');
  if (!iframe) return;

  btn.addEventListener('click', () => {
    muted = !muted;
    const src = iframe.src;
    iframe.src = muted
      ? src.replace('&mute=0', '&mute=1')
      : src.replace('&mute=1', '&mute=0');

    const svg = btn.querySelector('svg');
    if (!svg) return;

    svg.innerHTML = muted
      ? `<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15" class="mute-line"/><line x1="17" y1="9" x2="23" y2="15" class="mute-line"/>`
      : `<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/>`;
  });
});

// ── Accordion ─────────────────────────────────────────────────
document.querySelectorAll('.story-accordion').forEach(accordion => {
  const triggers = accordion.querySelectorAll('.story-accordion__trigger');

  triggers.forEach(btn => {
    btn.addEventListener('click', () => {
      const panelId = btn.getAttribute('aria-controls');
      const panel = panelId ? document.getElementById(panelId) : null;
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

      triggers.forEach(otherBtn => {
        const otherPanelId = otherBtn.getAttribute('aria-controls');
        const otherPanel = otherPanelId ? document.getElementById(otherPanelId) : null;

        otherBtn.setAttribute('aria-expanded', 'false');
        if (otherPanel) otherPanel.setAttribute('aria-hidden', 'true');
      });

      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        if (panel) panel.setAttribute('aria-hidden', 'false');
      }
    });
  });
});

// ── Stat counter animation ────────────────────────────────────
(function () {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function easeOut(t) {
    return 1 - Math.pow(1 - t, 3);
  }

  function animateCounter(item) {
    const numberEl = item.querySelector('.stat-counter__number');
    const target = parseInt(item.dataset.target, 10);
    const prefix = item.dataset.prefix || '';
    const suffix = item.dataset.suffix || '';
    const duration = 1200;
    const start = performance.now();

    if (!numberEl || Number.isNaN(target)) return;

    if (prefersReduced) {
      numberEl.textContent = prefix + target + suffix;
      return;
    }

    function tick(now) {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.round(easeOut(progress) * target);
      numberEl.textContent = prefix + value + suffix;

      if (progress < 1) {
        requestAnimationFrame(tick);
      }
    }

    requestAnimationFrame(tick);
  }

  const items = document.querySelectorAll('.stat-counter__item');
  if (!items.length) return;

  if (!('IntersectionObserver' in window)) {
    items.forEach(item => {
      item.classList.add('is-visible');
      animateCounter(item);
    });
    return;
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      const item = entry.target;
      item.classList.add('is-visible');
      animateCounter(item);
      observer.unobserve(item);
    });
  }, { threshold: 0.3 });

  items.forEach(item => observer.observe(item));
})();
</script></div><script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/common-bundle.js?ts=20260813152319" type="text/javascript" defer></script>{{hr_out}}<script>
    document.addEventListener('DOMContentLoaded', function () {
        window._spDefer.done();
    });
</script>
</body>
</html>
