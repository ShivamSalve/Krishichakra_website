<?php
// ==========================================
// ACTIVE PAGE DETECTION (Zero-flicker SSR)
// ==========================================
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$currentFile = basename($reqPath);
if (empty($currentFile) || $currentFile === 'index' || $currentFile === '/') {
    $currentFile = basename($_SERVER['SCRIPT_NAME'] ?? '');
}
if (empty($currentFile) || $currentFile === 'router.php') {
    $currentFile = 'index.php';
}
$currentBase = preg_replace('/\.php$/', '', $currentFile);
if (empty($currentBase)) {
    $currentBase = 'index';
}

function kc_nav_active($slugs, $currentBase) {
    if (!is_array($slugs)) {
        $slugs = [$slugs];
    }
    return in_array($currentBase, $slugs) ? ' active' : '';
}

$aboutSlugs = ['mission-vision', 'our-manufacturing-process', 'events', 'our-team'];
$productSlugs = [
    'dehydrated-banana', 'dehydrated-papaya', 'dehydrated-beetroot',
    'dehydrated-garlic', 'dehydrated-onion', 'dehydrated-ginger',
    'dehydrated-green-chilli', 'dehydrated-capsicum'
];
$appSlugs = [
    'application-dehydrated-banana', 'application-dehydrated-papaya', 'application-dehydrated-beetroot',
    'application-dehydrated-garlic', 'application-dehydrated-onion', 'application-dehydrated-ginger',
    'application-dehydrated-green-chilli', 'application-dehydrated-capsicum'
];
$impactSlugs = ['our-impact', 'our-imapct'];
$blogSlugs = ['blog', 'blog-1', 'blog-2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

  <!-- Google Fonts: Manrope + Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Premium Design System -->
  <link rel="stylesheet" href="assets/css/premium.css">

  <!-- FontAwesome (for legacy icon compatibility) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="organio-wrapper">

<!-- ======================== PRELOADER ======================== -->
<div id="kc-preloader" aria-hidden="true">
  <img src="assets/img/favicon.png" alt="Loading" class="kc-preloader-logo">
  <div class="kc-preloader-bar"><div class="kc-preloader-fill"></div></div>
</div>

<!-- ======================== BACK TO TOP ======================== -->
<button class="kc-back-top" aria-label="Back to top" title="Back to top">
  <svg viewBox="0 0 24 24"><path d="M12 4l-8 8h5v8h6v-8h5z"/></svg>
</button>

<!-- ======================== PREMIUM NAVBAR ======================== -->
<nav id="kc-navbar" role="navigation" aria-label="Main navigation">
  <div class="kc-nav-inner">

    <!-- Logo -->
    <a href="index.php" class="kc-nav-logo" aria-label="Krishichakra Foods Home">
      <img src="assets/img/logo.png" alt="Krishichakra Foods" loading="eager">
    </a>

    <!-- Desktop Navigation -->
    <div class="kc-nav-links" role="menubar">

      <a href="index.php" class="kc-nav-link<?= kc_nav_active('index', $currentBase) ?>" role="menuitem">Home</a>

      <!-- About Dropdown -->
      <div class="kc-nav-item<?= kc_nav_active($aboutSlugs, $currentBase) ?>" role="none">
        <a href="mission-vision.php" class="kc-nav-link<?= kc_nav_active($aboutSlugs, $currentBase) ?>" role="menuitem" aria-haspopup="true">
          About <svg class="kc-nav-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
        </a>
        <div class="kc-dropdown" role="menu" aria-label="About submenu">
          <a href="mission-vision.php" class="<?= kc_nav_active('mission-vision', $currentBase) ?>" role="menuitem">Mission &amp; Vision</a>
          <a href="our-manufacturing-process.php" class="<?= kc_nav_active('our-manufacturing-process', $currentBase) ?>" role="menuitem">Manufacturing Process</a>
          <a href="events.php" class="<?= kc_nav_active('events', $currentBase) ?>" role="menuitem">Events</a>
        </div>
      </div>

      <!-- Products Dropdown -->
      <div class="kc-nav-item<?= kc_nav_active($productSlugs, $currentBase) ?>" role="none">
        <a href="dehydrated-banana.php" class="kc-nav-link<?= kc_nav_active($productSlugs, $currentBase) ?>" role="menuitem" aria-haspopup="true">
          Products <svg class="kc-nav-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
        </a>
        <div class="kc-dropdown" role="menu" aria-label="Products submenu">
          <a href="dehydrated-banana.php" class="<?= kc_nav_active('dehydrated-banana', $currentBase) ?>" role="menuitem">Dehydrated Banana</a>
          <a href="dehydrated-papaya.php" class="<?= kc_nav_active('dehydrated-papaya', $currentBase) ?>" role="menuitem">Dehydrated Papaya</a>
          <a href="dehydrated-beetroot.php" class="<?= kc_nav_active('dehydrated-beetroot', $currentBase) ?>" role="menuitem">Dehydrated Beetroot</a>
          <a href="dehydrated-garlic.php" class="<?= kc_nav_active('dehydrated-garlic', $currentBase) ?>" role="menuitem">Dehydrated Garlic</a>
          <a href="dehydrated-onion.php" class="<?= kc_nav_active('dehydrated-onion', $currentBase) ?>" role="menuitem">Dehydrated Onion</a>
          <a href="dehydrated-ginger.php" class="<?= kc_nav_active('dehydrated-ginger', $currentBase) ?>" role="menuitem">Dehydrated Ginger</a>
          <a href="dehydrated-green-chilli.php" class="<?= kc_nav_active('dehydrated-green-chilli', $currentBase) ?>" role="menuitem">Dehydrated Green Chilli</a>
          <a href="dehydrated-capsicum.php" class="<?= kc_nav_active('dehydrated-capsicum', $currentBase) ?>" role="menuitem">Dehydrated Capsicum</a>
        </div>
      </div>

      <!-- Application Dropdown -->
      <div class="kc-nav-item<?= kc_nav_active($appSlugs, $currentBase) ?>" role="none">
        <a href="application-dehydrated-banana.php" class="kc-nav-link<?= kc_nav_active($appSlugs, $currentBase) ?>" role="menuitem" aria-haspopup="true">
          Application <svg class="kc-nav-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
        </a>
        <div class="kc-dropdown" role="menu" aria-label="Application submenu">
          <a href="application-dehydrated-banana.php" class="<?= kc_nav_active('application-dehydrated-banana', $currentBase) ?>" role="menuitem">Dehydrated Banana</a>
          <a href="application-dehydrated-papaya.php" class="<?= kc_nav_active('application-dehydrated-papaya', $currentBase) ?>" role="menuitem">Dehydrated Papaya</a>
          <a href="application-dehydrated-beetroot.php" class="<?= kc_nav_active('application-dehydrated-beetroot', $currentBase) ?>" role="menuitem">Dehydrated Beetroot</a>
          <a href="application-dehydrated-garlic.php" class="<?= kc_nav_active('application-dehydrated-garlic', $currentBase) ?>" role="menuitem">Dehydrated Garlic</a>
          <a href="application-dehydrated-onion.php" class="<?= kc_nav_active('application-dehydrated-onion', $currentBase) ?>" role="menuitem">Dehydrated Onion</a>
          <a href="application-dehydrated-ginger.php" class="<?= kc_nav_active('application-dehydrated-ginger', $currentBase) ?>" role="menuitem">Dehydrated Ginger</a>
          <a href="application-dehydrated-green-chilli.php" class="<?= kc_nav_active('application-dehydrated-green-chilli', $currentBase) ?>" role="menuitem">Dehydrated Green Chilli</a>
          <a href="application-dehydrated-capsicum.php" class="<?= kc_nav_active('application-dehydrated-capsicum', $currentBase) ?>" role="menuitem">Dehydrated Capsicum</a>
        </div>
      </div>

      <a href="our-impact.php" class="kc-nav-link<?= kc_nav_active($impactSlugs, $currentBase) ?>" role="menuitem">Our Impact</a>
      <a href="certifications.php" class="kc-nav-link<?= kc_nav_active('certifications', $currentBase) ?>" role="menuitem">Certifications</a>
      <a href="career.php" class="kc-nav-link<?= kc_nav_active('career', $currentBase) ?>" role="menuitem">Career</a>
      <a href="blog.php" class="kc-nav-link<?= kc_nav_active($blogSlugs, $currentBase) ?>" role="menuitem">Blog</a>
    </div>

    <!-- CTA -->
    <div class="kc-nav-cta">
      <a href="contact-us.php" class="kc-btn kc-btn-gold kc-btn-sm<?= kc_nav_active('contact-us', $currentBase) ?>" aria-label="Contact us">
        Contact Us
        <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

    <!-- Hamburger (Mobile) -->
    <button class="kc-hamburger" id="kc-hamburger" aria-label="Open mobile menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div><!-- /kc-nav-inner -->
</nav><!-- /kc-navbar -->

<!-- ======================== MOBILE MENU ======================== -->
<div class="kc-mobile-menu" id="kc-mobile-menu" role="dialog" aria-modal="true" aria-label="Mobile navigation">

  <div class="kc-mobile-header">
    <a href="index.php" class="kc-mobile-logo" aria-label="Krishichakra Foods Home">
      <img src="assets/img/logo.png" alt="Krishichakra Foods">
    </a>
    <button class="kc-mobile-close" id="kc-mobile-close" aria-label="Close menu">&times;</button>
  </div>

  <div class="kc-mobile-body">
    <a href="index.php" class="kc-mobile-link<?= kc_nav_active('index', $currentBase) ?>">Home</a>

    <div class="kc-mobile-group<?= kc_nav_active($aboutSlugs, $currentBase) ? ' has-active open' : '' ?>">
      <div class="kc-mobile-toggle<?= kc_nav_active($aboutSlugs, $currentBase) ? ' open active' : '' ?>" role="button" aria-expanded="<?= kc_nav_active($aboutSlugs, $currentBase) ? 'true' : 'false' ?>" tabindex="0">
        <span>About</span>
        <svg class="kc-mobile-toggle-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
      </div>
      <div class="kc-mobile-sub<?= kc_nav_active($aboutSlugs, $currentBase) ? ' open' : '' ?>">
        <a href="mission-vision.php" class="<?= kc_nav_active('mission-vision', $currentBase) ?>">Mission &amp; Vision</a>
        <a href="our-manufacturing-process.php" class="<?= kc_nav_active('our-manufacturing-process', $currentBase) ?>">Manufacturing Process</a>
        <a href="events.php" class="<?= kc_nav_active('events', $currentBase) ?>">Events</a>
      </div>
    </div>

    <div class="kc-mobile-group<?= kc_nav_active($productSlugs, $currentBase) ? ' has-active open' : '' ?>">
      <div class="kc-mobile-toggle<?= kc_nav_active($productSlugs, $currentBase) ? ' open active' : '' ?>" role="button" aria-expanded="<?= kc_nav_active($productSlugs, $currentBase) ? 'true' : 'false' ?>" tabindex="0">
        <span>Products</span>
        <svg class="kc-mobile-toggle-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
      </div>
      <div class="kc-mobile-sub<?= kc_nav_active($productSlugs, $currentBase) ? ' open' : '' ?>">
        <a href="dehydrated-banana.php" class="<?= kc_nav_active('dehydrated-banana', $currentBase) ?>">Dehydrated Banana</a>
        <a href="dehydrated-papaya.php" class="<?= kc_nav_active('dehydrated-papaya', $currentBase) ?>">Dehydrated Papaya</a>
        <a href="dehydrated-beetroot.php" class="<?= kc_nav_active('dehydrated-beetroot', $currentBase) ?>">Dehydrated Beetroot</a>
        <a href="dehydrated-garlic.php" class="<?= kc_nav_active('dehydrated-garlic', $currentBase) ?>">Dehydrated Garlic</a>
        <a href="dehydrated-onion.php" class="<?= kc_nav_active('dehydrated-onion', $currentBase) ?>">Dehydrated Onion</a>
        <a href="dehydrated-ginger.php" class="<?= kc_nav_active('dehydrated-ginger', $currentBase) ?>">Dehydrated Ginger</a>
        <a href="dehydrated-green-chilli.php" class="<?= kc_nav_active('dehydrated-green-chilli', $currentBase) ?>">Dehydrated Green Chilli</a>
        <a href="dehydrated-capsicum.php" class="<?= kc_nav_active('dehydrated-capsicum', $currentBase) ?>">Dehydrated Capsicum</a>
      </div>
    </div>

    <div class="kc-mobile-group<?= kc_nav_active($appSlugs, $currentBase) ? ' has-active open' : '' ?>">
      <div class="kc-mobile-toggle<?= kc_nav_active($appSlugs, $currentBase) ? ' open active' : '' ?>" role="button" aria-expanded="<?= kc_nav_active($appSlugs, $currentBase) ? 'true' : 'false' ?>" tabindex="0">
        <span>Application</span>
        <svg class="kc-mobile-toggle-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
      </div>
      <div class="kc-mobile-sub<?= kc_nav_active($appSlugs, $currentBase) ? ' open' : '' ?>">
        <a href="application-dehydrated-banana.php" class="<?= kc_nav_active('application-dehydrated-banana', $currentBase) ?>">Dehydrated Banana</a>
        <a href="application-dehydrated-papaya.php" class="<?= kc_nav_active('application-dehydrated-papaya', $currentBase) ?>">Dehydrated Papaya</a>
        <a href="application-dehydrated-beetroot.php" class="<?= kc_nav_active('application-dehydrated-beetroot', $currentBase) ?>">Dehydrated Beetroot</a>
        <a href="application-dehydrated-garlic.php" class="<?= kc_nav_active('application-dehydrated-garlic', $currentBase) ?>">Dehydrated Garlic</a>
        <a href="application-dehydrated-onion.php" class="<?= kc_nav_active('application-dehydrated-onion', $currentBase) ?>">Dehydrated Onion</a>
        <a href="application-dehydrated-ginger.php" class="<?= kc_nav_active('application-dehydrated-ginger', $currentBase) ?>">Dehydrated Ginger</a>
        <a href="application-dehydrated-green-chilli.php" class="<?= kc_nav_active('application-dehydrated-green-chilli', $currentBase) ?>">Dehydrated Green Chilli</a>
        <a href="application-dehydrated-capsicum.php" class="<?= kc_nav_active('application-dehydrated-capsicum', $currentBase) ?>">Dehydrated Capsicum</a>
      </div>
    </div>

    <a href="our-impact.php" class="kc-mobile-link<?= kc_nav_active($impactSlugs, $currentBase) ?>">Our Impact</a>
    <a href="certifications.php" class="kc-mobile-link<?= kc_nav_active('certifications', $currentBase) ?>">Certifications</a>
    <a href="career.php" class="kc-mobile-link<?= kc_nav_active('career', $currentBase) ?>">Career</a>
    <a href="blog.php" class="kc-mobile-link<?= kc_nav_active($blogSlugs, $currentBase) ?>">Blog</a>
    <a href="contact-us.php" class="kc-mobile-link<?= kc_nav_active('contact-us', $currentBase) ?>">Contact Us</a>

    <div class="kc-mobile-cta">
      <a href="contact-us.php" class="kc-btn kc-btn-gold kc-btn-block">
        Contact Us
        <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>

</div><!-- /kc-mobile-menu -->