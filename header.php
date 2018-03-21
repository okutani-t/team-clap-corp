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
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/humberger.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/back-to-top.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/moving-h2.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'habakiri_before_container' ); ?>
<div class="inner">
	<div id="container" class="container">
	<?php
	$header_classes     = Habakiri::get_header_classses();
	$site_branding_size = Habakiri::get_site_branding_size();
	$gnav_size          = Habakiri::get_gnav_size();
	?>
	<header id="header" class="header">
		<?php do_action( 'habakiri_before_header_content' ); ?>
		<div class="container">
			<div class="row header__content">
				<div class="col-xs-10 <?php echo esc_attr( $site_branding_size ); ?> header__col">
					<!-- end .header__col --></div>
				<div class="col-xs-2 <?php echo esc_attr( $gnav_size ); ?> header__col global-nav-wrapper clearfix">
					<?php get_template_part( 'modules/gnav' ); ?>
					<div id="responsive-btn"></div>
				<!-- end .header__col --></div>
			<!-- end .row --></div>
		<!-- end .container --></div>
		<?php do_action( 'habakiri_after_header_content' ); ?>
	<!-- end #header --></header>
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>
