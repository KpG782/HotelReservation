<?php // app/views/contact/index.php ?>

<!--================ Breadcrumb Area =================-->
<section class="breadcrumb_area" style="background: url('<?= BASE_URL ?>/image/contact-us-banner.png') no-repeat center center; background-size: cover;">
  <div class="overlay bg-parallax"
       data-stellar-ratio="0.8"
       data-stellar-vertical-offset="0"
       data-background=""></div>
  <div class="container">
    <div class="page-cover text-center">
      <h2 class="page-cover-tittle">Contact Us</h2>
      <ol class="breadcrumb">
        <li><a href="<?= BASE_URL ?>/home/index">Home</a></li>
        <li class="active">Contact Us</li>
      </ol>
    </div>
  </div>
</section>
<!--================ End Breadcrumb Area =================-->

<!--================ Google Map Embed =================-->
<section class="contact_map section_gap">
  <div class="container">
    <iframe
      src="https://maps.google.com/maps?q=14.541184,120.979112&z=13&output=embed"
      width="100%" height="450" frameborder="0" style="border:0;"
      allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>
<!--================ End Google Map Embed =================-->

<!--================ Contact Area =================-->
<section class="contact_area section_gap">
  <div class="container">
    <div class="row">
      <!-- Contact Information -->
      <div class="col-md-4">
        <div class="contact_info">
          <div class="info_item">
            <i class="lnr lnr-home"></i>
            <h6>Manila, Philippines</h6>
            <p>Roxas Boulevard</p>
          </div>
          <div class="info_item">
            <i class="lnr lnr-phone-handset"></i>
            <h6><a href="tel:+63281545622">02 (8) 1545 622</a></h6>
            <p>Mon to Sun</p>
          </div>
          <div class="info_item">
            <i class="lnr lnr-envelope"></i>
            <h6><a href="mailto:support@dandahotel.com">support@dandahotel.com</a></h6>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
      <!-- Contact Form -->
      <div class="col-md-8">
        <form class="row contact_form" action="" method="post" novalidate="novalidate">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control rounded-input" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control rounded-input" name="email" placeholder="Enter email address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control rounded-input" name="subject" placeholder="Enter Subject" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control rounded-input" name="message" rows="6" placeholder="Enter Message" required></textarea>
            </div>
          </div>
          <div class="col-md-12 text-right">
            <button type="submit" class="btn theme_btn button_hover rounded-btn">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--================ End Contact Area =================-->

<!--================ Success & Error Modals =================-->
<div id="success" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      <h2>Thank you</h2>
      <p>Your message is successfully sent...</p>
    </div>
  </div></div>
</div>

<div id="error" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      <h2>Sorry!</h2>
      <p>Something went wrong</p>
    </div>
  </div></div>
</div>
<!--================ End Modals =================-->
