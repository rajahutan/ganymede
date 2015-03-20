<?php
  
  function theme_features () {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'link', 'video' ) );
    register_nav_menu('header-nav',__( 'Header navigation' ));
  }

  add_action( 'init', 'theme_features' );


// --------------------------------------- 

  function ganymede_customize_register($wp_customize){
    
    $wp_customize->add_section('ganymede_options', array(
        'title'    => __('Options', 'ganymede'),
        'description' => '',
        'priority' => 120,
    ));
 
    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('ganymede_options_tagline', array(
        'capability' => 'edit_theme_options',
        'default'    => '1'
    ));
 
    // $wp_customize->add_control('display_header_text', array(
    //     'settings' => 'ganymede_theme_options[checkbox_tagline]',
    //     'label'    => __('Display tagline'),
    //     'section'  => 'ganymede_options',
    //     'type'     => 'checkbox',
    // ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'ganymede_options_tagline',
        array(
          'label'     => __('Display tagline'),
          'section'   => 'ganymede_options',
          'settings'  => 'ganymede_options_tagline',
          'type'      => 'checkbox',
        )
      )
    );
 
    //  =============================
    //  = Color Picker              =
    //  =============================
    // $wp_customize->add_setting('ganymede_theme_options[link_color]', array(
    //     'default'           => '000',
    //     'sanitize_callback' => 'sanitize_hex_color',
    //     'capability'        => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
    //     'label'    => __('Link Color', 'ganymede'),
    //     'section'  => 'ganymede_options',
    //     'settings' => 'ganymede_theme_options[link_color]',
    // )));

}
 
add_action('customize_register', 'ganymede_customize_register');

?>
