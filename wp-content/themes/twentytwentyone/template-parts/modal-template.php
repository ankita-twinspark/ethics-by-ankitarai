<?php 

/* Template Name: Modal template */ ?>

<?php get_header();?>




<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">

<?php
    $args = array(  
        'post_type' => 'modals',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'order' => 'ASC'
    );
    $i = 1;
    global $post;
    $loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>



       <?php 
  $i++;
    endwhile;
    wp_reset_postdata(); 
?>
  
<!-- Button trigger modal -->

  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php

get_footer();

?>