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
$footerShopBtnText = get_theme_mod('minakuva_footer_shopbutton_text_setting');
$footerBtnUrl = get_theme_mod('minakuva_footer_button_url_setting');
$footerShopBtnUrl = get_theme_mod('minakuva_footer_shopbutton_url_setting');
$footerFbUrl = get_theme_mod('minakuva_footer_facebook_url_setting');
$footerInstaUrl = get_theme_mod('minakuva_footer_instagram_url_setting');
$footerAddressHeader = get_theme_mod('minakuva_footer_address_header_setting');
$footerAddressText = get_theme_mod('minakuva_footer_address_text_setting');
?>

<div class="wrapper" id="wrapper-footer">
  <?php if ( is_front_page()) : ?>
    <div class="hero-footer-container" style="background: url(<?php echo esc_attr( $footerImg ); ?>);">
      <div class="hero-footer-content-container">
        <div class="container-narrow <?php echo esc_attr( $container ); ?>">
          <div class="footer-grid-container">
            <div class="footer-grid-item">
                <h1 class="hero-footer-title">
                  <?php echo esc_attr( $footerText ); ?>
                </h1>
                <div class="hero-footer-button-container">
                    <a href="<?php echo esc_attr( $footerBtnUrl ); ?>" class="btn btn-lg hero-footer-button btn-dark">
                      <?php echo esc_attr( $footerBtnText ); ?></a>
                </div>
              </div>
            <div class="footer-grid-item">
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <div class="container-fluid">
    <img class="footer-small-image" src="<?php echo esc_attr( $footerSmallImg ); ?>" />
  </div>
  <div class="<?php echo esc_attr( $container ); ?>">
    <?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
    <div class="footer-credits-container">
      <div class="footer-address">
        <b class="footer-address-text"><?php echo esc_attr( $footerAddressHeader ); ?></b>
        <p class="footer-address-text"><?php echo esc_attr( $footerAddressText ); ?><p>
      </div>
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

