<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$frontpage_posts_query = new WP_Query([
  'post_type'=>'post',
  'post_status'=>'publish',
  'posts_per_page'=> 6,
  'category_name' => 'frontpage'
]);
?>

<?php $postConter = 0; ?>
<!-- the loop -->
<?php while ( $frontpage_posts_query->have_posts() ) : $frontpage_posts_query->the_post(); ?>
  <?php if($postConter < 1) : ?>
    <div class="row entry-featured-posts">
  <?php endif; ?>
  <div class="col-md-4">
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <?php the_title('<h3 class="index-featured-post-title">', '</h3>'); ?>
    <p>
      <?php the_content() ?>
    </p>
  </div>
  <?php $postConter++; ?>
  <?php if($postConter == 3) : ?>
    </div>
    <?php $postConter = 0; ?>
  <?php endif; ?>
<?php endwhile; ?>
<!-- end of the loop -->
<?php if($postConter > 0) : ?>
  </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
