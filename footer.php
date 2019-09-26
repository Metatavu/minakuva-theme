<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
$footerImg = get_theme_mod('minakuva_footer_image_setting');
$footerText = get_theme_mod('minakuva_footer_text_setting');
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

  <div style="background: url(<?php echo esc_attr( $footerImg ); ?>);" class="minakuva-footer jumbotron jumbotron-fluid">

    <div class="<?php echo esc_attr( $container ); ?>">

      <div class="row">

        <div class="col-md-6">
          <h3><?php echo esc_attr( $footerText ); ?></h3>
        </div><!--col end -->

      </div><!-- row end -->

    </div><!-- container end -->

  </div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

