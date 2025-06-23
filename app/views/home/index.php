<?php // app/views/home/index.php ?>

<!--================ Banner Area with Carousel =================-->
<section class="banner_area">
  <div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></li>
      <li data-bs-target="#bannerCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#bannerCarousel" data-bs-slide-to="2"></li>
      <li data-bs-target="#bannerCarousel" data-bs-slide-to="3"></li>
    </ol>

    <!-- Carousel Items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="booking_table d_flex align-items-center">
          <img class="d-block w-100" src="<?= BASE_URL ?>/image/banner_01.png" alt="Relax Your Mind">
          <div class="carousel-caption d-md-block">
            <h6></h6>
            <h2></h2>
            <p></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="booking_table d_flex align-items-center">
          <img class="d-block w-100" src="<?= BASE_URL ?>/image/banner_02.png" alt="Unmatched Elegance">
          <div class="carousel-caption d-md-block">
            <h6>Unmatched Elegance</h6>
            <h2>Experience Unparalleled Comfort</h2>
            <p>Indulge in world-class accommodations, where every detail is meticulously crafted for your ultimate relaxation and rejuvenation.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="booking_table d_flex align-items-center">
          <img class="d-block w-100" src="<?= BASE_URL ?>/image/banner_03.png" alt="Exclusive Getaway">
          <div class="carousel-caption d-md-block">
            <h6>Exclusivity Awaits</h6>
            <h2>Your Perfect Getaway</h2>
            <p>From private suites to personalized services, every moment at Darrel & Ayien’s is tailored to create unforgettable memories.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="booking_table d_flex align-items-center">
          <img class="d-block w-100" src="<?= BASE_URL ?>/image/banner_04.png" alt="Exquisite Dining & Leisure">
          <div class="carousel-caption d-md-block">
            <h6>Exquisite Dining & Leisure</h6>
            <h2>Savor the Finer Things in Life</h2>
            <p>Relish gourmet dining, indulge in a curated selection of cocktails, and unwind with bespoke experiences in our lavish amenities.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#bannerCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</section>
<!--================ End Banner Area =================-->

<!--================ Accomodation Area =================-->
<section class="accomodation_area section_gap">
  <div class="container">
    <div class="section_title text-center">
      <h2 class="title_color">Luxurious Accommodations</h2>
      <p>Our elegantly designed rooms and suites cater to your every need, ensuring that your stay with us is nothing short of extraordinary.</p>
      <a href="<?= BASE_URL ?>/accomodation/index" class="btn theme_btn button_hover mt-3">Book Now</a>
    </div>
    <div class="row mb_30">
      <!-- Regular Room -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room1.jpg" alt="Regular Room">
          </div>
          <a href="#"><h4 class="sec_h4">Regular Room</h4></a>
          <h5>$100 <small>/night</small></h5>
          <p>Comfortable and simple, perfect for budget-conscious travelers.</p>
          <p><strong>Payment:</strong> Cash (No additional charge)</p>
        </div>
      </div>
      <!-- Single Deluxe Room -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room2.jpg" alt="Single Deluxe Room">
          </div>
          <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
          <h5>$300 <small>/night</small></h5>
          <p>A luxurious retreat with spacious interiors and premium amenities.</p>
          <p><strong>Payment:</strong> Check (+5% additional charge)</p>
        </div>
      </div>
      <!-- Suite -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room3.jpg" alt="Suite">
          </div>
          <a href="#"><h4 class="sec_h4">Suite</h4></a>
          <h5>$500 <small>/night</small></h5>
          <p>Experience ultimate comfort with breathtaking views and luxury service.</p>
          <p><strong>Payment:</strong> Credit Card (+10% additional charge)</p>
        </div>
      </div>
      <!-- Double Deluxe Room -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room4.jpeg" alt="Double Deluxe Room">
          </div>
          <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
          <h5>$500 <small>/night</small></h5>
          <p>Spacious and elegant, ideal for couples or friends looking for extra space.</p>
          <p><strong>Payment:</strong> Cash (No additional charge)</p>
        </div>
      </div>
      <!-- Family Deluxe Room -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room5.jpg" alt="Family Deluxe Room">
          </div>
          <a href="#"><h4 class="sec_h4">Family Deluxe Room</h4></a>
          <h5>$750 <small>/night</small></h5>
          <p>Designed for families with spacious layout and family-friendly amenities.</p>
          <p><strong>Payment:</strong> Cash (No additional charge)</p>
          <p><strong>Discount:</strong> 15% off for stays of 6 days or more</p>
        </div>
      </div>
      <!-- Regular Family Room -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room6.jpg" alt="Regular Family Room">
          </div>
          <a href="#"><h4 class="sec_h4">Regular Family Room</h4></a>
          <h5>$500 <small>/night</small></h5>
          <p>Perfect for a small family, with everything you need for a comfortable stay.</p>
          <p><strong>Payment:</strong> Cash (No additional charge)</p>
          <p><strong>Discount:</strong> 10% off for stays of 3-5 days</p>
        </div>
      </div>
      <!-- Suite Family Room -->
      <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
          <div class="hotel_img">
            <img src="<?= BASE_URL ?>/image/room7.jpg" alt="Suite Family Room">
          </div>
          <a href="#"><h4 class="sec_h4">Suite Family Room</h4></a>
          <h5>$1,000 <small>/night</small></h5>
          <p>Luxury and space combined for a large family or group with exquisite comfort.</p>
          <p><strong>Payment:</strong> Credit Card (+10% additional charge)</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Accomodation Area =================-->

