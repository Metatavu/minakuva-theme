<?php
/**
 * The template for displaying the hero in main page.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
$heroImg = get_theme_mod( 'minakuva_hero_image_setting' );
$heroTitle = get_theme_mod( 'minakuva_hero_title' );
$heroText = get_theme_mod( 'minakuva_hero_text_setting' );
$heroBtn1Text = get_theme_mod( 'minakuva_hero_button1_text_setting' );
$heroBtn1Url = get_theme_mod( 'minakuva_hero_button1_url_setting' );
$heroBtn2Text = get_theme_mod( 'minakuva_hero_button2_text_setting' );
$heroBtn2Url = get_theme_mod( 'minakuva_hero_button2_url_setting' );
?>

<div class="wrapper" id="wrapper-hero">
    <div class="hero-image-container" style="background:url(<?php echo esc_attr( $heroImg ); ?>);">
        <div class="hero-banner-content-container">
            <h1 class="hero-banner-title">
                <?php echo esc_attr( $heroTitle ); ?>
            </h1>
            <h2 class="hero-banner-subtitle">
                <?php echo esc_attr( $heroText ); ?>
            </h2>
            <div class="hero-banner-button-container">
                <a href="<?php echo esc_attr( $heroBtn1Url ); ?>"  class="btn btn-lg hero-banner-button btn-light" >
                    <?php echo esc_attr( $heroBtn1Text ); ?>
                </a>
                <a href="<?php echo esc_attr( $heroBtn2Url ); ?>"  class="btn btn-lg hero-banner-button btn-dark">
                    <?php echo esc_attr( $heroBtn2Text ); ?>
                </a>
            </div>
        </div>
    </div>
</div><!-- wrapper end -->

