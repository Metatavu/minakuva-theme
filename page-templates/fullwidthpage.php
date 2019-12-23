<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part('hero'); ?>
  <?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

    <div class="container" id="content">

        <div class="row">
            <div class="content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

        <?php if ( is_front_page() ) : ?>
            <div class="row">
                <?php get_template_part( 'global-templates/index-feature-content' ); ?>
            </div>
        <?php endif; ?>

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
