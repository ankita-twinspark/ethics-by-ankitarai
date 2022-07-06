<!-- ======= Why Choose Us Section ======= -->
<section id="why-us" class="why-us">
<div class="container" data-aos="fade-up">

<div class="section-header">
<h2>Why Choose Us</h2>
</div>
<div class="row g-0" data-aos="fade-up" data-aos-delay="200">
<div class="col-xl-5 img-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/why-us-bg.jpg')"></div>
<div class="col-xl-7 slides  position-relative">
<div class="slides-1 swiper">
<div class="swiper-wrapper">

<?php
$args = array(  
'post_type' => 'affiliation',
'post_status' => 'publish',
'posts_per_page' => -1, 
'order' => 'ASC'
);
$i = 1;
global $post;
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post(); 
$value = get_post_meta( $post->ID, '_wporg_meta_key', true );

?>

<div class="swiper-slide">
    <div class="item">
      <h3 class="mb-3"> <?php the_title();?></h3>
      <h4 class="mb-3"> <?php echo $value;?></h4>
      <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
    </div>
  </div><!-- End slide item -->
<?php 
$i++;
endwhile;
wp_reset_postdata(); 
?>

  

</div>
<div class="swiper-pagination"></div>
</div>
<div class="swiper-button-prev"></div> 
<div class="swiper-button-next"></div>
<div tabindex="-1">
</div>
</div>

</div>

</div>
</section><!-- End Why Choose Us Section -->