<?php
// Contact Us Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Krishichakra Foods Private Limited</title>
    <meta name="description" content="Get in touch with Krishichakra Foods for product enquiries, bulk orders, samples, or business partnerships. We'd love to hear from you.">
<?php include('header.php'); ?>

<main>
    <section class="kc-page-hero kc-reveal">
        <div class="kc-container">
            <div class="kc-page-hero-content">
                <h1>Get In Touch</h1>
                <div class="kc-breadcrumb">Home &gt; Contact Us</div>
            </div>
        </div>
    </section>

    <section class="kc-contact-section kc-section">
        <div class="kc-container">
            <div class="kc-contact-grid">
                
                <div class="kc-contact-info kc-reveal-left">
                    <h3>Let's Work Together</h3>
                    <p>Whether you're looking for bulk orders, product samples, or a long-term supply partnership — we're here to help.</p>
                    
                    <div class="kc-contact-detail">
                        <svg class="kc-contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <div class="kc-contact-detail-text">
                            <h5>Director</h5>
                            <p>Mr. Kiranbhai Patel</p>
                        </div>
                    </div>
                    
                    <div class="kc-contact-detail">
                        <svg class="kc-contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <div class="kc-contact-detail-text">
                            <h5>Phone</h5>
                            <p><a href="tel:+919373654308">+91 9373654308</a></p>
                        </div>
                    </div>
                    
                    <div class="kc-contact-detail">
                        <svg class="kc-contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <div class="kc-contact-detail-text">
                            <h5>Email</h5>
                            <p><a href="mailto:sales@krishichakra.com">sales@krishichakra.com</a></p>
                        </div>
                    </div>
                    
                    <div class="kc-contact-detail">
                        <svg class="kc-contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <div class="kc-contact-detail-text">
                            <h5>Address</h5>
                            <p>Gat No 261, Shahada Shirpur Road, Near Sonvad Phata, Shahada, Nandurbar – 425409, Maharashtra, India</p>
                        </div>
                    </div>

                    <div class="kc-contact-socials">
                        <a href="#" class="kc-social-btn"><img src="assets/img/icon/whatsapp.png" alt="WhatsApp"></a>
                        <a href="#" class="kc-social-btn"><img src="assets/img/icon/facebook.png" alt="Facebook"></a>
                        <a href="#" class="kc-social-btn"><img src="assets/img/icon/instagram.png" alt="Instagram"></a>
                        <a href="#" class="kc-social-btn"><img src="assets/img/icon/linkedin.png" alt="LinkedIn"></a>
                    </div>
                </div>
                
                <div class="kc-contact-form-wrap kc-reveal-right">
                    <h3>Send Us a Message</h3>
                    <form id="kc-contact-form" class="kc-contact-form" name="myform" enctype="multipart/form-data" autocomplete="off" method="post" action="https://www.weblinkservices.net/krishichakra/emailsend.php">
                        <div class="kc-form-row">
                            <div class="kc-form-group">
                                <label class="kc-form-label" for="name">Name</label>
                                <input type="text" id="name" name="name" class="kc-form-input" required>
                            </div>
                            <div class="kc-form-group">
                                <label class="kc-form-label" for="cname">Company</label>
                                <input type="text" id="cname" name="cname" class="kc-form-input">
                            </div>
                        </div>
                        <div class="kc-form-row">
                            <div class="kc-form-group">
                                <label class="kc-form-label" for="phone">Phone</label>
                                <input type="number" id="phone" name="phone" class="kc-form-input" maxlength="15" required>
                            </div>
                            <div class="kc-form-group">
                                <label class="kc-form-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="kc-form-input" required>
                            </div>
                        </div>
                        <div class="kc-form-row">
                            <div class="kc-form-group">
                                <label class="kc-form-label" for="pname">Product</label>
                                <input type="text" id="pname" name="pname" class="kc-form-input">
                            </div>
                            <div class="kc-form-group">
                                <label class="kc-form-label" for="city">City</label>
                                <input type="text" id="city" name="city" class="kc-form-input">
                            </div>
                        </div>
                        
                        <input type="checkbox" name="contact_me_by_fax_only" value="1" style="display:none !important" tabindex="-1" autocomplete="off">
                        
                        <div class="kc-form-group">
                            <label class="kc-form-label" for="msg">Message</label>
                            <textarea id="msg" name="msg" class="kc-form-textarea" rows="4" required></textarea>
                        </div>
                        
                        <div class="kc-form-group">
                            <label class="kc-form-file-label" for="file-upload">📎 Upload File (optional)</label>
                            <input type="file" id="file-upload" name="file" style="display: none;">
                        </div>
                        
                        <div class="kc-form-group kc-captcha-wrap">
                            <span class="kc-captcha-sum"></span>
                            <input type="text" class="kc-captcha-input kc-form-input" required placeholder="Enter sum">
                            <button type="button" class="kc-captcha-refresh kc-btn kc-btn-secondary">Refresh</button>
                        </div>
                        
                        <button type="submit" class="kc-submit-btn kc-btn kc-btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="kc-map-wrap kc-reveal">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.7718605432424!2d74.4674391746304!3d21.544892374922043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf6d4f2c1681cf%3A0x49379eed3ee248ba!2sNew%20Shahada%20Nandurbar%20Transport%20Agency!5e0!3m2!1sen!2sin!4v1723435160079!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Krishichakra Foods Location"></iframe>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>