<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="entry-content">
        <div class="wrapper" id="full-width-page-wrapper">

            <div class="container" id="content">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 content-area" id="primary">

                        <main class="site-main" id="main" role="main">

                            <?php the_title( '<h1 class="index-entry-title">', '</h1>' ); ?>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                                
                        </main><!-- #main -->

                    </div><!-- #primary -->
                    <div class="col-md-1"></div>

                </div><!-- .row end -->

            </div><!-- #content -->
        </div><!-- wrapper -->
    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
