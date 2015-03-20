<?php
  
  function theme_features () {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'link', 'video' ) );
    register_nav_menu('header-nav',__( 'Header navigation' ));
  }

  add_action( 'init', 'theme_features' );

  function ganymede_customize_register($wp_customize){
    
    $wp_customize->add_section('ganymede_options', array(
        'title'    => __('Options', 'ganymede'),
        'description' => '',
        'priority' => 120,
    ));
 
    $wp_customize->add_setting('ganymede_options_tagline', array(
        'capability' => 'edit_theme_options',
        'default'    => '1'
    ));

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
  }
 
  add_action('customize_register', 'ganymede_customize_register');

  // --------------------------------------- 
  /* Common purpose functions */
  // --------------------------------------- 

  function addVideoWrapperToVideos($string) {
    // match any iframes
    $pattern = '~<iframe.*?</iframe>~';
    $content = preg_replace_callback($pattern, function($matches){
      if(strpos($matches[0], 'youtube') !== false OR strpos($matches[0], 'vimeo') !== false){
        return '<div class="videoWrapper">' . $matches[0] . '</div>';
      }

      return $matches[0];
    }, $string);

    return $content;
  }

  add_filter( 'the_content', 'addVideoWrapperToVideos' );

?>