<!--================ Facilities Area =================-->
<section class="facilities_area section_gap">
  <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="<?= BASE_URL ?>/image/services.png"></div>
  <div class="container">
    <div class="section_title text-center">
      <h2 class="title_w">Darrel & Ayien's Five Star Hotel Facilities</h2>
      <p style="color:white;">Experience exceptional luxury and eco-conscious amenities, designed for your ultimate comfort and well-being.</p>
    </div>
    <div class="row mb_30">
      <?php
        $facilities = [
          ['icon'=>'lnr-dinner','title'=>'Restaurant','text'=>'Indulge in world-class dining at our gourmet restaurant, offering a variety of exquisite dishes made with sustainable, locally-sourced ingredients.'],
          ['icon'=>'lnr-bicycle','title'=>'Sports Club','text'=>'Stay active with state-of-the-art facilities at our Sports Club, featuring a range of sports and activities for all ages and skill levels.'],
          ['icon'=>'lnr-shirt','title'=>'Swimming Pool','text'=>'Relax and unwind at our pristine, eco-friendly swimming pool, offering a serene oasis with stunning views and luxurious amenities.'],
          ['icon'=>'lnr-car','title'=>'Rent a Car','text'=>'Explore the beauty of the Philippines with ease by renting one of our luxury eco-friendly vehicles, designed for comfort and efficiency.'],
          ['icon'=>'lnr-construction','title'=>'Gymnasium','text'=>'Achieve your fitness goals in our fully-equipped, environmentally-conscious gym, featuring the latest equipment and personalized training programs.'],
          ['icon'=>'lnr-coffee-cup','title'=>'Bar','text'=>'Savor expertly crafted cocktails and drinks at our sophisticated bar, offering a chic atmosphere and a selection of organic beverages.'],
        ];
        foreach($facilities as $f): ?>
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="lnr <?= $f['icon'] ?>"></i> <?= $f['title'] ?></h4>
            <p><?= $f['text'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--================ End Facilities Area =================-->

<!--================ About History Area =================-->
<section class="about_history_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about_content">
          <h2 class="title title_color">Our History</h2>
          <p>Darrel & Ayien's Five Star Hotel was founded with a vision of combining the finest luxury and modern amenities in the heart of the Philippines. From humble beginnings, our hotel has grown into one of the most sought-after destinations for both relaxation and adventure. Our commitment to providing unparalleled guest experiences, while celebrating Filipino culture and hospitality, has made us a beloved name in the hospitality industry.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about_content">
          <h2 class="title title_color">Our Mission</h2>
          <p>Our mission is to provide exceptional, personalized service to every guest, offering an unforgettable luxury experience while embracing eco-friendly and sustainable practices. We strive to create a haven of relaxation and rejuvenation, where guests can unwind in the lap of luxury while experiencing the best that Filipino hospitality has to offer. At Darrel & Ayien's Five Star Hotel, every detail is carefully curated to ensure comfort, elegance, and outstanding customer care.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about_content">
          <h2 class="title title_color">Our Vision</h2>
          <p>Our vision is to become the premier luxury hotel in the Philippines, renowned for our dedication to excellence, sustainability, and authentic Filipino hospitality. We aim to redefine the hospitality industry by offering an innovative, eco-conscious experience, where our guests can enjoy modern comforts while respecting the environment. Our goal is to continually evolve to meet the needs of our discerning guests while maintaining our position as an industry leader in service and quality.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End About History Area =================-->

<!--================ Testimonial Area =================-->
<section class="testimonial_area section_gap">
  <div class="container">
    <div class="section_title text-center">
      <h2 class="title_color">What Our Guests Say</h2>
      <p>Here’s what our wonderful guests have to say about their stay at our hotel. Your satisfaction is our top priority!</p>
    </div>
    <div class="testimonial_slider owl-carousel">
      <?php
        $testimonials = [
          ['img'=>'placeholder.jpg','name'=>'Sarah Williams','text'=>'"This hotel exceeded all of my expectations! ... I’ll definitely be coming back!"','rating'=>5],
          ['img'=>'placeholder.jpg','name'=>'John Doe','text'=>'"A wonderful stay! The location was perfect ... Highly recommend!"','rating'=>5],
          ['img'=>'placeholder.jpg','name'=>'Michael Johnson','text'=>'"I had an incredible experience at this hotel! ... I highly recommend this hotel to anyone visiting the area."','rating'=>4.5],
          ['img'=>'placeholder.jpg','name'=>'Emily Carter','text'=>'"What an unforgettable experience! ... I’ll definitely be back for another stay!"','rating'=>5],
        ];
        foreach($testimonials as $t): ?>
        <div class="media testimonial_item">
          <img class="rounded-circle" src="<?= BASE_URL ?>/image/<?= $t['img'] ?>" alt="Client Image">
          <div class="media-body">
            <p><?= $t['text'] ?></p>
            <a href="#"><h4 class="sec_h4"><?= $t['name'] ?></h4></a>
            <div class="star">
              <?php for($i=1;$i<=5;$i++): ?>
                <a href="#"><i class="fa fa-star<?php if($i > $t['rating']) echo '-o'; ?>"></i></a>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--================ End Testimonial Area =================-->
