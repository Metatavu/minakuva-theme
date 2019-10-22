<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
  /**
   * Register basic customizer support.
   *
   * @param object $wp_customize Customizer reference.
   */
  function understrap_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  }
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
  /**
   * Register individual settings through customizer's API.
   *
   * @param WP_Customize_Manager $wp_customize Customizer reference.
   */
  function understrap_theme_customize_register( $wp_customize ) {

    // Theme layout settings.
    $wp_customize->add_section(
      'understrap_theme_layout_options',
      array(
        'title'       => __( 'Theme Layout Settings', 'understrap' ),
        'capability'  => 'edit_theme_options',
        'description' => __( 'Container width and sidebar defaults', 'understrap' ),
        'priority'    => 160,
      )
    );

    /**
     * Select sanitization function
     *
     * @param string               $input   Slug to sanitize.
     * @param WP_Customize_Setting $setting Setting instance.
     * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
     */
    function understrap_theme_slug_sanitize_select( $input, $setting ) {

      // Ensure input is a slug (lowercase alphanumeric characters, dashes and underscores are allowed only).
      $input = sanitize_key( $input );

      // Get the list of possible select options.
      $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }

    $wp_customize->add_setting(
      'understrap_container_type',
      array(
        'default'           => 'container',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
        'capability'        => 'edit_theme_options',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'understrap_container_type',
        array(
          'label'       => __( 'Container Width', 'understrap' ),
          'description' => __( 'Choose between Bootstrap\'s container and container-fluid', 'understrap' ),
          'section'     => 'understrap_theme_layout_options',
          'settings'    => 'understrap_container_type',
          'type'        => 'select',
          'choices'     => array(
            'container'       => __( 'Fixed width container', 'understrap' ),
            'container-fluid' => __( 'Full width container', 'understrap' ),
          ),
          'priority'    => '10',
        )
      )
    );

    $wp_customize->add_setting(
      'understrap_sidebar_position',
      array(
        'default'           => 'right',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'understrap_sidebar_position',
        array(
          'label'             => __( 'Sidebar Positioning', 'understrap' ),
          'description'       => __(
            'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.',
            'understrap'
          ),
          'section'           => 'understrap_theme_layout_options',
          'settings'          => 'understrap_sidebar_position',
          'type'              => 'select',
          'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
          'choices'           => array(
            'right' => __( 'Right sidebar', 'understrap' ),
            'left'  => __( 'Left sidebar', 'understrap' ),
            'both'  => __( 'Left & Right sidebars', 'understrap' ),
            'none'  => __( 'No sidebar', 'understrap' ),
          ),
          'priority'          => '20',
        )
      )
    );
 
    /* HERO settings ********/

    $wp_customize->add_section('minakuva_hero_section', array(
      'title' => 'Hero',
      'description'   => 'Update hero image'
    ));

    $wp_customize->add_setting('minakuva_hero_image_setting', array(
      //default value
    ));
  
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'minakuva_hero_img_control',
        array(
          'label' => 'Edit hero image',
          'settings'  => 'minakuva_hero_image_setting',
          'section'   => 'minakuva_hero_section'
        )
      )
    );

    $wp_customize->add_setting('minakuva_hero_title', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_hero_title',
        array(
          'label' => 'Hero title',
          'section' => 'minakuva_hero_section',
          'settings' => 'minakuva_hero_title',
          'type' => 'textarea'
        )
      )
    );

    $wp_customize->add_setting('minakuva_hero_text_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_hero_text_control',
        array(
          'label' => 'Hero text',
          'section' => 'minakuva_hero_section',
          'settings' => 'minakuva_hero_text_setting',
          'type' => 'textarea'
        )
      )
    );

    $wp_customize->add_setting('minakuva_hero_button1_text_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_hero_button1_text_control',
        array(
          'label' => 'First button text',
          'section' => 'minakuva_hero_section',
          'settings' => 'minakuva_hero_button1_text_setting',
          'type' => 'text'
        )
      )
    );

    $wp_customize->add_setting('minakuva_hero_button1_url_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_hero_button1_url_control',
        array(
          'label' => 'First button url',
          'section' => 'minakuva_hero_section',
          'settings' => 'minakuva_hero_button1_url_setting',
          'type' => 'url'
        )
      )
    );

    
    $wp_customize->add_setting('minakuva_hero_button2_text_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_hero_button2_text_control',
        array(
          'label' => 'Second button text',
          'section' => 'minakuva_hero_section',
          'settings' => 'minakuva_hero_button2_text_setting',
          'type' => 'text'
        )
      )
    );

    $wp_customize->add_setting('minakuva_hero_button2_url_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_hero_button2_url_control',
        array(
          'label' => 'Second button url',
          'section' => 'minakuva_hero_section',
          'settings' => 'minakuva_hero_button2_url_setting',
          'type' => 'url'
        )
      )
    );

/************Hero settings end *************/

    $wp_customize->add_section('minakuva_footer_section', array(
      'title' => 'Footer',
      'description'   => 'Update footer image'
    ));

    $wp_customize->add_setting('minakuva_footer_image_setting', array(
      //default value
    ));
  
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'minakuva_footer_img_control',
        array(
          'label' => 'Edit footer image',
          'settings'  => 'minakuva_footer_image_setting',
          'section'   => 'minakuva_footer_section'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_small_image_setting', array(
      //default value
    ));
  
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'minakuva_footer_small_img_control',
        array(
          'label' => 'Edit small footer image',
          'settings'  => 'minakuva_footer_small_image_setting',
          'section'   => 'minakuva_footer_section'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_text_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_text_control',
        array(
          'label' => 'Footer text',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_text_setting',
          'type' => 'textarea'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_button_text_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_button_text_control',
        array(
          'label' => 'Footer button text',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_button_text_setting',
          'type' => 'text'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_button_url_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_button_url_control',
        array(
          'label' => 'Footer button url',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_button_url_setting',
          'type' => 'url'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_shopbutton_text_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_shopbutton_text_control',
        array(
          'label' => 'Footer to shop button text',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_shopbutton_text_setting',
          'type' => 'text'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_shopbutton_url_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_shopbutton_url_control',
        array(
          'label' => 'Footer to shop button url',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_shopbutton_url_setting',
          'type' => 'url'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_facebook_url_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_facebook_url_setting_control',
        array(
          'label' => 'Facebook url',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_facebook_url_setting',
          'type' => 'url'
        )
      )
    );

    $wp_customize->add_setting('minakuva_footer_instagram_url_setting', array(
      //default value
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'minakuva_footer_instagram_url_setting_control',
        array(
          'label' => 'Instagram url',
          'section' => 'minakuva_footer_section',
          'settings' => 'minakuva_footer_instagram_url_setting',
          'type' => 'url'
        )
      )
    );


  }
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
  /**
   * Setup JS integration for live previewing.
   */
  function understrap_customize_preview_js() {
    wp_enqueue_script(
      'understrap_customizer',
      get_template_directory_uri() . '/js/customizer.js',
      array( 'customize-preview' ),
      '20130508',
      true
    );
  }
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );
