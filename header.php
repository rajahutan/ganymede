<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="page-root">
    <?php
      $show_tagline = get_theme_mod('ganymede_options_tagline',1);
      $tagline = get_bloginfo('description');
    ?>
    <header <?php if($show_tagline != 1 || $tagline == ''){ echo 'class="no-tagline"'; }?>>
      <h1 class="logo"><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
      <?php if($show_tagline == 1 && $tagline != ''){ ?>
        <p class="tagline"><?php echo $tagline; ?></p>
      <?php } ?>
      <nav>
        <?php
          $settings = array(
            'theme_location' => 'header-nav'
          );
          wp_nav_menu($settings);
        ?>
      </nav>
    </header>
    <section class="content">
