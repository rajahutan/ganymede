<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="alternate" type="application/rss+xml" title="RSS feed" href="/feed/" />

  <title><?php bloginfo('name'); ?></title>
  <meta name="title" content="<?php bloginfo('name'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <meta name="author" content="Reinier Ladan">
  <meta name="Copyright" content="Copyright Reinier Ladan <?php echo date('Y'); ?>. All Rights Reserved.">

  <meta name="DC.title" content="<?php bloginfo('name'); ?>">
  <meta name="DC.subject" content="<?php bloginfo('description'); ?>">
  <meta name="DC.creator" content="Reinier Ladan">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/theme.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="page-root">
    <header>
      <h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
    </header>
