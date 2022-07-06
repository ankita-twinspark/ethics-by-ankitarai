<?php

/*Template Name: about Template 
*
*/
get_header();?>

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">

              <h3><?php the_title();?></h3>
              <?php the_content();?><p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<?php get_template_part('template-parts/common/nova-about-section'); ?>
    <section id="" class="about">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]');?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer();?>