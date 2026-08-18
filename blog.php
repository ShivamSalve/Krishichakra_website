<?php
/**
 * Krishichakra Foods Private Limited
 * Insights & Blog Articles
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Krishichakra Foods Private Limited</title>
  <meta name="description" content="Insights on dehydrated foods, food technology, nutrition, and sustainable agriculture from the Krishichakra Foods team.">
</head>
<?php include('header.php'); ?>

<!-- ======================== PAGE HERO ======================== -->
<section class="kc-page-hero" aria-label="Page Hero">
  <div class="kc-page-hero-content kc-reveal">
    <h1>Insights &amp; Articles</h1>
    <nav class="kc-breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span class="kc-breadcrumb-sep">/</span>
      <span>Blog</span>
    </nav>
  </div>
</section>

<!-- ======================== BLOG ARTICLES SECTION ======================== -->
<section class="kc-section" aria-label="Blog Articles">
  <div class="kc-container">
    
    <div class="kc-section-header center kc-reveal">
      <span class="kc-eyebrow">Our Blog</span>
      <h2>Food Insights &amp; Innovation</h2>
    </div>

    <div class="kc-blog-grid kc-stagger" style="margin-top: 48px;">
      
      <!-- Card 1 -->
      <article class="kc-blog-card">
        <a href="blog-1.php" aria-label="Read The Science Behind Dehydration">
          <div class="kc-blog-card-img" style="background: var(--color-cream);">
            <img 
              src="assets/img/blog/blog-banner-1.jpg" 
              alt="The Science Behind Dehydration" 
              loading="lazy"
              onerror="this.onerror=null; this.style.display='none'; this.parentNode.style.background='#EDE8DE';"
            >
          </div>
        </a>
        <div class="kc-blog-card-body">
          <span class="kc-eyebrow" style="margin-bottom: 8px; display: block;">Food Science</span>
          <h3><a href="blog-1.php" style="color: inherit;">The Science Behind Dehydration</a></h3>
          <p style="margin-bottom: 20px;">Dehydration is one of the oldest food preservation techniques, but modern technology has transformed it into a precise science...</p>
          <a href="blog-1.php" class="kc-btn kc-btn-secondary kc-btn-sm">
            Read Article
            <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="kc-blog-card">
        <a href="blog-2.php" aria-label="Read Why Dehydrated Foods Are the Future">
          <div class="kc-blog-card-img" style="background: var(--color-cream);">
            <img 
              src="assets/img/blog/blog-banner-2.jpg" 
              alt="Why Dehydrated Foods Are the Future" 
              loading="lazy"
              onerror="this.onerror=null; this.style.display='none'; this.parentNode.style.background='#EDE8DE';"
            >
          </div>
        </a>
        <div class="kc-blog-card-body">
          <span class="kc-eyebrow" style="margin-bottom: 8px; display: block;">Nutrition</span>
          <h3><a href="blog-2.php" style="color: inherit;">Why Dehydrated Foods Are the Future</a></h3>
          <p style="margin-bottom: 20px;">As consumers seek convenience without sacrificing nutrition, dehydrated foods are emerging as a powerful solution in modern diets...</p>
          <a href="blog-2.php" class="kc-btn kc-btn-secondary kc-btn-sm">
            Read Article
            <svg class="kc-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </article>

    </div>

  </div>
</section>

<?php include('footer.php'); ?>