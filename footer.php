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
$footerSmallImg = get_theme_mod('minakuva_footer_small_image_setting');
$footerText = get_theme_mod('minakuva_footer_text_setting');
$footerBtnText = get_theme_mod('minakuva_footer_button_text_setting');
$footerBtnUrl = get_theme_mod('minakuva_footer_button_url_setting');
$footerFbUrl = get_theme_mod('minakuva_footer_facebook_url_setting');
$footerInstaUrl = get_theme_mod('minakuva_footer_instagram_url_setting');
?>

<div class="wrapper" id="wrapper-footer">

  <div class="hero-footer-container" style="background: url(<?php echo esc_attr( $footerImg ); ?>);">
    <div class="hero-footer-content-container">
      <div class="container-narrow <?php echo esc_attr( $container ); ?>">
        <div class="row">
          <div class="col-6">
            <h1 class="hero-footer-title">
              <?php echo esc_attr( $footerText ); ?>
            </h1>
            <div class="hero-footer-button-container">
              <a href="<?php echo esc_attr( $footerBtnUrl ); ?>" class="btn btn-lg hero-footer-button btn-dark">
                <?php echo esc_attr( $footerBtnText ); ?>
              </a>
            </div>
          </div>
          <div class="col-6">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <img class="footer-small-image" src="<?php echo esc_attr( $footerSmallImg ); ?>" />
  </div>
  <div class="<?php echo esc_attr( $container ); ?>">
    <?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
    <div class="footer-credits-container">
      <div class="social-media-icons-container">
        <a href="<?php echo esc_attr( $footerFbUrl ); ?>">
          <span class="social-media-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
        </a>
        <a href="<?php echo esc_attr( $footerInstaUrl ); ?>">
          <span class="social-media-icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
        </a>
      </div>
      <div class="copyright-container">
        <p class="copyright-text">© Minäkuva® 2019. Kaikki oikeudet pidätetään.</p>
      </div>
      <div class="mt-container">
        <a class="mt-link" href="https://www.metatavu.fi">
          <i class="fa fa-heart" aria-hidden="true"></i>&nbsp;Metatavu
        </a>
      </div>
    </div>
  </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

