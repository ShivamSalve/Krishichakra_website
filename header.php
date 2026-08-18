<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

      <a href="index.php" role="menuitem">Home</a>

      <!-- About Dropdown -->
      <div class="kc-nav-item" role="none">
        <a href="mission-vision.php" role="menuitem" aria-haspopup="true">About</a>
        <div class="kc-dropdown" role="menu" aria-label="About submenu">
          <a href="mission-vision.php" role="menuitem">Mission &amp; Vision</a>
          <a href="our-manufacturing-process.php" role="menuitem">Manufacturing Process</a>
          <a href="events.php" role="menuitem">Events</a>
        </div>
      </div>

      <!-- Products Dropdown -->
      <div class="kc-nav-item" role="none">
        <a href="dehydrated-banana.php" role="menuitem" aria-haspopup="true">Products</a>
        <div class="kc-dropdown" role="menu" aria-label="Products submenu">
          <a href="dehydrated-banana.php" role="menuitem">Dehydrated Banana</a>
          <a href="dehydrated-papaya.php" role="menuitem">Dehydrated Papaya</a>
          <a href="dehydrated-beetroot.php" role="menuitem">Dehydrated Beetroot</a>
          <a href="dehydrated-garlic.php" role="menuitem">Dehydrated Garlic</a>
          <a href="dehydrated-onion.php" role="menuitem">Dehydrated Onion</a>
          <a href="dehydrated-ginger.php" role="menuitem">Dehydrated Ginger</a>
          <a href="dehydrated-green-chilli.php" role="menuitem">Dehydrated Green Chilli</a>
          <a href="dehydrated-capsicum.php" role="menuitem">Dehydrated Capsicum</a>
        </div>
      </div>

      <!-- Application Dropdown -->
      <div class="kc-nav-item" role="none">
        <a href="#" role="menuitem" aria-haspopup="true">Application</a>
        <div class="kc-dropdown" role="menu" aria-label="Application submenu">
          <a href="application-dehydrated-banana.php" role="menuitem">Dehydrated Banana</a>
          <a href="application-dehydrated-papaya.php" role="menuitem">Dehydrated Papaya</a>
          <a href="application-dehydrated-beetroot.php" role="menuitem">Dehydrated Beetroot</a>
          <a href="application-dehydrated-garlic.php" role="menuitem">Dehydrated Garlic</a>
          <a href="application-dehydrated-onion.php" role="menuitem">Dehydrated Onion</a>
          <a href="application-dehydrated-ginger.php" role="menuitem">Dehydrated Ginger</a>
          <a href="application-dehydrated-green-chilli.php" role="menuitem">Dehydrated Green Chilli</a>
          <a href="application-dehydrated-capsicum.php" role="menuitem">Dehydrated Capsicum</a>
        </div>
      </div>

      <a href="our-impact.php" role="menuitem">Our Impact</a>
      <a href="certifications.php" role="menuitem">Certifications</a>
      <a href="career.php" role="menuitem">Career</a>
      <a href="blog.php" role="menuitem">Blog</a>
    </div>

    <!-- CTA -->
    <div class="kc-nav-cta">
      <a href="contact-us.php" class="kc-btn kc-btn-gold kc-btn-sm" aria-label="Contact us">
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

  <a href="index.php">Home</a>

  <div>
    <div class="kc-mobile-toggle" role="button" aria-expanded="false" tabindex="0">
      <span style="font-family:var(--font-heading);font-size:1.2rem;font-weight:700;color:var(--color-warm-white);padding:16px 0;display:block;border-bottom:1px solid rgba(255,255,255,0.08);">About</span>
      <svg class="kc-mobile-toggle-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
    </div>
    <div class="kc-mobile-sub">
      <a href="mission-vision.php">Mission &amp; Vision</a>
      <a href="our-manufacturing-process.php">Manufacturing Process</a>
      <a href="events.php">Events</a>
    </div>
  </div>

  <div>
    <div class="kc-mobile-toggle" role="button" aria-expanded="false" tabindex="0">
      <span style="font-family:var(--font-heading);font-size:1.2rem;font-weight:700;color:var(--color-warm-white);padding:16px 0;display:block;border-bottom:1px solid rgba(255,255,255,0.08);">Products</span>
      <svg class="kc-mobile-toggle-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
    </div>
    <div class="kc-mobile-sub">
      <a href="dehydrated-banana.php">Dehydrated Banana</a>
      <a href="dehydrated-papaya.php">Dehydrated Papaya</a>
      <a href="dehydrated-beetroot.php">Dehydrated Beetroot</a>
      <a href="dehydrated-garlic.php">Dehydrated Garlic</a>
      <a href="dehydrated-onion.php">Dehydrated Onion</a>
      <a href="dehydrated-ginger.php">Dehydrated Ginger</a>
      <a href="dehydrated-green-chilli.php">Dehydrated Green Chilli</a>
      <a href="dehydrated-capsicum.php">Dehydrated Capsicum</a>
    </div>
  </div>

  <div>
    <div class="kc-mobile-toggle" role="button" aria-expanded="false" tabindex="0">
      <span style="font-family:var(--font-heading);font-size:1.2rem;font-weight:700;color:var(--color-warm-white);padding:16px 0;display:block;border-bottom:1px solid rgba(255,255,255,0.08);">Application</span>
      <svg class="kc-mobile-toggle-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
    </div>
    <div class="kc-mobile-sub">
      <a href="application-dehydrated-banana.php">Dehydrated Banana</a>
      <a href="application-dehydrated-papaya.php">Dehydrated Papaya</a>
      <a href="application-dehydrated-beetroot.php">Dehydrated Beetroot</a>
      <a href="application-dehydrated-garlic.php">Dehydrated Garlic</a>
      <a href="application-dehydrated-onion.php">Dehydrated Onion</a>
      <a href="application-dehydrated-ginger.php">Dehydrated Ginger</a>
      <a href="application-dehydrated-green-chilli.php">Dehydrated Green Chilli</a>
      <a href="application-dehydrated-capsicum.php">Dehydrated Capsicum</a>
    </div>
  </div>

  <a href="our-impact.php">Our Impact</a>
  <a href="certifications.php">Certifications</a>
  <a href="career.php">Career</a>
  <a href="blog.php">Blog</a>
  <a href="contact-us.php">Contact Us</a>

</div><!-- /kc-mobile-menu -->