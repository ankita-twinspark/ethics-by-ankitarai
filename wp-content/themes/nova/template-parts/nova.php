<?php

/*Template Name: Home Template 
*
*/


get_header();?>


<!-- ======= Hero Section ======= -->

  <section id="hero" class="hero d-flex align-items-center" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg.jpg') top center;">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <?php $banner_title = get_field('banner_title');
          if(!empty($banner_title)){?>
          
          <h2 data-aos="fade-up"><?php echo $banner_title;?></h2>
          <?php }else{ ?>
          <h2 data-aos="fade-up">Hello</h2>
          <?php }?>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            
            <p> <?php $banner_description = get_field('banner_description');
          if(!empty($banner_description)){?>
          
          <h2 data-aos="fade-up"><?php echo $banner_description;?></h2>
          <?php }else{ ?>
          <h2 data-aos="fade-up"> Happy</h2>
          <?php }?> </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href= <?php $banner_video_link = get_field('banner_video_link');
          if(!empty($banner_)){?>
          
          <h2 data-aos="fade-up"><?php echo $banner_description;?></h2>
          <?php }else{ ?>
          <h2 data-aos="fade-up"> </h2>
          <?php }?></i><span>Watch Video</span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <?php get_template_part('template-parts/common/nova-about-section'); ?>

        <?php get_template_part('template-parts/common/nova-services-section'); ?>

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Ut fugiat aliquam aut non</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Powerful Features for <br>Your Business</h3>
            <div class="row gy-4">
                <?php
                // Check rows exists.
                if( have_rows('home_business',132) ):
                  // Loop through rows.
                  while( have_rows('home_business',132) ) : the_row();
                  // Load sub field value.
                  $business_feature_title = get_sub_field('business_feature_title');
                  $business_feature_icon = get_sub_field('business_feature_icon');
                  $business_feature_icon_color = get_sub_field('business_feature_icon_color');
                ?>
                  <div class="col-md-6">
                    <div class="icon-list d-flex">
                      <i class="<?php echo $business_feature_icon;?>" style="color: <?php echo $business_feature_icon_color;?>;"></i>
                      <span><?php echo $business_feature_title;?></span>
                    </div>
                  </div><!-- End Icon List Item-->
                <?php 
                    endwhile;
                endif;
                ?>
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="assets/img/iphone.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
              <a href="#about" class="btn-get-started">Get Started</a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
              <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritati</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
              <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

<?php get_footer();?>