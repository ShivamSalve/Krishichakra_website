<?php
/**
 * Krishichakra Foods Private Limited
 * Career Opportunities — Join Our Team
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Career | Krishichakra Foods Private Limited</title>
  <meta name="description" content="Join the Krishichakra Foods team. Explore career opportunities in food manufacturing, quality control, R&D, and international sales.">
</head>
<?php include('header.php'); ?>

<!-- ======================== PAGE HERO ======================== -->
<section class="kc-page-hero" aria-label="Page Hero">
  <div class="kc-page-hero-content kc-reveal">
    <h1>Join Our Team</h1>
    <nav class="kc-breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span class="kc-breadcrumb-sep">/</span>
      <span>Career</span>
    </nav>
  </div>
</section>

<!-- ======================== WHY WORK WITH US ======================== -->
<section class="kc-section" aria-label="Career Opportunities">
  <div class="kc-container">
    
    <div class="kc-section-header center kc-reveal">
      <span class="kc-eyebrow">We Are Hiring</span>
      <h2>Build Your Career With Us</h2>
      <p>At Krishichakra Foods, we believe great products are made by great people. Join a team passionate about food quality, innovation, and making a positive impact.</p>
    </div>

    <!-- Why Work Here Cards -->
    <div class="kc-grid-3 kc-stagger" style="margin-top: 48px; margin-bottom: 80px;">
      
      <!-- Card 1 -->
      <div class="kc-mv-card">
        <div class="kc-mv-icon">
          <svg viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="var(--color-forest)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
            <polyline points="17 6 23 6 23 12"></polyline>
          </svg>
        </div>
        <h3>Growth-Oriented</h3>
        <p>Continuous learning opportunities, skill development programs, and clear career progression paths in a fast-growing company.</p>
      </div>

      <!-- Card 2 -->
      <div class="kc-mv-card">
        <div class="kc-mv-icon">
          <svg viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="var(--color-forest)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 8v4l3 3"></path>
          </svg>
        </div>
        <h3>Impactful Work</h3>
        <p>Be part of a team that exports Indian agricultural excellence to 20+ countries — your work genuinely matters at scale.</p>
      </div>

      <!-- Card 3 -->
      <div class="kc-mv-card">
        <div class="kc-mv-icon">
          <svg viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="var(--color-forest)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
        </div>
        <h3>Collaborative Culture</h3>
        <p>A team that respects every individual's contribution, fosters open communication, and celebrates collective wins.</p>
      </div>

    </div>

    <!-- Application Form Section -->
    <div class="kc-content-wrap kc-reveal" style="max-width: 960px; margin: 0 auto;">
      <h3>Apply Now</h3>
      
      <form name="careerform" enctype="multipart/form-data" autocomplete="off" method="post" action="career-emailsend.php">
        
        <div class="kc-form-row">
          <div class="kc-form-group">
            <label class="kc-form-label" for="applicant-name">Full Name *</label>
            <input type="text" id="applicant-name" name="name" class="kc-form-input" placeholder="e.g. Rahul Sharma" required>
          </div>
          <div class="kc-form-group">
            <label class="kc-form-label" for="applicant-email">Email Address *</label>
            <input type="email" id="applicant-email" name="email" class="kc-form-input" placeholder="e.g. rahul@example.com" required>
          </div>
        </div>

        <div class="kc-form-row">
          <div class="kc-form-group">
            <label class="kc-form-label" for="applicant-phone">Phone Number *</label>
            <input type="tel" id="applicant-phone" name="phone" class="kc-form-input" placeholder="e.g. +91 98765 43210" required>
          </div>
          <div class="kc-form-group">
            <label class="kc-form-label" for="applicant-position">Position Applying For *</label>
            <input type="text" id="applicant-position" name="position" class="kc-form-input" placeholder="e.g. Quality Control Manager / Sales Executive" required>
          </div>
        </div>

        <div class="kc-form-group">
          <label class="kc-form-label" for="applicant-experience">Total Experience (Years / Months)</label>
          <input type="text" id="applicant-experience" name="experience" class="kc-form-input" placeholder="e.g. 3 Years in Food Manufacturing">
        </div>

        <div class="kc-form-group">
          <label class="kc-form-label" for="applicant-message">Cover Letter / Message</label>
          <textarea id="applicant-message" name="message" class="kc-form-textarea" rows="5" placeholder="Tell us briefly about your background and why you wish to join Krishichakra Foods..."></textarea>
        </div>

        <div class="kc-form-group">
          <label class="kc-form-label" for="applicant-resume">Upload Resume (PDF, DOC, DOCX) *</label>
          <label class="kc-form-file-label" for="applicant-resume">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
              <polyline points="17 8 12 3 7 8"></polyline>
              <line x1="12" y1="3" x2="12" y2="15"></line>
            </svg>
            <span id="file-name-display">Choose file or drag &amp; drop your resume</span>
          </label>
          <input type="file" id="applicant-resume" name="resume" accept=".pdf,.doc,.docx" required onchange="if(this.files[0]) document.getElementById('file-name-display').innerText = this.files[0].name;">
        </div>

        <button type="submit" class="kc-submit-btn" style="margin-top: 24px;">
          Submit Application
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>

      </form>

      <p class="kc-text-muted" style="margin-top: 24px; font-size: 0.875rem; text-align: center;">
        Due to high volume, we will reach out only to shortlisted candidates within 2 weeks.
      </p>

    </div>

  </div>
</section>

<?php include('footer.php'); ?>