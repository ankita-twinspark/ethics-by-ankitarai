<!-- ======= Our Services Section ======= -->
<section id="services-list" class="services-list">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Our Services</h2>
    </div>
    <div class="row gy-5">
    <?php
      global $post;
      $args = array('post_type' => 'services' );     
      $the_query = new WP_Query( $args );
      // The Loop
      if ( $the_query->have_posts() ) {

      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $get_font_awesome_icon_value = get_post_meta( $post->ID, 'services_meta_key', true );
        $color_picker = get_field('color_picker');
        ?>
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0">
            <i class="<?php echo $get_font_awesome_icon_value;?>" style="color: <?php echo $color_picker;?>;"></i>
          </div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link"><?php the_title();?></a></h4>
            <p class="description"><?php the_content();?></p>
          </div>
        </div>
      <?php   } // endwhile
      wp_reset_postdata(); // VERY VERY IMPORTANT
      }?>
      <!-- End Service Item -->
      </div>

  </div>
</section><!-- End Our Services Section -->