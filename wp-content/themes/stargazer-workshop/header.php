<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stargazer-workshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link rel="icon" type="image/png" href="assets/img/star_icon.png" />

	<meta name="description" content="Stargazer Workshop">
    <meta name="keywords" content="web, design, development, stargazer, workshop">
    <meta name="author" content="Stargazer Workshop">
    <meta property="og:title" content="Stargazer Workshop" />
    <meta property="og:url" content="http://stargazerworkshop.net" />
    <meta property="og:image" content="assets/img/meta_tag_img.png" />

	<?php wp_head(); ?>
</head>

<body>
	<!-- Navigation -->
	<!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
			<?php
				// wp_nav_menu( array(
				// 	'theme_location' => 'primary',
				// 	'container'      => false,
				// 	'menu_class'     => 'navbar-nav ml-auto'
				// ));
			?>	
        </div>
      </div>
    </nav> -->