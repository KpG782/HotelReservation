<?php // app/views/about/index.php ?>

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area" style="background: url('<?= BASE_URL ?>/image/about-us-banner.png') no-repeat center center; background-size: cover;">
  <div class="overlay bg-parallax"
       data-stellar-ratio="0.8"
       data-stellar-vertical-offset="0"
       data-background=""></div>
  <div class="container">
    <div class="page-cover text-center">
      <h2 class="page-cover-tittle">About Us</h2>
      <ol class="breadcrumb">
        <li><a href="<?= BASE_URL ?>/home/index">Home</a></li>
        <li class="active">About</li>
      </ol>
    </div>
  </div>
</section>
<!--================ End Breadcrumb Area =================-->

<!--================ About Us Section =================-->
<section class="about_us_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d_flex align-items-center">
        <div class="about_content">
          <h2 class="title title_color">Who we are</h2>
          <p>We are committed to delivering an exceptional experience, driven by our history of excellence in hospitality and services. Our goal is to make each guest feel at home and ensure that their needs are met with the utmost care and attention to detail.</p>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?= BASE_URL ?>/image/about_us.png" alt="About Us">
      </div>
    </div>
  </div>
</section>
<!--================ End About Us Section =================-->

<!--================ History Section =================-->
<section class="history_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="<?= BASE_URL ?>/image/history_image.png" alt="Our History">
      </div>
      <div class="col-md-6 d_flex align-items-center">
        <div class="history_content">
          <h2 class="title title_color">Our History</h2>
          <p>Our journey began years ago with a vision to provide a unique hospitality experience that blends comfort, luxury, and tradition. Through the years, Darrel and Ayiens Five Star Hotel has grown to become a renowned name in the hospitality industry, known for its exceptional service and commitment to excellence.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End History Section =================-->

<!--================ Mission Section =================-->
<section class="mission_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d_flex align-items-center">
        <div class="mission_content">
          <h2 class="title title_color">Our Mission</h2>
          <p>Our mission is to provide the highest quality of service while maintaining a commitment to sustainability, community engagement, and innovation. We aim to create memorable experiences for our guests by offering exceptional hospitality in a welcoming and eco-friendly environment.</p>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?= BASE_URL ?>/image/mission_image.png" alt="Mission">
      </div>
    </div>
  </div>
</section>
<!--================ End Mission Section =================-->

<!--================ Vision Section =================-->
<section class="vision_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="<?= BASE_URL ?>/image/vision_image.png" alt="Vision">
      </div>
      <div class="col-md-6 d_flex align-items-center">
        <div class="vision_content">
          <h2 class="title title_color">Our Vision</h2>
          <p>Our vision is to be recognized as a leading hospitality brand that sets new standards in luxury, service, and customer experience. We aspire to create an environment where guests feel valued, comfortable, and immersed in the finest hospitality services.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Vision Section =================-->

<!--================ Facilities Area =================-->
<section class="facilities_area section_gap">
  <div class="overlay bg-parallax"
       data-stellar-ratio="0.8"
       data-stellar-vertical-offset="0"
       data-background="<?= BASE_URL ?>/image/services.png"></div>
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
          ['img'=>'placeholder.jpg','name'=>'Sarah Williams','text'=>'"This hotel exceeded all of my expectations! The staff was incredibly friendly and went out of their way to make me feel comfortable. The room was spacious, clean, and beautifully decorated. I especially enjoyed the breakfast buffet, which offered a wide variety of fresh and delicious options. I’ll definitely be coming back!"','rating'=>5],
          ['img'=>'placeholder.jpg','name'=>'John Doe','text'=>'"A wonderful stay! The location was perfect for exploring the city. My room had an amazing view of the skyline, and the amenities were top-notch. The spa was a great way to relax after a day of sightseeing. The staff was courteous, and they really made my stay memorable. Highly recommend!"','rating'=>5],
          ['img'=>'placeholder.jpg','name'=>'Michael Johnson','text'=>'"I had an incredible experience at this hotel! From the moment I walked in, the staff made me feel welcome and at home. The room was spotless, and the bed was so comfortable. The location was perfect for exploring all the local attractions, and the restaurant on-site was fantastic. I highly recommend this hotel to anyone visiting the area."', 'rating'=>4.5],
          ['img'=>'placeholder.jpg','name'=>'Emily Carter','text'=>'"What an unforgettable experience! The hotel had everything I needed for a relaxing getaway. The pool and bar area were perfect for unwinding after a busy day. The hotel’s attention to detail in terms of comfort and service was outstanding. I’ll definitely be back for another stay!"','rating'=>5],
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
