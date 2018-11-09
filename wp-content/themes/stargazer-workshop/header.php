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
<!-- ========= MOBILE NAVBAR =========== -->
<div class="overlay overlay-data">
	<a href="" class="overlay-close">CLOSE</a>
	<nav>
		<ul>
			<li role="presentation" class="nav-home"><a href="index.html">Home</a></li>
			<li role="presentation"><a href="process.html">My Process</a></li>
			<li role="presentation"><a href="casestudies.html">Case Studies</a></li>
			<li role="presentation"><a href="about.html">About Me</a></li>
		</ul>
	</nav>
</div>
<section class="navbar-section hidden-md hidden-lg">
	<div class="container-fluid">
		<div class="navbar navbar-mobile">
			<a href="index.html" class="navbar-brand">
				<span class="navbar-brand-text white">Filip Rastovic</span>
				<span class="navbar-brand-quote white">When you're curious, you find lots of interesting <br>  things to do</span>
			</a>
			<div class="sidenav-hamburger pull-right">
				<span id="toggle-button" class="burger">
					<i class="fa fa-bars"></i>
				</span>
			</div>
		</div>
	</div>
</section>
<!-- Mobile navbar ends -->

<!-- ============= DESKTOP NAVBAR ============= -->
<nav class="navbar navbar-default navbar-section navbar-desktop hidden-xs hidden-sm">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index.html" class="navbar-brand">
				<span class="navbar-brand-text white">Filip Rastovic</span>
				<span class="navbar-brand-quote white">When you're curious, you find lots of interesting things to do</span>
			</a>
		</div>
		<!-- <ul class="nav navbar-nav navbar-right">
			<li><a href="index.html">Home</a></li>
			<li><a href="process.html">My Process</a></li>
			<li><a href="casestudies.html">Case Studies</a></li>
			<li><a id="portfolio" href="#">Portfolio</a></li>
			<li><a href="about.html">About Me</a></li>
			<li><a id="contact" href="#" class="contact">GET A QUOTE</a></li>
		</ul> -->
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'nav navbar-nav navbar-right'
			));
		?>

	</div>
</nav>
<!-- Desktop Navbar Ends-->

<!-- Highlight Line -->
<div class="highlight-line"></div>

