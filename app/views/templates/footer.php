  <!--================ Start Footer Area =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <!-- About Us -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6 class="footer_title">About Us</h6>
            <p>Experience world-class hospitality at Darrel & Ayien's Five-Star Hotel, where luxury meets elegance. Indulge in bespoke services, exquisite dining, and unparalleled comfort in the heart of the Philippines.</p>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6 class="footer_title">Quick Links</h6>
            <ul class="footer_links">
              <li><a href="<?= BASE_URL ?>/home/index">Home</a></li>
              <li><a href="<?= BASE_URL ?>/home/about">Company's Profile</a></li>
              <li><a href="<?= BASE_URL ?>/reservation/index">Reservation</a></li>
              <li><a href="<?= BASE_URL ?>/home/contact">Contacts</a></li>
              <li><a href="<?= BASE_URL ?>/crud/index">Admin</a></li>
            </ul>
          </div>
        </div>

        <!-- Contact Us -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6 class="footer_title">Contact Us</h6>
            <p><i class="fa fa-map-marker"></i> Manila, Philippines</p>
            <p><i class="fa fa-phone"></i> +63 912 345 6789</p>
            <p><i class="fa fa-envelope"></i> reservations@dandahotel.com</p>
          </div>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6 class="footer_title">Exclusive Offers & Updates</h6>
            <p>Join our elite guest list and receive special promotions, events, and luxury experiences straight to your inbox.</p>
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Enter your email" required type="email">
                  <button class="btn sub-btn"><i class="fa fa-envelope"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="border_line"></div>

      <div class="row footer-bottom d-flex justify-content-between align-items-center">
        <p class="col-lg-8 col-sm-12 footer-text m-0">
          &copy; <script>document.write(new Date().getFullYear());</script> Darrel & Ayien's Five-Star Hotel. All Rights Reserved. Designed by <a href="#" target="_blank">ReservationRiveraGarcia</a>.
        </p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#"><i class="fa fa-facebook-f"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <!-- Optional JavaScript -->
  <script src="<?= BASE_URL ?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?= BASE_URL ?>/js/popper.js"></script>
  <script src="<?= BASE_URL ?>/js/bootstrap.min.js"></script>
  <script src="<?= BASE_URL ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= BASE_URL ?>/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= BASE_URL ?>/js/mail-script.js"></script>
  <script src="<?= BASE_URL ?>/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
  <script src="<?= BASE_URL ?>/vendors/nice-select/js/jquery.nice-select.js"></script>
  <script src="<?= BASE_URL ?>/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="<?= BASE_URL ?>/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var bannerCarousel = document.getElementById("bannerCarousel");
      bannerCarousel.addEventListener("slid.bs.carousel", function (event) {
        var totalItems = document.querySelectorAll("#bannerCarousel .carousel-item").length;
        if (event.to === totalItems - 1) {
          setTimeout(function () {
            new bootstrap.Carousel(bannerCarousel).to(0);
          }, 500);
        }
      });
    });
    $(document).ready(function () {
      $.stellar();
    });
  </script>
</body>
</html>
