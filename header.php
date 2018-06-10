<?php
    /**
     * Version    : 1.2.0
     * Author     : inc2734
     * Author URI : http://2inc.org
     * Created    : April 17, 2015
     * Modified   : August 30, 2015
     * License    : GPLv2 or later
     * License URI: license.txt
     */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="https://code.createjs.com/1.0.0/easeljs.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tweenjs/1.0.2/tweenjs.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/column.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/back-to-top.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/move-service.js"></script>
    <?php if (is_home() || is_front_page()) : ?>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/display-header.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bg-ball.js"></script>
    <?php endif; ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php if (is_home() || is_front_page()) : ?>
      <canvas id="bg_ball" width="" height=""></canvas>
    <?php endif; ?>
    <header id="header">
      <a href="<?php echo home_url() ?>" class="logo">
        <h1 class="h1-logo">TEAM CLAP</h1>
        <img class="h1-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg" alt="teamclap">
      </a>
      <ul class="global-nav">
        <?php if (is_home() || is_front_page()) : ?>
        <li><a class="first-item" href="#about">ABOUT</a></li>
        <li><a href="#service">SERVICE</a></li>
        <li><a href="#column">COLUMN</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php else : ?>
        <li><a class="first-item" href="/">TOP</a></li>
        <li><a href="/profile">会社概要</a></li>
        <li><a href="/contact">お問い合わせ</a></li>
        <?php endif; ?>
      </ul>
    </header>
	<div id="contents">
	  <?php do_action( 'habakiri_before_contents_content' ); ?>
