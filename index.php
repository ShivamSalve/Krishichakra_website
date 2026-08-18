<?php
/**
 * Krishichakra Foods Private Limited
 * Homepage — Premium Redesign v2.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Krishichakra Foods Private Limited | Pure Dehydrated Foods from Nature</title>
  <meta name="description" content="Krishichakra Foods – Premium manufacturer and exporter of dehydrated vegetables and fruits. ISO Certified. Dehydrated Banana, Beetroot, Garlic, Onion, Ginger, Capsicum and more.">
  <meta name="keywords" content="dehydrated foods, dehydrated vegetables, dehydrated fruits, banana powder, beetroot powder, garlic powder, onion powder, food exporter India">
  <meta property="og:title" content="Krishichakra Foods Private Limited">
  <meta property="og:description" content="Premium dehydrated foods manufacturer and exporter from India.">
  <meta property="og:type" content="website">
</head>

<?php include('header.php'); ?>

<!-- ============================================================
     HERO SECTION
     Full-screen premium hero with animated gradients and floating product
     ============================================================ -->
<section id="hero" class="kc-hero" aria-label="Hero section">

  <!-- Background -->
  <div class="kc-hero-bg">
    <div class="kc-hero-gradient"></div>
    <div class="kc-hero-noise"></div>
    <div class="kc-hero-orb kc-hero-orb-1"></div>
    <div class="kc-hero-orb kc-hero-orb-2"></div>
  </div>

  <!-- Content -->
  <div class="kc-hero-content">

    <!-- Left: Text -->
    <div class="kc-hero-text">

      <div class="kc-hero-badge">
        <span class="kc-badge">
          <span class="dot"></span>
          ISO 22000 Certified
        </span>
      </div>

      <h1 class="kc-hero-headline">
        Pure Nutrition<br>
        From <span>Nature's</span><br>
        Best.
      </h1>

      <p class="kc-hero-sub">
        Premium dehydrated fruits and vegetables crafted with precision. 
        Trusted by food manufacturers globally — delivering purity, 
        potency, and unmatched quality in every pack.
      </p>

      <div class="kc-hero-actions">
        <a href="dehydrated-banana.php" class="kc-btn kc-btn-gold kc-btn-lg" id="btn-explore-products">
          Explore Products
          <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="contact-us.php" class="kc-btn kc-btn-ghost kc-btn-lg" id="btn-get-quote">
          Get a Quote
        </a>
      </div>

    </div><!-- /kc-hero-text -->

    <!-- Right: Floating Product Visual -->
    <div class="kc-hero-visual" aria-hidden="true">
      <div class="kc-hero-product-wrap">
        <div class="kc-hero-product-glow"></div>
        <img
          src="assets/img/product/dehydrated-banana.jpg"
          alt="Dehydrated Banana — Krishichakra Foods"
          class="kc-hero-product-img"
          loading="eager"
        >
        <div class="kc-hero-product-sweep"></div>

        <!-- Floating ingredient accents -->
        <img src="assets/img/leaf.png" alt="" class="kc-ingredient kc-ingredient-1" aria-hidden="true">
        <img src="assets/img/leaf1.png" alt="" class="kc-ingredient kc-ingredient-2" aria-hidden="true">
        <img src="assets/img/leaf2.png" alt="" class="kc-ingredient kc-ingredient-3" aria-hidden="true">
      </div>
    </div><!-- /kc-hero-visual -->

  </div><!-- /kc-hero-content -->

  <!-- Scroll Indicator -->
  <div class="kc-scroll-indicator" aria-hidden="true">
    <div class="kc-scroll-line"></div>
    <span>Scroll</span>
  </div>

</section><!-- /hero -->

<!-- ============================================================
     INFINITE PRODUCT LOOP STRIP (Just below Nav / Hero)
     Continuous 60fps marquee showcasing all product offerings
     ============================================================ -->
<section class="kc-product-ticker-section" style="background: linear-gradient(180deg, #1a2e0a 0%, #152509 100%); padding: 24px 0; border-bottom: 1px solid rgba(255,255,255,0.08); overflow:hidden;" aria-label="Products ticker">
  <div class="kc-marquee-container">
    <div class="kc-marquee-track">
      <!-- Set A -->
      <a href="dehydrated-banana.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-banana.jpg" alt="Dehydrated Banana" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Banana</h4>
          <p>Fruit • Premium</p>
        </div>
      </a>
      <a href="dehydrated-papaya.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-papaya.jpg" alt="Dehydrated Papaya" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Papaya</h4>
          <p>Fruit • Enzyme Rich</p>
        </div>
      </a>
      <a href="dehydrated-beetroot.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-beetroot.jpg" alt="Dehydrated Beetroot" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Beetroot</h4>
          <p>Vegetable • Organic</p>
        </div>
      </a>
      <a href="dehydrated-garlic.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-garlic.jpg" alt="Dehydrated Garlic" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Garlic</h4>
          <p>Vegetable • Intense Aroma</p>
        </div>
      </a>
      <a href="dehydrated-onion.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-onion.jpg" alt="Dehydrated Onion" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Onion</h4>
          <p>Vegetable • Best Seller</p>
        </div>
      </a>
      <a href="dehydrated-ginger.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-ginger.jpg" alt="Dehydrated Ginger" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Ginger</h4>
          <p>Spice • Bioactive</p>
        </div>
      </a>
      <a href="dehydrated-green-chilli.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-green-chilli.jpg" alt="Dehydrated Green Chilli" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Green Chilli</h4>
          <p>Spice • Pure Heat</p>
        </div>
      </a>
      <a href="dehydrated-capsicum.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-capsicum.jpg" alt="Dehydrated Capsicum" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Capsicum</h4>
          <p>Vegetable • Sweet Pepper</p>
        </div>
      </a>

      <!-- Duplicate Set A for seamless infinite loop -->
      <a href="dehydrated-banana.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-banana.jpg" alt="Dehydrated Banana" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Banana</h4>
          <p>Fruit • Premium</p>
        </div>
      </a>
      <a href="dehydrated-papaya.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-papaya.jpg" alt="Dehydrated Papaya" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Papaya</h4>
          <p>Fruit • Enzyme Rich</p>
        </div>
      </a>
      <a href="dehydrated-beetroot.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-beetroot.jpg" alt="Dehydrated Beetroot" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Beetroot</h4>
          <p>Vegetable • Organic</p>
        </div>
      </a>
      <a href="dehydrated-garlic.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-garlic.jpg" alt="Dehydrated Garlic" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Garlic</h4>
          <p>Vegetable • Intense Aroma</p>
        </div>
      </a>
      <a href="dehydrated-onion.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-onion.jpg" alt="Dehydrated Onion" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Onion</h4>
          <p>Vegetable • Best Seller</p>
        </div>
      </a>
      <a href="dehydrated-ginger.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-ginger.jpg" alt="Dehydrated Ginger" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Ginger</h4>
          <p>Spice • Bioactive</p>
        </div>
      </a>
      <a href="dehydrated-green-chilli.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-green-chilli.jpg" alt="Dehydrated Green Chilli" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Green Chilli</h4>
          <p>Spice • Pure Heat</p>
        </div>
      </a>
      <a href="dehydrated-capsicum.php" class="kc-product-marquee-card">
        <img src="assets/img/product/dehydrated-capsicum.jpg" alt="Dehydrated Capsicum" class="kc-product-marquee-img">
        <div class="kc-product-marquee-info">
          <h4>Dehydrated Capsicum</h4>
          <p>Vegetable • Sweet Pepper</p>
        </div>
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     STATS STRIP
     Key brand numbers
     ============================================================ -->
<section class="kc-stats" aria-label="Company statistics">
  <div class="kc-stats-inner kc-stagger">

    <div class="kc-stat-item">
      <div class="kc-stat-number">
        <span class="kc-count-num" data-target="8" data-suffix="+">8+</span>
      </div>
      <p class="kc-stat-label">Dehydrated Products</p>
    </div>

    <div class="kc-stat-item">
      <div class="kc-stat-number">
        <span class="kc-count-num" data-target="10" data-suffix="+">10+</span>
      </div>
      <p class="kc-stat-label">Certifications</p>
    </div>

    <div class="kc-stat-item">
      <div class="kc-stat-number">
        <span class="kc-count-num" data-target="20" data-suffix="+">20+</span>
      </div>
      <p class="kc-stat-label">Countries Exported To</p>
    </div>

    <div class="kc-stat-item">
      <div class="kc-stat-number">
        <span class="kc-count-num" data-target="5000" data-suffix="T+">5000T+</span>
      </div>
      <p class="kc-stat-label">Annual Capacity</p>
    </div>

  </div>
</section>


<!-- ============================================================
     PRODUCTS SECTION
     8 product cards in a premium grid layout
     ============================================================ -->
<section id="products" class="kc-products-section" aria-label="Our products">
  <div class="kc-container">

    <div class="kc-section-header center kc-reveal">
      <span class="kc-eyebrow">What We Offer</span>
      <h2>Our Premium Product Range</h2>
      <p>Each product is carefully sourced, precision-dehydrated, and packed to retain maximum nutrition and flavour — ready for global food applications.</p>
    </div>

    <div class="kc-products-grid kc-stagger">

      <!-- Product 1: Banana -->
      <article class="kc-product-card" id="card-banana">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-banana.jpg" alt="Dehydrated Banana" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Fruit</p>
          <h3 class="kc-product-card-name">Dehydrated Banana</h3>
          <p class="kc-product-card-desc">Slices, flakes &amp; powder — rich in potassium, natural sweetener, ideal for health foods &amp; beverages.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-banana.php" class="kc-product-card-link" aria-label="View Dehydrated Banana product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">Export Ready</span>
          </div>
        </div>
      </article>

      <!-- Product 2: Papaya -->
      <article class="kc-product-card" id="card-papaya">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-papaya.jpg" alt="Dehydrated Papaya" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Fruit</p>
          <h3 class="kc-product-card-name">Dehydrated Papaya</h3>
          <p class="kc-product-card-desc">Cubes, flakes &amp; powder — enzyme-rich, vibrant, perfect for nutraceuticals and confectionery.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-papaya.php" class="kc-product-card-link" aria-label="View Dehydrated Papaya product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">ISO Certified</span>
          </div>
        </div>
      </article>

      <!-- Product 3: Beetroot -->
      <article class="kc-product-card" id="card-beetroot">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-beetroot.jpg" alt="Dehydrated Beetroot" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Vegetable</p>
          <h3 class="kc-product-card-name">Dehydrated Beetroot</h3>
          <p class="kc-product-card-desc">Cubes, TBC, flakes &amp; powder — naturally vibrant, rich in nitrates, ideal for juices &amp; supplements.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-beetroot.php" class="kc-product-card-link" aria-label="View Dehydrated Beetroot product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">Organic</span>
          </div>
        </div>
      </article>

      <!-- Product 4: Garlic -->
      <article class="kc-product-card" id="card-garlic">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-garlic.jpg" alt="Dehydrated Garlic" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Vegetable</p>
          <h3 class="kc-product-card-name">Dehydrated Garlic</h3>
          <p class="kc-product-card-desc">Flakes, granules &amp; powder — intense aroma, long shelf life, trusted by food manufacturers worldwide.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-garlic.php" class="kc-product-card-link" aria-label="View Dehydrated Garlic product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">Export Ready</span>
          </div>
        </div>
      </article>

      <!-- Product 5: Onion -->
      <article class="kc-product-card" id="card-onion">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-onion.jpg" alt="Dehydrated Onion" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Vegetable</p>
          <h3 class="kc-product-card-name">Dehydrated Onion</h3>
          <p class="kc-product-card-desc">Flakes, granules &amp; powder — premium dehydrated onion in red, pink &amp; white varieties.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-onion.php" class="kc-product-card-link" aria-label="View Dehydrated Onion product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">Best Seller</span>
          </div>
        </div>
      </article>

      <!-- Product 6: Ginger -->
      <article class="kc-product-card" id="card-ginger">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-ginger.jpg" alt="Dehydrated Ginger" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Vegetable</p>
          <h3 class="kc-product-card-name">Dehydrated Ginger</h3>
          <p class="kc-product-card-desc">TBC, flakes &amp; powder — spicy, aromatic, packed with bioactive gingerols for health applications.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-ginger.php" class="kc-product-card-link" aria-label="View Dehydrated Ginger product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">ISO Certified</span>
          </div>
        </div>
      </article>

      <!-- Product 7: Green Chilli -->
      <article class="kc-product-card" id="card-chilli">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-green-chilli.jpg" alt="Dehydrated Green Chilli" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Vegetable</p>
          <h3 class="kc-product-card-name">Dehydrated Green Chilli</h3>
          <p class="kc-product-card-desc">Flakes &amp; powder — bold heat, pure green chilli flavour preserved for 12+ months.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-green-chilli.php" class="kc-product-card-link" aria-label="View Dehydrated Green Chilli product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">Export Ready</span>
          </div>
        </div>
      </article>

      <!-- Product 8: Capsicum -->
      <article class="kc-product-card" id="card-capsicum">
        <div class="kc-product-card-img">
          <img src="assets/img/product/dehydrated-capsicum.jpg" alt="Dehydrated Capsicum" loading="lazy">
        </div>
        <div class="kc-product-card-body">
          <p class="kc-product-card-tag">Vegetable</p>
          <h3 class="kc-product-card-name">Dehydrated Capsicum</h3>
          <p class="kc-product-card-desc">Flakes &amp; powder — vibrant colour, sweet pepper flavour, ideal for seasonings &amp; ready meals.</p>
          <div class="kc-product-card-footer">
            <a href="dehydrated-capsicum.php" class="kc-product-card-link" aria-label="View Dehydrated Capsicum product page">
              View Product
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <span class="kc-product-card-badge">Organic</span>
          </div>
        </div>
      </article>

    </div><!-- /kc-products-grid -->

  </div><!-- /kc-container -->
</section><!-- /products -->


<!-- ============================================================
     ABOUT / JOURNEY TIMELINE SECTION
     ============================================================ -->
<section id="about" class="kc-about-section" aria-label="About our journey">
  <div class="kc-container">

    <div class="kc-section-header center kc-reveal">
      <span class="kc-eyebrow">Our Journey</span>
      <h2>Farm to Fork — Every Step Matters</h2>
      <p>From the lush farms of Maharashtra to kitchens around the world, our process is built on precision, purity, and passion.</p>
    </div>

    <div class="kc-timeline">
      <div class="kc-timeline-line" aria-hidden="true"></div>

      <!-- Step 1 -->
      <div class="kc-timeline-item kc-reveal">
        <div class="kc-timeline-content">
          <p class="kc-timeline-step">Step 01</p>
          <h3 class="kc-timeline-title">Premium Sourcing</h3>
          <p class="kc-timeline-desc">We partner with the finest farms across India, hand-selecting only the ripest produce at peak nutritional value — no compromises.</p>
        </div>
        <div class="kc-timeline-dot-wrap" aria-hidden="true">
          <div class="kc-timeline-dot">01</div>
        </div>
        <div class="kc-timeline-empty"></div>
      </div>

      <!-- Step 2 -->
      <div class="kc-timeline-item kc-reveal">
        <div class="kc-timeline-empty"></div>
        <div class="kc-timeline-dot-wrap" aria-hidden="true">
          <div class="kc-timeline-dot">02</div>
        </div>
        <div class="kc-timeline-content">
          <p class="kc-timeline-step">Step 02</p>
          <h3 class="kc-timeline-title">Precision Processing</h3>
          <p class="kc-timeline-desc">State-of-the-art dehydration technology removes moisture while preserving colour, aroma, nutrients, and flavour — naturally.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="kc-timeline-item kc-reveal">
        <div class="kc-timeline-content">
          <p class="kc-timeline-step">Step 03</p>
          <h3 class="kc-timeline-title">Quality Control</h3>
          <p class="kc-timeline-desc">Rigorous lab testing at every stage — ISO 22000, HACCP, FSSAI compliance ensures every batch meets the highest global standards.</p>
        </div>
        <div class="kc-timeline-dot-wrap" aria-hidden="true">
          <div class="kc-timeline-dot">03</div>
        </div>
        <div class="kc-timeline-empty"></div>
      </div>

      <!-- Step 4 -->
      <div class="kc-timeline-item kc-reveal">
        <div class="kc-timeline-empty"></div>
        <div class="kc-timeline-dot-wrap" aria-hidden="true">
          <div class="kc-timeline-dot">04</div>
        </div>
        <div class="kc-timeline-content">
          <p class="kc-timeline-step">Step 04</p>
          <h3 class="kc-timeline-title">Premium Packaging</h3>
          <p class="kc-timeline-desc">Sealed in food-grade, airtight packaging for 12-month shelf life. Custom pack sizes for B2B orders, bulk exports, and retail.</p>
        </div>
      </div>

      <!-- Step 5 -->
      <div class="kc-timeline-item kc-reveal">
        <div class="kc-timeline-content">
          <p class="kc-timeline-step">Step 05</p>
          <h3 class="kc-timeline-title">Global Distribution</h3>
          <p class="kc-timeline-desc">APEDA registered and export-ready. Delivered to food manufacturers, distributors, and retailers across 20+ countries worldwide.</p>
        </div>
        <div class="kc-timeline-dot-wrap" aria-hidden="true">
          <div class="kc-timeline-dot">05</div>
        </div>
        <div class="kc-timeline-empty"></div>
      </div>

    </div><!-- /kc-timeline -->

  </div><!-- /kc-container -->
</section><!-- /about -->


<!-- ============================================================
     CERTIFICATIONS SECTION (Homepage Preview)
     ============================================================ -->
<!-- ============================================================
     CERTIFICATIONS SECTION (Infinite Loop Marquee)
     ============================================================ -->
<section id="certifications" class="kc-cert-section" aria-label="Our certifications" style="overflow:hidden; background: var(--color-warm-white);">
  <div class="kc-container">

    <div class="kc-section-header center kc-reveal">
      <span class="kc-eyebrow">Trust &amp; Quality</span>
      <h2>Internationally Certified</h2>
      <p>Our products meet the most rigorous global food safety and quality standards — giving you complete confidence in every order.</p>
    </div>

  </div><!-- /kc-container -->

  <!-- Infinite Marquee Ticker Track for Certifications -->
  <div class="kc-marquee-container">
    <div class="kc-marquee-track kc-marquee-track-fast">
      <!-- Set A (All 10 certifications) -->
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/1.png" alt="ISO 22000 Certification" loading="lazy">
        <p class="kc-cert-name">ISO 22000</p>
        <p class="kc-cert-sub">Food Safety Management</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/2.png" alt="Kosher Certification" loading="lazy">
        <p class="kc-cert-name">Kosher</p>
        <p class="kc-cert-sub">Jewish Dietary Laws</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/3.png" alt="Halal Certification" loading="lazy">
        <p class="kc-cert-name">Halal</p>
        <p class="kc-cert-sub">Islamic Standards</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/4.png" alt="FSSAI Certification" loading="lazy">
        <p class="kc-cert-name">FSSAI</p>
        <p class="kc-cert-sub">Food Safety India</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/5.png" alt="APEDA Certification" loading="lazy">
        <p class="kc-cert-name">APEDA</p>
        <p class="kc-cert-sub">Agri Export Dev</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/7.png" alt="GMP Certification" loading="lazy">
        <p class="kc-cert-name">GMP Certified</p>
        <p class="kc-cert-sub">Good Manufacturing</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/6.png" alt="HACCP Certification" loading="lazy">
        <p class="kc-cert-name">HACCP</p>
        <p class="kc-cert-sub">Hazard Control</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/8.png" alt="NPOP Certification" loading="lazy">
        <p class="kc-cert-name">NPOP Organic</p>
        <p class="kc-cert-sub">National Organic</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/9.png" alt="EC Organic Certification" loading="lazy">
        <p class="kc-cert-name">EC 834/2007</p>
        <p class="kc-cert-sub">EU Organic Standard</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/10.png" alt="USDA Organic Certification" loading="lazy">
        <p class="kc-cert-name">US-NOP</p>
        <p class="kc-cert-sub">USDA Organic</p>
      </div>

      <!-- Duplicate Set A for seamless 100% infinite loop -->
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/1.png" alt="ISO 22000 Certification" loading="lazy">
        <p class="kc-cert-name">ISO 22000</p>
        <p class="kc-cert-sub">Food Safety Management</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/2.png" alt="Kosher Certification" loading="lazy">
        <p class="kc-cert-name">Kosher</p>
        <p class="kc-cert-sub">Jewish Dietary Laws</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/3.png" alt="Halal Certification" loading="lazy">
        <p class="kc-cert-name">Halal</p>
        <p class="kc-cert-sub">Islamic Standards</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/4.png" alt="FSSAI Certification" loading="lazy">
        <p class="kc-cert-name">FSSAI</p>
        <p class="kc-cert-sub">Food Safety India</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/5.png" alt="APEDA Certification" loading="lazy">
        <p class="kc-cert-name">APEDA</p>
        <p class="kc-cert-sub">Agri Export Dev</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/7.png" alt="GMP Certification" loading="lazy">
        <p class="kc-cert-name">GMP Certified</p>
        <p class="kc-cert-sub">Good Manufacturing</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/6.png" alt="HACCP Certification" loading="lazy">
        <p class="kc-cert-name">HACCP</p>
        <p class="kc-cert-sub">Hazard Control</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/8.png" alt="NPOP Certification" loading="lazy">
        <p class="kc-cert-name">NPOP Organic</p>
        <p class="kc-cert-sub">National Organic</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/9.png" alt="EC Organic Certification" loading="lazy">
        <p class="kc-cert-name">EC 834/2007</p>
        <p class="kc-cert-sub">EU Organic Standard</p>
      </div>
      <div class="kc-cert-marquee-card">
        <img src="assets/img/certifications/10.png" alt="USDA Organic Certification" loading="lazy">
        <p class="kc-cert-name">US-NOP</p>
        <p class="kc-cert-sub">USDA Organic</p>
      </div>
    </div>
  </div>

  <div class="kc-container">
    <div style="text-align:center;margin-top:40px;" class="kc-reveal">
      <a href="certifications.php" class="kc-btn kc-btn-secondary" id="btn-view-certs">
        View All Certification Details
        <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section><!-- /certifications -->


<!-- ============================================================
     WHY CHOOSE US — Feature Strip
     ============================================================ -->
<section class="kc-section" style="background:var(--color-cream);" aria-label="Why choose Krishichakra">
  <div class="kc-container">

    <div class="kc-section-header center kc-reveal">
      <span class="kc-eyebrow">Why Krishichakra</span>
      <h2>The Standard Others Aspire To</h2>
    </div>

    <div class="kc-grid-3 kc-stagger">

      <div class="kc-mv-card">
        <div class="kc-mv-icon" style="background:rgba(45,80,22,0.08);">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="18" stroke="#2D5016" stroke-width="2"/><path d="M12 20l6 6 10-12" stroke="#2D5016" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3>Zero Additives</h3>
        <p>100% natural dehydration — no artificial colours, no preservatives, no compromise on purity. What you see is what nature made.</p>
      </div>

      <div class="kc-mv-card">
        <div class="kc-mv-icon" style="background:rgba(201,168,76,0.1);">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M20 6L8 12v10c0 7 5.3 13.6 12 15.2C26.7 35.6 32 29 32 22V12L20 6z" stroke="#C9A84C" stroke-width="2" fill="none"/><path d="M14 20l4 4 8-8" stroke="#C9A84C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3>Export Certified</h3>
        <p>APEDA registered and internationally certified for export. Trusted by clients in Europe, North America, Asia and the Middle East.</p>
      </div>

      <div class="kc-mv-card">
        <div class="kc-mv-icon" style="background:rgba(107,124,59,0.08);">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M20 4C20 4 6 10 6 22a14 14 0 0028 0C34 10 20 4 20 4z" stroke="#6B7C3B" stroke-width="2" fill="none"/><circle cx="20" cy="22" r="4" stroke="#6B7C3B" stroke-width="2"/></svg>
        </div>
        <h3>Sustainable Practices</h3>
        <p>Eco-conscious sourcing, water-efficient dehydration, and responsible packaging — building a greener future for Indian agriculture.</p>
      </div>

    </div>

  </div>
</section>


<!-- ============================================================
     CTA SECTION
     ============================================================ -->
<section id="cta" class="kc-cta-section" aria-label="Call to action">
  <div class="kc-container">
    <div class="kc-cta-content kc-reveal">
      <span class="kc-eyebrow" style="color:rgba(255,255,255,0.5);">Ready to Partner?</span>
      <h2>Elevate Your Product<br>with Premium Ingredients</h2>
      <p>Join hundreds of food manufacturers who trust Krishichakra Foods for consistent quality, competitive pricing, and reliable supply.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact-us.php" class="kc-btn kc-btn-gold kc-btn-lg" id="btn-contact-cta">
          Start a Conversation
          <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="dehydrated-banana.php" class="kc-btn kc-btn-ghost kc-btn-lg" id="btn-see-products">
          Browse Products
        </a>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>